<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobtitle;
use App\Models\Jobdepartment;
use App\Models\Jobcategory;
use App\Models\PartnerWithUs;
use App\Models\JobSeeker;
class FrontController extends Controller
{

    public function job_details(){

        return view('front.job_details');

    }
    public function index(){

        $headline_list = Jobtitle::get();
        $headline_list2 = Jobdepartment::get();
        $headline_list1 = Jobcategory::get();

        return view('front.index',compact('headline_list','headline_list1','headline_list2'));
    }


    public function get_dp_name_from_cat(Request $request){

        $get_dp = Jobdepartment::where('cat_id',$request->cat_name)->get();

     $data = view('front.get_dp_name_from_cat',compact('get_dp'))->render();
     return response()->json($data);
 }


 public function get_title_name_from_dp(Request $request){

    $get_dp = Jobtitle::where('dp_id',$request->cat_name)->get();

 $data = view('front.get_title_name_from_dp',compact('get_dp'))->render();
 return response()->json($data);
}


public function how_it_work(){


    return view('front.how_it_work');

}


public function mission(){


    return view('front.mission');

}


public function vision(){


    return view('front.vision');

}


public function values(){


    return view('front.values');

}


public function our_accreditations(){


    return view('front.our_accreditations');

}


public function our_experties(){


    return view('front.our_experties');

}

public function our_services(){
return view('front.our_services');
}


public function post_a_job(){
    return view('front.post_a_job');
    }



    public function sendMessageFromPartner(Request $request){


        $save = new PartnerWithUs;
        $save->name = $request->name;
        $save->company_name	 = $request->companyName;
        $save->state = $request->state;
        $save->country = $request->country;
        $save->email = $request->email;
        $save->phone = $request->phoneNumber;
        $save->des = $request->des;
        $save->status = 'Pending';
        $save->save();

        return $data = 1;


    }

    public function jobSeekerPartOnePost(Request $request){
        //JobSeeker
        //dd($request->all());

        if(empty($request->family_members_country)){
            $arr_all = 'null';
        }else{
        $arr_all = implode(",",$request->family_members_country);
        }

        $save = new JobSeeker;
        $save->your_self = $request->your_self;
        $save->seaman_book_or_bd_cdc	 = $request->seaman_book_or_bd_cdc;
        $save->seaman_book_or_bd_cdc_detail = $request->seaman_book_or_bd_cdc_detail;
        $save->password_valid_till_one_year = $request->password_valid_till_one_year;
        $save->full_vaccinated_for_covid = $request->full_vaccinated_for_covid;
        $save->placement_onboard_considered = $request->placement_onboard_considered;
        $save->ielts_score = $request->ielts_score;
        $save->ielts_score_des = $request->ielts_score_des;
        $save->work_experience = $request->work_experience;
        $save->work_experience_des = $request->work_experience_des;
        $save->settled_country = $request->settled_country;
        $save->interested_to_work_on_ship = $request->interested_to_work_on_ship;
        $save->relative_work_on_ship = $request->relative_work_on_ship;
        $save->relative_work_on_ship_des = $request->relative_work_on_ship_des;


        $save->pay_isol_or_other = $request->pay_isol_or_other;
        $save->pay_third_party = $request->pay_third_party;
        $save->fill_up_by_assists = $request->fill_up_by_assists;
        $save->family_members_country = $arr_all;
        $save->assists_and_family_des = $request->assists_and_family_des;
        $save->expected_salary = $request->expected_salary;
        $save->hear_about_us = $request->hear_about_us;
        $save->married_or_not = $request->married_or_not;
        $save->qualification = $request->qualification;
        $save->hospitali_course = $request->hospitali_course;
        $save->sea_motion_work = $request->sea_motion_work;
        $save->get_us_visa = $request->get_us_visa;
        $save->visa_cancelled_or_not = $request->visa_cancelled_or_not;

        $save->refused_us_visa = $request->refused_us_visa;


        $save->travel_country = $request->travel_country;
        $save->terrorist_organization_member = $request->terrorist_organization_member;
        $save->police_clearance_certificate = $request->police_clearance_certificate;
        $save->illegal_activity = $request->illegal_activity;
        $save->status = 'Pending';

        $save->arrested = $request->arrested;
        $save->mental_or_physical_disorder = $request->mental_or_physical_disorder;
        $save->disease = $request->disease;
        $save->insurgent_organization = $request->insurgent_organization;
        $save->served_military = $request->served_military;
        $save->charitable_organization = $request->charitable_organization;
        $save->save();

        $mainId = $save->id;


        return redirect()->route('jobSeekerPartTwo',base64_encode($mainId))->with('success','Created successfully!');

    }



