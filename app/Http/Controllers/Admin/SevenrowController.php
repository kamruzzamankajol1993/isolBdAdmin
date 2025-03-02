<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seventhrow;
class SevenrowController extends Controller
{
    public function index(){

        $seventh_row_list = Seventhrow::latest()->get();
        return view('backend.seventh_row_list.index',['seventh_row_list'=>$seventh_row_list]);
    }

    public function store(Request $request){

               
        $user = new Seventhrow();

        $user->title = $request->title;
        $user->image = $request->image;
        $user->save();


        return redirect()->back()->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Seventhrow::find($request->id);

        $user->title = $request->title;
        $user->image = $request->image;
        $user->save();
        return redirect()->route('admin.seventh_row_info')->with('success','Created successfully!');

    }

    public function delete($id)
    {

        $admins = Seventhrow::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
