@php
     $usr = Auth::guard('admin')->user();
 @endphp

<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('/') }}{{ $icon }}" alt="" height="22">
                        </span>
            <span class="logo-lg">
                            <img src="{{ asset('/') }}{{ $logo }}" alt="" height="20">
                        </span>
        </a>

        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('/') }}{{ $icon }}" alt="" height="22">
                        </span>
            <span class="logo-lg">
                            <img src="{{ asset('/') }}{{ $logo }}" alt="" height="20">
                        </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                @if ($usr->can('dashboard.view'))
                <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
@endif

<li class="menu-title">HOME PAGE CONTENT</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="uil-label"></i>
        <span>Home Page</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">

        @if ($usr->can('video_background_add') || $usr->can('video_background_view') ||  $usr->can('video_background_update') ||  $usr->can('video_background_delete'))
        {{-- <li class="{{ Route::is('admin.video_background')  ? 'active' : '' }}"><a href="{{ route('admin.video_background') }}"> <span>Video Background</span> </a></li> --}}
@endif
@if ($usr->can('second_row_add') || $usr->can('second_row_view') ||  $usr->can('second_row_update') ||  $usr->can('second_row_delete'))
        {{-- <li class="{{ Route::is('admin.second_row_info')  ? 'active' : '' }}"><a href="{{ route('admin.second_row_info') }}"> <span>Slider</span> </a></li> --}}
@endif
@if ($usr->can('job_category_add') || $usr->can('job_category_view') || $usr->can('job_category_update') || $usr->can('job_category_delete'))
<li class="{{ Route::is('admin.job_category') ? 'active' : '' }}">
    <a href="{{ route('admin.job_category') }}">
        
        <span>Job Category</span>
    </a>
</li>
@endif
@if ($usr->can('special_news_add') || $usr->can('special_news_view') ||  $usr->can('special_news_update') ||  $usr->can('special_news_delete'))
        {{-- <li class="{{ Route::is('admin.special_news_info')  ? 'active' : '' }}"><a href="{{ route('admin.special_news_info') }}"> <span>Important Notes</span> </a></li> --}}
@endif
@if ($usr->can('third_row_add') || $usr->can('third_row_view') ||  $usr->can('third_row_update') ||  $usr->can('third_row_delete'))
        {{-- <li class="{{ Route::is('admin.third_row_info')  ? 'active' : '' }}"><a href="{{ route('admin.third_row_info') }}"> <span>Why Join us</span> </a></li> --}}
@endif
@if ($usr->can('why_us_mission'))
{{-- <li class="{{ Route::is('admin.why_us_mission')  ? 'active' : '' }}"><a href="{{ route('admin.why_us_mission') }}"> <span>Mission</span> </a></li> --}}
@endif
@if ($usr->can('why_us_vision'))
{{-- <li class="{{ Route::is('admin.why_us_vision')  ? 'active' : '' }}"><a href="{{ route('admin.why_us_vision') }}"> <span>Vision</span> </a></li> --}}
@endif
@if ($usr->can('why_us_values'))
{{-- <li class="{{ Route::is('admin.why_us_value')  ? 'active' : '' }}"><a href="{{ route('admin.why_us_value') }}"> <span>Values</span> </a></li> --}}
@endif

        @if ($usr->can('fifth_row_add') || $usr->can('fifth_row_view') ||  $usr->can('fifth_row_update') ||  $usr->can('fifth_row_delete'))

        {{-- <li class="{{ Route::is('admin.fifth_row_info')  ? 'active' : '' }}"><a href="{{ route('admin.fifth_row_info') }}"> <span>What We Do</span> </a></li> --}}
    @endif
    @if ($usr->can('sixth_row_add') || $usr->can('sixth_row_view') ||  $usr->can('sixth_row_update') ||  $usr->can('sixth_row_delete'))
        {{-- <li class="{{ Route::is('admin.sixth_row_info')  ? 'active' : '' }}"><a href="{{ route('admin.sixth_row_info') }}"> <span>Welcome On Board</span> </a></li> --}}
        @endif
        @if ($usr->can('seventh_row_add') || $usr->can('seventh_row_view') ||  $usr->can('seventh_row_update') ||  $usr->can('seventh_row_delete'))
        {{-- <li class="{{ Route::is('admin.seventh_row_info')  ? 'active' : '' }}"><a href="{{ route('admin.seventh_row_info') }}"> <span>Crew Benifit</span> </a></li> --}}
        @endif
        @if ($usr->can('eight_row_add') || $usr->can('eight_row_view') ||  $usr->can('eight_row_update') ||  $usr->can('eight_row_delete'))
        {{-- <li class="{{ Route::is('admin.eight_row_info')  ? 'active' : '' }}"><a href="{{ route('admin.eight_row_info') }}"> <span>We Specialise In</span> </a></li> --}}
        @endif
        @if ($usr->can('how_it_work_view') || $usr->can('how_it_work_update') || $usr->can('how_it_work_delete'))
{{-- <li class="{{ Route::is('admin.how_it_work') ? 'active' : '' }}">
    <a href="{{ route('admin.how_it_work') }}">
     
        <span>Hiring Process</span>
    </a>
</li> --}}
@endif

