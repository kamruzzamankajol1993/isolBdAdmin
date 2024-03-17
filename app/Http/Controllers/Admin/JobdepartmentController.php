<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobdepartment;
use App\Models\Jobcategory;
class JobdepartmentController extends Controller
{
    public function index(){

        $headline_list = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();
        return view('backend.job_department.index',['headline_list'=>$headline_list,'headline_list1'=>$headline_list1]);
    }


    public function store(Request $request){

        $user = new Jobdepartment();

        $user->name = $request->name;
        //$user->des = $request->des;
        $user->cat_id = $request->cat_id;
        $user->save();
        return redirect()->back()->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Jobdepartment::find($request->id);
        $user->cat_id = $request->cat_id;
        $user->name = $request->name;
        //$user->des = $request->des;

        $user->save();
        return redirect()->back()->with('success','updated successfully!');

    }

    public function delete($id)
    {

        $admins = Jobdepartment::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
