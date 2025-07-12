<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactType;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ContactTypeImport;

class ContactTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = ContactType::query()->orderBy('id', 'asc');

            if ($request->has('search') && !empty($request->search['value'])) {
                $searchValue = $request->search['value'];
                $query->where('name', 'like', "%{$searchValue}%");
            }

            $contactTypes = $query->latest()->paginate(10);
            return response()->json($contactTypes);
        }

        return view('backend.ContractType.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:contact_types,name',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $contactType = ContactType::create($request->all());
        return response()->json(['success' => 'Contract Type created successfully.', 'contactType' => $contactType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contactType = ContactType::find($id);
        if (!$contactType) {
            return response()->json(['error' => 'Contract Type not found.'], 404);
        }
        return response()->json($contactType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contactType = ContactType::find($id);
        if (!$contactType) {
            return response()->json(['error' => 'Contract Type not found.'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:contact_types,name,' . $contactType->id,
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $contactType->update($request->all());
        return response()->json(['success' => 'Contract Type updated successfully.', 'contactType' => $contactType]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contactType = ContactType::find($id);
        if (!$contactType) {
            return response()->json(['error' => 'Contract Type not found.'], 404);
        }

        $contactType->delete();
        return response()->json(['success' => 'Contract Type deleted successfully.']);
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
            Excel::import(new ContactTypeImport, $request->file('file'));
            return response()->json(['success' => 'Contract types imported successfully.']);
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
            ContactType::whereIn('id', $ids)->delete();
            return response()->json(['success' => 'Selected contract types have been deleted.']);
        }
        return response()->json(['error' => 'No items selected.'], 400);
    }
}
