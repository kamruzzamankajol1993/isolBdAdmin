<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VesselOrWorkPlace;
use App\Models\DreamJobSector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\VesselOrWorkPlaceImport;
class VesselOrWorkPlaceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Handle AJAX requests for table data
        if ($request->ajax()) {
            $query = VesselOrWorkPlace::with('dreamJobSector')->orderBy('id', 'asc');

            // Handle search
            if ($request->has('search') && !empty($request->search['value'])) {
                $searchValue = $request->search['value'];
                $query->where('name', 'like', "%{$searchValue}%")
                      ->orWhereHas('dreamJobSector', function($q) use ($searchValue) {
                          $q->where('name', 'like', "%{$searchValue}%");
                      });
            }

            $vessels = $query->latest()->paginate(10);
            return response()->json($vessels);
        }

        
        $dreamJobSectors = DreamJobSector::latest()->get();
        $departments = DB::table('dream_job_departments')->latest('created_at')->get();
        return view('backend.vessel_or_work_place.index', compact('dreamJobSectors', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'dream_job_sector_id' => 'required|exists:dream_job_sectors,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $vessel = VesselOrWorkPlace::create($request->all());

        return response()->json(['success' => 'Vessel/Work Place created successfully.', 'vessel' => $vessel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vessel = VesselOrWorkPlace::find($id);
        if (!$vessel) {
            return response()->json(['error' => 'Item not found.'], 404);
        }
        return response()->json($vessel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vessel = VesselOrWorkPlace::find($id);
        if (!$vessel) {
            return response()->json(['error' => 'Item not found.'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'dream_job_sector_id' => 'required|exists:dream_job_sectors,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $vessel->update($request->all());

        return response()->json(['success' => 'Vessel/Work Place updated successfully.', 'vessel' => $vessel]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vessel = VesselOrWorkPlace::find($id);
        if (!$vessel) {
            return response()->json(['error' => 'Item not found.'], 404);
        }

        $vessel->delete();
        return response()->json(['success' => 'Vessel/Work Place deleted successfully.']);
    }

    public function getAssignedDepartments($id)
    {
        $assignedDeptIds = DB::table('vessel_deparments')
            ->where('vessel_or_work_place_id', $id)
            ->pluck('dream_job_department_id');

        return response()->json($assignedDeptIds);
    }

    /**
     * Assign departments to a specific vessel using DB facade.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assignDepartments(Request $request, $id)
    {
        // Validate that the vessel exists
        $vesselExists = DB::table('vessel_or_work_places')->where('id', $id)->exists();
        if (!$vesselExists) {
            return response()->json(['error' => 'Vessel not found.'], 404);
        }

        $departmentIds = $request->input('department_ids', []);

        DB::beginTransaction();
        try {
            // 1. Delete all existing assignments for this vessel
            DB::table('vessel_deparments')->where('vessel_or_work_place_id', $id)->delete();

            // 2. Insert the new assignments if any are provided
            if (!empty($departmentIds)) {
                $newAssignments = [];
                foreach ($departmentIds as $deptId) {
                    $newAssignments[] = [
                        'vessel_or_work_place_id' => $id,
                        'dream_job_department_id' => $deptId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
                DB::table('vessel_deparments')->insert($newAssignments);
            }

            DB::commit();
            return response()->json(['success' => 'Departments assigned successfully.']);

        } catch (\Exception $e) {
            DB::rollBack();
            // Log the error message for debugging
            // Log::error('Department Assignment Failed: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while assigning departments.'], 500);
        }
    }

    /**
     * Import data from an Excel file.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            Excel::import(new VesselOrWorkPlaceImport, $request->file('file'));
            return response()->json(['success' => 'Data imported successfully.']);
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
             $failures = $e->failures();
             $errors = [];
             foreach ($failures as $failure) {
                 $errors[] = "Row " . $failure->row() . ": " . implode(", ", $failure->errors());
             }
             return response()->json(['errors' => ['file' => $errors]], 422);
        }
    }

    /**
     * Remove multiple resources from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids');
        if (is_array($ids) && count($ids) > 0) {
            VesselOrWorkPlace::whereIn('id', $ids)->delete();
            return response()->json(['success' => 'Selected items have been deleted.']);
        }
        return response()->json(['error' => 'No items selected.'], 400);
    }
}