    public function jobSeekerPartOnePostEdit(Request $request){
        if(empty($request->family_members_country)){
            $arr_all = 'null';
        }else{
        $arr_all = implode(",",$request->family_members_country);
        }

        $save = JobSeeker::find($request->id);
        $save->your_self = $request->your_self;
        $save->seaman_book_or_bd_cdc	 = $request->seaman_book_or_bd_cdc;
        $save->seaman_book_or_bd_cdc_detail = $request->seaman_book_or_bd_cdc_detail;
        $save->password_valid_till_one_year = $request->password_valid_till_one_year;
        $save->full_vaccinated_for_covid = $request->full_vaccinated_for_covid;
        $save->placement_onboard_considered = $request->placement_onboard_considered;
        $save->ielts_score = $request->ielts_score;
        $save->ielts_score_des = $request->ielts_score_des;
        $save->work_experience = $request->work_experience;
        $save->work_experience_des = $request->work_experience_des;
        $save->settled_country = $request->settled_country;
        $save->interested_to_work_on_ship = $request->interested_to_work_on_ship;
        $save->relative_work_on_ship = $request->relative_work_on_ship;
        $save->relative_work_on_ship_des = $request->relative_work_on_ship_des;


        $save->pay_isol_or_other = $request->pay_isol_or_other;
        $save->pay_third_party = $request->pay_third_party;
        $save->fill_up_by_assists = $request->fill_up_by_assists;
        $save->family_members_country = $arr_all;
        $save->assists_and_family_des = $request->assists_and_family_des;
        $save->expected_salary = $request->expected_salary;
        $save->hear_about_us = $request->hear_about_us;
        $save->married_or_not = $request->married_or_not;
        $save->qualification = $request->qualification;
        $save->hospitali_course = $request->hospitali_course;
        $save->sea_motion_work = $request->sea_motion_work;
        $save->get_us_visa = $request->get_us_visa;
        $save->visa_cancelled_or_not = $request->visa_cancelled_or_not;

        $save->refused_us_visa = $request->refused_us_visa;


        $save->travel_country = $request->travel_country;
        $save->terrorist_organization_member = $request->terrorist_organization_member;
        $save->police_clearance_certificate = $request->police_clearance_certificate;
        $save->illegal_activity = $request->illegal_activity;

        $save->arrested = $request->arrested;
        $save->mental_or_physical_disorder = $request->mental_or_physical_disorder;
        $save->disease = $request->disease;
        $save->insurgent_organization = $request->insurgent_organization;
        $save->served_military = $request->served_military;
        $save->charitable_organization = $request->charitable_organization;
        $save->save();

        $mainId = $save->id;


        return redirect()->route('jobSeekerPartTwo',base64_encode($mainId))->with('success','Created successfully!');

    }


    public function jobSeekerPartTwo($id){

        $enCode = $id;
        $decode = base64_decode($enCode);
        return view('front.cv_login_main',compact('enCode','decode'));

    }


    public function jobSeekerPartOne($id){

       $jobSeekerList = JobSeeker::where('id',base64_decode($id))->first();
       return view('front.jobSeekerPartOne',compact('jobSeekerList'));
    }

    public function jobSeekerPartTwoPost(Request $request){


        //dd($request->all());


        $save = JobSeeker::find($request->id);
        $save->first_name = $request->first_name;
        $save->last_name	 = $request->last_name;
        $save->email_address = $request->email_address;
        $save->phone = $request->phone;
        $save->personal_summary = $request->personal_summary;
        $save->team = $request->team;
        $save->ritz_carlton_brand_work = $request->ritz_carlton_brand_work;
        $save->valid_schengen_visa = $request->valid_schengen_visa;
        $save->gender = $request->gender;
        $save->gender_identity = $request->gender_identity;
        $save->nationality = $request->nationality;
        $save->martial_status = $request->martial_status;
        $save->age_bracket = $request->age_bracket;
        $save->disability = $request->disability;
        $save->veteran_status = $request->veteran_status;
        $save->preferred_pronouns = $request->preferred_pronouns;

        if ($request->hasfile('cv')) {
            $file = $request->file('cv');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $save->cv = 'uploads/' . $filename;
        }
        $save->save();
        return redirect()->route('cv_login_form')->with('success','submit successfully!');
    }


public function crew_cv_searching(){
        return view('front.crew_cv_searching');
        }

    public function top_notch(){
            return view('front.top_notch');
            }
            public function hierarchy(){
                return view('front.hierarchy');
                }
                public function crew_login(){
                    return view('front.crew_login');
                    }
                    public function help24_7(){
                        return view('front.help24_7');
                        }
                        public function urgent_vacancy(){
                            return view('front.urgent_vacancy');
                            }

                            public function hiring_process(){
                                return view('front.hiring_process');
                                }
                                public function career_navigation(){
                                    return view('front.career_navigation');
                                    }


                                    public function cruiseship(){
                                        return view('front.cruiseship');
                                        }

                    public function megayacht(){
                                            return view('front.megayacht');
                                            }


                            public function river_cruise(){
                                                return view('front.river_cruise');
                                                }


                        public function private_jets(){
                                                    return view('front.private_jets');
                                                    }


                            public function hotel_ressort(){
                                                        return view('front.hotel_ressort');
                                                        }



                            public function merchant_navy(){
                                                            return view('front.merchant_navy');
                                                            }


                                public function offshore(){
                                                                return view('front.offshore');
                                                                }


                                public function world_butler(){
                                                                    return view('front.world_butler');
                                                                    }



                                                                    public function event(){
                                                                        return view('front.event');
                                                                        }




                                                                        public function blog(){
                                                                            return view('front.blog');
                                                                            }


                                                                            public function faq(){
                                                                                return view('front.faq');
                                                                                }


}
