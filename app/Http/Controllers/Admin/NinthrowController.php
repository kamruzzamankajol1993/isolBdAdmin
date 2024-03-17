<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employeereview;
use App\Models\Employerreview;
class NinthrowController extends Controller
{
    public function index(){
        $employee_list = Employeereview::latest()->get();
        $employer_list = Employerreview::latest()->get();
        return view('backend.ninth_row_list.index',['employee_list'=>$employee_list,'employer_list'=>$employer_list]);
    }

    public function store(Request $request){
        $user = new Employeereview();

        $user->title = $request->title;
        $user->des = $request->des;
        $user->desig = $request->desig;
        $user->save();
        return redirect()->route('admin.ninth_row_info')->with('success','Created successfully!');
    }


    public function update(Request $request){
        $user = Employeereview::find($request->id);
        $user->title = $request->title;
        $user->des = $request->des;
        $user->desig = $request->desig;
        $user->save();
        return redirect()->route('admin.ninth_row_info')->with('info','Updated successfully!');
    }


    public function delete($id)
    {

        $admins = Employeereview::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }


    public function store_second(Request $request){

        $user = new Employerreview();

        $user->title = $request->title;
        $user->des = $request->des;
        $user->desig = $request->desig;
        $user->save();
        return redirect()->route('admin.ninth_row_info')->with('success','Created successfully!');

    }


    public function update_second(Request $request){

        $user = Employerreview::find($request->id);

        $user->title = $request->title;
        $user->des = $request->des;
        $user->desig = $request->desig;
        $user->save();
        return redirect()->route('admin.ninth_row_info')->with('success','Created successfully!');

    }

    public function second_row_info_logo_delete($id)
    {

        $admins = Employerreview::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
