<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoBackground;
class VideoBackgroundController extends Controller
{
    public function index(){

        $video_back_list = VideoBackground::latest()->get();
        return view('backend.videoback.index',['video_back_list'=>$video_back_list]);

    }


    public function store(Request $request){


        // Create New User
        $user = new VideoBackground();

        $user->name = 0;
        if ($request->hasfile('video_file')) {
            $file = $request->file('video_file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->video_file = 'public/uploads/' . $filename;
        }



        $user->save();

        return redirect()->route('admin.video_background')->with('success','Created successfully!');


    }


    public function update(Request $request){


        // Create New User
        $user =VideoBackground::find($request->id);

        $user->name = 0;
        if ($request->hasfile('video_file')) {
            $file = $request->file('video_file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $user->video_file = 'public/uploads/' . $filename;
        }



        $user->save();

        return redirect()->route('admin.video_background')->with('success','Updated successfully!');


    }
}
