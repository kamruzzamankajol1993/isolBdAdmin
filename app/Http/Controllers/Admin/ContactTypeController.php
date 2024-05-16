<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactType;
class ContactTypeController extends Controller
{
    public function index(){

        $headline_list = ContactType::latest()->get();
        return view('backend.ContractType.index',['headline_list'=>$headline_list]);
    }


    public function store(Request $request){

        $user = new ContactType();

        $user->name = $request->name;
        //$user->des = $request->des;

        $user->save();
        return redirect()->back()->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = ContactType::find($request->id);

        $user->name = $request->name;
        //$user->des = $request->des;

        $user->save();
        return redirect()->back()->with('success','updated successfully!');

    }

    public function destroy($id)
    {

        $admins = ContactType::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
