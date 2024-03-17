<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HowItWork;
class HowItWorkController extends Controller
{
    public function index(){

        $how_it_work_list = HowItWork::latest()->get();


        return View('backend.how_it_work.index',['how_it_work_list'=>$how_it_work_list]);
    }


    public function store(Request $request){

        $user = new HowItWork();

        //$user->title = $request->title;
        $user->des = $request->des;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.how_it_work')->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = HowItWork::find($request->id);

        //$user->title = $request->title;
        $user->des = $request->des;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.how_it_work')->with('success','Created successfully!');

    }
}
