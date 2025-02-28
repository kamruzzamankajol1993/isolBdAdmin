@extends('backend.master.master')

@section('title')
Complain List| {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Complain List</h4>

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

                                   <div class="table-responsive">
                                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                       
                                                      <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($allComplainList as $user)


                                        <tr>
                                           <td>{{ $loop->index+1 }}</td>


                                           <td>{{$user->first_name.' '.$user->last_name }}</td>
                                           <td>{{$user->email_address }}</td>
                                           <td>{{$user->mobile_number }}</td>
                                          

                                            <td>
                                                
                                                     @if (Auth::guard('admin')->user()->can('complainListUpdate'))

                    <button type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lgrr{{ $user->id }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-eye"></i></button>


                                          <!-- Modal -->
                                          <div class="modal fade bs-example-modal-lgrr{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
          
          <p>Subject: {{$user->subject }}</p>
          <p>{{$user->msg }}</p>
     
      </div>

    </div>
  </div>
</div>


@endif
                                               

                                          @if (Auth::guard('admin')->user()->can('complainListDelete'))

        <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                            <form id="delete-form-{{ $user->id }}" action="{{ route('complainList.destroy',$user->id) }}" method="POST" style="display: none;">

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







