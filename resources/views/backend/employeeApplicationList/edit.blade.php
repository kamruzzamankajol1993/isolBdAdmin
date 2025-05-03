@extends('backend.master.master')

@section('title')
Employee Application Review | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Employee Application Review</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li> --}}
                    <li class="breadcrumb-item active"></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
       
                <div class="form-container">
                   

                    <form class="form-control" action="{{route('employeeAppplication.update',$getReviewData->id)}}" method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">
                        @csrf
                        @method('put')
                           
                        <input type="hidden" name="docId" value="{{$employeeDocumentInformation->id}}"/>
                        <input type="hidden" name="docIdTwo" value="{{$employeeDocumentTwo->id}}"/>
                        <input type="hidden" name="employeeHisId" value="{{$employeeHistoryAndEducation->id}}"/>
                        <input type="hidden" name="lanId" value="{{$employeeLanguage->id}}"/>
                        <!-- Personal Information Section -->
                        <div class="section">
                            <h3>1. Personal Information</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name"  value="{{$getReviewData->last_name}}" name="last_name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" value="{{$getReviewData->first_name}}" name="first_name" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="middle_name" class="form-label">Middle Name(s)</label>
                                    <input type="text" class="form-control" id="middle_name" value="{{$getReviewData->middle_name}}" name="middle_name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="birth_date" class="form-label">Date of Birth (mm/dd/yyyy)</label>
                                    <input type="text" class="form-control datepicker" value="{{$getReviewData->dob}}" id="birth_date" name="dob" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="birth_place" class="form-label">Birth Place (city)</label>
                                    <input type="text" class="form-control " id="birth_place" value="{{$getReviewData->birth_place_city}}" name="birth_place_city"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country_of_birth" class="form-label">Country of Birth</label>
                                    <input type="text" class="form-control" id="country_of_birth"
                                        name="birth_place_country" value="{{$getReviewData->birth_place_country}}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" id="nationality" value="{{$getReviewData->nationality}}" name="nationality"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Gender</label><br>
                                    <input type="radio" id="male" name="gender" {{$getReviewData->gender == 'male' ? 'checked':''}}  value="male" required>
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" {{$getReviewData->gender == 'female' ? 'checked':''}} value="female" required>
                                    <label for="female">Female</label>
                                    <input type="radio" id="binary" name="gender" {{$getReviewData->gender == 'binary' ? 'checked':''}} value="binary" required>
                                    <label for="binary">Binary</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="weight" class="form-label">Weight</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" name="weight_unit" id="" required>
                                                <option value="Lbs" {{$getReviewData->weight_unit == 'Lbs' ? 'selected':''}}>Lbs</option>
                                                <option value="Kgs" {{$getReviewData->weight_unit == 'Kgs' ? 'selected':''}}>Kgs</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="weight" value="{{$getReviewData->weight}}" name="weight" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="height" class="form-label">Height</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" name="height_unit" id="" required>
                                                <option value="feet" {{$getReviewData->height_unit == 'feet' ? 'selected':''}}>feet</option>
                                                <option value="inch" {{$getReviewData->height_unit == 'inch' ? 'selected':''}}>inch</option>
                                                <option value="cm" {{$getReviewData->height_unit == 'cm' ? 'selected':''}}>cm</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="height" value="{{$getReviewData->height}}" name="height" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="hair_color" class="form-label">Hair Color</label>
                                    <input type="text" class="form-control" id="hair_color" value="{{$getReviewData->hair_color}}" name="hair_color" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="eye_color" class="form-label">Eye Color</label>
                                    <input type="text" class="form-control" id="eye_color" value="{{$getReviewData->eye_color}}" name="eye_color" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Do you have tattoos?</label><br>
                                    <input type="radio" id="tatoo_yes" {{$getReviewData->tattoo == 'tatoo_yes' ? 'checked':''}} name="tattoo" value="tatoo_yes" required>
                                    <label for="tatoo_yes">Yes</label>
                                    <input type="radio" id="tatoo_no" {{$getReviewData->tattoo == 'tatoo_no' ? 'checked':''}} name="tattoo" value="tatoo_no" required>
                                    <label for="tatoo_no">No</label>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Are the tattoos visible when
                                        wearing short-sleeved shirts, shorts, or skirts?</label><br>
                                    <input type="radio" id="tatoo_visible_yes" {{$getReviewData->tattoo_visible == 'tatoo_visible_yes' ? 'checked':''}}  name="tattoo_visible" required
                                        value="tatoo_visible_yes">
                                    <label for="tatoo_visible_yes">Yes</label>
                                    <input type="radio" id="tatoo_visible_no" {{$getReviewData->tattoo_visible == 'tatoo_visible_no' ? 'checked':''}} name="tattoo_visible" required
                                        value="tatoo_visible_no">
                                    <label for="tatoo_visible_no">No</label>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information Section -->
                        <div class="section">
                            <h3>2. Contact Information</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="street_1" class="form-label">Street 1</label>
                                    <input type="text" class="form-control" id="street_1" value="{{$getReviewData->street_one}}" name="street_one" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="street_2" class="form-label">Street 2</label>
                                    <input type="text" class="form-control" id="street_2" value="{{$getReviewData->street_two}}" name="street_two">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" value="{{$getReviewData->city}}" name="city" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state" class="form-label">State/Province</label>
                                    <input type="text" class="form-control" id="state" value="{{$getReviewData->state}}" name="state">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="zip" class="form-label">Zip/Postal Code</label>
                                    <input type="text" class="form-control" id="zip" value="{{$getReviewData->postal_code}}" name="postal_code" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="country" value="{{$getReviewData->country}}" name="country" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="home_phone" class="form-label">Home Phone</label>
                                    <input type="text" class="form-control" id="home_phone" value="{{$getReviewData->home_phone}}" name="home_phone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="mobile_phone" class="form-label">Mobile Phone</label>
                                    <input type="text" class="form-control" id="mobile_phone" value="{{$getReviewData->mobile_phone}}" name="mobile_phone" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail Address</label>
                                <input type="email" class="form-control" id="email" value="{{$getReviewData->email_address}}" name="email_address" required>
                            </div>

                            <div class="mb-3">
                                <label for="home_airport" class="form-label">Home Airport</label>
                                <input type="text" class="form-control" id="home_airport" value="{{$getReviewData->home_airport}}" name="home_airport" required>
                            </div>
                        </div>

                        <!-- Dependent Information Section -->
                        <div class="section">
                            <h3>3. Dependent Information</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="marital_status" class="form-label">Marital Status</label>
                                    <select class="form-select" id="marital_status" name="matrial_status" required>
                                        <option value="single" {{$getReviewData->matrial_status == 'single' ? 'selected':''}}>Single</option>
                                        <option value="married" {{$getReviewData->matrial_status == 'married' ? 'selected':''}}>Married</option>
                                        <option value="divorced" {{$getReviewData->matrial_status == 'divorced' ? 'selected':''}}>Divorced</option>
                                        <option value="widowed" {{$getReviewData->matrial_status == 'widowed' ? 'selected':''}}>Widowed</option>
                                        <option value="other" {{$getReviewData->matrial_status == 'other' ? 'selected':''}}>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="children_under_18" class="form-label">Number of children under 18
                                        years of age?</label>
                                    <input type="number" value="{{$getReviewData->children_under_18}}" class="form-control" id="children_under_18"
                                        name="children_under_18" min="0" required>
                                </div>
                            </div>
                        </div>

                        <!-- Emergency Contact Information Section -->
                        <div class="section">
                            <h3>Emergency Contact Information</h3>
                            <p>In the event of an emergency, I would like the company to contact the following
                                person or persons:</p>

                            <!-- Emergency Contact Person 1 -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="emergency_person_1" class="form-label">Person 1</label>
                                    <input type="text" class="form-control" id="emergency_person_1"
                                        name="emergency_contact_person_one" value="{{$getReviewData->emergency_contact_person_one}}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="relationship_1" class="form-label">Relationship</label>
                                    <input type="text" class="form-control" id="relationship_1" required value="{{$getReviewData->relation_with_emergency_contact_person_one}}" name="relation_with_emergency_contact_person_one">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="home_phone_1" class="form-label">Home Phone</label>
                                    <input type="text" class="form-control" id="home_phone_1" value="{{$getReviewData->emergency_contact_person_one_home_phone}}" name="emergency_contact_person_one_home_phone" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="mobile_phone_1" class="form-label">Mobile Phone</label>
                                    <input type="text" class="form-control" id="mobile_phone_1" value="{{$getReviewData->emergency_contact_person_one_mobile_phone}}" name="emergency_contact_person_one_mobile_phone" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email_1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email_1" value="{{$getReviewData->emergency_contact_person_one_email}}" name="emergency_contact_person_one_email" required>
                                </div>
                            </div>

                            <!-- Emergency Contact Person 2 -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="emergency_person_2" class="form-label">Person 2</label>
                                    <input type="text" class="form-control" id="emergency_person_2"
                                        name="emergency_contact_person_two" value="{{$getReviewData->emergency_contact_person_two}}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="relationship_2" class="form-label">Relationship</label>
                                    <input type="text" class="form-control" id="relationship_2" value="{{$getReviewData->relation_with_emergency_contact_person_two}}" name="relation_with_emergency_contact_person_two">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="home_phone_2" class="form-label">Home Phone</label>
                                    <input type="text" class="form-control" id="home_phone_2" value="{{$getReviewData->emergency_contact_person_two_home_phone}}" name="emergency_contact_person_two_home_phone">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="mobile_phone_2" class="form-label">Mobile Phone</label>
                                    <input type="text" class="form-control" id="mobile_phone_2" value="{{$getReviewData->emergency_contact_person_two_mobile_phone}}" name="emergency_contact_person_two_mobile_phone">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email_2" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email_2" value="{{$getReviewData->emergency_contact_person_two_email}}" name="emergency_contact_person_two_email" required>
                                </div>
                            </div>
                        </div>

                        <div class="section">
                            <h3>4. Position Desired</h3>
                       
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <label for="position">Position Desired:</label>
                                        <input type="text" name="desired_position" value="{{$getReviewData->desired_position}}" required class="form-control" id="position">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="salary">Salary Desired (USD):</label>
                                        <input type="text" name="desired_salary" value="{{$getReviewData->desired_salary}}" required class="form-control" id="salary">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Have you worked on cruise ships before?</label><br>
                                    <input type="radio" id="workedYes" name="worked_on_cruise_ship" {{$getReviewData->worked_on_cruise_ship == 'yes' ? 'checked':''}} value="yes"> Yes
                                    <input type="radio" id="workedNo" name="worked_on_cruise_ship" {{$getReviewData->worked_on_cruise_ship == 'no' ? 'checked':''}} value="no"> No
                                </div>

                                <div class="form-group" id="lastCompany" >
                                    <label for="company">If yes, list last company:</label>
                                    <input type="text" name="last_company" value="{{$getReviewData->last_company}}" class="form-control" id="company">
                                </div>

                                <h4>5. Documentation Information</h4>

                                <!-- Passport Information Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="4">Passport Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Passport Number:</td>
                                            <td><input type="text" class="form-control" value="{{$employeeDocumentInformation->paNumber}}" name="paNumber" required></td>
                                            <td>Passport Nationality:</td>
                                            <td><input type="text" class="form-control" value="{{$employeeDocumentInformation->paNationality}}" name="paNationality" required></td>
                                        </tr>
                                        <tr>
                                            <td>Date of Issue (mm/dd/yyyy):</td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeDocumentInformation->paIissueDate}}" required name="paIissueDate"></td>
                                            <td>Place of Issue:</td>
                                            <td><input type="text" class="form-control" required value="{{$employeeDocumentInformation->paIissuePlace}}" name="paIissuePlace"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Date of Expiration (mm/dd/yyyy):</td>
                                            <td colspan="2"><input type="text" class="form-control datepicker" value="{{$employeeDocumentInformation->paExpireDate}}" required name="paExpireDate"></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Crew Visas Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Yes/No</th>
                                            <th>Date of Expiration (mm/dd/yyyy)</th>
                                            <th>Visa No</th>
                                            <th>Visa Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>C1/D</td>
                                            <td><input type="radio" name="c1DStatus" {{$employeeDocumentInformation->c1DStatus == 'yes' ? 'checked':''}} value="yes" > Yes
                                                <input type="radio" name="c1DStatus" {{$employeeDocumentInformation->c1DStatus == 'no' ? 'checked':''}} value="no" > No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->c1DExpireDate}}" name="c1DExpireDate"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->c1DVisaNo}}" name="c1DVisaNo"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->c1DVisaType}}" name="c1DVisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>C1</td>
                                            <td><input type="radio"  name="c1Status" {{$employeeDocumentInformation->c1Status == 'yes' ? 'checked':''}} value="yes"> Yes
                                                <input type="radio"  name="c1Status" {{$employeeDocumentInformation->c1Status == 'no' ? 'checked':''}} value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->c1ExpireDate}}" name="c1ExpireDate"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->c1VisaNo}}" name="c1VisaNo"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->c1VisaType}}" name="c1VisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>D</td>
                                            <td><input type="radio"  name="dStatus" {{$employeeDocumentInformation->dStatus == 'yes' ? 'checked':''}} value="yes"> Yes
                                                <input type="radio"  name="dStatus" {{$employeeDocumentInformation->dStatus == 'no' ? 'checked':''}} value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->dExpireDate}}" name="dExpireDate"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->dVisaNo}}" name="dVisaNo"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->dVisaType}}" name="dVisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>Schengen</td>
                                            <td><input type="radio"  name="sStatus" {{$employeeDocumentInformation->sStatus == 'yes' ? 'checked':''}} value="yes"> Yes
                                                <input type="radio" name="sStatus" {{$employeeDocumentInformation->sStatus == 'no' ? 'checked':''}} value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->sVxpireDate}}" name="sVxpireDate"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->sVisaNo}}" name="sVisaNo"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->sVisaType}}" name="sVisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>Other 1</td>
                                            <td><input type="radio"   name="other1Status" {{$employeeDocumentInformation->other1Status == 'yes' ? 'checked':''}} value="yes"> Yes
                                                <input type="radio"  name="other1Status" {{$employeeDocumentInformation->other1Status == 'no' ? 'checked':''}} value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->other1ExpireDate}}" name="other1ExpireDate"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->other1VisaNo}}" name="other1VisaNo"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->other1VisaType}}" name="other1VisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>Other 2</td>
                                            <td><input type="radio"  name="other2Status" {{$employeeDocumentInformation->other2Status == 'yes' ? 'checked':''}} value="yes"> Yes
                                                <input type="radio"  name="other2Status" {{$employeeDocumentInformation->other2Status == 'no' ? 'checked':''}} value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->other2ExpireDate}}" name="other2ExpireDate"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->other2VisaNo}}" name="other2VisaNo"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->other2VisaType}}" name="other2VisaType"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- STCW Certification Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Yes/No</th>
                                            <th>Date of Expiration (mm/dd/yyyy)</th>
                                            <th>Certificate Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Elementary First Aid (BST)</td>
                                            <td><input type="checkbox" value="1" {{$employeeDocumentInformation->fiAidStatus == '1' ? 'checked':''}}  name="fiAidStatus"></td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->fiAidExpireDate}}" name="fiAidExpireDate"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->fiAidcertificateNo}}"
                                                    name="fiAidcertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Fire Prevention & Fire Fighting (BST)</td>
                                            <td><input type="checkbox" value="1" {{$employeeDocumentInformation->fPAndFStatus == '1' ? 'checked':''}}   name="fPAndFStatus"></td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->fPAndFExpire_date}}" name="fPAndFExpire_date">
                                            </td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->fPAndFCertificateNo}}"
                                                    name="fPAndFCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Personal Safety & Social Responsibility (BST)</td>
                                            <td><input type="checkbox" value="1"  name="pSSRStatus" {{$employeeDocumentInformation->pSSRStatus == '1' ? 'checked':''}}></td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->pSSRExpireDate}}" name="pSSRExpireDate">
                                            </td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->pSSRCertificateNo}}"
                                                    name="pSSRCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Personal Survival Techniques (BST)</td>
                                            <td><input type="checkbox" value="1"  name="pStStatus" {{$employeeDocumentInformation->pStStatus == '1' ? 'checked':''}}></td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->pStExpireDate}}" name="pStExpireDate">
                                            </td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->pStCertificateNo}}"
                                                    name="pStCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Crowd Management & Passenger Safety (BST)</td>
                                            <td><input type="checkbox" value="1"  name="cMPSStatus" {{$employeeDocumentInformation->cMPSStatus == '1' ? 'checked':''}}></td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->cMPSExpireDate}}" name="cMPSExpireDate">
                                            </td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->cMPSCertificateNo}}"
                                                    name="cMPSCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Crisis Management & Human Behavior (BST)</td>
                                            <td><input type="checkbox" value="1" name="crMHBStatus" {{$employeeDocumentInformation->crMHBStatus == '1' ? 'checked':''}}></td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentInformation->crMHBExpireDate}}" name="crMHBExpireDate">
                                            </td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentInformation->crMHBCertificateNo}}"
                                                    name="crMHBCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Security Awareness (BST)</td>
                                            <td><input type="checkbox" value="1" name="sAStatus" {{$employeeDocumentTwo->sAStatus == '1' ? 'checked':''}}></td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentTwo->sAExpireDate}}" name="sAExpireDate">
                                            </td>
                                            <td><input type="text" value="{{$employeeDocumentTwo->sACertificateNo}}"  class="form-control"
                                                    name="sACertificateNo"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Seaman's Books Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Yes/No</th>
                                            <th>Date of Expiration (mm/dd/yyyy)</th>
                                            <th>Number</th>
                                            <th>Nationality</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>National</td>
                                            <td><input type="radio"  name="nationalStatus" {{$employeeDocumentTwo->nationalStatus == 'yes' ? 'checked':''}} value="yes"> Yes
                                                <input type="radio"  name="nationalStatus" {{$employeeDocumentTwo->nationalStatus == 'no' ? 'checked':''}} value="no"> No
                                            </td>
                                            <td><input type="text" required  class="form-control datepicker" value="{{$employeeDocumentTwo->nationalExpireDate}}" name="nationalExpireDate"></td>
                                            <td><input type="text" required  class="form-control" value="{{$employeeDocumentTwo->nationalNumber}}" name="nationalNumber"></td>
                                            <td><input type="text" required  class="form-control" value="{{$employeeDocumentTwo->nationalNationality}}" name="nationalNationality">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flag State 1</td>
                                            <td><input type="radio"  name="flagStateOneStatus" {{$employeeDocumentTwo->flagStateOneStatus == 'yes' ? 'checked':''}} value="yes"> Yes
                                                <input type="radio"  name="flagStateOneStatus" {{$employeeDocumentTwo->flagStateOneStatus == 'no' ? 'checked':''}} value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentTwo->flagStateOneExpireDate}}"
                                                    name="flagStateOneExpireDate"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentTwo->flagStateOneNumber}}"
                                                    name="flagStateOneNumber"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentTwo->flagStateOneNationality}}"
                                                    name="flagStateOneNationality"></td>
                                        </tr>
                                        <tr>
                                            <td>Flag State 2</td>
                                            <td><input type="radio"  name="flagStateTwoStatus" {{$employeeDocumentTwo->flagStateTwoStatus == 'yes' ? 'checked':''}} value="yes"> Yes
                                                <input type="radio"  name="flagStateTwoStatus" {{$employeeDocumentTwo->flagStateTwoStatus == 'no' ? 'checked':''}} value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" value="{{$employeeDocumentTwo->flagStateTwoExpireDate}}"
                                                    name="flagStateTwoExpireDate"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentTwo->flagStateTwoNumber}}"
                                                    name="flagStateTwoNumber"></td>
                                            <td><input type="text"  class="form-control" value="{{$employeeDocumentTwo->flagStateTwoNationality}}"
                                                    name="flagStateTwoNationality"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Other Certificates Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Yes/No</th>
                                            <th>Date of Issue (mm/dd/yyyy)</th>
                                            <th>Date of Expiration (mm/dd/yyyy)</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ship's Cook</td>
                                            <td><input type="checkbox" {{$employeeDocumentTwo->shipCookStatus == '1' ? 'checked':''}} value="1" name="shipCookStatus"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeDocumentTwo->shipCookIssueDate}}" name="shipCookIssueDate"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeDocumentTwo->shipCookExpireDate}}" name="shipCookExpireDate"></td>
                                            <td><textarea class="form-control"  name="shipCookComment">{{$employeeDocumentTwo->shipCookComment}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <td>Other 1</td>
                                            <td><input type="checkbox" value="1" {{$employeeDocumentTwo->other1Status == '1' ? 'checked':''}} name="other1Status"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeDocumentTwo->other1IssueDate}}" name="other1IssueDate"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeDocumentTwo->other1ExpireDate}}" name="other1ExpireDate"></td>
                                            <td><textarea class="form-control" name="other1Comment">{{$employeeDocumentTwo->other1Comment}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <td>Other 2</td>
                                            <td><input type="checkbox" value="1" {{$employeeDocumentTwo->other2Status == '1' ? 'checked':''}} name="other2Status"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeDocumentTwo->other2IssueDate}}" name="other2IssueDate"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeDocumentTwo->other2ExpireDate}}" name="other2ExpireDate"></td>
                                            <td><textarea class="form-control"  name="other2Comment">{{$employeeDocumentTwo->other2Comment}}</textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                         
                        </div>

                        <div class="section mt-5">
                            <h3>6. Employment History</h3>
                           
                                <!-- Employment History -->
                                <div class="form-group">
                                    <label>List most recent employer first</label>
                                </div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="form-label">Employer/Company Name:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->employer_or_company_name_one}}"  name="employer_or_company_name_one">
                                            </td>
                                            <td>
                                                <label class="form-label">Company Phone No:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companyone_phone}}" name="companyone_phone">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Position Held:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companyone_position_in_company}}" name="companyone_position_in_company">
                                            </td>
                                            <td>
                                                <label class="form-label">Supervisor Name:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companyone_supervisor_name}}" name="companyone_supervisor_name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">From (mm/dd/yyyy):</label>
                                                <input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->companyone_work_start_date}}" name="companyone_work_start_date">
                                            </td>
                                            <td>
                                                <label class="form-label">To (mm/dd/yyyy):</label>
                                                <input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->companyone_work_end_date}}" name="companyone_work_end_date">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Starting Salary in USD:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companyone_start_salary_usd}}" name="companyone_start_salary_usd">
                                            </td>
                                            <td>
                                                <label class="form-label">Ending Salary in USD:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companyone_end_salary_usd}}" name="companyone_end_salary_usd">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label class="form-label">Reason for Leaving:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companyone_leave_reason}}" name="companyone_leave_reason">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Second Employer (Repeat the Same Table Structure) -->
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="form-label">Employer/Company Name:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->employer_or_company_name_two}}" name="employer_or_company_name_two">
                                            </td>
                                            <td>
                                                <label class="form-label">Company Phone No:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companytwo_phone}}" name="companytwo_phone">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Position Held:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companytwo_position_in_company}}" name="companytwo_position_in_company">
                                            </td>
                                            <td>
                                                <label class="form-label">Supervisor Name:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companytwo_supervisor_name}}" name="companytwo_supervisor_name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">From (mm/dd/yyyy):</label>
                                                <input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->companytwo_work_start_date}}" name="companytwo_work_start_date">
                                            </td>
                                            <td>
                                                <label class="form-label">To (mm/dd/yyyy):</label>
                                                <input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->companytwo_work_end_date}}" name="companytwo_work_end_date">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Starting Salary in USD:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companytwo_start_salary_usd}}" name="companytwo_start_salary_usd">
                                            </td>
                                            <td>
                                                <label class="form-label">Ending Salary in USD:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companytwo_end_salary_usd}}" name="companytwo_end_salary_usd">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label class="form-label">Reason for Leaving:</label>
                                                <input type="text" class="form-control" value="{{$employeeHistoryAndEducation->companytwo_leave_reason}}" name="companytwo_leave_reason">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Education Section -->
                                <h3>7. Education</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>School Name and City</th>
                                            <th>No. of Years</th>
                                            <th>From (mm/dd/yyyy)</th>
                                            <th>To (mm/dd/yyyy)</th>
                                            <th>Major/Diploma</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>High School: </td>
                                            <td><input type="text" required class="form-control" value="{{$employeeHistoryAndEducation->high_school_name}}" name="high_school_name"></td>
                                            <td><input type="text" required class="form-control" value="{{$employeeHistoryAndEducation->years_in_high_school}}" name="years_in_high_school"></td>
                                            <td><input type="text" required class="form-control datepicker" value="{{$employeeHistoryAndEducation->high_school_start_year}}" name="high_school_start_year"></td>
                                            <td><input type="text" required  class="form-control datepicker" value="{{$employeeHistoryAndEducation->high_school_end_year}}" name="high_school_end_year"></td>
                                            <td><input type="text" required class="form-control" value="{{$employeeHistoryAndEducation->high_school_major}}" name="high_school_major"></td>
                                        </tr>
                                        <tr>
                                            <td>College:</td>
                                            <td><input type="text" required class="form-control" value="{{$employeeHistoryAndEducation->college_name}}" name="college_name"></td>
                                            <td><input type="text" required class="form-control" value="{{$employeeHistoryAndEducation->years_in_college}}" name="years_in_college"></td>
                                            <td><input type="text" required class="form-control datepicker" value="{{$employeeHistoryAndEducation->college_start_year}}" name="college_start_year"></td>
                                            <td><input type="text" required class="form-control datepicker" value="{{$employeeHistoryAndEducation->college_end_year}}" name="college_end_year"></td>
                                            <td><input type="text"required class="form-control" value="{{$employeeHistoryAndEducation->college_major}}" name="college_major"></td>
                                        </tr>
                                        <tr>
                                            <td>University:</td>
                                            <td><input type="text" class="form-control" value="{{$employeeHistoryAndEducation->university_name}}" name="university_name"></td>
                                            <td><input type="text" class="form-control" value="{{$employeeHistoryAndEducation->years_in_university}}" name="years_in_university"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->university_start_year}}" name="university_start_year"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->university_end_year}}" name="university_end_year"></td>
                                            <td><input type="text" class="form-control" value="{{$employeeHistoryAndEducation->university_major}}" name="university_major"></td>
                                        </tr>
                                        <tr>
                                            <td>Apprenticeship:</td>
                                            <td><input type="text" class="form-control" value="{{$employeeHistoryAndEducation->apprenticeship_name}}" name="apprenticeship_name"></td>
                                            <td><input type="text" class="form-control" value="{{$employeeHistoryAndEducation->years_in_apprenticeship}}" name="years_in_apprenticeship"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->apprenticeship_start_year}}" name="apprenticeship_start_year"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->apprenticeship_end_year}}" name="apprenticeship_end_year"></td>
                                            <td><input type="text" class="form-control" value="{{$employeeHistoryAndEducation->apprenticeship_major}}" name="apprenticeship_major"></td>
                                        </tr>
                                        <tr>
                                            <td>Other:</td>
                                            <td><input type="text" class="form-control" value="{{$employeeHistoryAndEducation->other_name}}" name="other_name"></td>
                                            <td><input type="text" class="form-control" value="{{$employeeHistoryAndEducation->years_in_other}}" name="years_in_other"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->other_start_year}}" name="other_start_year"></td>
                                            <td><input type="text" class="form-control datepicker" value="{{$employeeHistoryAndEducation->other_end_year}}" name="other_end_year"></td>
                                            <td><input type="text" class="form-control" value="{{$employeeHistoryAndEducation->other_major}}" name="other_major"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Languages Section -->
                                <h3>8. Languages</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Language</th>
                                            <th>Proficiency Level Speak:</th>
                                            <th>Proficiency Level Write:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>English (mandatory)</td>
                                            <td><input type="radio" required name="english_speak_level" {{$employeeLanguage->english_speak_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" required name="english_speak_level" {{$employeeLanguage->english_speak_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" required name="english_speak_level" {{$employeeLanguage->english_speak_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" required name="english_writting_level" {{$employeeLanguage->english_writting_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" required name="english_writting_level" {{$employeeLanguage->english_writting_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" required name="english_writting_level" {{$employeeLanguage->english_writting_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Spanish</td>
                                            <td><input type="radio" name="spanish_speak_level" {{$employeeLanguage->spanish_speak_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="spanish_speak_level" {{$employeeLanguage->spanish_speak_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="spanish_speak_level" {{$employeeLanguage->spanish_speak_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="spanish_writting_level" {{$employeeLanguage->spanish_writting_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="spanish_writting_level" {{$employeeLanguage->spanish_writting_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="spanish_writting_level" {{$employeeLanguage->spanish_writting_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>French</td>
                                            <td><input type="radio" name="french_speak_level" {{$employeeLanguage->french_speak_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="french_speak_level" {{$employeeLanguage->french_speak_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="french_speak_level" {{$employeeLanguage->french_speak_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="french_writting_level" {{$employeeLanguage->french_writting_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="french_writting_level" {{$employeeLanguage->french_writting_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="french_writting_level" {{$employeeLanguage->french_writting_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>German</td>
                                            <td><input type="radio" name="german_speak_level" {{$employeeLanguage->german_speak_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="german_speak_level" {{$employeeLanguage->german_speak_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="german_speak_level" {{$employeeLanguage->german_speak_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="german_writting_level" {{$employeeLanguage->german_writting_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="german_writting_level" {{$employeeLanguage->german_writting_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="german_writting_level" {{$employeeLanguage->german_writting_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other 1</td>
                                            <td><input type="radio" name="other1_speak_level" {{$employeeLanguage->other1_speak_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="other1_speak_level" {{$employeeLanguage->other1_speak_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="other1_speak_level" {{$employeeLanguage->other1_speak_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="other1_writting_level" {{$employeeLanguage->other1_writting_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="other1_writting_level" {{$employeeLanguage->other1_writting_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="other1_writting_level" {{$employeeLanguage->other1_writting_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other 2</td>
                                            <td><input type="radio" name="other2_speak_level" {{$employeeLanguage->other2_speak_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="other2_speak_level" {{$employeeLanguage->other2_speak_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="other2_speak_level" {{$employeeLanguage->other2_speak_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="other2_writting_level" {{$employeeLanguage->other2_writting_level == 'Beginner' ? 'checked':''}} value="Beginner"> Beginner
                                                <input type="radio" name="other2_writting_level" {{$employeeLanguage->other2_writting_level == 'Intermediate' ? 'checked':''}} value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="other2_writting_level"{{$employeeLanguage->other2_writting_level == 'Fluent' ? 'checked':''}} value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Signature Section -->
                                <div class="signature-box">
                                    <p class="mt-4">Signature of Applicant<span style="color:red;padding-left:10px;font-weight:bold;">width-300px and height-80px</span> <input type="file" disabled accept="image/*" class="form-control" name="applicant_signature" /></p>
                                    @if(!empty($getReviewData->applicant_signature))
                                    <img src="{{$ins_front_url}}{{$getReviewData->applicant_signature}}" style="height: 60px;"/>
                                    @endif
                                    <p>Date (mm/dd/yyyy): <input type="text" class="form-control datepicker" value="{{$getReviewData->applicant_signature_date}}" name="applicant_signature_date" required/></p>
                                </div>

                                @if(!$recruitmentAgencyPart)
                                <div class="container border p-3">
                                    <h5 class="text-center fw-bold">Please do not write in the space below. This section
                                        is to be completed by the recruitment agency.</h5>

                           
                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr>
                                                    <td><label>Agency Name:</label></td>
                                                    <td><input type="text" required name="agencyName"  class="form-control" ></td>
                                                    <td><label>Location:</label></td>
                                                    <td><input type="text" required name="agencyLocation" class="form-control" ></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Prescreened:</label></td>
                                                    <td colspan="3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="prescreenedStatus" value="yes">
                                                            <label class="form-check-label">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="prescreenedStatus" value="no">
                                                            <label class="form-check-label">No</label>
                                                        </div>
                                                        &nbsp; Name of Prescreened: <input type="text"  name="prescreenedSate"
                                                            class="form-control d-inline w-25 ms-2">
                                                        &nbsp; Date of Prescreen: <input type="text" name="prescreenedDate"
                                                            class="form-control d-inline w-25 ms-2 datepicker">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label>References checked:</label></td>
                                                    <td>
                                                        <input type="radio" name="referencesStatus" value="yes" class="form-check-input"> Yes
                                                        <input type="radio" name="referencesStatus"value="no" class="form-check-input ms-2"> No
                                                    </td>
                                                    <td><label>References checked by:</label></td>
                                                    <td><input type="text" name="referencesBy" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Criminal Background Check:</label></td>
                                                    <td>
                                                        <input type="radio" name="criminalStatus" value="yes" class="form-check-input"> Yes
                                                        <input type="radio" name="criminalStatus" value="no"  class="form-check-input ms-2"> No
                                                    </td>
                                                    <td><label>Background checked by:</label></td>
                                                    <td><input type="text" name="criminalStatus_by" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Applicant has been provided with:</label></td>
                                                    <td colspan="3">
                                                        <input type="radio" name="applicantProvided" value="Job Description" class="form-check-input me-2"> Job
                                                        Description
                                                        <input type="radio" name="applicantProvided" value="General Crew Guide" class="form-check-input mx-2"> General
                                                        Crew Guide
                                                        <input type="radio" name="applicantProvided" value="Departmental Crew Guide" class="form-check-input mx-2">
                                                        Departmental Crew Guide
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <h5 class="fw-bold mt-4">Interview Results:</h5>

                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr>
                                                    <td><label>ISOL Interviewer:</label></td>
                                                    <td colspan="3"><input type="text" required name="interveiwer" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Comments / Observations:</label></td>
                                                    <td colspan="3"><textarea required class="form-control" name="interveiwerCommet" rows="4"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label>Date:</label></td>
                                                    <td><input type="text" name="interveiwD_date" class="form-control datepicker"></td>
                                                    <td><label>Approved Position:</label></td>
                                                    <td><input type="text" name="appovePosition" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Approved Salary:</label></td>
                                                    <td><input type="text" name="appoveSalary" class="form-control"></td>
                                                    <td><label>Overall Rating:</label></td>
                                                    <td>
                                                        <div class="form-check form-check-inline"><input type="radio" value="5"
                                                                name="overall" class="form-check-input"> 5</div>
                                                        <div class="form-check form-check-inline"><input type="radio" value="4"
                                                                name="overall" class="form-check-input"> 4</div>
                                                        <div class="form-check form-check-inline"><input type="radio" value="3"
                                                                name="overall" class="form-check-input"> 3</div>
                                                        <div class="form-check form-check-inline"><input type="radio" value="2"
                                                                name="overall" class="form-check-input"> 2</div>
                                                        <div class="form-check form-check-inline"><input type="radio" value="1"
                                                                name="overall" class="form-check-input"> 1</div>
                                                    </td>
                                                </tr>

                                                <!-- Rating Rows -->
                                                <tr>
                                                    <th>Criteria</th>
                                                    <th colspan="3">Rating (5 = High, 1 = Low)</th>
                                                </tr>
                                               
                                                    <tr>
                                                        <td>English</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Attitude</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Social Skill</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Org. Fit</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Tech. Prof.</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Grooming</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Energy</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Confidence</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                               
                                               
                                            </tbody>
                                        </table>
                                    
                                </div>

                                @else

                                <div class="container border p-3">
                                    <h5 class="text-center fw-bold">Please do not write in the space below. This section
                                        is to be completed by the recruitment agency.</h5>

                           <input type="hidden" name="reqId" value="{{$recruitmentAgencyPart->id}}"/>
                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr>
                                                    <td><label>Agency Name:</label></td>
                                                    <td><input type="text" required name="agencyName" value="{{$recruitmentAgencyPart->agencyName}}" class="form-control" ></td>
                                                    <td><label>Location:</label></td>
                                                    <td><input type="text" required name="agencyLocation" value="{{$recruitmentAgencyPart->agencyLocation}}" class="form-control" ></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Prescreened:</label></td>
                                                    <td colspan="3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="prescreenedStatus" value="yes" {{$recruitmentAgencyPart->prescreenedStatus == 'yes' ? 'checked':''}}>
                                                            <label class="form-check-label">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="prescreenedStatus" value="no" {{$recruitmentAgencyPart->prescreenedStatus == 'no' ? 'checked':''}}>
                                                            <label class="form-check-label">No</label>
                                                        </div>
                                                        &nbsp; Name of Prescreened: <input type="text"  name="prescreenedSate" value="{{$recruitmentAgencyPart->prescreenedSate}}"
                                                            class="form-control d-inline w-25 ms-2">
                                                        &nbsp; Date of Prescreen: <input type="text" name="prescreenedDate" value="{{$recruitmentAgencyPart->prescreenedDate}}"
                                                            class="form-control d-inline w-25 ms-2 datepicker">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label>References checked:</label></td>
                                                    <td>
                                                        <input type="radio" name="referencesStatus" {{$recruitmentAgencyPart->referencesStatus == 'yes' ? 'checked':''}} value="yes" class="form-check-input"> Yes
                                                        <input type="radio" name="referencesStatus" {{$recruitmentAgencyPart->referencesStatus == 'no' ? 'checked':''}} value="no" class="form-check-input ms-2"> No
                                                    </td>
                                                    <td><label>References checked by:</label></td>
                                                    <td><input type="text" name="referencesBy" value="{{$recruitmentAgencyPart->referencesBy}}" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Criminal Background Check:</label></td>
                                                    <td>
                                                        <input type="radio" name="criminalStatus" {{$recruitmentAgencyPart->criminalStatus == 'yes' ? 'checked':''}} value="yes" class="form-check-input"> Yes
                                                        <input type="radio" name="criminalStatus" {{$recruitmentAgencyPart->criminalStatus == 'no' ? 'checked':''}} value="no" class="form-check-input ms-2"> No
                                                    </td>
                                                    <td><label>Background checked by:</label></td>
                                                    <td><input type="text" name="criminalStatus_by" value="{{$recruitmentAgencyPart->criminalStatus_by}}" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Applicant has been provided with:</label></td>
                                                    <td colspan="3">
                                                        <input type="radio" name="applicantProvided" {{$recruitmentAgencyPart->applicantProvided == 'Job Description' ? 'checked':''}} value="Job Description" class="form-check-input me-2"> Job Description
                                                        <input type="radio" name="applicantProvided" {{$recruitmentAgencyPart->applicantProvided == 'General Crew Guide' ? 'checked':''}} value="General Crew Guide" class="form-check-input mx-2">General Crew Guide 
                                                        <input type="radio" name="applicantProvided" {{$recruitmentAgencyPart->applicantProvided == 'Departmental Crew Guide' ? 'checked':''}} value="Departmental Crew Guide" class="form-check-input mx-2">Departmental Crew Guide
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <h5 class="fw-bold mt-4">Interview Results:</h5>

                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr>
                                                    <td><label>ISOL Interviewer:</label></td>
                                                    <td colspan="3"><input type="text" required name="interveiwer" value="{{$recruitmentAgencyPart->interveiwer}}"  class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Comments / Observations:</label></td>
                                                    <td colspan="3"><textarea required class="form-control" name="interveiwerCommet" rows="4">{{$recruitmentAgencyPart->interveiwerCommet}}</textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label>Date:</label></td>
                                                    <td><input type="text" value="{{$recruitmentAgencyPart->interveiwD_date}}"  name="interveiwD_date" class="form-control datepicker"></td>
                                                    <td><label>Approved Position:</label></td>
                                                    <td><input type="text" value="{{$recruitmentAgencyPart->appovePosition}}"  name="appovePosition" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Approved Salary:</label></td>
                                                    <td><input type="text" value="{{$recruitmentAgencyPart->appoveSalary}}"  name="appoveSalary" class="form-control"></td>
                                                    <td><label>Over All Rating:</label></td>
                                                    <td>
                                                        <div class="form-check form-check-inline"><input type="radio" {{$recruitmentAgencyPart->overall == '5' ? 'checked':''}} value="5"
                                                                name="overall" class="form-check-input"> 5</div>
                                                        <div class="form-check form-check-inline"><input type="radio" {{$recruitmentAgencyPart->overall == '4' ? 'checked':''}} value="4"
                                                                name="overall" class="form-check-input"> 4</div>
                                                        <div class="form-check form-check-inline"><input type="radio" {{$recruitmentAgencyPart->overall == '3' ? 'checked':''}} value="3"
                                                                name="overall" class="form-check-input"> 3</div>
                                                        <div class="form-check form-check-inline"><input type="radio" {{$recruitmentAgencyPart->overall == '2' ? 'checked':''}} value="2"
                                                                name="overall" class="form-check-input"> 2</div>
                                                        <div class="form-check form-check-inline"><input type="radio" {{$recruitmentAgencyPart->overall == '1' ? 'checked':''}} value="1"
                                                                name="overall" class="form-check-input"> 1</div>
                                                    </td>
                                                </tr>

                                                <!-- Rating Rows -->
                                                <tr>
                                                    <th>Criteria</th>
                                                    <th colspan="3">Rating (5 = High, 1 = Low)</th>
                                                </tr>
                                               
                                                    <tr>
                                                        <td>English</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="5" {{$recruitmentAgencyPart->english == '5' ? 'checked':''}} class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="4" {{$recruitmentAgencyPart->english == '4' ? 'checked':''}} class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="3" {{$recruitmentAgencyPart->english == '3' ? 'checked':''}} class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="2" {{$recruitmentAgencyPart->english == '2' ? 'checked':''}} class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="1" {{$recruitmentAgencyPart->english == '1' ? 'checked':''}} class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Attitude</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="5" {{$recruitmentAgencyPart->attitude == '5' ? 'checked':''}} class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="4" {{$recruitmentAgencyPart->attitude == '4' ? 'checked':''}} class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="3" {{$recruitmentAgencyPart->attitude == '3' ? 'checked':''}} class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="2" {{$recruitmentAgencyPart->attitude == '2' ? 'checked':''}} class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="1" {{$recruitmentAgencyPart->attitude == '1' ? 'checked':''}} class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Social Skill</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="5" {{$recruitmentAgencyPart->socialSkill == '5' ? 'checked':''}} class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="4" {{$recruitmentAgencyPart->socialSkill == '4' ? 'checked':''}} class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="3" {{$recruitmentAgencyPart->socialSkill == '3' ? 'checked':''}} class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="2" {{$recruitmentAgencyPart->socialSkill == '2' ? 'checked':''}} class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="1" {{$recruitmentAgencyPart->socialSkill == '1' ? 'checked':''}} class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Org. Fit</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="5" {{$recruitmentAgencyPart->orgFit == '5' ? 'checked':''}} class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="4"{{$recruitmentAgencyPart->orgFit == '4' ? 'checked':''}} class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="3" {{$recruitmentAgencyPart->orgFit == '3' ? 'checked':''}} class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="2" {{$recruitmentAgencyPart->orgFit == '2' ? 'checked':''}} class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="1" {{$recruitmentAgencyPart->orgFit == '1' ? 'checked':''}} class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Tech. Prof.</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="5" {{$recruitmentAgencyPart->techProf == '5' ? 'checked':''}} class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="4" {{$recruitmentAgencyPart->techProf == '4' ? 'checked':''}} class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="3" {{$recruitmentAgencyPart->techProf == '3' ? 'checked':''}} class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="2" {{$recruitmentAgencyPart->techProf == '2' ? 'checked':''}} class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="1" {{$recruitmentAgencyPart->techProf == '1' ? 'checked':''}} class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Grooming</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="5" {{$recruitmentAgencyPart->grooming == '5' ? 'checked':''}} class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="4" {{$recruitmentAgencyPart->grooming == '4' ? 'checked':''}} class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="3" {{$recruitmentAgencyPart->grooming == '3' ? 'checked':''}} class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="2" {{$recruitmentAgencyPart->grooming == '2' ? 'checked':''}} class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="1" {{$recruitmentAgencyPart->grooming == '1' ? 'checked':''}} class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Energy</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="5" {{$recruitmentAgencyPart->energy == '5' ? 'checked':''}} class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="4" {{$recruitmentAgencyPart->energy == '4' ? 'checked':''}} class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="3" {{$recruitmentAgencyPart->energy == '3' ? 'checked':''}} class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="2" {{$recruitmentAgencyPart->energy == '2' ? 'checked':''}} class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="1" {{$recruitmentAgencyPart->energy == '1' ? 'checked':''}} class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Confidence</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="5" {{$recruitmentAgencyPart->confidence == '5' ? 'checked':''}} class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="4" {{$recruitmentAgencyPart->confidence == '4' ? 'checked':''}} class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="3" {{$recruitmentAgencyPart->confidence == '3' ? 'checked':''}} class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="2" {{$recruitmentAgencyPart->confidence == '2' ? 'checked':''}} class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="1" {{$recruitmentAgencyPart->confidence == '1' ? 'checked':''}} class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                               
                                               
                                            </tbody>
                                        </table>
                                    
                                </div>

                                @endif
                           
                        </div>

                        <!-- File Upload -->
                        <div class="file-upload mb-3">
                            <label for="file-upload" class="form-label">Attach Photo Here</label>
                            <input type="file" disabled accept="image/*" class="form-control" id="file-upload" name="applicant_photo" >
                            @if(!empty($getReviewData->applicant_photo))
                            <img src="{{$ins_front_url}}{{$getReviewData->applicant_photo}}" style="height: 60px;"/>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 btn-submit">Submit</button>
                    </form>
                </div>
           
    </div>
</div>
@endsection

@section('script')
@endsection