@if ($usr->can('tenth_row_add') || $usr->can('tenth_row_view') ||  $usr->can('tenth_row_update') ||  $usr->can('tenth_row_delete'))
        <li class="{{ Route::is('admin.tenth_row_info')  ? 'active' : '' }}"><a href="{{ route('admin.tenth_row_info') }}"> <span>Urgent Vacancy</span> </a></li>
@endif

        @if ($usr->can('ninth_row_add') || $usr->can('ninth_row_view') ||  $usr->can('ninth_row_update') ||  $usr->can('ninth_row_delete'))
        <li class="{{ Route::is('admin.ninth_row_info')  ? 'active' : '' }}"><a href="{{ route('admin.ninth_row_info') }}"> <span>Review List</span> </a></li>
    @endif

    @if ($usr->can('ninth_row_add') || $usr->can('ninth_row_view') ||  $usr->can('ninth_row_update') ||  $usr->can('ninth_row_delete'))
        <li class="{{ Route::is('admin.subscriptionList')  ? 'active' : '' }}"><a href="{{ route('admin.subscriptionList') }}"> <span>Subscription List</span> </a></li>
    @endif

   
        <li class="{{ Route::is('globalRequirmentNews.index')  ? 'active' : '' }}"><a href="{{ route('globalRequirmentNews.index') }}"> <span>Global Requirment News</span> </a></li>

    
    </ul>
</li>






<li class="menu-title">ABOUT ISOL</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="uil-label"></i>
        <span>About isol</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">

        @if ($usr->can('about_us_experties'))
        <li class="{{ Route::is('admin.about_us_experties')  ? 'active' : '' }}"><a href="{{ route('admin.about_us_experties') }}"> <span>Experties</span> </a></li>
@endif
@if ($usr->can('about_us_service'))
        <li class="{{ Route::is('admin.about_us_services')  ? 'active' : '' }}"><a href="{{ route('admin.about_us_services') }}"> <span>Services</span> </a></li>
@endif
@if ($usr->can('about_us_accrediations'))
        <li class="{{ Route::is('admin.about_us_accrediations')  ? 'active' : '' }}"><a href="{{ route('admin.about_us_accrediations') }}"> <span>Accrediations</span> </a></li>
@endif


    </ul>
</li>
@if ($usr->can('employeeSectionView'))
<li class="menu-title">EMPLOYER</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="uil-label"></i>
        <span>Employer</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">

        @if ($usr->can('partnerWithUsAdd') || $usr->can('partnerWithUsView') || $usr->can('partnerWithUsDelete') || $usr->can('partnerWithUsUpdate'))
        <li class="{{ Route::is('partnerWithUs.index')  ? 'active' : '' }}"><a href="{{ route('partnerWithUs.index') }}"> <span>Partner With Us</span> </a></li>
        @endif



    </ul>
</li>
@endif

<li class="menu-title">Vacancy</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="uil-label"></i>
        <span>Vacancy</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">

   


@if ($usr->can('job_department_add') || $usr->can('job_department_view') || $usr->can('job_department_update') || $usr->can('job_department_delete'))
<li class="{{ Route::is('admin.job_department') ? 'active' : '' }}">
    <a href="{{ route('admin.job_department') }}">
        
        <span>Vacancy Department</span>
    </a>
</li>
@endif


@if ($usr->can('job_title_add') || $usr->can('job_title_view') || $usr->can('job_title_update') || $usr->can('job_title_delete'))
<li class="{{ Route::is('admin.job_title') ? 'active' : '' }}">
    <a href="{{ route('admin.job_title') }}">
 
        <span>Vacancy Title</span>
    </a>
</li>
@endif

@if ($usr->can('typeOfContactAdd') || $usr->can('typeOfContactView') || $usr->can('typeOfContactUpdate') || $usr->can('typeOfContactDelete'))
<li class="{{ Route::is('typeOfContactList.index') ? 'active' : '' }}">
    <a href="{{ route('typeOfContactList.index') }}">
      
        <span>Vacancy Contract Type</span>
    </a>
