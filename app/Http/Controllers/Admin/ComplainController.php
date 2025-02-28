<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ComplainController extends Controller
{
    public function index(){
        
        $allComplainList = DB::table('complains')->latest()->get();
        return view('backend.complain.index',compact('allComplainList'));
        
        
    }
    
    public function destroy($id)
    {

        $admins = DB::table('complains')->where('id',$id)->delete();
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
