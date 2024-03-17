<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BigFive;
use App\Models\BigOther;
class FifthController extends Controller
{
    public function index(){

        $big_five_list = BigFive::latest()->get();
        $big_other_list = BigOther::latest()->get();

        return view('backend.fif_row.index',['big_five_list'=>$big_five_list,'big_other_list'=>$big_other_list]);

    }


    public function fifth_row_info_big_store(Request $request){

        $user = new BigFive();

        //$user->title = $request->title;
        $user->des = $request->des;

        $user->save();
        return redirect()->route('admin.fifth_row_info')->with('success','Created successfully!');

    }


    public function fifth_row_info_big_update(Request $request){

        $user = BigFive::find($request->id);

       // $user->title = $request->title;
        $user->des = $request->des;

        $user->save();
        return redirect()->route('admin.fifth_row_info')->with('success','Created successfully!');

    }


    public function store(Request $request){

        $user = new BigOther();

        $user->title = $request->title;
        $user->des = $request->des;

        $user->save();
        return redirect()->route('admin.fifth_row_info')->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = BigOther::find($request->id);

        $user->title = $request->title;
        $user->des = $request->des;

        $user->save();
        return redirect()->route('admin.fifth_row_info')->with('success','Created successfully!');

    }

    public function delete($id)
    {

        $admins = BigOther::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
