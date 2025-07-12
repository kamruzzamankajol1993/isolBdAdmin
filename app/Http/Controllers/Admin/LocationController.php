<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LocationImport;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Location::query()->orderBy('id', 'asc');

            if ($request->has('search') && !empty($request->search['value'])) {
                $searchValue = $request->search['value'];
                $query->where('name', 'like', "%{$searchValue}%");
            }

            $locations = $query->latest()->paginate(10);
            return response()->json($locations);
        }

        return view('backend.locationList.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:locations,name',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $location = Location::create($request->all());
        return response()->json(['success' => 'Location created successfully.', 'location' => $location]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $location = Location::find($id);
        if (!$location) {
            return response()->json(['error' => 'Location not found.'], 404);
        }
        return response()->json($location);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $location = Location::find($id);
        if (!$location) {
            return response()->json(['error' => 'Location not found.'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:locations,name,' . $location->id,
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $location->update($request->all());
        return response()->json(['success' => 'Location updated successfully.', 'location' => $location]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $location = Location::find($id);
        if (!$location) {
            return response()->json(['error' => 'Location not found.'], 404);
        }

        $location->delete();
        return response()->json(['success' => 'Location deleted successfully.']);
    }

    /**
     * Import data from an Excel file.
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
            Excel::import(new LocationImport, $request->file('file'));
            return response()->json(['success' => 'Locations imported successfully.']);
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
     */
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids');
        if (is_array($ids) && count($ids) > 0) {
            Location::whereIn('id', $ids)->delete();
            return response()->json(['success' => 'Selected locations have been deleted.']);
        }
        return response()->json(['error' => 'No locations selected.'], 400);
    }
}
