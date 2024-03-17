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

               
        $array_data = $request->all();


        $lesson_detail = $array_data['des'];


        foreach ($lesson_detail as $key => $lesson_detail) {

              $table_list_data = new Seventhrow();
              $table_list_data->title	=$request->title;
              $table_list_data->des	=$array_data['des'][$key];
              $file=$array_data['image'][$key];
            $name=$file->getClientOriginalName();
            $file->move('public/uploads/', $name);
            $table_list_data->image='public/uploads/'.$name;
              $table_list_data->save();


        }


        return redirect()->back()->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Seventhrow::find($request->id);

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
