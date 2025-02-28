<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class InquiryController extends Controller
{
    
     public function index(){
        
        $allComplainList = DB::table('inquiries')->latest()->get();
        return view('backend.inquiry.index',compact('allComplainList'));
        
        
    }
    
    public function destroy($id)
    {

        $admins = DB::table('inquiries')->where('id',$id)->delete();
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
