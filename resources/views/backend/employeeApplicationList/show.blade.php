<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Application for Employment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        .center {
            text-align: center;
        }
        
        td {
            border: 1px solid #000;
            padding: 6px;
            vertical-align: top;
        }
        
        th {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }
        
        .header,
        .subheader {
            text-align: center;
            font-weight: bold;
        }
        
        .subheader {
            font-size: 12px;
        }
        
        .section-title {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        
        .photo-box {
            text-align: center;
            vertical-align: middle;
            font-size: 12px;
        }
        
        .subsection-title {
            text-align: center;
            font-weight: bold;
            background-color: #e8e8e8;
        }
        
        .side-by-side {
            display: flex;
            gap: 20px;
        }
        
        .side-by-side table {
            width: 100%;
        }
        
        .checkbox-group {
            display: flex;
            gap: 10px;
            padding: 10px;
        }
        
        .checkbox {
            width: 10px;
            height: 10px;
            border: 2px solid #333;
            position: relative;
        }
        
        .checked::after {
            content: "✓";
            position: absolute;
            top: -15px;
            left: -3px;
            font-size: 25px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td colspan="4" class="center">
                <img src="{{ asset('/') }}public/front/assets/img/logo.png" alt="Logo" style="height: 60px;"> <br> APPLICATION FOR EMPLOYMENT
            </td>
            <td rowspan="2" class="photo-box">
               
                @if(empty($getReviewData->applicant_photo))
                ATTACH PHOTO HERE
                @else
                <img src="{{$ins_front_url}}{{$getReviewData->applicant_photo}}" style="height: 120px;"/>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="4" class="center">USING LEGIBLE PRINT, PLEASE COMPLETE THIS FORM IN ITS ENTIRETY</td>
        </tr>
    </table>

    <!-- Table 1: Personal Information -->
    <table>
        <tr>
            <td colspan="2" class="section-title">1. Personal Information</td>
        </tr>
        <tr>
            <td colspan="2">Last Name: {{$getReviewData->last_name}}</td>
        </tr>
        <tr>
            <td>First Name: {{$getReviewData->first_name}}</td>
            <td>Middle Name(s): {{$getReviewData->middle_name}}</td>
        </tr>
        <tr>

            <td>Date of Birth (mm/dd/yyyy): {{$getReviewData->dob}}</td>
            <td>Birth Place (city): {{$getReviewData->birth_place_city}}</td>
        </tr>
        <tr>

            <td>Country of Birth: {{$getReviewData->birth_place_country}}</td>
            <td>Nationality: {{$getReviewData->nationality}}</td>
        </tr>
        <tr>

            <td>Gender:
                @if($getReviewData->gender == 'male')
                <label> &#10004;Male</label>
                @else
                <label><input type="checkbox" value="male"> Male</label>
                @endif 

                @if($getReviewData->gender == 'female')
                <label> &#10004;Female</label>
                @else
                <label><input type="checkbox" value="female"> Female</label>
                @endif

                @if($getReviewData->gender == 'binary')
                <label> &#10004;Binary</label>
                @else
                <label><input type="checkbox"  value="binary"> Binary</label>
                @endif         
            </td>
            <td>Hair Color: {{$getReviewData->hair_color}}
                <span style="padding-left: 20%;">Eye Color:</span> {{$getReviewData->eye_color}} </td>
        </tr>
        <tr>
            <td>Weight: {{$getReviewData->weight}} {{$getReviewData->weight_unit}}</td>
            <td>Height: {{$getReviewData->height}} {{$getReviewData->height_unit}}</td>
        </tr>
        <tr>
            <td colspan="2 ">Do you have Tattoos? @if($getReviewData->tattoo == 'tatoo_yes')Yes @else No @endif </td>

        </tr>
        <tr>
            <td colspan="2 ">Are tattoos visible when wearing short-sleeved shirts, shorts, or skirts? @if($getReviewData->tattoo_visible == 'tatoo_visible_yes')Yes @else No @endif </td>
        </tr>
    </table>

    <!-- Table 2: Contact Information -->
    <table>
        <tr>
            <td colspan="2 " class="section-title ">2. Contact Information</td>
        </tr>
        <tr>
            <td>Street 1: {{$getReviewData->street_one}}</td>
            <td>Street 2: {{$getReviewData->street_two}}</td>
        </tr>
        <tr>
            <td>City: {{$getReviewData->city}}</td>
            <td>State/Province: {{$getReviewData->state}}</td>
        </tr>
        <tr>
            <td>Zip/Postal Code: {{$getReviewData->postal_code}}</td>
            <td>Country: {{$getReviewData->country}}</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">Phone Numbers (include country codes and area codes) </td>
        </tr>
        <tr>
            <td>Home Phone: {{$getReviewData->home_phone}}</td>
            <td>Mobile Phone: {{$getReviewData->mobile_phone}}</td>
        </tr>
        <tr>
            <td>E-mail Address: {{$getReviewData->email_address}}</td>
            <td>Home Airport: {{$getReviewData->home_airport}}</td>
        </tr>
    </table>

    <!-- Table 3: Dependent & Emergency Contact Info -->
    <table>
        <tr>
            <td colspan="2 " class="section-title ">3. Dependent Information</td>
        </tr>
        <tr>
            <td colspan="2">
                Marital Status:

                @if($getReviewData->matrial_status == 'single')
                <label> &#10004;Single</label>
                @else
                <label><input type="checkbox" value="single"> Single</label>
                @endif 

                @if($getReviewData->matrial_status == 'married')
                <label> &#10004;Married</label>
                @else
                <label><input type="checkbox" value="married"> Married</label>
                @endif

                @if($getReviewData->matrial_status == 'divorced')
                <label> &#10004;Divorced</label>
                @else
                <label><input type="checkbox"  value="divorced"> Divorced</label>
                @endif 

                @if($getReviewData->matrial_status == 'widowed')
                <label> &#10004;Widowed</label>
                @else
                <label><input type="checkbox"  value="widowed"> Widowed</label>
                @endif


                @if($getReviewData->matrial_status == 'other')
                <label> &#10004;Other</label>
                @else
                <label><input type="checkbox"  value="other"> Other</label>
                @endif

            </td>
        </tr>
        <tr>
            <td colspan="2">Number of children under 18 years of age? {{$getReviewData->children_under_18}}</td>
        </tr>
        <tr>
            <td colspan="2 " class="section-title ">Emergency Contact Information</td>
        </tr>
        <tr>
            <td colspan="2 ">In the event of an emergency, I would like the company to contact the following person or persons:</td>
        </tr>
        <tr>
            <td>Person 1</td>
            <td>Relationship: {{$getReviewData->relation_with_emergency_contact_person_one}}</td>
        </tr>
        <tr>
            <td colspan="2">Name: {{$getReviewData->emergency_contact_person_one}}</td>
        </tr>
        {{-- <tr>
            <td>First Name:</td>
            <td>Middle Name(s):</td>
        </tr> --}}
        <tr>
            <td>Home Phone: {{$getReviewData->emergency_contact_person_one_home_phone}}</td>
            <td>Mobile Phone: {{$getReviewData->emergency_contact_person_one_mobile_phone}}</td>
        </tr>
        <tr>
            <td colspan="2 ">E-mail Address: {{$getReviewData->emergency_contact_person_one_email}}</td>
        </tr>
        <tr>
            <td>Person 2</td>
            <td>Relationship: {{$getReviewData->relation_with_emergency_contact_person_two}}</td>
        </tr>
        <tr>
            <td colspan="2">Name: {{$getReviewData->emergency_contact_person_two}}</td>
        </tr>
        {{-- <tr>
            <td>First Name:</td>
            <td>Middle Name(s):</td>
        </tr> --}}
        <tr>
            <td>Home Phone: {{$getReviewData->emergency_contact_person_two_home_phone}}</td>
            <td>Mobile Phone: {{$getReviewData->emergency_contact_person_two_mobile_phone}}</td>
        </tr>
        <tr>
            <td colspan="2 ">E-mail Address: {{$getReviewData->emergency_contact_person_two_email}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <td colspan="2" class="section-title">4. Position Desired</td>
        </tr>
        <tr>
            <td>Position Desired: {{$getReviewData->desired_position}}</td>
            <td>Salary Desired (USD): {{$getReviewData->desired_salary}}</td>
        </tr>
        <tr>
            <td>
                Have you worked on cruise ships before:

                @if($getReviewData->worked_on_cruise_ship == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($getReviewData->worked_on_cruise_ship == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif

            </td>
            <td>
                If yes, list last company: {{$getReviewData->last_company}}
            </td>
        </tr>
    </table>

    <!-- Table 2: Documentation Information -->
    <table>
        <tr>
            <td colspan="5" class="section-title">5. Documentation Information</td>
        </tr>

        <!-- Passport Information (2 columns) -->
        <tr>
            <td colspan="5" class="subsection-title">Passport Information</td>
        </tr>
        <tr>
            <td colspan="2">Passport Number: {{$employeeDocumentInformation->paNumber}}</td>
            <td colspan="3">Passport Nationality: {{$employeeDocumentInformation->paNationality}}</td>
        </tr>
        <tr>
            <td colspan="2">Date of Issue (mm/dd/yyyy): {{$employeeDocumentInformation->paIissueDate}}</td>
            <td colspan="3">Place of Issue: {{$employeeDocumentInformation->paIissuePlace}}</td>
        </tr>
        <tr>
            <td colspan="5">Date of Expiration (mm/dd/yyyy): {{$employeeDocumentInformation->paExpireDate}} </td>
        </tr>

        <!-- Crew Visas (5 columns) -->
        <tr>
            <td colspan="5" class="subsection-title">Crew Visas</td>
        </tr>
        <tr>
            <td>Type:</td>
            <td>Yes/No</td>
            <td>Date of Expiration (mm/dd/yyyy):</td>
            <td>Visa No:</td>
            <td>Type:</td>
        </tr>
        <tr>
            <td>C1/D:</td>
            <td>
                @if($employeeDocumentInformation->c1DStatus == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($employeeDocumentInformation->c1DStatus == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->c1DExpireDate}}</td>
            <td>{{$employeeDocumentInformation->c1DVisaNo}}</td>
            <td>{{$employeeDocumentInformation->c1DVisaType}}</td>
        </tr>
        <tr>
            <td>C1:</td>
            <td>
                @if($employeeDocumentInformation->c1Status == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($employeeDocumentInformation->c1Status == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->c1ExpireDate}}</td>
            <td>{{$employeeDocumentInformation->c1VisaNo}}</td>
            <td>{{$employeeDocumentInformation->c1VisaType}}</td>
        </tr>
        <tr>
            <td>D:</td>
            <td>
                @if($employeeDocumentInformation->dStatus == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($employeeDocumentInformation->dStatus == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->dExpireDate}}</td>
            <td>{{$employeeDocumentInformation->dVisaNo}}</td>
            <td>{{$employeeDocumentInformation->dVisaType}}</td>
        </tr>
        <tr>
            <td>Schengen:</td>
            <td> @if($employeeDocumentInformation->sStatus == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($employeeDocumentInformation->sStatus == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif</td>
            <td>{{$employeeDocumentInformation->sVxpireDate}}</td>
            <td>{{$employeeDocumentInformation->sVisaNo}}</td>
            <td>{{$employeeDocumentInformation->sVisaType}}</td>
        </tr>
        <tr>
            <td>Other 1:</td>
            <td>
                @if($employeeDocumentInformation->other1Status == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($employeeDocumentInformation->other1Status == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->other1ExpireDate}}</td>
            <td>{{$employeeDocumentInformation->other1VisaNo}}</td>
            <td>{{$employeeDocumentInformation->other1VisaType}}</td>
        </tr>
        <tr>
            <td>Other 2:</td>
            <td>
                @if($employeeDocumentInformation->other2Status == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($employeeDocumentInformation->other2Status == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->other2ExpireDate}}</td>
            <td>{{$employeeDocumentInformation->other2VisaNo}}</td>
            <td>{{$employeeDocumentInformation->other2VisaType}}</td>
        </tr>

        <!-- STCW Certification (4 columns) -->
        <tr>
            <td colspan="5" class="subsection-title">STCW Certification</td>
        </tr>
        <tr>
            <td>Type:</td>
            <td>Yes/No</td>
            <td>Date of Expiration (mm/dd/yyyy):</td>
            <td colspan="2">Certificate Number:</td>
        </tr>
        <tr>
            <td>Elementary First Aid (BST)</td>
            <td>
                @if($employeeDocumentInformation->fiAidStatus == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentInformation->fiAidStatus))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif

               
            </td>
            <td>{{$employeeDocumentInformation->fiAidExpireDate}}</td>
            <td colspan="2">{{$employeeDocumentInformation->fiAidcertificateNo}}</td>
        </tr>
        <tr>
            <td>Fire Prevention & Fire Fighting (BST)</td>
            <td>
                @if($employeeDocumentInformation->fPAndFStatus == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentInformation->fPAndFStatus))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->fPAndFExpire_date}}</td>
            <td colspan="2">{{$employeeDocumentInformation->fPAndFCertificateNo}}</td>
        </tr>
        <tr>
            <td>Personal Safety & Social Responsibility (BST)</td>
            <td>
                @if($employeeDocumentInformation->pSSRStatus == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentInformation->pSSRStatus))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->pSSRExpireDate}}</td>
            <td colspan="2">{{$employeeDocumentInformation->pSSRCertificateNo}}</td>
        </tr>
        <tr>
            <td>Personal Survival Techniques (BST)</td>
            <td>
                @if($employeeDocumentInformation->pStStatus == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentInformation->pStStatus))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->pStExpireDate}}</td>
            <td colspan="2">{{$employeeDocumentInformation->pStCertificateNo}}</td>
        </tr>
        <tr>
            <td>Crowd Management & Passenger Safety</td>
            <td>
                @if($employeeDocumentInformation->cMPSStatus == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentInformation->cMPSStatus))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->cMPSExpireDate}}</td>
            <td colspan="2">{{$employeeDocumentInformation->cMPSCertificateNo}}</td>
        </tr>
        <tr>
            <td>Crisis Management & Human Behavior</td>
            <td>
                @if($employeeDocumentInformation->crMHBStatus == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentInformation->crMHBStatus))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentInformation->crMHBExpireDate}}</td>
            <td colspan="2">{{$employeeDocumentInformation->crMHBCertificateNo}}</td>
        </tr>
        <tr>
            <td>Security Awareness</td>
            <td>@if($employeeDocumentTwo->sAStatus == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentTwo->sAStatus))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif</td>
            <td>{{$employeeDocumentTwo->sAExpireDate}}</td>
            <td colspan="2">{{$employeeDocumentTwo->sACertificateNo}}</td>
        </tr>

        <!-- Seaman's Books (5 columns) -->
        <tr>
            <td colspan="5" class="subsection-title">Seaman’s Books</td>
        </tr>
        <tr>
            <td>Type:</td>
            <td>Yes/No</td>
            <td>Date of Expiration (mm/dd/yyyy):</td>
            <td>Number:</td>
            <td>Nationality:</td>
        </tr>
        <tr>
            <td>National:</td>
            <td>
                @if($employeeDocumentTwo->nationalStatus == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($employeeDocumentTwo->nationalStatus == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentTwo->nationalExpireDate}}</td>
            <td>{{$employeeDocumentTwo->nationalNumber}}</td>
            <td>{{$employeeDocumentTwo->nationalNationality}}</td>
        </tr>
        <tr>
            <td>Flag State 1:</td>
            <td>
                @if($employeeDocumentTwo->flagStateOneStatus == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($employeeDocumentTwo->flagStateOneStatus == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentTwo->flagStateOneExpireDate}}</td>
            <td>{{$employeeDocumentTwo->flagStateOneNumber}}</td>
            <td>{{$employeeDocumentTwo->flagStateOneNationality}}</td>
        </tr>
        <tr>
            <td>Flag State 2:</td>
            <td>
                @if($employeeDocumentTwo->flagStateTwoStatus == 'yes')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if($employeeDocumentTwo->flagStateTwoStatus == 'no')
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentTwo->flagStateTwoExpireDate}}</td>
            <td>{{$employeeDocumentTwo->flagStateTwoNumber}}</td>
            <td>{{$employeeDocumentTwo->flagStateTwoNationality}}</td>
        </tr>

        <!-- Other Certificates (5 columns) -->
        <tr>
            <td colspan="5" class="subsection-title">Other Certificates</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>Yes/No or N/A</td>
            <td>Date of Issue (mm/dd/yyyy):</td>
            <td>Date of Expiration (mm/dd/yyyy):</td>
            <td>Comments:</td>
        </tr>
        <tr>
            <td>Ship’s Cook</td>
            <td>
                @if($employeeDocumentTwo->shipCookStatus == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentTwo->shipCookStatus))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentTwo->shipCookIssueDate}}</td>
            <td>{{$employeeDocumentTwo->shipCookExpireDate}}</td>
            <td>{{$employeeDocumentTwo->shipCookComment}}</td>
        </tr>
        <tr>
            <td>Other 1:</td>
            <td>
                @if($employeeDocumentTwo->other1Status == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentTwo->other1Status))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentTwo->other1IssueDate}}</td>
            <td>{{$employeeDocumentTwo->other1ExpireDate}}</td>
            <td>{{$employeeDocumentTwo->other1Comment}}</td>
        </tr>
        <tr>
            <td>Other 2:</td>
            <td>
                @if($employeeDocumentTwo->other2Status == '1')
                <label> &#10004;Yes</label>
                @else
                <label><input type="checkbox" value="yes"> Yes</label>
                @endif 

                @if(empty($employeeDocumentTwo->other2Status))
                <label> &#10004;No</label>
                @else
                <label><input type="checkbox" value="no"> No</label>
                @endif
            </td>
            <td>{{$employeeDocumentTwo->other2IssueDate}}</td>
            <td>{{$employeeDocumentTwo->other2ExpireDate}}</td>
            <td>{{$employeeDocumentTwo->other2Comment}}</td>
        </tr>
    </table>

    <!-- Employment 1 -->
    <table>
        <tr>
            <td colspan="2" class="section-title">6. Employment History</td>
        </tr>
        <tr>
            <td colspan="2" class="subsection-title">List most recent employer first </td>
        </tr>
        <tr>
            <td>Employer/Company Name: {{$employeeHistoryAndEducation->employer_or_company_name_one}}</td>
            <td>Company Phone No: {{$employeeHistoryAndEducation->companyone_phone}}</td>
        </tr>
        <tr>
            <td>Position Held: {{$employeeHistoryAndEducation->companyone_position_in_company}}</td>
            <td>Supervisor Name: {{$employeeHistoryAndEducation->companyone_position_in_company}}</td>
        </tr>
        <tr>
            <td>From (mm/dd/yyyy): {{$employeeHistoryAndEducation->companyone_work_start_date}}</td>
            <td>To (mm/dd/yyyy): {{$employeeHistoryAndEducation->companyone_work_end_date}}</td>
        </tr>
        <tr>
            <td>Starting Salary in USD: {{$employeeHistoryAndEducation->companyone_start_salary_usd}}</td>
            <td>Ending Salary in USD: {{$employeeHistoryAndEducation->companyone_end_salary_usd}}</td>
        </tr>
        <tr>
            <td colspan="2">Reason for Leaving: {{$employeeHistoryAndEducation->companyone_leave_reason}}</td>
        </tr>
    </table>

    <!-- Employment 2 -->
    <table>
        <tr>
            <td>Employer/Company Name: {{$employeeHistoryAndEducation->employer_or_company_name_two}}</td>
            <td>Company Phone No: {{$employeeHistoryAndEducation->companytwo_phone}}</td>
        </tr>
        <tr>
            <td>Position Held: {{$employeeHistoryAndEducation->companytwo_position_in_company}}</td>
            <td>Supervisor Name: {{$employeeHistoryAndEducation->companytwo_supervisor_name}}</td>
        </tr>
        <tr>
            <td>From (mm/dd/yyyy): {{$employeeHistoryAndEducation->companytwo_work_start_date}}</td>
            <td>To (mm/dd/yyyy): {{$employeeHistoryAndEducation->companytwo_work_end_date}}</td>
        </tr>
        <tr>
            <td>Starting Salary in USD: {{$employeeHistoryAndEducation->companytwo_start_salary_usd}}</td>
            <td>Ending Salary in USD: {{$employeeHistoryAndEducation->companytwo_end_salary_usd}}</td>
        </tr>
        <tr>
            <td colspan="2">Reason for Leaving: {{$employeeHistoryAndEducation->companytwo_leave_reason}}</td>
        </tr>
    </table>

    <!-- Employment 3 -->
    {{-- <table>
        <tr>
            <td>Employer/Company Name:</td>
            <td>Company Phone No:</td>
        </tr>
        <tr>
            <td>Position Held:</td>
            <td>Supervisor Name:</td>
        </tr>
        <tr>
            <td>From (mm/dd/yyyy):</td>
            <td>To (mm/dd/yyyy):</td>
        </tr>
        <tr>
            <td>Starting Salary in USD:</td>
            <td>Ending Salary in USD:</td>
        </tr>
        <tr>
            <td colspan="2">Reason for Leaving:</td>
        </tr>
    </table> --}}

    <!-- Section Title: Education -->
    <table>
        <tr>
            <td colspan="6" class="section-title">7. Education</td>
        </tr>
        <tr>
            <th>School Name and City</th>
            <th>No. of Years</th>
            <th>From (mm/dd/yyyy)</th>
            <th>To (mm/dd/yyyy)</th>
            <th>Major/Diploma</th>
        </tr>
        <tr>
            <td>High School: {{$employeeHistoryAndEducation->high_school_name}}</td>
            <td>{{$employeeHistoryAndEducation->years_in_high_school}}</td>
            <td>{{$employeeHistoryAndEducation->high_school_start_year}}</td>
            <td>{{$employeeHistoryAndEducation->high_school_end_year}}</td>
            <td>{{$employeeHistoryAndEducation->high_school_major}}</td>
        </tr>
        <tr>
            <td>College: {{$employeeHistoryAndEducation->college_name}}</td>
            <td>{{$employeeHistoryAndEducation->years_in_college}}</td>
            <td>{{$employeeHistoryAndEducation->college_start_year}}</td>
            <td>{{$employeeHistoryAndEducation->college_end_year}}</td>
            <td>{{$employeeHistoryAndEducation->college_major}}</td>
        </tr>
        <tr>
            <td>University: {{$employeeHistoryAndEducation->university_name}}</td>
            <td>{{$employeeHistoryAndEducation->years_in_university}}</td>
            <td>{{$employeeHistoryAndEducation->university_start_year}}</td>
            <td>{{$employeeHistoryAndEducation->university_end_year}}</td>
            <td>{{$employeeHistoryAndEducation->university_major}}</td>
        </tr>
        <tr>
            <td>Apprenticeship: {{$employeeHistoryAndEducation->apprenticeship_name}}</td>
            <td>{{$employeeHistoryAndEducation->years_in_apprenticeship}}</td>
            <td>{{$employeeHistoryAndEducation->apprenticeship_start_year}}</td>
            <td>{{$employeeHistoryAndEducation->apprenticeship_end_year}}</td>
            <td>{{$employeeHistoryAndEducation->apprenticeship_major}}</td>
        </tr>
        <tr>
            <td>Other: {{$employeeHistoryAndEducation->other_name}}</td>
            <td>{{$employeeHistoryAndEducation->years_in_other}}</td>
            <td>{{$employeeHistoryAndEducation->other_start_year}}</td>
            <td>{{$employeeHistoryAndEducation->other_end_year}}</td>
            <td>{{$employeeHistoryAndEducation->other_major}}</td>
        </tr>
    </table>

    <!-- Section Title: Languages -->
    <table>
        <tr>
            <td colspan="3" class="section-title">8. Languages</td>
        </tr>
        <tr>
            <th>Language</th>
            <th>Proficiency Level Speak</th>
            <th>Proficiency Level Write</th>
        </tr>
        <tr>
            <td>English (mandatory):</td>
            <td>

                @if($employeeLanguage->english_speak_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->english_speak_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->english_speak_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
                
                
               
            
            </td>
            <td>
                @if($employeeLanguage->english_writting_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->english_writting_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->english_writting_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
        </tr>
        <tr>
            <td>Spanish:</td>
            <td>
                @if($employeeLanguage->spanish_speak_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->spanish_speak_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->spanish_speak_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
            <td>
                @if($employeeLanguage->spanish_writting_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->spanish_writting_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->spanish_writting_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
        </tr>
        <tr>
            <td>French:</td>
            <td>
                @if($employeeLanguage->french_speak_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->french_speak_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->french_speak_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
            <td>
                @if($employeeLanguage->french_writting_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->french_writting_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->french_writting_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
        </tr>
        <tr>
            <td>German:</td>
            <td>
                @if($employeeLanguage->german_speak_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->german_speak_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->german_speak_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
            <td>
                @if($employeeLanguage->german_writting_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->german_writting_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->german_writting_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
        </tr>
        <tr>
            <td>Other 1:</td>
            <td>
                @if($employeeLanguage->other1_speak_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->other1_speak_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->other1_speak_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
            <td>
                @if($employeeLanguage->other1_writting_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->other1_writting_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->other1_writting_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
        </tr>
        <tr>
            <td>Other 2:</td>
            <td>
                @if($employeeLanguage->other2_speak_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->other2_speak_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->other2_speak_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
            <td>
                @if($employeeLanguage->other2_writting_level == 'Beginner')
                <label> &#10004;Beginner</label>
                @else
                <label><input type="checkbox" value="Beginner"> Beginner</label>
                @endif 

                @if($employeeLanguage->other2_writting_level == 'Intermediate')
                <label> &#10004;Intermediate</label>
                @else
                <label><input type="checkbox" value="Intermediate"> Intermediate</label>
                @endif

                @if($employeeLanguage->other2_writting_level == 'Fluent')
                <label> &#10004;Fluent</label>
                @else
                <label><input type="checkbox" value="Fluent"> Fluent</label>
                @endif
            </td>
        </tr>
    </table>

    <!-- Disclaimer Text -->
    <table>
        <tr>
            <td>
                I hereby certify that all the information provided in this application form is accurate and genuine. I understand that any intentional misrepresentation or omissions can lead to denial of employment or termination. If you do not receive a response from
                us, it implies that your application was not approved at this time. To ensure a successful application, kindly review your responses and ensure all questions are answered thoroughly and correctly. Please be informed that the submission
                of this application form does not guarantee employment. Furthermore, it is essential to acknowledge that applicants are responsible for expenses such as medical examinations, mandatory STCW training, Visa fees and flights. We would like
                to emphasize that our organization does not require any upfront fees from candidates for our services.
            </td>
        </tr>
    </table>

    <!-- Signature Section -->
    <table>
        <tr>
            <td>

                @if(empty($getReviewData->applicant_signature))
                Signature of Applicant
                @else
                Signature of Applicant: <img src="{{$ins_front_url}}{{$getReviewData->applicant_signature}}" style="height: 80px;"/>
                @endif

                
            
            </td>
            <td>{{$getReviewData->applicant_signature_date}}</td>
        </tr>
    </table>
    @if(!$recruitmentAgencyPart)
    <p style="font-weight:bold; text-align:center;">
        Please do not write in the space below. This section is to be completed by the recruitment agency.
    </p>

    <!-- First Table -->
    <table>
        <tr>
            <td colspan="2">Agency Name:</td>
            <td>Location:</td>
        </tr>
        <tr>
            <td colspan="2">
                Prescreened: Yes No<br> Name of Prescreened:
            </td>
            <td>Date of Prescreen:</td>
        </tr>
        <tr>
            <td colspan="2">
                References checked: Yes No
            </td>
            <td>
                References checked by:
            </td>
        </tr>
        <tr>
            <td>
                Criminal Background Check: Yes No
            </td>
            <td colspan="2">
                Background checked by:
            </td>
        </tr>
        <tr>
            <td colspan="3">
                Applicant has been provided with: ☐ Job Description ☐ General Crew Guide ☐ Departmental Crew Guide
            </td>
        </tr>
    </table>

    <div class="side-by-side">

        <!-- Second Table -->
        <table>
            <tr>
                <td class="section-title">Interview Results:</td>
            </tr>
            <tr>
                <td>ISOL Interviewer:</td>
            </tr>
            <tr>
                <td>Comments / Observations:</td>
            </tr>
            <tr>
                <td style="height: 50px;"></td>
            </tr>
            <tr>
                <td style="height: 50px;"></td>
            </tr>
            <tr>
                <td style="height: 50px;"></td>
            </tr>
            <tr>
                <td style="height: 50px;"></td>
            </tr>
        </table>

        <!-- Third Table -->
        <table>
            <tr>
                <td>Date (mm/dd/yyyy):</td>
                <td></td>
            </tr>
            <tr>
                <td>Approved Position:</td>
                <td></td>
            </tr>
            <tr>
                <td>Approved Salary:</td>
                <td>Overall Rating
                    <label><input type="checkbox"> 5</label>
                    <label><input type="checkbox"> 4</label>
                    <label><input type="checkbox"> 3</label>
                    <label><input type="checkbox"> 2</label>
                    <label><input type="checkbox"> 1</label>
                </td>
            </tr>
            <tr class="rating">
                <td>English
                    <label><input type="checkbox"> 5</label>
                    <label><input type="checkbox"> 4</label>
                    <label><input type="checkbox"> 3</label>
                    <label><input type="checkbox"> 2</label>
                    <label><input type="checkbox"> 1</label>
                </td>
                <td>Tech. Prof.
                    <label><input type="checkbox"> 5</label>
                    <label><input type="checkbox"> 4</label>
                    <label><input type="checkbox"> 3</label>
                    <label><input type="checkbox"> 2</label>
                    <label><input type="checkbox"> 1</label>
                </td>
            </tr>
            <tr class="rating">
                <td>Attitude
                    <label><input type="checkbox"> 5</label>
                    <label><input type="checkbox"> 4</label>
                    <label><input type="checkbox"> 3</label>
                    <label><input type="checkbox"> 2</label>
                    <label><input type="checkbox"> 1</label>
                </td>
                <td>Grooming
                    <label><input type="checkbox"> 5</label>
                    <label><input type="checkbox"> 4</label>
                    <label><input type="checkbox"> 3</label>
                    <label><input type="checkbox"> 2</label>
                    <label><input type="checkbox"> 1</label>
                </td>
            </tr>
            <tr class="rating">
                <td>Social Skill
                    <label><input type="checkbox"> 5</label>
                    <label><input type="checkbox"> 4</label>
                    <label><input type="checkbox"> 3</label>
                    <label><input type="checkbox"> 2</label>
                    <label><input type="checkbox"> 1</label>
                </td>
                <td>Energy
                    <label><input type="checkbox"> 5</label>
                    <label><input type="checkbox"> 4</label>
                    <label><input type="checkbox"> 3</label>
                    <label><input type="checkbox"> 2</label>
                    <label><input type="checkbox"> 1</label>
                </td>
            </tr>
            <tr class="rating">
                <td>Confidence
                    <label><input type="checkbox"> 5</label>
                    <label><input type="checkbox"> 4</label>
                    <label><input type="checkbox"> 3</label>
                    <label><input type="checkbox"> 2</label>
                    <label><input type="checkbox"> 1</label>
                </td>
                <td>
                    Org. Fit
                    <label><input type="checkbox"> 5</label>
                    <label><input type="checkbox"> 4</label>
                    <label><input type="checkbox"> 3</label>
                    <label><input type="checkbox"> 2</label>
                    <label><input type="checkbox"> 1</label>
                </td>
            </tr>
        </table>

    </div>
    @else
    <p style="font-weight:bold; text-align:center;">
        Please do not write in the space below. This section is to be completed by the recruitment agency.
    </p>

    <!-- First Table -->
    <table>
        <tr>
            <td colspan="2">Agency Name: {{$recruitmentAgencyPart->agencyName}}</td>
            <td>Location: {{$recruitmentAgencyPart->agencyLocation}}</td>
        </tr>
        <tr>
            <td colspan="2">
                Prescreened: {{$recruitmentAgencyPart->prescreenedStatus}}<br> Name of Prescreened: {{$recruitmentAgencyPart->prescreenedSate}}
            </td>
            <td>Date of Prescreen: {{$recruitmentAgencyPart->prescreenedDate}}</td>
        </tr>
        <tr>
            <td colspan="2">
                References checked: {{$recruitmentAgencyPart->referencesStatus}}
            </td>
            <td>
                References checked by: {{$recruitmentAgencyPart->referencesBy}}
            </td>
        </tr>
        <tr>
            <td>
                Criminal Background Check: {{$recruitmentAgencyPart->criminalStatus}}
            </td>
            <td colspan="2">
                Criminal Background checked by: {{$recruitmentAgencyPart->criminalStatus_by}}
            </td>
        </tr>
        <tr>
            <td colspan="3">
                Applicant has been provided with:


                @if($recruitmentAgencyPart->applicantProvided == 'Job Description')
                <label> &#10004;Job Description</label>
                @else
                <label><input type="checkbox" value="yes"> Job Description</label>
                @endif 

                @if($recruitmentAgencyPart->applicantProvided == 'General Crew Guide')
                <label> &#10004;General Crew Guide</label>
                @else
                <label><input type="checkbox" value="no"> General Crew Guide</label>
                @endif

                @if($recruitmentAgencyPart->applicantProvided == 'Departmental Crew Guide')
                <label> &#10004;Departmental Crew Guide</label>
                @else
                <label><input type="checkbox" value="no"> Departmental Crew Guide</label>
                @endif
                
                
            </td>
        </tr>
    </table>

    <div class="side-by-side">

        <!-- Second Table -->
        <table>
            <tr>
                <td class="section-title">Interview Results: </td>
            </tr>
            <tr>
                <td>ISOL Interviewer: {{$recruitmentAgencyPart->interveiwer}}</td>
            </tr>
            <tr>
                <td>Comments / Observations:</td>
            </tr>
            <tr>
                <td>{{$recruitmentAgencyPart->interveiwerCommet}}</td>
            </tr>
            
        </table>

        <!-- Third Table -->
        <table>
            <tr>
                <td>Date (mm/dd/yyyy):</td>
                <td>{{$recruitmentAgencyPart->interveiwD_date}}</td>
            </tr>
            <tr>
                <td>Approved Position:</td>
                <td> {{$recruitmentAgencyPart->appovePosition}}</td>
            </tr>
            <tr>
                <td>Approved Salary: {{$recruitmentAgencyPart->appoveSalary}}</td>
                <td>Overall Rating

                    @if($recruitmentAgencyPart->overall == '5')
                    <label> &#10004;5</label>
                    @else
                    <label><input type="checkbox" value="5">5</label>
                    @endif 
    
                    @if($recruitmentAgencyPart->overall == '4')
                    <label> &#10004;4</label>
                    @else
                    <label><input type="checkbox" value="4"> 4</label>
                    @endif
    
                    @if($recruitmentAgencyPart->overall == '3')
                    <label> &#10004;3</label>
                    @else
                    <label><input type="checkbox" value="3">3</label>
                    @endif

                    @if($recruitmentAgencyPart->overall == '2')
                    <label> &#10004;2</label>
                    @else
                    <label><input type="checkbox" value="2">2</label>
                    @endif

                    @if($recruitmentAgencyPart->overall == '1')
                    <label> &#10004;1</label>
                    @else
                    <label><input type="checkbox" value="1">1</label>
                    @endif


                  
                </td>
            </tr>
            <tr class="rating">
                <td>English
                    @if($recruitmentAgencyPart->english == '5')
                    <label> &#10004;5</label>
                    @else
                    <label><input type="checkbox" value="5">5</label>
                    @endif 
    
                    @if($recruitmentAgencyPart->english == '4')
                    <label> &#10004;4</label>
                    @else
                    <label><input type="checkbox" value="4"> 4</label>
                    @endif
    
                    @if($recruitmentAgencyPart->english == '3')
                    <label> &#10004;3</label>
                    @else
                    <label><input type="checkbox" value="3">3</label>
                    @endif

                    @if($recruitmentAgencyPart->english == '2')
                    <label> &#10004;2</label>
                    @else
                    <label><input type="checkbox" value="2">2</label>
                    @endif

                    @if($recruitmentAgencyPart->english == '1')
                    <label> &#10004;1</label>
                    @else
                    <label><input type="checkbox" value="1">1</label>
                    @endif
                </td>
                <td>Tech. Prof.
                    @if($recruitmentAgencyPart->techProf == '5')
                    <label> &#10004;5</label>
                    @else
                    <label><input type="checkbox" value="5">5</label>
                    @endif 
    
                    @if($recruitmentAgencyPart->techProf == '4')
                    <label> &#10004;4</label>
                    @else
                    <label><input type="checkbox" value="4"> 4</label>
                    @endif
    
                    @if($recruitmentAgencyPart->techProf == '3')
                    <label> &#10004;3</label>
                    @else
                    <label><input type="checkbox" value="3">3</label>
                    @endif

                    @if($recruitmentAgencyPart->techProf == '2')
                    <label> &#10004;2</label>
                    @else
                    <label><input type="checkbox" value="2">2</label>
                    @endif

                    @if($recruitmentAgencyPart->techProf == '1')
                    <label> &#10004;1</label>
                    @else
                    <label><input type="checkbox" value="1">1</label>
                    @endif
                </td>
            </tr>
            <tr class="rating">
                <td>Attitude
                    @if($recruitmentAgencyPart->attitude == '5')
                    <label> &#10004;5</label>
                    @else
                    <label><input type="checkbox" value="5">5</label>
                    @endif 
    
                    @if($recruitmentAgencyPart->attitude == '4')
                    <label> &#10004;4</label>
                    @else
                    <label><input type="checkbox" value="4"> 4</label>
                    @endif
    
                    @if($recruitmentAgencyPart->attitude == '3')
                    <label> &#10004;3</label>
                    @else
                    <label><input type="checkbox" value="3">3</label>
                    @endif

                    @if($recruitmentAgencyPart->attitude == '2')
                    <label> &#10004;2</label>
                    @else
                    <label><input type="checkbox" value="2">2</label>
                    @endif

                    @if($recruitmentAgencyPart->attitude == '1')
                    <label> &#10004;1</label>
                    @else
                    <label><input type="checkbox" value="1">1</label>
                    @endif
                </td>
                <td>Grooming
                    @if($recruitmentAgencyPart->grooming == '5')
                    <label> &#10004;5</label>
                    @else
                    <label><input type="checkbox" value="5">5</label>
                    @endif 
    
                    @if($recruitmentAgencyPart->grooming == '4')
                    <label> &#10004;4</label>
                    @else
                    <label><input type="checkbox" value="4"> 4</label>
                    @endif
    
                    @if($recruitmentAgencyPart->grooming == '3')
                    <label> &#10004;3</label>
                    @else
                    <label><input type="checkbox" value="3">3</label>
                    @endif

                    @if($recruitmentAgencyPart->grooming == '2')
                    <label> &#10004;2</label>
                    @else
                    <label><input type="checkbox" value="2">2</label>
                    @endif

                    @if($recruitmentAgencyPart->grooming == '1')
                    <label> &#10004;1</label>
                    @else
                    <label><input type="checkbox" value="1">1</label>
                    @endif
                </td>
            </tr>
            <tr class="rating">
                <td>Social Skill
                    @if($recruitmentAgencyPart->socialSkill == '5')
                    <label> &#10004;5</label>
                    @else
                    <label><input type="checkbox" value="5">5</label>
                    @endif 
    
                    @if($recruitmentAgencyPart->socialSkill == '4')
                    <label> &#10004;4</label>
                    @else
                    <label><input type="checkbox" value="4"> 4</label>
                    @endif
    
                    @if($recruitmentAgencyPart->socialSkill == '3')
                    <label> &#10004;3</label>
                    @else
                    <label><input type="checkbox" value="3">3</label>
                    @endif

                    @if($recruitmentAgencyPart->socialSkill == '2')
                    <label> &#10004;2</label>
                    @else
                    <label><input type="checkbox" value="2">2</label>
                    @endif

                    @if($recruitmentAgencyPart->socialSkill == '1')
                    <label> &#10004;1</label>
                    @else
                    <label><input type="checkbox" value="1">1</label>
                    @endif
                </td>
                <td>Energy
                    @if($recruitmentAgencyPart->energy == '5')
                    <label> &#10004;5</label>
                    @else
                    <label><input type="checkbox" value="5">5</label>
                    @endif 
    
                    @if($recruitmentAgencyPart->energy == '4')
                    <label> &#10004;4</label>
                    @else
                    <label><input type="checkbox" value="4"> 4</label>
                    @endif
    
                    @if($recruitmentAgencyPart->energy == '3')
                    <label> &#10004;3</label>
                    @else
                    <label><input type="checkbox" value="3">3</label>
                    @endif

                    @if($recruitmentAgencyPart->energy == '2')
                    <label> &#10004;2</label>
                    @else
                    <label><input type="checkbox" value="2">2</label>
                    @endif

                    @if($recruitmentAgencyPart->energy == '1')
                    <label> &#10004;1</label>
                    @else
                    <label><input type="checkbox" value="1">1</label>
                    @endif
                </td>
            </tr>
            <tr class="rating">
                <td>Confidence
                    @if($recruitmentAgencyPart->confidence == '5')
                    <label> &#10004;5</label>
                    @else
                    <label><input type="checkbox" value="5">5</label>
                    @endif 
    
                    @if($recruitmentAgencyPart->confidence == '4')
                    <label> &#10004;4</label>
                    @else
                    <label><input type="checkbox" value="4"> 4</label>
                    @endif
    
                    @if($recruitmentAgencyPart->confidence == '3')
                    <label> &#10004;3</label>
                    @else
                    <label><input type="checkbox" value="3">3</label>
                    @endif

                    @if($recruitmentAgencyPart->confidence == '2')
                    <label> &#10004;2</label>
                    @else
                    <label><input type="checkbox" value="2">2</label>
                    @endif

                    @if($recruitmentAgencyPart->confidence == '1')
                    <label> &#10004;1</label>
                    @else
                    <label><input type="checkbox" value="1">1</label>
                    @endif
                </td>
                <td>
                    Org. Fit
                    @if($recruitmentAgencyPart->orgFit == '5')
                    <label> &#10004;5</label>
                    @else
                    <label><input type="checkbox" value="5">5</label>
                    @endif 
    
                    @if($recruitmentAgencyPart->orgFit == '4')
                    <label> &#10004;4</label>
                    @else
                    <label><input type="checkbox" value="4"> 4</label>
                    @endif
    
                    @if($recruitmentAgencyPart->orgFit == '3')
                    <label> &#10004;3</label>
                    @else
                    <label><input type="checkbox" value="3">3</label>
                    @endif

                    @if($recruitmentAgencyPart->orgFit == '2')
                    <label> &#10004;2</label>
                    @else
                    <label><input type="checkbox" value="2">2</label>
                    @endif

                    @if($recruitmentAgencyPart->orgFit == '1')
                    <label> &#10004;1</label>
                    @else
                    <label><input type="checkbox" value="1">1</label>
                    @endif
                </td>
            </tr>
        </table>

    </div>
    @endif

</body>

</html>