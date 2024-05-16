<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
class LocationController extends Controller
{
    public function index(){

        $headline_list = Location::latest()->get();
        return view('backend.locationList.index',['headline_list'=>$headline_list]);
    }


    public function store(Request $request){

        $user = new Location();

        $user->name = $request->name;
        //$user->des = $request->des;

        $user->save();
        return redirect()->back()->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Location::find($request->id);

        $user->name = $request->name;
        //$user->des = $request->des;

        $user->save();
        return redirect()->back()->with('success','updated successfully!');

    }

    public function destroy($id)
    {

        $admins = Location::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
