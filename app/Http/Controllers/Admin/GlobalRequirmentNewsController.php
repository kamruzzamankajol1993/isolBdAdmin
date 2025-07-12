<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\GlobalRequirmentNews;
use App\Models\SecondLogo;
class GlobalRequirmentNewsController extends Controller
{
    public function index(){
        $slider_list = GlobalRequirmentNews::latest()->get();
        $second_logo_list = GlobalRequirmentNews::latest()->get();
        return view('backend.globalRequirmentNews.index',['slider_list'=>$slider_list,'second_logo_list'=>$second_logo_list]);
    }

    public function store(Request $request){
        $user = new GlobalRequirmentNews();


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


    public function update(Request $request,$id){
        $user = GlobalRequirmentNews::find($request->id);


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->back()->with('info','Updated successfully!');
    }


    public function destroy($id)
    {

        $admins = GlobalRequirmentNews::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }

}
