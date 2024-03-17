@extends('backend.master.master')

@section('title')
Job Title| {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Job Title</h4>

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
                                @if (Auth::guard('admin')->user()->can('job_title_add'))

<button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg456">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add
                                                                      </button>

@endif
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
                                            <th>Category Name</th>
                                            <th>Department Name</th>
<th>Name</th>

                                          <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($headline_list as $user)


                                <tr>
                                   <td>


                                    {{ $loop->index+1 }}




                                </td>

                                <td>{{$user->cat_id }}</td>
                                <td>{{$user->dp_id }}</td>
                                <td>{{$user->name }}</td>

{{-- <td>{!! $user->des !!}</td> --}}



                                    <td>
                                      @if (Auth::guard('admin')->user()->can('job_title_update'))

                    <button type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lgrr{{ $user->id }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-pencil-alt"></i></button>


                                          <!-- Modal -->
                                          <div class="modal fade bs-example-modal-lgrr{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Job Title Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form class="custom-validation" action="{{ route('admin.job_title.update') }}" method="post" enctype="multipart/form-data">
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
                                                        <label for="name">Job Category </label>
                                                        <select class="form-control form-control-sm" id="job_cat_edit{{ $user->id }}" name="cat_id">

                                                            @foreach($headline_list1 as $all_dp)
                                    <option value="{{ $all_dp->name }}" {{ $user->cat_id == $all_dp->name ? 'selected':''  }}>{{ $all_dp->name }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12">
                                                        <label for="name">Job Department </label>
                                                        <select class="form-control form-control-sm" id="job_dp_edit{{ $user->id }}" name="dp_id">

                                                            @foreach($headline_list2 as $all_dp)
                                                            <option value="{{ $all_dp->name }}" {{ $user->dp_id == $all_dp->name ? 'selected':''  }}>{{ $all_dp->name }}</option>
                                                                                    @endforeach

                                                        </select>

                                                    </div>



                            {{-- <div class="form-group col-md-12 col-sm-12">
                                <label for="name">Description</label>
                                <textarea  class="form-control form-control-sm" id="classic-editor" name="des" placeholder="Enter Description">{!! $user->des !!}</textarea>

                            </div> --}}


                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control form-control-sm" value="{{ $user->name }}" id="name" name="name" placeholder="Enter Name">

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






                                  @if (Auth::guard('admin')->user()->can('job_title_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.job_title.delete',$user->id) }}" method="POST" style="display: none;">

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
                <h5 class="modal-title" id="myLargeModalLabel">Add Job Title Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.job_title.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="row">

                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-body">

                                      <div class="row">









                  {{-- <div class="form-group col-md-12 col-sm-12">
                    <label for="name">Description</label>
                    <textarea  class="form-control form-control-sm" id="classic-editor" name="des" placeholder="Enter Description"></textarea>

                </div> --}}

                <div class="form-group col-md-12 col-sm-12">
                    <label for="name">Job Category </label>
                    <select class="form-control form-control-sm" id="job_cat" name="cat_id">
<option>Please Select</option>
                        @foreach($headline_list1 as $all_dp)
<option value="{{ $all_dp->name }}">{{ $all_dp->name }}</option>
                        @endforeach

                    </select>

                </div>


                <div class="form-group col-md-12 col-sm-12">
                    <label for="name">Job Department </label>
                    <select class="form-control form-control-sm" id="job_dp" name="dp_id">



                    </select>

                </div>


                <div class="form-group col-md-12 col-sm-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter Name">

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

<script>
    $(document).ready(function(){
        $("#job_cat").change(function(){

            var cat_name = $(this).val()



            $.ajax({
            url: "{{ route('from_job_title_to_cat') }}",
            method: 'GET',
            data: {cat_name:cat_name},
            success: function(data) {

              $("#job_dp").html('');
              $("#job_dp").html(data);
            }
        });
    });


    ////


    $("[id^=job_cat_edit]").change(function(){


              var main_id = $(this).attr('id');
              var id_for_pass = main_id.slice(12);


var cat_name = $('#job_cat_edit'+id_for_pass).val()



$.ajax({
url: "{{ route('from_job_title_to_cat') }}",
method: 'GET',
data: {cat_name:cat_name},
success: function(data) {

  $("#job_dp_edit"+id_for_pass).html('');
  $("#job_dp_edit"+id_for_pass).html(data);
}
});
});
});
</script>

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







