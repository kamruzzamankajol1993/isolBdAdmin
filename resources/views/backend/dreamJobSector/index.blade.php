@extends('backend.master.master')

@section('title')
Job Sector | {{ $ins_name }}
@endsection

@section('css')
<style>
    /* Custom styles for pagination */
    .pagination {
        justify-content: center;
    }
    .pagination .page-item.active .page-link {
        background-color: #4b88a2;
        border-color: #4b88a2;
    }
    .pagination .page-link {
        color: #4b88a2;
    }
    .pagination .page-link:hover {
        color: #3a6a7e;
    }
    /* Style for validation errors */
    .is-invalid {
        border-color: #dc3545 !important;
    }
    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: .25rem;
        font-size: .875em;
        color: #dc3545;
    }
</style>
@endsection

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Job Sector</h4>
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
                            <i class="fas fa-plus-circle"></i> Add New Sector
                        </button>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="search_input" placeholder="Search by name...">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>

                @include('flash_message')

                <!-- Custom Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                            <!-- Data will be loaded here via AJAX -->
                        </tbody>
                    </table>
                </div>
                <!-- End Custom Table -->

                <!-- Pagination -->
                <nav>
                    <ul class="pagination" id="pagination_links">
                        <!-- Pagination links will be loaded here -->
                    </ul>
                </nav>
                <!-- End Pagination -->

            </div>
        </div>
    </div>
</div> <!-- end row -->


<!-- Add/Edit Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Add New Sector</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="modalForm" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="_method" id="form_method">

                    <div class="mb-3">
                        <label for="name" class="form-label">Sector Name</label>
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
<!-- End Add/Edit Modal -->

@endsection

@section('script')
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    let currentPage = 1;
    let currentSearch = '';

    // Function to fetch and render data
    function fetchData(page = 1, search = '') {
        currentPage = page;
        currentSearch = search;
        $.ajax({
            url: "{{ route('dreamJobSectorList.index') }}",
            type: 'GET',
            data: {
                page: page,
                search: { value: search }
            },
            success: function(response) {
                // Render table rows
                let tableBody = $('#table_body');
                tableBody.empty();
                if(response.data && response.data.length > 0) {
                    $.each(response.data, function(index, item) {
                        let row = `<tr>
                            <td>${(response.from + index)}</td>
                            <td>${item.name}</td>
                            <td>
                                <button class="btn btn-sm btn-info edit-button" data-id="${item.id}"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger delete-button" data-id="${item.id}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
                        tableBody.append(row);
                    });
                } else {
                    tableBody.append('<tr><td colspan="3" class="text-center">No data found</td></tr>');
                }


                // Render pagination
                let paginationLinks = $('#pagination_links');
                paginationLinks.empty();
                if(response.last_page > 1) {
                    // Previous button
                    paginationLinks.append(`<li class="page-item ${response.current_page === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" data-page="${response.current_page - 1}">Previous</a></li>`);

                    // Page numbers
                    for (let i = 1; i <= response.last_page; i++) {
                        paginationLinks.append(`<li class="page-item ${response.current_page === i ? 'active' : ''}">
                            <a class="page-link" href="#" data-page="${i}">${i}</a></li>`);
                    }

                    // Next button
                    paginationLinks.append(`<li class="page-item ${response.current_page === response.last_page ? 'disabled' : ''}">
                        <a class="page-link" href="#" data-page="${response.current_page + 1}">Next</a></li>`);
                }
            },
            error: function(xhr) {
                console.log('Error fetching data:', xhr.responseText);
            }
        });
    }

    // Initial data load
    fetchData();

    // Search functionality
    $('#search_input').on('keyup', function() {
        let search = $(this).val();
        fetchData(1, search);
    });

    // Pagination click handler
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        let page = $(this).data('page');
        fetchData(page, currentSearch);
    });

    // Clear form and errors
    function clearForm() {
        $('#modalForm')[0].reset();
        $('#id').val('');
        $('#form_method').val('');
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').text('');
    }

    // Add button click handler
    $('#add_button').on('click', function() {
        $('#modalLabel').text('Add New Sector');
        $('#submit_button').text('Save');
        $('#form_method').val('POST');
        $('#modalForm').attr('action', "{{ route('dreamJobSectorList.store') }}");
        $('#formModal').modal('show');
    });

    // Edit button click handler
    $(document).on('click', '.edit-button', function() {
        let id = $(this).data('id');
        let url = "{{ route('dreamJobSectorList.edit', ':id') }}".replace(':id', id);

        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                // **DIAGNOSTIC LOG**
                console.log('Server Response for Edit:', response);

                if (response && response.name) {
                    $('#modalLabel').text('Edit Sector');
                    $('#submit_button').text('Update');
                    $('#form_method').val('PUT');
                    
                    let actionUrl = "{{ route('dreamJobSectorList.update', ':id') }}".replace(':id', response.id);
                    $('#modalForm').attr('action', actionUrl);

                    // Populate the form with the fetched data
                    $('#id').val(response.id);
                    $('#name').val(response.name);
                    
                    $('#formModal').modal('show');
                } else {
                    Swal.fire('Error!', 'Could not retrieve valid data for this item.', 'error');
                }
            },
            error: function(xhr) {
                console.log('Error fetching edit data:', xhr.responseText);
                Swal.fire('Error!', 'Could not fetch data from the server.', 'error');
            }
        });
    });

    // Reset the form when the modal is closed
    $('#formModal').on('hidden.bs.modal', function () {
        clearForm();
    });

    // Form submission (Add/Update)
    $('#modalForm').on('submit', function(e) {
        e.preventDefault();
        let url = $(this).attr('action');
        let method = $('#form_method').val();
        let formData = $(this).serialize();

        $.ajax({
            url: url,
            type: method,
            data: formData,
            success: function(response) {
                $('#formModal').modal('hide');
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: response.success,
                    timer: 1500,
                    showConfirmButton: false
                });
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
                } else {
                     console.log('Error submitting form:', xhr.responseText);
                }
            }
        });
    });

    // Delete button click handler
    $(document).on('click', '.delete-button', function() {
        let id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                let url = "{{ route('dreamJobSectorList.destroy', ':id') }}".replace(':id', id);

                $.ajax({
                    url: url,
                    type: 'POST', // Using POST with _method spoofing for DELETE
                    data: {
                        _token: "{{ csrf_token() }}",
                        _method: 'DELETE'
                    },
                    success: function(response) {
                        Swal.fire(
                            'Deleted!',
                            response.success,
                            'success'
                        );
                        fetchData(currentPage, currentSearch);
                    },
                    error: function(xhr) {
                        console.log('Error deleting item:', xhr.responseText);
                        Swal.fire(
                            'Error!',
                            'Something went wrong.',
                            'error'
                        );
                    }
                });
            }
        });
    });
});
</script>
@endsection
