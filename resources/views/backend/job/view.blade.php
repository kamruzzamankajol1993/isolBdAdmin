@extends('backend.master.master')

@section('title')
{{ $job_list->job_title_id }} | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0"> Vacancy Detail</h4>

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
        <div class="col-lg-12">
            <div>
                <div class="d-flex profile-wrapper">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab" aria-selected="false" tabindex="-1">
                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab" aria-selected="false" tabindex="-1">
                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Description</span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- Tab panes -->
                <div class="tab-content pt-4 text-muted">
                    <div class="tab-pane active show" id="overview-tab" role="tabpanel">
                        <div class="row">
                            <div class="col-xxl-12">


                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Info</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Vacancy Id :</th>
                                                        <td class="text-muted">{{ $job_list->job_main_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Categoy\Vessel Type :</th>
                                                        <td class="text-muted">{{ $job_list->job_category_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Department :</th>
                                                        <td class="text-muted">{{ $job_list->job_department_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Title :</th>
                                                        <td class="text-muted">{{ $job_list->job_title_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Agency Name :</th>
                                                        <td class="text-muted">{{ $job_list->agency_name }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Salary</th>
                                                        <td class="text-muted">{{ $job_list->salary }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th class="ps-0" scope="row">Vacancy Area</th>
                                                        <td class="text-muted">{{ $job_list->job_area }}</td></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Vacancy Type</th>
                                                        <td class="text-muted">{{ $job_list->job_type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Vacancy Contract Type</th>
                                                        <td class="text-muted">{{ $job_list->job_contract_type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Vacancy Location</th>
                                                        <td class="text-muted">{{ $job_list->job_location }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Contract Duration</th>
                                                        <td class="text-muted">{{ $job_list->duration }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Post Date</th>
                                                        <td class="text-muted">{{ date('d-m-Y', strtotime($job_list->post_date)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Expier Date</th>
                                                        <td class="text-muted">{{ date('d-m-Y', strtotime($job_list->expire_date)) }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th class="ps-0" scope="row">Vacancy Experience</th>
                                                        <td class="text-muted">{{ $job_list->job_experience }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->


                                <!--end card-->
                            </div>
                            <!--end col-->

                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="tab-pane fade" id="activities" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                {!! $job_list->description !!}
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end tab-pane-->

                </div>
                <!--end tab-content-->
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->


@endsection
