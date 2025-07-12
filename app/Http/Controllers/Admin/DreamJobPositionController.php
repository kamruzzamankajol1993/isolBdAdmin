<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DreamJobPosition;
use App\Models\DreamJobDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DreamJobPositionImport;
class DreamJobPositionController extends Controller
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
            $query = DreamJobPosition::with('department')->orderBy('id', 'asc');

            // Handle search
            if ($request->has('search') && !empty($request->search['value'])) {
                $searchValue = $request->search['value'];
                $query->where('name', 'like', "%{$searchValue}%")
                      ->orWhereHas('department', function($q) use ($searchValue) {
                          $q->where('name', 'like', "%{$searchValue}%");
                      });
            }

            $positions = $query->latest()->paginate(10);
            return response()->json($positions);
        }

        // For initial page load, return the view with necessary data
        
        $departments = DreamJobDepartment::latest()->get();
        return view('backend.dream_job_position.index', compact('departments'));
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
            'dream_job_department_id' => 'required|exists:dream_job_departments,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $position = DreamJobPosition::create($request->all());

        return response()->json(['success' => 'Position created successfully.', 'position' => $position]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $position = DreamJobPosition::find($id);
        if (!$position) {
            return response()->json(['error' => 'Position not found.'], 404);
        }
        return response()->json($position);
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
        $position = DreamJobPosition::find($id);
        if (!$position) {
            return response()->json(['error' => 'Position not found.'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'dream_job_department_id' => 'required|exists:dream_job_departments,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $position->update($request->all());

        return response()->json(['success' => 'Position updated successfully.', 'position' => $position]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = DreamJobPosition::find($id);
        if (!$position) {
            return response()->json(['error' => 'Position not found.'], 404);
        }

        $position->delete();
        return response()->json(['success' => 'Position deleted successfully.']);
    }

     public function import(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            Excel::import(new DreamJobPositionImport, $request->file('file'));
            return response()->json(['success' => 'Job positions imported successfully.']);
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
     * Remove multiple job positions from storage.
     */
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids');
        if (is_array($ids) && count($ids) > 0) {
            DreamJobPosition::whereIn('id', $ids)->delete();
            return response()->json(['success' => 'Selected positions have been deleted successfully.']);
        }
        return response()->json(['error' => 'No positions selected for deletion.'], 400);
    }
}
