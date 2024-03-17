<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Whyjoinus;
class ThirdrowController extends Controller
{
    public function index(){

        $why_join_list = Whyjoinus::latest()->get();
        return view('backend.why_join_list.index',['why_join_list'=>$why_join_list]);
    }


    public function store(Request $request){

        $user = new Whyjoinus();

        $user->title = $request->title;
        $user->des = $request->des;

        $user->save();
        return redirect()->route('admin.third_row_info')->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Whyjoinus::find($request->id);

        $user->title = $request->title;
        $user->des = $request->des;

        $user->save();
        return redirect()->route('admin.third_row_info')->with('success','Created successfully!');

    }

}
