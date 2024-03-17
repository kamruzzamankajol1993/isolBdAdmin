<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sixthrow;
class SixrowController extends Controller
{
    public function index(){

        $sixth_row_list = Sixthrow::latest()->get();
        return view('backend.sixth_row_list.index',['sixth_row_list'=>$sixth_row_list]);
    }


    public function store(Request $request){

        $user = new Sixthrow();

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
        return redirect()->route('admin.sixth_row_info')->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Sixthrow::find($request->id);

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
        return redirect()->route('admin.sixth_row_info')->with('success','Created successfully!');

    }

    public function delete($id)
    {

        $admins = Sixthrow::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
