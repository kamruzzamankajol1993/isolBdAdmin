<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Response;
use App\Models\SystemInformation;
class MScheduleController extends Controller
{
     public function index(){
        
        $allComplainList = DB::table('m_schedules')->latest()->get();
        return view('backend.m_schedule.index',compact('allComplainList'));
        
        
    }
    
    public function destroy($id)
    {

        $admins = DB::table('m_schedules')->where('id',$id)->delete();
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
    
    public function scheduleDownloadCv($id){


            $get_file_data = DB::table('m_schedules')->where('id',$id)->value('cv');
            
            $frontUrl = SystemInformation::value('frontUrl');



        $file_path =$frontUrl.'public/'.$get_file_data;
        $filename  = pathinfo($file_path, PATHINFO_FILENAME);

$file= $frontUrl.'public/'.$get_file_data;

$headers = array(
'Content-Type: application/pdf',
);

// return Response::download($file,$filename.'.pdf', $headers);

return Response::make(file_get_contents($file), 200, [
'content-type'=>'application/pdf',
]);


    }
}
