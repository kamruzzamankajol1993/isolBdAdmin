<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Jobtitle;
use App\Models\Jobdepartment;
use App\Models\Jobcategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DB;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try{


        $job_list = Job::where('user_id',Auth::guard('admin')->user()->id)->latest()->get();
        $headline_list = Jobtitle::latest()->get();
        $headline_list2 = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();

    } catch (\Exception $e) {
        return redirect()->back()->with('error','some thing went wrong ');
      }


        return view('backend.job.index',['job_list'=>$job_list,'headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        try{


        $headline_list = Jobtitle::latest()->get();
        $headline_list2 = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();

    } catch (\Exception $e) {
        return redirect()->back()->with('error','some thing went wrong ');
      }


        return view('backend.job.create',['headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
    }


    public function getJobTitleForDepartment(Request $request){

        $get_dp = Jobtitle::where('dp_id',$request->cat_name)->latest()->get();

     $data = view('backend.job.getJobTitleForDepartment',compact('get_dp'))->render();
     return response()->json($data);
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());


        //new code start

        $LastId = Job::where('user_id',Auth::guard('admin')->user()->id)
        ->orderBy('id','desc')->value('job_id');

        if(empty($LastId)){

             $mainNumber = 1;
             $number = sprintf('%05d',$mainNumber);

        }else{
            $mainNumber = $LastId + 1;
            $number = sprintf('%05d',$mainNumber);

        }


        $result = strtoupper(substr($request->agency_name, 0, 3));



        //end new code


        // Validation Data
        $request->validate([


            'job_category_id' => 'required',
            'job_department_id' => 'required',
            'job_title_id' => 'required',
            'agency_name' => 'required',
            'salary' => 'required',
            'job_area' => 'required',
            'job_type' => 'required',
            'duration' => 'required',
            'job_experience' => 'required',
            'status' => 'required',
            'description' => 'required',
            'post_date' => 'required',
            'expire_date' => 'required',
        ]);


        try{
            DB::beginTransaction();

            $admins = new Job();
            $admins->job_id = $mainNumber;
            $admins->job_main_id = $result.'-'.$number;
            $admins->job_category_id = $request->job_category_id;
            $admins->job_department_id = $request->job_department_id;
            $admins->job_title_id = $request->job_title_id;
            $admins->agency_name = $request->agency_name;
            $admins->job_title_slug = Str::slug($request->job_category_id.' '.$request->job_title_id);
            $admins->salary = $request->salary;
            $admins->job_area = $request->job_area;
            $admins->job_type = $request->job_type;
            $admins->duration = $request->duration;
            $admins->user_id = Auth::guard('admin')->user()->id;
            $admins->job_experience = $request->job_experience;
            $admins->status = $request->status;
            $admins->description = $request->description;
            $admins->post_date=date('Y-m-d', strtotime($request->post_date));
            $admins->expire_date=date('Y-m-d', strtotime($request->expire_date));
            $admins->save();




            DB::commit();

            return redirect()->route('jobList.index')->with('success','Created successfully!');

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error','some thing went wrong ');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        try{

        $job_list = Job::where('user_id',Auth::guard('admin')->user()->id)->where('id',$id)->first();
        $headline_list = Jobtitle::latest()->get();
        $headline_list2 = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();

    } catch (\Exception $e) {
        return redirect()->back()->with('error','some thing went wrong ');
      }


        return view('backend.job.view',['job_list'=>$job_list,'headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        try{


        $job_list = Job::where('user_id',Auth::guard('admin')->user()->id)->where('id',$id)->first();
        $headline_list = Jobtitle::latest()->get();
        $headline_list2 = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();

    } catch (\Exception $e) {
        return redirect()->back()->with('error','some thing went wrong ');
      }


        return view('backend.job.edit',['job_list'=>$job_list,'headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
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
        try{
            DB::beginTransaction();

            $admins = Job::find($id);
            $admins->job_category_id = $request->job_category_id;
            $admins->job_department_id = $request->job_department_id;
            $admins->job_title_id = $request->job_title_id;
            $admins->agency_name = $request->agency_name;
            $admins->job_title_slug = Str::slug($request->job_category_id.' '.$request->job_title_id);
            $admins->salary = $request->salary;
            $admins->job_area = $request->job_area;
            $admins->job_type = $request->job_type;
            $admins->duration = $request->duration;
            $admins->job_experience = $request->job_experience;
            $admins->status = $request->status;
            $admins->description = $request->description;
            $admins->post_date=date('Y-m-d', strtotime($request->post_date));
            $admins->expire_date=date('Y-m-d', strtotime($request->expire_date));
            $admins->save();


            DB::commit();

            return redirect()->route('jobList.index')->with('success','Updated successfully!');

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error','some thing went wrong ');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Job::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
