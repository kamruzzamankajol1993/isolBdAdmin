@extends('backend.master.master')

@section('title')
Vessel/Work Place | {{ $ins_name }}
@endsection

@section('css')
<style>
    .pagination { justify-content: center; }
    .pagination .page-item.active .page-link { background-color: #4b88a2; border-color: #4b88a2; }
    .pagination .page-link { color: #4b88a2; }
    .pagination .page-link:hover { color: #3a6a7e; }
    .is-invalid { border-color: #dc3545 !important; }
    .invalid-feedback { display: block; width: 100%; margin-top: .25rem; font-size: .875em; color: #dc3545; }
</style>
@endsection

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Vessel/Work Place</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary" id="add_button">
                            <i class="fas fa-plus-circle"></i> Add New
                        </button>
                        <button type="button" class="btn btn-success" id="import_button">
                            <i class="fas fa-file-excel"></i> Bulk Upload
                        </button>
                        <button type="button" class="btn btn-danger" id="delete_selected_button" style="display: none;">
                            <i class="fas fa-trash-alt"></i> Delete Selected
                        </button>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="search_input" placeholder="Search...">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>

                @include('flash_message')

                <div class="table-responsive">
                    <table class="table table-bordered table-striped dt-responsive nowrap" style="width: 100%;">
                        <thead class="table-light">
                            <tr>
                                <th><input type="checkbox" id="select_all_ids"></th>
                                <th>#</th>
                                <th>Name</th>
                                <th>Job Sector</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                            <!-- Data will be loaded here via AJAX -->
                        </tbody>
                    </table>
                </div>

                <nav>
                    <ul class="pagination" id="pagination_links"></ul>
                </nav>

            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Add New</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="modalForm" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="_method" id="form_method">

                    <div class="mb-3">
                        <label for="dream_job_sector_id" class="form-label">Job Sector</label>
                        <select class="form-control" id="dream_job_sector_id" name="dream_job_sector_id" required>
                            <option value="">Select Sector</option>
                            @foreach($dreamJobSectors as $sector)
                                <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback" id="dream_job_sector_id_error"></div>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback" id="name_error"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="submit_button">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Assign Department Modal -->
<div class="modal fade" id="assignDepartmentModal" tabindex="-1" aria-labelledby="assignDepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignDepartmentModalLabel">Assign Departments</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="assignDepartmentForm">
                    @csrf
                    <input type="hidden" id="assign_vessel_id" name="vessel_id">
                    <div class="mb-3">
                        <label class="form-label">Departments</label>
                        <div id="department_checkbox_list">
                            @foreach($departments as $department)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="department_ids[]" value="{{ $department->id }}" id="dept_{{ $department->id }}">
                                    <label class="form-check-label" for="dept_{{ $department->id }}">
                                        {{ $department->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Import Modal -->
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import from Excel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="importForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Choose Excel File</label>
                        <input class="form-control" type="file" id="file" name="file" required accept=".xlsx, .xls, .csv">
                        <div class="invalid-feedback" id="file_error"></div>
                        <div class="mt-2">
                            <a href="{{ asset('public/samples/sample-vessel-import-file.xlsx') }}" download>Download Sample File</a>
                            <p>Note: The Excel file must have two columns with headers: <b>dream_job_sector_id</b> and <b>name</b>.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    let currentPage = 1;
    let currentSearch = '';

    function fetchData(page = 1, search = '') {
        currentPage = page;
        currentSearch = search;
        $.ajax({
            url: "{{ route('vesselOrWorkPlaceList.index') }}",
            type: 'GET',
            data: { page: page, search: { value: search } },
            success: function(response) {
                let tableBody = $('#table_body');
                tableBody.empty();
                $('#select_all_ids').prop('checked', false);
                $('#delete_selected_button').hide();

                if(response.data && response.data.length > 0) {
                    $.each(response.data, function(index, item) {
                        let sectorName = item.dream_job_sector ? item.dream_job_sector.name : '<span class="text-muted">N/A</span>';
                        let row = `<tr>
                            <td><input type="checkbox" name="ids" class="checkbox_ids" value="${item.id}"></td>
                            <td>${(response.from + index)}</td>
                            <td>${item.name}</td>
                            <td>${sectorName}</td>
                            <td>
                                <button class="btn btn-sm btn-info edit-button" data-id="${item.id}"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger delete-button" data-id="${item.id}"><i class="fas fa-trash-alt"></i></button>
                                <button class="btn btn-sm btn-success assign-dept-button" data-id="${item.id}"><i class="fas fa-tasks"></i> Assign Department</button>
                            </td>
                        </tr>`;
                        tableBody.append(row);
                    });
                } else {
                    tableBody.append('<tr><td colspan="5" class="text-center">No data found</td></tr>');
                }

                let paginationLinks = $('#pagination_links');
                paginationLinks.empty();
                if(response.last_page > 1) {
                    paginationLinks.append(`<li class="page-item ${response.current_page === 1 ? 'disabled' : ''}"><a class="page-link" href="#" data-page="${response.current_page - 1}">Previous</a></li>`);
                    for (let i = 1; i <= response.last_page; i++) {
                        paginationLinks.append(`<li class="page-item ${response.current_page === i ? 'active' : ''}"><a class="page-link" href="#" data-page="${i}">${i}</a></li>`);
                    }
                    paginationLinks.append(`<li class="page-item ${response.current_page === response.last_page ? 'disabled' : ''}"><a class="page-link" href="#" data-page="${response.current_page + 1}">Next</a></li>`);
                }
            },
            error: function(xhr) { console.log('Error fetching data:', xhr.responseText); }
        });
    }

    fetchData();

    $('#search_input').on('keyup', function() { fetchData(1, $(this).val()); });
    $(document).on('click', '.pagination a', function(e) { e.preventDefault(); fetchData($(this).data('page'), currentSearch); });

    function clearForm() {
        $('#modalForm')[0].reset();
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').text('');
    }

    $('#add_button').on('click', function() {
        clearForm();
        $('#modalLabel').text('Add New Vessel/Work Place');
        $('#submit_button').text('Save');
        $('#form_method').val('POST');
        $('#modalForm').attr('action', "{{ route('vesselOrWorkPlaceList.store') }}");
        $('#formModal').modal('show');
    });

    $(document).on('click', '.edit-button', function() {
        let id = $(this).data('id');
        let url = "{{ route('vesselOrWorkPlaceList.edit', ':id') }}".replace(':id', id);
        $.get(url, function(response) {
            if (response && response.id) {
                clearForm();
                $('#modalLabel').text('Edit Vessel/Work Place');
                $('#submit_button').text('Update');
                $('#form_method').val('PUT');
                let actionUrl = "{{ route('vesselOrWorkPlaceList.update', ':id') }}".replace(':id', response.id);
                $('#modalForm').attr('action', actionUrl);
                $('#id').val(response.id);
                $('#name').val(response.name);
                $('#dream_job_sector_id').val(response.dream_job_sector_id);
                $('#formModal').modal('show');
            }
        });
    });

    $('#modalForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $('#form_method').val(),
            data: $(this).serialize(),
            success: function(response) {
                $('#formModal').modal('hide');
                Swal.fire({ icon: 'success', title: 'Success!', text: response.success, timer: 1500, showConfirmButton: false });
                fetchData(currentPage, currentSearch);
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $('.form-control').removeClass('is-invalid');
                    $('.invalid-feedback').text('');
                    $.each(errors, function(key, value) {
                        $(`#${key}`).addClass('is-invalid');
                        $(`#${key}_error`).text(value[0]);
                    });
                }
            }
        });
    });

    $(document).on('click', '.delete-button', function() {
        let id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?', text: "You won't be able to revert this!", icon: 'warning',
            showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                let url = "{{ route('vesselOrWorkPlaceList.destroy', ':id') }}".replace(':id', id);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: { _token: "{{ csrf_token() }}", _method: 'DELETE' },
                    success: function(response) {
                        Swal.fire('Deleted!', response.success, 'success');
                        fetchData(currentPage, currentSearch);
                    }
                });
            }
        });
    });

    // Assign Department Logic
    // Assign Department Logic
    $(document).on('click', '.assign-dept-button', function() {
        let vesselId = $(this).data('id');
        $('#assign_vessel_id').val(vesselId);
        
        // Reset checkboxes
        $('#assignDepartmentForm input[type="checkbox"]').prop('checked', false);

        let url = "{{ route('vesselOrWorkPlaceList.getAssignedDepartments', ':id') }}".replace(':id', vesselId);
        
        $.get(url, function(assignedDeptIds) {
            if (Array.isArray(assignedDeptIds)) {
                assignedDeptIds.forEach(function(deptId) {
                    $(`#dept_${deptId}`).prop('checked', true);
                });
            }
            $('#assignDepartmentModal').modal('show');
        });
    });

    $('#assignDepartmentForm').on('submit', function(e) {
        e.preventDefault();
        let vesselId = $('#assign_vessel_id').val();
        let url = "{{ route('vesselOrWorkPlaceList.assignDepartments', ':id') }}".replace(':id', vesselId);
        let formData = $(this).serialize();

        $.post(url, formData, function(response) {
            $('#assignDepartmentModal').modal('hide');
            Swal.fire({ icon: 'success', title: 'Success!', text: response.success, timer: 1500, showConfirmButton: false });
        }).fail(function(xhr) {
            Swal.fire({ icon: 'error', title: 'Error!', text: 'Could not assign departments.' });
        });
    });

    // Import functionality
    $('#import_button').on('click', function() {
        $('#importForm')[0].reset();
        $('#file').removeClass('is-invalid');
        $('#file_error').text('');
        $('#importModal').modal('show');
    });

    $('#importForm').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            url: "{{ route('vesselOrWorkPlaceList.import') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#importModal').modal('hide');
                Swal.fire({ icon: 'success', title: 'Success!', text: response.success, timer: 2000, showConfirmButton: false });
                fetchData();
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    if(errors.file) {
                        $('#file').addClass('is-invalid');
                        $('#file_error').html(errors.file.join('<br>'));
                    }
                }
            }
        });
    });

    // Multiple delete functionality
    $(document).on('click', '#select_all_ids', function() {
        $('.checkbox_ids').prop('checked', $(this).prop('checked'));
        toggleDeleteButton();
    });

    $(document).on('click', '.checkbox_ids', function() {
        if ($('.checkbox_ids:checked').length === $('.checkbox_ids').length) {
            $('#select_all_ids').prop('checked', true);
        } else {
            $('#select_all_ids').prop('checked', false);
        }
        toggleDeleteButton();
    });
    
    function toggleDeleteButton() {
        if ($('.checkbox_ids:checked').length > 0) {
            $('#delete_selected_button').show();
        } else {
            $('#delete_selected_button').hide();
        }
    }

    $('#delete_selected_button').on('click', function() {
        let selectedIds = [];
        $('.checkbox_ids:checked').each(function() {
            selectedIds.push($(this).val());
        });

        Swal.fire({
            title: 'Are you sure?',
            text: `You are about to delete ${selectedIds.length} selected items.`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete them!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('vesselOrWorkPlaceList.deleteMultiple') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        ids: selectedIds
                    },
                    success: function(response) {
                        Swal.fire('Deleted!', response.success, 'success');
                        fetchData(currentPage, currentSearch);
                    },
                    error: function(xhr) {
                        Swal.fire('Error!', 'Could not delete selected items.', 'error');
                    }
                });
            }
        });
    });
});
</script>
@endsection
