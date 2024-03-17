@extends('backend.master.master')

@section('title')
Job Seeker List| {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Job Seeker List</h4>

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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- new code -->
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pending</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Accepted</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1" aria-selected="false">Rejected</button>
                                          </li>
                                      </ul>
                                      <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="table-responsive">
                                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>


                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Nationality</th>
                                                        <th>Matrial Status</th>
                                                        <th>Status</th>
                                                      <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($partnerWithUs as $user)


                                        <tr>
                                           <td>{{ $loop->index+1 }}</td>


                                           <td>{{$user->first_name.' '.$user->last_name }}</td>
                                           <td>{{$user->email_address }}</td>
                                           <td>{{$user->phone }}</td>
                                           <td>{{$user->nationality }}</td>
                                           <td>{{$user->martial_status }}</td>
                                           <td>{{$user->status }}</td>




                                            <td>
                                                @if (Auth::guard('admin')->user()->can('jobSeekerView'))

                                                <a   href="{{ route('jobSeeker.show',$user->id) }}" class="btn btn-success waves-light waves-effect  btn-sm" ><i class="fas fa-eye"></i></a>


                                                @endif

                                          @if (Auth::guard('admin')->user()->can('jobSeekerDelete'))

        <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                            <form id="delete-form-{{ $user->id }}" action="{{ route('jobSeeker.destroy',$user->id) }}" method="POST" style="display: none;">

                                                            @csrf
        @method('DELETE')
                                                        </form>
                                                        @endif
                                            </td>
                                        </tr>
        @endforeach


                                                </tbody>

                                            </table>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="table-responsive">
                                                <table id="bt1" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>


                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Nationality</th>
                                                        <th>Matrial Status</th>
                                                        <th>Status</th>
                                                      <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($partnerWithUsP as $user)


                                        <tr>
                                           <td>{{ $loop->index+1 }}</td>


                                           <td>{{$user->first_name.' '.$user->last_name }}</td>
                                           <td>{{$user->email_address }}</td>
                                           <td>{{$user->phone }}</td>
                                           <td>{{$user->nationality }}</td>
                                           <td>{{$user->martial_status }}</td>
                                           <td>{{$user->status }}</td>




                                            <td>
                                                @if (Auth::guard('admin')->user()->can('jobSeekerView'))

                                                <a   href="{{ route('jobSeeker.show',$user->id) }}" class="btn btn-success waves-light waves-effect  btn-sm" ><i class="fas fa-eye"></i></a>


                                                @endif

                                          @if (Auth::guard('admin')->user()->can('jobSeekerDelete'))

        <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                            <form id="delete-form-{{ $user->id }}" action="{{ route('jobSeeker.destroy',$user->id) }}" method="POST" style="display: none;">

                                                            @csrf
        @method('DELETE')
                                                        </form>
                                                        @endif
                                            </td>
                                        </tr>
        @endforeach


                                                </tbody>

                                            </table>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <div class="table-responsive">
                                                <table id="bt2" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>


                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Nationality</th>
                                                        <th>Matrial Status</th>
                                                        <th>Status</th>
                                                      <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($partnerWithUsA as $user)


                                        <tr>
                                           <td>{{ $loop->index+1 }}</td>


                                           <td>{{$user->first_name.' '.$user->last_name }}</td>
                                           <td>{{$user->email_address }}</td>
                                           <td>{{$user->phone }}</td>
                                           <td>{{$user->nationality }}</td>
                                           <td>{{$user->martial_status }}</td>
                                           <td>{{$user->status }}</td>




                                            <td>

                                                @if (Auth::guard('admin')->user()->can('jobSeekerView'))

                                                <a   href="{{ route('jobSeeker.show',$user->id) }}" class="btn btn-success waves-light waves-effect  btn-sm" ><i class="fas fa-eye"></i></a>


                                                @endif
                                          @if (Auth::guard('admin')->user()->can('jobSeekerDelete'))

        <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                            <form id="delete-form-{{ $user->id }}" action="{{ route('jobSeeker.destroy',$user->id) }}" method="POST" style="display: none;">

                                                            @csrf
        @method('DELETE')
                                                        </form>
                                                        @endif
                                            </td>
                                        </tr>
        @endforeach


                                                </tbody>

                                            </table>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                    <th>SL</th>


                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Nationality</th>
                                                    <th>Matrial Status</th>
                                                    <th>Status</th>
                                                  <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($partnerWithUsR as $user)


                                        <tr>
                                           <td>{{ $loop->index+1 }}</td>



                                        <td>{{$user->first_name.' '.$user->last_name }}</td>
                                        <td>{{$user->email_address }}</td>
                                        <td>{{$user->phone }}</td>
                                        <td>{{$user->nationality }}</td>
                                        <td>{{$user->martial_status }}</td>
                                        <td>{{$user->status }}</td>




                                            <td>

                                                @if (Auth::guard('admin')->user()->can('jobSeekerView'))

                                                <a   href="{{ route('jobSeeker.show',$user->id) }}" class="btn btn-success waves-light waves-effect  btn-sm" ><i class="fas fa-eye"></i></a>


                                                @endif
                                          @if (Auth::guard('admin')->user()->can('jobSeekerDelete'))

        <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                            <form id="delete-form-{{ $user->id }}" action="{{ route('jobSeeker.destroy',$user->id) }}" method="POST" style="display: none;">

                                                            @csrf
        @method('DELETE')
                                                        </form>
                                                        @endif
                                            </td>
                                        </tr>
        @endforeach


                                                </tbody>

                                            </table>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- end new code -->

                                </div>
                            </div>
                        </div>
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







