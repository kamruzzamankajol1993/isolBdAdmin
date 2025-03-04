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
use Carbon;
use App\Models\Location;
use App\Models\ContactType;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try{


        $job_list = DB::table('events')->latest()->get();
        $headline_list = Jobtitle::latest()->get();
        $headline_list2 = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();

        $contactTypeList = ContactType::latest()->get();
        $locationList = Location::latest()->get();

    } catch (\Exception $e) {
        return  $e;
      }


        return view('backend.event.index',['locationList'=>$locationList,'contactTypeList'=>$contactTypeList,'job_list'=>$job_list,'headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
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

        $contactTypeList = ContactType::latest()->get();
        $locationList = Location::latest()->get();

    } catch (\Exception $e) {
        return redirect()->back()->with('error','some thing went wrong ');
      }


        return view('backend.event.create',['locationList'=>$locationList,'contactTypeList'=>$contactTypeList,'headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
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


   


        // Validation Data
        $request->validate([


            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'speaker' => 'required',
            'des' => 'required',
            'status' => 'required',
        ]);


        try{
            DB::beginTransaction();
$mainDate = strtotime($request->date);

$convertDate = date('d-m-Y',$mainDate);
           
$data = array("title" => $request->title,"time" => $request->time,"speaker" => $request->speaker,"des" => $request->des,"status" => $request->status,"date" => $convertDate,"created_at"=> Carbon\Carbon::now(),"updated_at"=> Carbon\Carbon::now());
DB::table('events')->insert($data);



            DB::commit();

            return redirect()->route('eventList.index')->with('success','Created successfully!');

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

        $job_list = DB::table('events')->where('id',$id)->first();
        $headline_list = Jobtitle::latest()->get();
        $headline_list2 = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();

        $contactTypeList = ContactType::latest()->get();
        $locationList = Location::latest()->get();
        
        $eventShowList = DB::table('event_book')->where('event_id',$id)->orderBy('id','desc')->get();

    } catch (\Exception $e) {
        return redirect()->back()->with('error','some thing went wrong ');
      }


        return view('backend.event.show',['eventShowList'=>$eventShowList,'locationList'=>$locationList,'contactTypeList'=>$contactTypeList,'job_list'=>$job_list,'headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
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


        $job_list = DB::table('events')->where('id',$id)->first();
        $headline_list = Jobtitle::latest()->get();
        $headline_list2 = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();

        $contactTypeList = ContactType::latest()->get();
        $locationList = Location::latest()->get();

    } catch (\Exception $e) {
        return redirect()->back()->with('error','some thing went wrong ');
      }


        return view('backend.event.edit',['locationList'=>$locationList,'contactTypeList'=>$contactTypeList,'job_list'=>$job_list,'headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
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

         $mainDate = strtotime($request->date);

$convertDate = date('d-m-Y',$mainDate);
           
$data = array("title" => $request->title,"time" => $request->time,"speaker" => $request->speaker,"des" => $request->des,"status" => $request->status,"date" => $convertDate,"updated_at"=> Carbon\Carbon::now());
DB::table('events')->where('id',$id)->update($data);


            DB::commit();

            return redirect()->route('eventList.index')->with('success','Updated successfully!');

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
        $admins = DB::table('events')->where('id',$id)->delete();
        


        return back()->with('error','Deleted successfully!');
    }
    
    public function deletePerticipant($id){
         $admins = DB::table('event_book')->where('id',$id)->delete();
        


        return back()->with('error','Deleted successfully!');
    }
}
