@extends('backend.master.master')

@section('title')
Employee Application | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Employee Application</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li> --}}
                    <li class="breadcrumb-item active"></li>
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
                                    <div class="table-responsive">
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                            <th>SL</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Date Of Birth</th>
                                            <th>Country</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employeeApplicationList as $user)


                                <tr>
                                   <td>{{ $loop->index+1 }}</td>
                                   <td> @if(empty($user->applicant_photo))
                                 
                                    @else
                                    <img src="{{$ins_front_url}}{{$user->applicant_photo}}" style="height: 60px;"/>
                                    @endif</td>
                                   <td>{{$user->first_name.' '.$user->last_name}}</td>
                                   <td>{{$user->gender }}</td>
                                   <td>{{$user->mobile_phone }}</td>
                                   <td>{{$user->email_address }}</td>
                                   <td>{{$user->dob }}</td>
                                   <td>{{$user->birth_place_country }}</td>
                                   <td>{{$user->status }}</td>
                                    <td>

                                        @if (Auth::guard('admin')->user()->can('eApplicationView'))
                                        <a type="button" href="{{ route('employeeAppplication.show',base64_encode($user->id)) }}"
                                          class="btn btn-success waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-eye"></i></a>
                                        @endif


                                      @if (Auth::guard('admin')->user()->can('eApplicationUpdate'))
                                      <a type="button" href="{{ route('employeeAppplication.edit',base64_encode($user->id)) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>
                                      @endif

                                  @if (Auth::guard('admin')->user()->can('eApplicationDelete'))

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('employeeAppplication.destroy',$user->id) }}" method="POST" style="display: none;">
@method('DELETE')
                                                    @csrf

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







