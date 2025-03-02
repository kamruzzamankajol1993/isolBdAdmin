<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobcategory;
class JobcategoryController extends Controller
{
    public function index(){

        $headline_list = Jobcategory::get();
        return view('backend.job_category.index',['headline_list'=>$headline_list]);
    }


    public function store(Request $request){

        $user = new Jobcategory();

        $user->name = $request->name;
        //$user->des = $request->des;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->back()->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Jobcategory::find($request->id);

        $user->name = $request->name;
        //$user->des = $request->des;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->back()->with('success','updated successfully!');

    }

    public function delete($id)
    {

        $admins = Jobcategory::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