</li>
@endif

@if ($usr->can('locationAdd') || $usr->can('locationView') || $usr->can('locationUpdate') || $usr->can('locationDelete'))
<li class="{{ Route::is('locationList.index') ? 'active' : '' }}">
    <a href="{{ route('locationList.index') }}">
       
        <span>Vacancy Location</span>
    </a>
</li>
@endif

@if ($usr->can('jobAdd') || $usr->can('jobView') || $usr->can('jobUpdate') || $usr->can('jobDelete'))
<li class="{{ Route::is('jobList.index') || Route::is('jobList.create') || Route::is('jobList.edit')   ? 'active' : '' }}">
    <a href="{{ route('jobList.index') }}">
       
        <span>Vacancy List</span>
    </a>
</li>
@endif



    </ul>
</li>




<li class="menu-title">INSIGHT</li>
@if ($usr->can('eventAdd') || $usr->can('eventView') || $usr->can('eventUpdate') || $usr->can('eventDelete'))
<li class="{{ Route::is('eventList.index') ? 'active' : '' }}">
    <a href="{{ route('eventList.index') }}">
       <i class="uil-label"></i>
        <span>Event List</span>
    </a>
</li>
@endif



<li class="menu-title">Contact</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="uil-label"></i>
        <span>Contact</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">

       @if ($usr->can('mScheduleListAdd') || $usr->can('mScheduleListView') || $usr->can('mScheduleListUpdate') || $usr->can('mScheduleListDelete'))
<li class="{{ Route::is('mScheduleList.index') ? 'active' : '' }}">
    <a href="{{ route('mScheduleList.index') }}">
      
        <span>Interview Appointment</span>
    </a>
</li>
@endif

@if ($usr->can('inquiryListAdd') || $usr->can('inquiryListView') || $usr->can('inquiryListUpdate') || $usr->can('inquiryListDelete'))
<li class="{{ Route::is('inquiryList.index') ? 'active' : '' }}">
    <a href="{{ route('inquiryList.index') }}">
        
        <span>EnQuiry List</span>
    </a>
</li>
@endif

@if ($usr->can('complainListAdd') || $usr->can('complainListView') || $usr->can('complainListUpdate') || $usr->can('complainListDelete'))
<li class="{{ Route::is('complainList.index') ? 'active' : '' }}">
    <a href="{{ route('complainList.index') }}">
      
        <span>Complain List</span>
    </a>
</li>
@endif

@if ($usr->can('surveyListAdd') || $usr->can('surveyListView') || $usr->can('surveyListUpdate') || $usr->can('surveyListDelete'))
<li class="{{ Route::is('surveyList.index') ? 'active' : '' }}">
    <a href="{{ route('surveyList.index') }}">
      
        <span>Survey List</span>
    </a>
</li>
@endif



    </ul>
</li>




<li class="menu-title">Cv Register</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="uil-label"></i>
        <span>Cv List</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">

        @if ($usr->can('jobSeekerAdd') || $usr->can('jobSeekerView') || $usr->can('jobSeekerDelete') || $usr->can('jobSeekerUpdate'))
        <li class="{{ Route::is('jobSeeker.index')  ? 'active' : '' }}"><a href="{{ route('jobSeeker.index') }}"> <span>Cv List</span> </a></li>
        @endif



    </ul>
</li>
<li class="menu-title">SETTING</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-setting"></i>
                        <span>System Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        @if ($usr->can('system_information_add') || $usr->can('system_information_view') ||  $usr->can('system_information_update') ||  $usr->can('system_information_delete'))
                        <li class="{{ Route::is('admin.system_information')  ? 'active' : '' }}"><a href="{{ route('admin.system_information') }}"> <span>System Information</span> </a></li>

            @endif

                        @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                        <li class="{{ Route::is('admin.admins') || Route::is('admin.admins.create') || Route::is('admin.admins.edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.admins') }}"><span>User</span> </a>
                        </li>

                   @endif


                   @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                        <li class="{{ Route::is('admin.roles') || Route::is('admin.roles.create') || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles') }}"> <span>Role List</span> </a></li>

            @endif
                   @if ($usr->can('permission.create') || $usr->can('permission.view') ||  $usr->can('permission.edit') ||  $usr->can('permission.delete'))
                     <li class="{{ Route::is('admin.permission') || Route::is('admin.permission.create') || Route::is('admin.permission.edit') ? 'active' : '' }}">
                            <a href="{{ route('admin.permission') }}"><span>Permission</span> </a>
                        </li>

                    @endif



                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>







