<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartnerWithUs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin;
use Mail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class PartnerWithUsController extends Controller
{
    public function index(){

        $partnerWithUs = PartnerWithUs::latest()->get();

        $partnerWithUsP = PartnerWithUs::where('status','Pending')->latest()->get();
        $partnerWithUsA = PartnerWithUs::where('status','Accepted')->latest()->get();
        $partnerWithUsR = PartnerWithUs::where('status','Rejected')->latest()->get();

        return view('backend.partnerWithUs.index',[
            'partnerWithUs'=>$partnerWithUs,
            'partnerWithUsP'=>$partnerWithUsP,
            'partnerWithUsA'=>$partnerWithUsA,
            'partnerWithUsR'=>$partnerWithUsR
        ]);
    }


    public function destroy($id)
    {

        $admins = PartnerWithUs::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }


    public function show($id){



        $partnerWithUs = PartnerWithUs::where('id',$id)->latest()->first();

        return view('backend.partnerWithUs.show',[
            'partnerWithUs'=>$partnerWithUs
        ]);


    }


public function update(Request $request,$id){
//dd($request->all());
    $save =PartnerWithUs::find($id);
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


            $admins->assignRole('partner');

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
    return redirect()->route('partnerWithUs.index')->with('success','Updated successfully!');
}
}
