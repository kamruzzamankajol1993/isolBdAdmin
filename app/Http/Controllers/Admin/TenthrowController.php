<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenthrow;
use Illuminate\Support\Str;
class TenthrowController extends Controller
{
    public function index(){
        $slider_list = Tenthrow::latest()->get();
       
        return view('backend.tenth_row_list.index',['slider_list'=>$slider_list]);
    }

    public function store(Request $request){
        $user = new Tenthrow();
        $user->title = $request->title;
        $user->jobid = Str::upper(Str::random(5));
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.tenth_row_info')->with('success','Created successfully!');
    }


    public function update(Request $request){
        $user = Tenthrow::find($request->id);
        $user->title = $request->title;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.tenth_row_info')->with('info','Updated successfully!');
    }


    public function delete($id)
    {

        $admins = Tenthrow::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }

}
