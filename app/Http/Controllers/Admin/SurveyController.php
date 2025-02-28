<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class SurveyController extends Controller
{
      public function index(){
        
        $allComplainList = DB::table('surveys')->latest()->paginate(2);
        return view('backend.survey.index',compact('allComplainList'));
        
        
    }
    
    public function destroy($id)
    {

        $admins = DB::table('surveys')->where('id',$id)->delete();
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
