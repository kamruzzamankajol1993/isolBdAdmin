<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Headline;
class SpecialNewsController extends Controller
{
    public function index(){

        $headline_list = Headline::latest()->get();
        return view('backend.headline_list.index',['headline_list'=>$headline_list]);
    }


    public function store(Request $request){

        $user = new Headline();

        $user->title = $request->title;
        //$user->des = $request->des;

        $user->save();
        return redirect()->route('admin.special_news_info')->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Headline::find($request->id);

        $user->title = $request->title;
        //$user->des = $request->des;
        
        $user->save();
        return redirect()->route('admin.special_news_info')->with('success','Created successfully!');

    }

    public function delete($id)
    {

        $admins = Headline::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
