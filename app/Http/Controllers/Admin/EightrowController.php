<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UrgentVacancy;
class EightrowController extends Controller
{
    public function index(){

        $eight_row_list = UrgentVacancy::latest()->get();
        return view('backend.eight_row_list.index',['eight_row_list'=>$eight_row_list]);
    }


    public function store(Request $request){

        $user = new UrgentVacancy();

        $user->title = $request->title;
        $user->des = $request->des;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.eight_row_info')->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = UrgentVacancy::find($request->id);

        $user->title = $request->title;
        $user->des = $request->des;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.eight_row_info')->with('success','Created successfully!');

    }

    public function delete($id)
    {

        $admins = UrgentVacancy::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
