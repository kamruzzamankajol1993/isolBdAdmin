<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VesselOrWorkPlace;
use App\Models\DreamJobSector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
            $query = VesselOrWorkPlace::with('dreamJobSector')->orderBy('name', 'asc');

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
        return view('backend.vessel_or_work_place.index', compact('dreamJobSectors'));
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
}
