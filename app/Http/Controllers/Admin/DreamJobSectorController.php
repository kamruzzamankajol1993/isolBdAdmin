<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DreamJobSector;
use Illuminate\Support\Facades\Validator;
class DreamJobSectorController extends Controller
{
    public function index(Request $request)
    {
        // Check if the request is an AJAX request for fetching data
        if ($request->ajax()) {
            $query = DreamJobSector::query()->orderBy('name', 'asc');

            // Handle search functionality
            if ($request->has('search') && !empty($request->search['value'])) {
                $searchValue = $request->search['value'];
                $query->where('name', 'like', "%{$searchValue}%");
            }

            // Get paginated results
            $sectors = $query->latest()->paginate(10);

            // Return data in JSON format for the view to render
            return response()->json($sectors);
        }

        // For initial page load, return the view
       
        return view('backend.dreamJobSector.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:dream_job_sectors,name',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create and save the new sector
        $sector = DreamJobSector::create([
            'name' => $request->name,
        ]);

        return response()->json(['success' => 'Dream Job Sector created successfully.', 'sector' => $sector]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DreamJobSector  $dreamJobSector
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Explicitly find the model by its ID
        $dreamJobSector = DreamJobSector::find($id);

        if (!$dreamJobSector) {
            // Return a 404 error if the item is not found
            return response()->json(['error' => 'Dream Job Sector not found.'], 404);
        }

        // Return the specific sector data as JSON for the edit modal
        return response()->json($dreamJobSector);
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
        // Find the existing sector
        $dreamJobSector = DreamJobSector::find($id);
        if (!$dreamJobSector) {
            return response()->json(['error' => 'Dream Job Sector not found.'], 404);
        }

        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:dream_job_sectors,name,' . $dreamJobSector->id,
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Update the sector
        $dreamJobSector->update([
            'name' => $request->name,
        ]);

        return response()->json(['success' => 'Dream Job Sector updated successfully.', 'sector' => $dreamJobSector]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the sector to delete
        $dreamJobSector = DreamJobSector::find($id);
        if (!$dreamJobSector) {
            return response()->json(['error' => 'Dream Job Sector not found.'], 404);
        }

        // Delete the sector
        $dreamJobSector->delete();
        return response()->json(['success' => 'Dream Job Sector deleted successfully.']);
    }
}
