@extends('backend.master.master')

@section('title')
Vacancy Details | {{ $ins_name }}
@endsection

@section('css')
<style>
    .details-card {
        border-radius: 8px;
    }
    .details-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
    }
    .details-body {
        padding: 1.5rem;
    }
    .detail-item {
        margin-bottom: 1rem;
    }
    .detail-label {
        font-weight: 600;
        color: #495057;
    }
    .detail-value {
        color: #212529;
    }
    .status-badge {
        font-size: 0.9em;
        padding: .4em .7em;
    }
    .description-section {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #eee;
    }
</style>
@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Vacancy Details</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  
                    <li class="breadcrumb-item active">Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    @include('flash_message')
    <div class="col-12">
        <div class="card details-card">
            <div class="card-header details-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Job ID: {{ $job->job_id }}</h5>
                <a href="{{ route('jobList.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left mr-2"></i> Back to List
                </a>
            </div>
            <div class="card-body details-body">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="detail-item">
                            <div class="detail-label">Vacancy Title</div>
                            <div class="detail-value">{{ $job->position->name ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Department</div>
                            <div class="detail-value">{{ $job->department->name ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Sector / Category</div>
                            <div class="detail-value">{{ $job->jobSector->name ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Vessel / Work Place</div>
                            <div class="detail-value">{{ $job->vesselOrWorkPlace->name ?? 'N/A' }}</div>
                        </div>
                         <div class="detail-item">
                            <div class="detail-label">Agency Name</div>
                            <div class="detail-value">{{ $job->agency_name }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Salary</div>
                            <div class="detail-value">{{ $job->salary }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Experience Required</div>
                            <div class="detail-value">{{ $job->job_experience }}</div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="detail-item">
                            <div class="detail-label">Vacancy Type</div>
                            <div class="detail-value">{{ $job->job_type }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Job Area</div>
                            <div class="detail-value">{{ $job->job_area ?? 'N/A' }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Post Date</div>
                            <div class="detail-value">{{ \Carbon\Carbon::parse($job->post_date)->format('d M, Y') }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Expire Date</div>
                            <div class="detail-value">{{ \Carbon\Carbon::parse($job->expire_date)->format('d M, Y') }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Status</div>
                            <div class="detail-value">
                                @if($job->status == 1)
                                    <span class="badge badge-success status-badge">Active</span>
                                @else
                                    <span class="badge badge-danger status-badge">Inactive</span>
                                @endif
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Urgent</div>
                            <div class="detail-value">
                                @if($job->urgent_vacancy == 1)
                                    <span class="badge badge-warning status-badge">Yes</span>
                                @else
                                    <span class="badge badge-info status-badge">No</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="description-section">
                            <h5 class="mb-3">Job Description</h5>
                            <div>{!! $job->description !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
