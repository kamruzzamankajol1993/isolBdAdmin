<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobtitle;
use App\Models\Jobdepartment;
use App\Models\Jobcategory;
class JobtitleController extends Controller
{
    public function index(){

        $headline_list = Jobtitle::latest()->get();
        $headline_list2 = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();
        return view('backend.job_title.index',['headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
    }


    public function store(Request $request){

        $user = new Jobtitle();

        $user->name = $request->name;
        $user->dp_id = $request->dp_id;
        $user->cat_id = $request->cat_id;
        $user->save();
        return redirect()->back()->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Jobtitle::find($request->id);
        $user->cat_id = $request->cat_id;
        $user->name = $request->name;
        $user->dp_id = $request->dp_id;
        $user->save();
        return redirect()->back()->with('success','updated successfully!');

    }

    public function delete($id)
    {

        $admins = Jobtitle::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }


    public function from_job_title_to_cat(Request $request){

           $get_dp = Jobdepartment::where('cat_id',$request->cat_name)->latest()->get();

        $data = view('backend.job_title.from_job_title_to_cat',compact('get_dp'))->render();
        return response()->json($data);
    }
}
