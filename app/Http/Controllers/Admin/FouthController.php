<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mission;
class FouthController extends Controller
{
    public function index(){

        $mission_list = Mission::latest()->get();
        return view('backend.mission_list.index',['mission_list'=>$mission_list]);
    }


    public function store(Request $request){

        $user = new Mission();

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
        return redirect()->route('admin.fourth_row_info')->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Mission::find($request->id);

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
        return redirect()->route('admin.fourth_row_info')->with('success','Created successfully!');

    }

    public function delete($id)
    {

        $admins = Mission::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
