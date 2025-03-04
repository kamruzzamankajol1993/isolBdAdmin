@extends('backend.master.master')

@section('title')
Subscription List| {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Subscription List</h4>

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
                    @include('flash_message')
                    <div class="row mt-2">
                    
                        <!--end slider table -->
                        <div class="col-12">
                            <div class="card">
                   
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                            <th>SL</th>
                                            <th>Name</th>
<th>What's App Number</th>
                                            <th>Email</th>
                                          <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employer_list as $user)


                                <tr>
                                   <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>{{ $user->name }}</td>

                                <td>{{ $user->phone }}</td>

                                <td>{{ $user->email }}</td>



                                    <td>
                                  

                               

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.ninth_row_info_second.delete',$user->id) }}" method="POST" style="display: none;">

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






<!--  Modal content for the above example -->

  <!--  Large modal example -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Employee Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.ninth_row_info.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="row">

                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-body">

                                      <div class="row">







                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control form-control-sm" value="" id="name" name="title" placeholder="Enter Title">
            
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Designation</label>
                                            <input type="text" class="form-control form-control-sm" value="" id="name" name="desig" placeholder="Enter Designation">
            
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Review</label>
                                            <textarea  class="form-control form-control-sm"  name="des" placeholder="Enter Description"></textarea>
            
                                        </div>








              </div>






                                  </div>

                              </div>
                          </div>



                          <div class="col-lg-12">

                                          <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                             Submit
                                          </button>

                          </div>
                      </div> <!-- end col -->
                  </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg456" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Employer Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.ninth_row_info_second.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="row">

                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-body">

                                      <div class="row">







                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control form-control-sm" value="" id="name" name="title" placeholder="Enter Title">
            
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Designation</label>
                                            <input type="text" class="form-control form-control-sm" value="" id="name" name="desig" placeholder="Enter Designation">
            
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Review</label>
                                            <textarea  class="form-control form-control-sm" name="des" placeholder="Enter Description"></textarea>
            
                                        </div>









              </div>






                                  </div>

                              </div>
                          </div>



                          <div class="col-lg-12">

                                          <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                             Submit
                                          </button>

                          </div>
                      </div> <!-- end col -->
                  </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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







