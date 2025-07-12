@extends('backend.master.master')

@section('title')
Vacancy | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Vacancy</h4>

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
    <div class="col-sm-6">
        <div class="float-right d-md-block">
            <div class="dropdown">
                <a href="{{ route('jobList.create') }}" class="btn btn-primary dropdown-toggle waves-effect btn-sm waves-light" type="button">
                    <i class="far fa-calendar-plus  mr-2"></i> Add Vacancy Detail
                </a>
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
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Vacancy Id</th>
                                <th>Vacancy Title</th>
                                <th>Agency Name</th>
                                <th>Salary</th>
                                <th>Area</th>
                                <th>Vacancy Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($job_list as $job)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $job->job_id }}</td>
                                <td>{{ $job->position->name ?? 'N/A' }}</td>
                                <td>{{ $job->agency_name }}</td>
                                <td>{{ $job->salary }}</td>
                                <td>{{ $job->job_area }}</td>
                                <td>{{ $job->job_type }}</td>
                                <td>
                                    <a type="button" href="{{ route('jobList.show', $job->id) }}"
                                        class="btn btn-success waves-light waves-effect btn-sm" >
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a type="button" href="{{ route('jobList.edit', $job->id) }}"
                                        class="btn btn-primary waves-light waves-effect btn-sm" >
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <button type="button" class="btn btn-danger waves-light waves-effect btn-sm" onclick="deleteTag({{ $job->id }})" data-toggle="tooltip" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <form id="delete-form-{{ $job->id }}" action="{{ route('jobList.destroy', $job->id) }}" method="POST" style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end row -->
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
                document.getElementById('delete-form-' + id).submit();
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
