<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartnerWithUs;
use Response;
use App\Models\JobSeeker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin;
use Mail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class JobSeekerController extends Controller
{
    public function index(){

        $partnerWithUs = JobSeeker::latest()->get();

        $partnerWithUsP = JobSeeker::where('status','Pending')->latest()->get();
        $partnerWithUsA = JobSeeker::where('status','Accepted')->latest()->get();
        $partnerWithUsR = JobSeeker::where('status','Rejected')->latest()->get();

        return view('backend.jobSeeker.index',[
            'partnerWithUs'=>$partnerWithUs,
            'partnerWithUsP'=>$partnerWithUsP,
            'partnerWithUsA'=>$partnerWithUsA,
            'partnerWithUsR'=>$partnerWithUsR
        ]);
    }


    public function destroy($id)
    {

        $admins = JobSeeker::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }


    public function show($id){



        $partnerWithUs = JobSeeker::where('id',$id)->latest()->first();

        return view('backend.jobSeeker.show',[
            'partnerWithUs'=>$partnerWithUs
        ]);


    }


    public function downloadcv($id){


            $get_file_data = JobSeeker::where('id',$id)->value('cv');



        $file_path = url('public/'.$get_file_data);
        $filename  = pathinfo($file_path, PATHINFO_FILENAME);

$file= public_path('/'). $get_file_data;

$headers = array(
'Content-Type: application/pdf',
);

// return Response::download($file,$filename.'.pdf', $headers);

return Response::make(file_get_contents($file), 200, [
'content-type'=>'application/pdf',
]);


    }


    public function update(Request $request,$id){
        //dd($request->all());
            $save =JobSeeker::find($id);
            $save->status = $request->status;
            $save->save();


            if($request->status == 'Accepted'){


                $admins = new Admin();
                $admins->name = $request->name;
                $admins->username = Str::slug($request->name);
                $admins->email = $request->email;
                $admins->staff_main_id = $id;
                $admins->password = Hash::make(12345678);
                $admins->save();


                    $admins->assignRole('employee');

                    Mail::send('email.partner', ['status' => $request->status,'email' => $request->email,'password' =>'12345678'], function($message) use($request){
                        $message->to($request->email);
                        $message->subject('Login Access');
                    });


            }elseif($request->status == 'Rejected'){

                Mail::send('email.partner', ['status' => $request->status,'email' => $request->email,'password' =>'12345678'], function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Login Access');
                });

            }
            return redirect()->route('jobSeeker.index')->with('success','Updated successfully!');
        }
}
