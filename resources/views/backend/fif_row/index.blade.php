@extends('backend.master.master')

@section('title')
Fifth  Row Big Title & Other | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Fifth  Row Big Title & Other </h4>

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
                                @if (Auth::guard('admin')->user()->can('fifth_row_add'))
<button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add Other Information
                                    </button>
@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    @include('flash_message')
                    <div class="row mt-2">
                        <!--start-->
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">


                                    @if(count($big_five_list) == 1)

                                    @foreach($big_five_list as $all_back_video)

 <form class="custom-validation" action="{{ route('admin.fifth_row_info_big.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{ $all_back_video->id }}" name="id" />
       <div class="row">
        <div class="form-group col-md-12 col-sm-12">
            <label for="name">Big Description</label>
            <textarea  class="form-control form-control-sm" id="classic-editor" name="des" placeholder="Enter Description">{!! $all_back_video->des !!}</textarea>

        </div>



       </div>
       <button type="submit" class="btn btn-primary btn-lg mt-3 waves-effect  btn-sm waves-light mr-1">
        Submit
     </button>
</form>
@endforeach
                                    @else
                                    <form class="custom-validation" action="{{ route('admin.fifth_row_info_big.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                           <div class="row">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name">Big Description</label>
                                                <textarea  class="form-control form-control-sm" id="classic-editor" name="des" placeholder="Enter Description"></textarea>

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
                        <!--end--->
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                            <th>SL</th>

<th>title</th>
                                            <th>Description</th>
                                          <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($big_other_list as $user)


                                <tr>
                                   <td>


                                    {{ $loop->index+1 }}




                                </td>


                                <td>{{$user->title }}</td>

<td>{!! $user->des !!}</td>



                                    <td>
                                      @if (Auth::guard('admin')->user()->can('fifth_row_update'))

                    <button type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lgrr{{ $user->id }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-pencil-alt"></i></button>


                                          <!-- Modal -->
                                          <div class="modal fade bs-example-modal-lgrr{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Other Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form class="custom-validation" action="{{ route('admin.fifth_row_info.update') }}" method="post" enctype="multipart/form-data">
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
                                <label for="name">Description</label>
                                <textarea  class="form-control form-control-sm" id="classic-editor" name="des" placeholder="Enter Description">{!! $user->des !!}</textarea>

                            </div>


                            <div class="form-group col-md-6 col-sm-12">
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






                                  @if (Auth::guard('admin')->user()->can('fifth_row_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.fifth_row_info.delete',$user->id) }}" method="POST" style="display: none;">

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
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Other Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.fifth_row_info.store') }}" method="post" enctype="multipart/form-data">
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
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')




@endsection







