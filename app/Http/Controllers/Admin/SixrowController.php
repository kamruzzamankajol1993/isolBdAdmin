<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sixthrow;
use App\Models\WellComeOnBoard;
class SixrowController extends Controller
{
    public function index(){


        $wellComeBoardPartTwo = WellComeOnBoard::latest()->get();

        $sixth_row_list = Sixthrow::latest()->get();
        return view('backend.sixth_row_list.index',['sixth_row_list'=>$sixth_row_list,'wellComeBoardPartTwo'=>$wellComeBoardPartTwo]);
    }


    public function wellComeOnBoardStore (Request $request){

        $user = new WellComeOnBoard();

        $user->title = $request->title;
        $user->titleOne = $request->titleOne;
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

    public function wellComeOnBoardUpdate(Request $request){

        $user = WellComeOnBoard::find($request->id);

        $user->title = $request->title;
        $user->titleOne = $request->titleOne;
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
