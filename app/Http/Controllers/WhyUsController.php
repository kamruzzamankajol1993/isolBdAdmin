<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Whyusmission;
use App\Models\Whyusvision;
use App\Models\Whyusvalues;
class WhyUsController extends Controller
{
    public function index(){

        $why_us_mission_list = Whyusmission::latest()->get();
        $why_us_vision_list = Whyusvision::latest()->get();
        $why_us_values_list = Whyusvalues::latest()->get();

        return View('backend.why_us_mission.index',['why_us_mission_list'=>$why_us_mission_list]);
    }

    public function why_us_vision_index(){

        $why_us_mission_list = Whyusmission::latest()->get();
        $why_us_vision_list = Whyusvision::latest()->get();
        $why_us_values_list = Whyusvalues::latest()->get();

        return View('backend.why_us_vision.index',['why_us_vision_list'=>$why_us_vision_list]);
    }

    public function why_us_value_index(){

        $why_us_mission_list = Whyusmission::latest()->get();
        $why_us_vision_list = Whyusvision::latest()->get();
        $why_us_values_list = Whyusvalues::latest()->get();

        return View('backend.why_us_value.index',['why_us_values_list'=>$why_us_values_list]);
    }


    public function store(Request $request){

        $user = new Whyusmission();

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
        return redirect()->route('admin.why_us_mission')->with('success','Created successfully!');

    }


    public function update(Request $request){

        $user = Whyusmission::find($request->id);

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
        return redirect()->route('admin.why_us_mission')->with('success','Created successfully!');

    }



    public function why_us_vision_store(Request $request){

        $user = new Whyusvision();

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
        return redirect()->route('admin.why_us_vision')->with('success','Created successfully!');

    }


    public function why_us_vision_update(Request $request){

        $user = Whyusvision::find($request->id);

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
        return redirect()->route('admin.why_us_vision')->with('success','Created successfully!');

    }


    public function why_us_value_store(Request $request){

        $user = new Whyusvalues();

        $user->title = $request->title;
        //$user->des = $request->des;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.why_us_value')->with('success','Created successfully!');

    }


    public function why_us_value_update(Request $request){

        $user = Whyusvalues::find($request->id);

        $user->title = $request->title;
        //$user->des = $request->des;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->image = 'public/uploads/' . $filename;
        }
        $user->save();
        return redirect()->route('admin.why_us_value')->with('success','Created successfully!');

    }


    public function why_us_value_delete($id)
    {

        $admins = Whyusvalues::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
