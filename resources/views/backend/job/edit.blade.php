@extends('backend.master.master')

@section('title')
Edit Vacancy | {{ $ins_name }}
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>
    .is-invalid { border-color: #dc3545 !important; }
    .invalid-feedback { display: block; width: 100%; margin-top: .25rem; font-size: .875em; color: #dc3545; }
    .custom-select-container { position: relative; }
    .custom-select-value { background-color: #fff; border: 1px solid #ced4da; border-radius: .25rem; padding: .375rem .75rem; cursor: pointer; user-select: none; height: calc(1.5em + .75rem + 2px); line-height: 1.5; }
    .custom-select-options { display: none; position: absolute; top: 100%; left: 0; right: 0; background-color: #fff; border: 1px solid #ced4da; border-top: none; border-radius: 0 0 .25rem .25rem; z-index: 1050; max-height: 200px; overflow-y: auto; }
    .custom-select-search { width: 100%; padding: .375rem .75rem; border: none; border-bottom: 1px solid #ced4da; outline: none; }
    .custom-select-list { list-style: none; margin: 0; padding: 0; }
    .custom-select-list li { padding: .375rem .75rem; cursor: pointer; }
    .custom-select-list li:hover { background-color: #e9ecef; }
    .custom-select-list li.d-none { display: none; }
</style>
@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Edit Vacancy</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('jobList.index') }}">Vacancy List</a></li>
                    <li class="breadcrumb-item active">Edit Vacancy</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row mt-2">
    @include('flash_message')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('jobList.update', $job->id) }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <!-- Vacancy Category / Sector -->
                                <div class="form-group col-md-3 col-sm-12">
                                    <label for="job_sector_id">Vacancy Category / Sector</label>
                                    @include('backend.job.custom_select_edit', ['id' => 'job_sector_id', 'list' => $jobCategoryList, 'selectedValue' => $job->job_sector_id])
                                </div>

                                <!-- Vessel / Work Place -->
                                <div class="form-group col-md-3 col-sm-12">
                                    <label for="vessel_or_work_place_id">Vessel / Work Place</label>
                                    @include('backend.job.custom_select_edit', ['id' => 'vessel_or_work_place_id', 'list' => $vesselOrWorkPlaceList, 'selectedValue' => $job->vessel_or_work_place_id])
                                </div>

                                <!-- Job Department -->
                                <div class="form-group col-md-3 col-sm-12">
                                    <label for="job_department_id">Job Department</label>
                                    {{-- This will be populated dynamically, but we load all departments initially for the edit view --}}
                                    @include('backend.job.custom_select_edit', ['id' => 'job_department_id', 'list' => $jobDepartmentList, 'selectedValue' => $job->job_department_id])
                                </div>

                                <!-- Vacancy Title -->
                                <div class="form-group col-md-3 col-sm-12">
                                    <label for="job_title_id">Vacancy Title</label>
                                     @include('backend.job.custom_select_edit', ['id' => 'job_title_id', 'list' => $jobTitleList, 'selectedValue' => $job->job_title_id])
                                </div>
                            </div>
                            {{-- Other fields --}}
                            <div class="row mt-3">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="agency_name">Agency Name</label>
                                    <input type="text" required class="form-control form-control-sm" name="agency_name" value="{{ $job->agency_name }}"/>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="salary">Salary</label>
                                    <input type="text" required class="form-control form-control-sm" name="salary" value="{{ $job->salary }}"/>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="job_type">Vacancy Type</label>
                                    <select required class="form-control form-control-sm" name="job_type">
                                        <option value="">---Please Select---</option>
                                        <option value="Full Time" {{ $job->job_type == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                                        <option value="Part time" {{ $job->job_type == 'Part time' ? 'selected' : '' }}>Part time</option>
                                        <option value="Permanent" {{ $job->job_type == 'Permanent' ? 'selected' : '' }}>Permanent</option>
                                        <option value="Several Trips" {{ $job->job_type == 'Several Trips' ? 'selected' : '' }}>Several Trips</option>
                                        <option value="Temporary" {{ $job->job_type == 'Temporary' ? 'selected' : '' }}>Temporary</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="post_date">Post Date</label>
                                    <input type="text" required class="form-control form-control-sm custom-datepicker" name="post_date" value="{{ $job->post_date }}" placeholder="YYYY-MM-DD"/>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="expire_date">Expire Date</label>
                                    <input type="text" required class="form-control form-control-sm custom-datepicker" name="expire_date" value="{{ $job->expire_date }}" placeholder="YYYY-MM-DD"/>
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="job_experience">Vacancy Experience</label>
                                    <input type="text" required class="form-control form-control-sm" name="job_experience" value="{{ $job->job_experience }}"/>
                                </div>
                            </div>

                             <div class="row mt-3">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="status">Status</label>
                                    <select required class="form-control form-control-sm" name="status">
                                        <option value="1" {{ $job->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $job->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="urgent_vacancy">Urgent Vacancy</label>
                                    <select required class="form-control form-control-sm" name="urgent_vacancy">
                                        <option value="1" {{ $job->urgent_vacancy == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $job->urgent_vacancy == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="description">Description</label>
                                    <textarea required id="classic-editor" class="form-control form-control-sm" name="description">{{ $job->description }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
$(document).ready(function() {
    flatpickr(".custom-datepicker", { dateFormat: "Y-m-d" });

   function setupCustomSelect(container) {
        const valueDiv = container.find('.custom-select-value');
        const optionsDiv = container.find('.custom-select-options');
        const searchInput = container.find('.custom-select-search');
        const list = container.find('.custom-select-list');
        const hiddenSelect = container.next('select');
        valueDiv.on('click', function(e) {
            e.stopPropagation();
            $('.custom-select-options').not(optionsDiv).hide();
            optionsDiv.toggle();
            searchInput.focus();
        });
        list.on('click', 'li', function() {
            const value = $(this).data('value');
            const text = $(this).text();
            valueDiv.text(text).removeClass('is-invalid');
            hiddenSelect.val(value).trigger('change');
            optionsDiv.hide();
        });
        searchInput.on('keyup', function() {
            const filter = $(this).val().toUpperCase();
            list.find('li').each(function() {
                $(this).toggleClass('d-none', $(this).text().toUpperCase().indexOf(filter) === -1);
            });
        });
    }

    $('.custom-select-container').each(function() { setupCustomSelect($(this)); });
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.custom-select-container').length) {
            $('.custom-select-options').hide();
        }
    });

    function updateCustomSelect(selectId, data, prompt, selectedValue = null) {
        const hiddenSelect = $(`#${selectId}`);
        const container = hiddenSelect.prev('.custom-select-container');
        const list = container.find('.custom-select-list');
        const valueDiv = container.find('.custom-select-value');

        hiddenSelect.empty().append(`<option value="">${prompt}</option>`);
        list.empty();
        valueDiv.text(prompt);

        if (data && data.length > 0) {
            $.each(data, function(index, item) {
                let option = $(`<option value="${item.id}">${item.name}</option>`);
                if (item.id == selectedValue) {
                    option.prop('selected', true);
                    valueDiv.text(item.name);
                }
                hiddenSelect.append(option);
                list.append(`<li data-value="${item.id}">${item.name}</li>`);
            });
        }
    }

    // On Sector Change -> Update Vessel/Work Place
    $('#job_sector_id').on('change', function() {
        const sectorId = $(this).val();
        updateCustomSelect('vessel_or_work_place_id', [], '---Select Sector First---');
        updateCustomSelect('job_department_id', [], '---Select Vessel First---');
        updateCustomSelect('job_title_id', [], '---Select Department First---');
        if (sectorId) {
            let url = "{{ route('getVesselsBySector', ':id') }}".replace(':id', sectorId);
            $.get(url, function(data) {
                updateCustomSelect('vessel_or_work_place_id', data, '---Please Select---');
            });
        }
    });

    // On Vessel Change -> Update Department
    $('#vessel_or_work_place_id').on('change', function() {
        const vesselId = $(this).val();
        updateCustomSelect('job_department_id', [], '---Select Vessel First---');
        updateCustomSelect('job_title_id', [], '---Select Department First---');
        if (vesselId) {
            let url = "{{ route('getDepartmentsByVessel', ':id') }}".replace(':id', vesselId);
            $.get(url, function(data) {
                updateCustomSelect('job_department_id', data, '---Please Select---');
            });
        }
    });

    // On Department Change -> Update Position/Title
    $('#job_department_id').on('change', function() {
        const departmentId = $(this).val();
        updateCustomSelect('job_title_id', [], '---Select Department First---');
        if (departmentId) {
            let url = "{{ route('getPositionsByDepartment', ':id') }}".replace(':id', departmentId);
            $.get(url, function(data) {
                updateCustomSelect('job_title_id', data, '---Please Select---');
            });
        }
    });
});
</script>
@endsection
