<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\JobSeeker;
use App\Models\Job;
class DashboardController extends Controller
{
	public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    public function index(){
if (is_null($this->user) || !$this->user->can('dashboard.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view dashboard !');
        }
        $totalEvent = DB::table('event')->count();
        $totalJob = Job::count();
$partnerWithUsPTotal = JobSeeker::where('status','Pending')->latest()->count();
$partnerWithUsATotal = JobSeeker::where('status','Accepted')->latest()->count();
$partnerWithUsRTotal = JobSeeker::where('status','Rejected')->latest()->count();
$partnerWithUsP = JobSeeker::where('status','Pending')->latest()->limit(10)->get();
    	return view('backend.index',compact('partnerWithUsRTotal','totalEvent','totalJob','partnerWithUsP','partnerWithUsPTotal','partnerWithUsATotal'));
    }
}
