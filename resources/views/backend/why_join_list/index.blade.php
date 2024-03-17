@extends('backend.master.master')

@section('title')
Why Join Us | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Why Join Us</h4>

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
                                @if (Auth::guard('admin')->user()->can('system_information_add'))
{{-- <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add System Information
                                    </button> --}}
@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @include('flash_message')

                                    @if(count($why_join_list) == 1)

                                    @foreach($why_join_list as $all_back_video)

 <form class="custom-validation" action="{{ route('admin.third_row_info.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{ $all_back_video->id }}" name="id" />
       <div class="row">
        <div class="form-group col-md-12 col-sm-12">
            <label for="name">Description</label>
            <textarea  class="form-control form-control-sm" id="classic-editor" name="des" placeholder="Enter Description">{!! $all_back_video->des !!}</textarea>

        </div>


        <div class="form-group col-md-12 col-sm-12">
            <label for="name">Title</label>
            <input type="text" class="form-control form-control-sm" value="{{ $all_back_video->title }}" id="name" name="title" placeholder="Enter Title">

        </div>
       </div>
       <button type="submit" class="btn btn-primary btn-lg mt-3 waves-effect  btn-sm waves-light mr-1">
        Submit
     </button>
</form>
@endforeach
                                    @else
                                    <form class="custom-validation" action="{{ route('admin.third_row_info.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                           <div class="row">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name">Description</label>
                                                <textarea  class="form-control form-control-sm" id="classic-editor" name="des" placeholder="Enter Description"></textarea>

                                            </div>


                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name">Title</label>
                                                <input type="text" class="form-control form-control-sm" value="" id="name" name="title" placeholder="Enter Title">

                                            </div>
                                           </div>
                                           <button type="submit" class="btn btn-primary btn-lg mt-3 waves-effect  btn-sm waves-light mr-1">
                                            Update
                                         </button>
                                    </form>
                                    @endif

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->






<!--  Modal content for the above example -->

  <!--  Large modal example -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add System Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.system_information.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="row">

                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-body">
<div class="row">
<div class="form-group col-md-6 col-sm-12">
                          <label for="password">System Name</label>
              <input type="text" class="form-control form-control-sm"  name="System_Name" placeholder="Enter Name">


                                                  </div>


                                                  <div class="form-group col-md-6 col-sm-12">
                                                    <label for="name">Phone</label>
                                                    <input type="text" class="form-control form-control-sm"  name="Phone" placeholder="Enter Phone">
                                                </div>

                                                 <div class="form-group col-md-6 col-sm-12">
                                                    <label for="name">Email</label>
                                                    <input type="email" class="form-control form-control-sm" name="Email" placeholder="Enter Email">
                                                </div>




                                                  <div class="form-group col-md-6 col-sm-12">
                                          <label for="password"> Address</label>
           <input type="text" class="form-control form-control-sm"  name="Address" placeholder="Enter Address">
                                                  </div>
                                              </div>
                                      <div class="row">







                  <div class="form-group col-md-6 col-sm-12">
                      <label for="name"> Logo</label>
                      <input type="file" class="form-control form-control-sm" id="name" name="logo" placeholder="Enter Address">

                  </div>


                  <div class="form-group col-md-6 col-sm-12">
                    <label for="name">Icon</label>
                    <input type="file" class="form-control form-control-sm" id="name" name="icon" placeholder="Enter Icon">

                </div>





              </div>






                                  </div>

                              </div>
                          </div>



                          <div class="col-lg-12">
                              <div class="float-right d-none d-md-block">
                                  <div class="form-group mb-4">
                                      <div>
                                          <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                             Submit
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div> <!-- end col -->
                  </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')




@endsection







