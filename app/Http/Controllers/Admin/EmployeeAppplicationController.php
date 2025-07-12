<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartnerWithUs;
use Response;
use App\Models\JobSeeker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin;
use Mail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use PDF;
use Carbon;
use App\Models\EmployeeApplication;
use App\Models\EmployeeDocumentInformation;
use App\Models\EmployeeDocumentTwo;
use App\Models\EmployeeHistoryAndEducation;
use App\Models\EmployeeLanguage;
use App\Models\RecruitmentAgencyPart;
class EmployeeAppplicationController extends Controller
{
    public function index(){

        $employeeApplicationList = EmployeeApplication::where('status','!=','review')->latest()->get();
        return view('backend.employeeApplicationList.index',compact('employeeApplicationList'));
    }

    public function edit($id){
        try{
        $idDecode = base64_decode($id);

        $getReviewData= EmployeeApplication::where('id',$idDecode)->first();

        $employeeDocumentInformation= EmployeeDocumentInformation::where('employee_application_id',$idDecode)->first();
        $employeeDocumentTwo= EmployeeDocumentTwo::where('employee_application_id',$idDecode)->first();
        $employeeHistoryAndEducation= EmployeeHistoryAndEducation::where('employee_application_id',$idDecode)->first();
        $employeeLanguage= EmployeeLanguage::where('employee_application_id',$idDecode)->first();

        $recruitmentAgencyPart= RecruitmentAgencyPart::where('employee_application_id',$idDecode)->first();

        
        return view('backend.employeeApplicationList.edit',compact('recruitmentAgencyPart','getReviewData','employeeDocumentInformation','employeeDocumentTwo','employeeHistoryAndEducation','employeeLanguage'));
    } catch (\Exception $e) {
        return $e;
    }
    
    }

    public function show($id){

        try{
            $idDecode = base64_decode($id);
    
            $getReviewData= EmployeeApplication::where('id',$idDecode)->first();
    
            $employeeDocumentInformation= EmployeeDocumentInformation::where('employee_application_id',$idDecode)->first();
            $employeeDocumentTwo= EmployeeDocumentTwo::where('employee_application_id',$idDecode)->first();
            $employeeHistoryAndEducation= EmployeeHistoryAndEducation::where('employee_application_id',$idDecode)->first();
            $employeeLanguage= EmployeeLanguage::where('employee_application_id',$idDecode)->first();
            
            $file_Name_Custome = $getReviewData->first_name.$getReviewData->last_name.$employeeDocumentInformation->paNumber;
            
            $recruitmentAgencyPart= RecruitmentAgencyPart::where('employee_application_id',$idDecode)->first();

            $pdf=PDF::loadView('backend.employeeApplicationList.show',['recruitmentAgencyPart'=>$recruitmentAgencyPart,'getReviewData'=>$getReviewData,'employeeDocumentInformation'=>$employeeDocumentInformation,'employeeDocumentTwo'=>$employeeDocumentTwo,'employeeHistoryAndEducation'=>$employeeHistoryAndEducation,'employeeLanguage'=>$employeeLanguage],[],['format' => 'A4']);
            return $pdf->stream($file_Name_Custome.''.'.pdf');
    
           
        } catch (\Exception $e) {
            return $e;
        }

    }

    public function update(Request $request,$id){
        //dd($request->all());

        if ($request->hasfile('applicant_photo')) {
            $file = $request->file('applicant_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = mt_rand(1000000, 9999999).time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $appImage = 'public/uploads/' . $filename;
        }else{
            $appImage =EmployeeApplication::where('id',$id)->value('applicant_photo');

        }

        if ($request->hasfile('applicant_signature')) {
            $file = $request->file('applicant_signature');
            $extension = $file->getClientOriginalExtension();
            $filename = mt_rand(1000000, 9999999).time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $appSign = 'public/uploads/' . $filename;
        }else{
            $appSign =EmployeeApplication::where('id',$id)->value('applicant_signature');

        }


        $input = $request->all();
        $input['status'] = 'accepted';
        $input['applicant_photo'] = $appImage;
        $input['applicant_signature'] = $appSign;
        try{
        
           $applicationEmployee =  EmployeeApplication::findOrFail($id);
           $applicationEmployee->fill($input)->save();

           $input['employee_application_id'] = $applicationEmployee->id;

           $employeeDocumentInformation =  EmployeeDocumentInformation::findOrFail($request->docId);
           $employeeDocumentInformation->fill($input)->save();

           $employeeDocumentTwo =  EmployeeDocumentTwo::findOrFail($request->docIdTwo);
           $employeeDocumentTwo->fill($input)->save();

           $employeeHistoryAndEducation =  EmployeeHistoryAndEducation::findOrFail($request->employeeHisId);
           $employeeHistoryAndEducation->fill($input)->save();

           $employeeLanguage =  EmployeeLanguage::findOrFail($request->lanId);
           $employeeLanguage->fill($input)->save();

           if(empty($request->reqId)){

            $recruitmentAgencyPart =  RecruitmentAgencyPart::create($input);

           }else{

            $recruitmentAgencyPart =  RecruitmentAgencyPart::findOrFail($request->reqId);
           $recruitmentAgencyPart->fill($input)->save();

           }

        DB::commit();
        return redirect()->route('employeeAppplication.show',base64_encode($applicationEmployee->id))->with('success','Submit Successfully!');
    } catch (\Exception $e) {
        DB::rollBack();
        return $e;
    }
    }

    public function destroy($id)
    {
        $admins = EmployeeApplication::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
