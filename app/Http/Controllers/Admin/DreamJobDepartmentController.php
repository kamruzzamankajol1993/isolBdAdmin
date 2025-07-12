<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DreamJobDepartment;

use Illuminate\Support\Facades\Validator;
class DreamJobDepartmentController extends Controller
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
            $query = DreamJobDepartment::query()->orderBy('name', 'asc');

            // Handle search functionality
            if ($request->has('search') && !empty($request->search['value'])) {
                $searchValue = $request->search['value'];
                $query->where('name', 'like', "%{$searchValue}%");
            }

            $departments = $query->latest()->paginate(10);
            return response()->json($departments);
        }

      
        return view('backend.dream_job_department.index');
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
            'name' => 'required|string|max:255|unique:dream_job_departments,name',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $department = DreamJobDepartment::create($request->all());

        return response()->json(['success' => 'Department created successfully.', 'department' => $department]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = DreamJobDepartment::find($id);
        if (!$department) {
            return response()->json(['error' => 'Department not found.'], 404);
        }
        return response()->json($department);
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
        $department = DreamJobDepartment::find($id);
        if (!$department) {
            return response()->json(['error' => 'Department not found.'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:dream_job_departments,name,' . $department->id,
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $department->update($request->all());

        return response()->json(['success' => 'Department updated successfully.', 'department' => $department]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = DreamJobDepartment::find($id);
        if (!$department) {
            return response()->json(['error' => 'Department not found.'], 404);
        }

        $department->delete();
        return response()->json(['success' => 'Department deleted successfully.']);
    }
}
