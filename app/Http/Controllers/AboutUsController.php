<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutusaccrediations;
use App\Models\Aboutusexperties;
use App\Models\Aboutusexpertiesbig;
use App\Models\Aboutusservice;
class AboutUsController extends Controller
{


    public function index(){


        $about_us_experties_list = Aboutusexpertiesbig::latest()->get();

        return view('backend.about_us_experties_list.index',['about_us_experties_list'=>$about_us_experties_list]);


    }
    public function about_us_accrediations_index(){


        $about_us_accrediations_list = Aboutusaccrediations::latest()->get();

        return view('backend.about_us_accrediations_list.index',['about_us_accrediations_list'=>$about_us_accrediations_list]);

    }


    public function about_us_services_index(){


        $about_us_services_list = Aboutusservice::latest()->get();

        return view('backend.about_us_services_list.index',['about_us_services_list'=>$about_us_services_list]);

    }


    public function store(Request $request){

        $user = new Aboutusexpertiesbig();

        //$user->title = $request->title;
        $user->des = $request->des;
        // if ($request->hasfile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('public/uploads/', $filename);
        //     $user->image = 'public/uploads/' . $filename;
        // }
        $user->save();
        return redirect()->route('admin.about_us_experties')->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Aboutusexpertiesbig::find($request->id);

        //$user->title = $request->title;
        $user->des = $request->des;
        // if ($request->hasfile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('public/uploads/', $filename);
        //     $user->image = 'public/uploads/' . $filename;
        // }
        $user->save();
        return redirect()->route('admin.about_us_experties')->with('success','Updated successfully!');

    }


    public function about_us_accrediations_store(Request $request){

        $user = new Aboutusaccrediations();

        //$user->title = $request->title;
        $user->des = $request->des;
        // if ($request->hasfile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('public/uploads/', $filename);
        //     $user->image = 'public/uploads/' . $filename;
        // }
        $user->save();
        return redirect()->route('admin.about_us_accrediations')->with('success','Created successfully!');

    }


    public function about_us_accrediations_update(Request $request){

        $user = Aboutusaccrediations::find($request->id);

        //$user->title = $request->title;
        $user->des = $request->des;
        // if ($request->hasfile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('public/uploads/', $filename);
        //     $user->image = 'public/uploads/' . $filename;
        // }
        $user->save();
        return redirect()->route('admin.about_us_accrediations')->with('success','Updated successfully!');

    }



    public function about_us_services_store(Request $request){

        $user = new Aboutusservice();

        $user->title = $request->title;
        $user->des = $request->des;
        $user->image = $request->image;
        // if ($request->hasfile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('public/uploads/', $filename);
        //     $user->image = 'public/uploads/' . $filename;
        // }
        $user->save();
        return redirect()->route('admin.about_us_services')->with('success','Created successfully!');

    }


    public function about_us_services_update(Request $request){

        $user = Aboutusservice::find($request->id);

        $user->title = $request->title;
        $user->des = $request->des;
        $user->image = $request->image;
        // if ($request->hasfile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('public/uploads/', $filename);
        //     $user->image = 'public/uploads/' . $filename;
        // }
        $user->save();
        return redirect()->route('admin.about_us_services')->with('success','Updated successfully!');

    }

    public function about_us_services_delete($id)
    {

        $admins = Aboutusservice::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
