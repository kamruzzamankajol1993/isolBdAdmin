@extends('backend.master.master')

@section('title')
{{$partnerWithUs->first_name .' '.$partnerWithUs->last_name }} | {{ $ins_name }}
@endsection


@section('css')
<style>
    .card-header{
        background-color: rgb(30, 206, 197);
        color:azure;
    }
</style>
@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Partner With US</h4>

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
                        {{-- <div class="col-sm-6">
                            <div class="float-right d-md-block">
                                <div class="dropdown">

                                </div>
                            </div>
                        </div> --}}

                        <div class="col-sm-6">
                            <div class="float-right d-md-block">
                                <div class="dropdown">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row mt-2">
                        @include('flash_message')
                        <div class="col-10">
<h1>All Details</h1>


<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Tell us a little more about yourself.
            </div>
            <div class="card-body">
                {{$partnerWithUs->your_self }}
            </div>
        </div>
    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you have any Seaman Book or Bangladesh CDC?
            </div>
            <div class="card-body">
                {{$partnerWithUs->seaman_book_or_bd_cdc }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Describe Details
            </div>
            <div class="card-body">
                {{$partnerWithUs->seaman_book_or_bd_cdc_detail }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you currently hold a passport that is valid for at least one year from the date of application?
            </div>
            <div class="card-body">
                {{$partnerWithUs->password_valid_till_one_year }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Are you currently fully vaccinated for COVID? (Full vaccination is typically a series of two shots plus a booster, depending on brand.)
            </div>
            <div class="card-body">
                {{$partnerWithUs->full_vaccinated_for_covid }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                When would you be interested in having your application for placement onboard considered?
            </div>
            <div class="card-body">
                {{$partnerWithUs->placement_onboard_considered }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you have IELTS score certificate?
            </div>
            <div class="card-body">
                {{$partnerWithUs->ielts_score }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Describe Details
            </div>
            <div class="card-body">
                {{$partnerWithUs->ielts_score_des }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you have at least two years of prior work experience that is relevant to the position for which you are applying?
            </div>
            <div class="card-body">
                {{$partnerWithUs->work_experience }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Describe Details
            </div>
            <div class="card-body">
                {{$partnerWithUs->work_experience_des }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Which country you dreamed to be settled in near future?
            </div>
            <div class="card-body">
                {{$partnerWithUs->settled_country }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Why are you interested to work on ship?
            </div>
            <div class="card-body">
                {{$partnerWithUs->interested_to_work_on_ship }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you have any relative who is working in ship
            </div>
            <div class="card-body">
                {{$partnerWithUs->relative_work_on_ship }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Describe Details
            </div>
            <div class="card-body">
                {{$partnerWithUs->relative_work_on_ship_des }}
            </div>
        </div>


    </div>
    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Did you pay any money to Interworld Shipping Overseas Limited (ISOL) or any other ISOL employee or Crewing Agent in Bangladesh to get this employment?
            </div>
            <div class="card-body">
                {{$partnerWithUs->pay_isol_or_other }}
            </div>
        </div>


    </div>
    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Would you pay someone, a fellow crew member, or a third-party agent to find a job for you?
            </div>
            <div class="card-body">
                {{$partnerWithUs->pay_third_party }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Did somebody assist you in filling out this computerized application for the aforementioned job?
            </div>
            <div class="card-body">
                {{$partnerWithUs->fill_up_by_assists }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you have any cousin/friends/ relative working in USA, Canada, UK, Europe, Australia, New Zealand, or Japan
            </div>
            <div class="card-body">
                {{$partnerWithUs->family_members_country }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                If the response is yes, please provide more information. 13 and 14.
            </div>
            <div class="card-body">
                {{$partnerWithUs->assists_and_family_des }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                What is your salary expectation?
            </div>
            <div class="card-body">
                {{$partnerWithUs->expected_salary }}
            </div>
        </div>


    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                How did you hear about us?
            </div>
            <div class="card-body">
                {{$partnerWithUs->hear_about_us }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Are you Married?
            </div>
            <div class="card-body">
                {{$partnerWithUs->married_or_not }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                What is your qualification?
            </div>
            <div class="card-body">
                {{$partnerWithUs->qualification }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you have any Hospitality Courses completed from any hotel school?
            </div>
            <div class="card-body">
                {{$partnerWithUs->hospitali_course }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Are you willing to work under pressure at sea motions?
            </div>
            <div class="card-body">
                {{$partnerWithUs->sea_motion_work }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Have you ever been issued a U.S. Visa?
            </div>
            <div class="card-body">
                {{$partnerWithUs->get_us_visa }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Has your U.S. Visa ever been cancelled or revoked?
            </div>
            <div class="card-body">
                {{$partnerWithUs->visa_cancelled_or_not }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Have you ever been refused a U.S. Visa, or been refused admission to the United States, or withdrawn your application for admission at the port of entry?
            </div>
            <div class="card-body">
                {{$partnerWithUs->refused_us_visa }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Have you traveled to any countries/regions within the last 2 years?
            </div>
            <div class="card-body">
                {{$partnerWithUs->travel_country }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Are you a member or representative of a terrorist organization?
            </div>
            <div class="card-body">
                {{$partnerWithUs->terrorist_organization_member }}
            </div>
        </div>


    </div>
    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you have police clearance certificate?
            </div>
            <div class="card-body">
                {{$partnerWithUs->police_clearance_certificate }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you seek to engage in espionage, sabotage, export control violations, or any other illegal activity while in Bangladesh or outside of the country?
            </div>
            <div class="card-body">
                {{$partnerWithUs->illegal_activity }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Have you ever been arrested or convicted for any offense or crime, even though subject of a pardon, amnesty, or other similar action?
            </div>
            <div class="card-body">
                {{$partnerWithUs->arrested }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you have a mental or physical disorder that poses or is likely to pose a threat to the safety or welfare of yourself or others?
            </div>
            <div class="card-body">
                {{$partnerWithUs->mental_or_physical_disorder }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Do you have a communicable disease of public health significance? (Communicable diseases of public significance include chancroid, gonorrhea, granuloma inguinale, infectious leprosy, lymphogranuloma venereum, infectious stage syphilis, active tuberculosis, and others diseases as determined by the Department of Health and Human Services.)
            </div>
            <div class="card-body">
                {{$partnerWithUs->disease }}
            </div>
        </div>


    </div>
    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Have you ever served in, been a member of, or been involved with a paramilitary unit, vigilante unit, rebel group, guerrilla group, or insurgent organization?
            </div>
            <div class="card-body">
                {{$partnerWithUs->insurgent_organization }}
            </div>
        </div>


    </div>
    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Have you ever served in the military?
            </div>
            <div class="card-body">
                {{$partnerWithUs->served_military }}
            </div>
        </div>


    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Have you belonged to, contributed to, or worked for any professional, social, or charitable organization?
            </div>
            <div class="card-body">
                {{$partnerWithUs->charitable_organization }}
            </div>
        </div>


    </div>
</div>




                            <div class="card">
                                <div class="card-header">
                                    Personal Details
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                           Full Name
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->first_name.' '.$partnerWithUs->last_name }}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                           Email
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->email_address}}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                           Phone
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->phone}}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                           Cv
                                        </div>
                                        <div class="card-body">

                                            <a target="_blank" class="btn btn-primary" href="{{ route('downloadcv',$partnerWithUs->id) }}">DownLoad Cv</a>

                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Personal Summary This section is optional. Use it to tell us a little more about yourself.
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->personal_summary}}
                                        </div>
                                    </div>


                                </div>


                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Teams
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->team}}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Do you currently work, or have you ever worked, for The Ritz-Carlton brand?
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->ritz_carlton_brand_work}}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Do you currently hold a valid Schengen visa?
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->valid_schengen_visa}}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Gender
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->gender}}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Gender Identity
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->gender_identity}}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Nationality
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->nationality}}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Marital Status
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->martial_status}}
                                        </div>
                                    </div>


                                </div>

                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Age Bracket
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->age_bracket}}
                                        </div>
                                    </div>


                                </div>
                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Disability
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->disability}}
                                        </div>
                                    </div>


                                </div>
                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Veteran Status
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->veteran_status}}
                                        </div>
                                    </div>


                                </div>
                                <div class="col-6">

                                    <div class="card">
                                        <div class="card-header">
                                            Preferred Pronouns
                                        </div>
                                        <div class="card-body">
                                            {{$partnerWithUs->preferred_pronouns}}
                                        </div>
                                    </div>


                                </div>



                            </div>
                        </div>
                        @if($partnerWithUs->status == 'Accepted')

                        @else
                        <div class="col-2">
                            <div class="card">
                                <div class="card-body">
                            <form method="post" action="{{ route('jobSeeker.update',$partnerWithUs->id) }}">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="name" value="{{$partnerWithUs->first_name.' '.$partnerWithUs->last_name }}"/>
                                <input type="hidden" name="email" value="{{$partnerWithUs->email_address }}"/>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="password">Change Status</label>
                                    <select name="status" id="roles" class="form-control form-control-sm">
                                        <option value="">--Select--</option>
                    <option value="Pending" {{ $partnerWithUs->status == 'Pending' ? 'selected':'' }}>Pending</option>
                    <option value="Accepted" {{ $partnerWithUs->status == 'Accepted' ? 'selected':'' }}>Accepted</option>
                    <option value="Rejected" {{ $partnerWithUs->status == 'Rejected' ? 'selected':'' }}>Rejected</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                        </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div> <!-- end row -->






<!--  Modal content for the above example -->





@endsection

@section('script')

<script type="text/javascript">
    function deleteTag(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }
</script>


@endsection







