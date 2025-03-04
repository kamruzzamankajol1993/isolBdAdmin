@extends('backend.master.master')

@section('title')
Hiring Process List| {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Hiring Process  List</h4>

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


                        <div class="col-sm-12">
                            <div class="float-right d-md-block">
                                <div class="dropdown">
                                @if (Auth::guard('admin')->user()->can('eight_row_add'))

<button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg456">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add
                                                                      </button>
                                                                      @endif

                                </div>
                            </div>
                        </div>
                  
                        @include('flash_message')
                        <div class="col-12 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                            <th>SL</th>
                                            <th>Type</th>
                                            <th>Image</th>
                                             <th>title</th>
                                            <th>Description</th>
                                          <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($how_it_work_list as $user)


                                <tr>
                                   <td>{{ $loop->index+1 }} </td>
                                   <td>{{$user->type }}</td>
                                <td><img src="{{ asset('/') }}{{ $user->image }}" style="height:30px;"/></td>
                                 <td>{{$user->title }}</td>
                                  <td>{!! $user->des !!}</td>
                                    <td>
                                      @if (Auth::guard('admin')->user()->can('eight_row_update'))

                    <button type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lgrr{{ $user->id }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-pencil-alt"></i></button>


                                          <!-- Modal -->
                                          <div class="modal fade bs-example-modal-lgrr{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Hiring Process  Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form class="custom-validation" action="{{ route('admin.how_it_work.update') }}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
<div class="row">


                        <input type="hidden" class="form-control form-control-sm" value="{{ $user->id }}" name="id" placeholder="Enter Name">






                                                        </div>
                                                <div class="row">


                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="name">Type</label>
                                                        <select class="form-control form-control-sm" id="name" name="type" placeholder="Enter Title">
                                                            <option value="">--select--</option>"
                                                            <option value="Our Hiring Process-For Applicants" {{$user->type == 'Our Hiring Process-For Applicants' ? 'selected':''}}>Our Hiring Process-For Applicants</option>
                                                            <option value="Hiring Process-For Clients" {{$user->type == 'Hiring Process-For Clients' ? 'selected':''}}>Hiring Process-For Clients</option>"
                                                        </select>
                                    
                                                    </div>




                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name">Image</label>
                                <input type="file" class="form-control form-control-sm" id="name" name="image" placeholder="Enter Address">
                                <img src="{{ asset('/') }}{{ $user->image }}" style="height:20px;"/>
                            </div>
                            <small style="color:red;">Image Size: 214px*145px</small>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name">Description</label>
                                <textarea  class="form-control form-control-sm"  name="des" placeholder="Enter Description">{!! $user->des !!}</textarea>

                            </div>


                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name">Title</label>
                                <input type="text" class="form-control form-control-sm" value="{{ $user->title }}" id="name" name="title" placeholder="Enter Title">

                            </div>



                        </div>






                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-lg-12">

                                                    <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                                       Update
                                                    </button>

                                    </div>
                                </div> <!-- end col -->
                            </form>
      </div>

    </div>
  </div>
</div>


@endif






                                  @if (Auth::guard('admin')->user()->can('eight_row_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.how_it_work.delete',$user->id) }}" method="POST" style="display: none;">

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



<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg456" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Hiring Process  Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.how_it_work.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="row">

                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-body">

                                      <div class="row">

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Type</label>
                                            <select class="form-control form-control-sm" id="name" name="type" placeholder="Enter Title">
                                                <option value="">--select--</option>"
                                                <option value="Our Hiring Process-For Applicants">Our Hiring Process-For Applicants</option>
                                                <option value="Hiring Process-For Clients">Hiring Process-For Clients</option>"
                                            </select>
                        
                                        </div>

                  <div class="form-group col-md-12 col-sm-12">
                      <label for="name">Image</label>
                      <input type="file" class="form-control form-control-sm" id="name" name="image" placeholder="Enter Address">

                  </div>
                  <small style="color:red;">Image Size: 214px*145px</small>
                  <div class="form-group col-md-12 col-sm-12">
                    <label for="name">Description</label>
                    <textarea  class="form-control form-control-sm"  name="des" placeholder="Enter Description"></textarea>

                </div>


                <div class="form-group col-md-12 col-sm-12">
                    <label for="name">Title</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="title" placeholder="Enter Title">

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







