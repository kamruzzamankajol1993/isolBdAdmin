<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\SecondLogo;
class SecondrowController extends Controller
{
    public function index(){
        $slider_list = Slider::latest()->get();
        $second_logo_list = SecondLogo::latest()->get();
        return view('backend.slider_list.index',['slider_list'=>$slider_list,'second_logo_list'=>$second_logo_list]);
    }

    public function store(Request $request){
        $user = new Slider();


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.second_row_info')->with('success','Created successfully!');
    }


    public function update(Request $request){
        $user = Slider::find($request->id);


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.second_row_info')->with('info','Updated successfully!');
    }


    public function delete($id)
    {

        $admins = Slider::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }


    public function second_row_info_logo_store(Request $request){

        $user = new SecondLogo();

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
        return redirect()->route('admin.second_row_info')->with('success','Created successfully!');

    }


    public function second_row_info_logo_update(Request $request){

        $user = SecondLogo::find($request->id);

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
        return redirect()->route('admin.second_row_info')->with('success','Created successfully!');

    }

    public function second_row_info_logo_delete($id)
    {

        $admins = SecondLogo::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
