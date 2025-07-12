@extends('backend.master.master')

@section('title')
Job Position | {{ $ins_name }}
@endsection

@section('css')
<style>
    .pagination { justify-content: center; }
    .pagination .page-item.active .page-link { background-color: #4b88a2; border-color: #4b88a2; }
    .pagination .page-link { color: #4b88a2; }
    .pagination .page-link:hover { color: #3a6a7e; }
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
            <h4 class="mb-0">Job Position</h4>
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
                                <th>Department</th>
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
                <h5 class="modal-title" id="modalLabel">Add New Position</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="modalForm" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="_method" id="form_method">
                    <div class="mb-3">
                        <label for="dream_job_department_id" class="form-label">Department</label>
                        <div class="custom-select-container">
                            <div class="custom-select-value" tabindex="0">Select Department</div>
                            <div class="custom-select-options">
                                <input type="text" class="custom-select-search" placeholder="Search...">
                                <ul class="custom-select-list">
                                    @foreach($departments as $department)
                                        <li data-value="{{ $department->id }}">{{ $department->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <select class="d-none" id="dream_job_department_id" name="dream_job_department_id" required>
                            <option value="">Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback" id="dream_job_department_id_error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Position Name</label>
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

<!-- Import Modal -->
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import Positions from Excel</h5>
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
                            <p>Note: The Excel file must have two columns with headers: <b>dream_job_department_id</b> and <b>name</b>.</p>
                            <a href="{{ asset('samples/sample-positions-import.xlsx') }}" download>Download Sample File</a>
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
            url: "{{ route('dreamJobPositionList.index') }}",
            type: 'GET',
            data: { page: page, search: { value: search } },
            success: function(response) {
                let tableBody = $('#table_body');
                tableBody.empty();
                $('#select_all_ids').prop('checked', false);
                toggleDeleteButton();

                if(response.data && response.data.length > 0) {
                    $.each(response.data, function(index, item) {
                        let departmentName = item.department ? item.department.name : '<span class="text-muted">N/A</span>';
                        let row = `<tr>
                            <td><input type="checkbox" name="ids" class="checkbox_ids" value="${item.id}"></td>
                            <td>${(response.from + index)}</td>
                            <td>${item.name}</td>
                            <td>${departmentName}</td>
                            <td>
                                <button class="btn btn-sm btn-info edit-button" data-id="${item.id}"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger delete-button" data-id="${item.id}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
                        tableBody.append(row);
                    });
                } else {
                    tableBody.append('<tr><td colspan="5" class="text-center">No data found</td></tr>');
                }
                renderPagination(response);
            },
            error: function(xhr) { console.log('Error fetching data:', xhr.responseText); }
        });
    }

    function renderPagination(response) {
        // ... existing pagination logic
    }

    fetchData();

    $('#search_input').on('keyup', function() { fetchData(1, $(this).val()); });
    $(document).on('click', '.pagination a', function(e) { e.preventDefault(); fetchData($(this).data('page'), currentSearch); });

    // --- Existing logic for Add/Edit/Delete/Custom Select ---
    // ...

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
            url: "{{ route('dreamJobPositionList.import') }}",
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
            text: `You are about to delete ${selectedIds.length} selected positions.`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete them!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('dreamJobPositionList.deleteMultiple') }}",
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
                        Swal.fire('Error!', 'Could not delete the selected positions.', 'error');
                    }
                });
            }
        });
    });

    // --- Paste existing JS logic for add, edit, single delete, pagination, custom select here to keep it concise ---
    function clearForm() {
        $('#modalForm')[0].reset();
        $('.form-control, .custom-select-value').removeClass('is-invalid');
        $('.invalid-feedback').text('');
        $('.custom-select-value').text('Select Department');
    }
    $(document).on('click', '.custom-select-value', function(e) { e.stopPropagation(); $('.custom-select-options').not($(this).next()).hide(); $(this).next('.custom-select-options').toggle().find('.custom-select-search').focus(); });
    $(document).on('click', '.custom-select-list li', function() { let container = $(this).closest('.custom-select-container'); let value = $(this).data('value'); let text = $(this).text(); container.find('.custom-select-value').text(text).removeClass('is-invalid'); container.next('select').val(value).trigger('change'); container.find('.custom-select-options').hide(); });
    $(document).on('keyup', '.custom-select-search', function() { let filter = $(this).val().toUpperCase(); $(this).next('.custom-select-list').find('li').each(function() { $(this).toggleClass('d-none', $(this).text().toUpperCase().indexOf(filter) === -1); }); });
    $(document).on('click', function(e) { if (!$(e.target).closest('.custom-select-container').length) { $('.custom-select-options').hide(); } });
    $('#add_button').on('click', function() { $('#modalLabel').text('Add New Position'); $('#submit_button').text('Save'); $('#form_method').val('POST'); $('#modalForm').attr('action', "{{ route('dreamJobPositionList.store') }}"); $('#formModal').modal('show'); });
    $(document).on('click', '.edit-button', function() { let id = $(this).data('id'); let url = "{{ route('dreamJobPositionList.edit', ':id') }}".replace(':id', id); $.ajax({ url: url, type: 'GET', success: function(response) { if (response && response.id) { $('#modalLabel').text('Edit Position'); $('#submit_button').text('Update'); $('#form_method').val('PUT'); let actionUrl = "{{ route('dreamJobPositionList.update', ':id') }}".replace(':id', response.id); $('#modalForm').attr('action', actionUrl); $('#id').val(response.id); $('#name').val(response.name); $('#dream_job_department_id').val(response.dream_job_department_id); let selectedText = $(`#dream_job_department_id option[value="${response.dream_job_department_id}"]`).text(); $('.custom-select-value').text(selectedText || 'Select Department'); $('#formModal').modal('show'); } else { Swal.fire('Error!', 'Could not retrieve valid data.', 'error'); } }, error: function(xhr) { console.log('Error fetching edit data:', xhr.responseText); } }); });
    $('#formModal').on('hidden.bs.modal', function () { clearForm(); });
    $('#modalForm').on('submit', function(e) { e.preventDefault(); let url = $(this).attr('action'); let method = $('#form_method').val(); let formData = $(this).serialize(); $.ajax({ url: url, type: method, data: formData, success: function(response) { $('#formModal').modal('hide'); Swal.fire({ icon: 'success', title: 'Success!', text: response.success, timer: 1500, showConfirmButton: false }); fetchData(currentPage, currentSearch); }, error: function(xhr) { if (xhr.status === 422) { let errors = xhr.responseJSON.errors; $('.form-control, .custom-select-value').removeClass('is-invalid'); $('.invalid-feedback').text(''); $.each(errors, function(key, value) { let element = $(`#${key}`); let errorDiv = $(`#${key}_error`); errorDiv.text(value[0]); if (key === 'dream_job_department_id') { element.prev('.custom-select-container').find('.custom-select-value').addClass('is-invalid'); } else { element.addClass('is-invalid'); } }); } else { console.log('Error submitting form:', xhr.responseText); } } }); });
    $(document).on('click', '.delete-button', function() { let id = $(this).data('id'); Swal.fire({ title: 'Are you sure?', text: "You won't be able to revert this!", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Yes, delete it!' }).then((result) => { if (result.isConfirmed) { let url = "{{ route('dreamJobPositionList.destroy', ':id') }}".replace(':id', id); $.ajax({ url: url, type: 'POST', data: { _token: "{{ csrf_token() }}", _method: 'DELETE' }, success: function(response) { Swal.fire('Deleted!', response.success, 'success'); fetchData(currentPage, currentSearch); }, error: function(xhr) { console.log('Error deleting item:', xhr.responseText); } }); } }); });
    function renderPagination(response) { let paginationLinks = $('#pagination_links'); paginationLinks.empty(); if (response.last_page <= 1) return; let currentPage = response.current_page; let lastPage = response.last_page; paginationLinks.append(`<li class="page-item ${currentPage === 1 ? 'disabled' : ''}"><a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a></li>`); const window = 1; let pages = [...new Set([1, ...Array.from({length: Math.min(lastPage - 1, currentPage + window) - Math.max(2, currentPage - window) + 1}, (_, i) => Math.max(2, currentPage - window) + i), lastPage > 1 ? lastPage : 1])]; let lastAddedPage = 0; for (const page of pages) { if (lastAddedPage > 0 && page - lastAddedPage > 1) { paginationLinks.append('<li class="page-item disabled"><span class="page-link">...</span></li>'); } paginationLinks.append(`<li class="page-item ${currentPage === page ? 'active' : ''}"><a class="page-link" href="#" data-page="${page}">${page}</a></li>`); lastAddedPage = page; } paginationLinks.append(`<li class="page-item ${currentPage === lastPage ? 'disabled' : ''}"><a class="page-link" href="#" data-page="${currentPage + 1}">Next</a></li>`); }

});
</script>
@endsection
