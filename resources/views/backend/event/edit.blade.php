@extends('backend.master.master')

@section('title')
 Update Event | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Update Event</h4>

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

                                    <form  action="{{ route('eventList.update',$job_list->id) }}" method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">
                                        @csrf
                                        @method('PUT')
                                           <div class="row">

                                              <div class="col-lg-12">
                                         


                                                  <div class="row mt-3">

                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">Event Title</label>
                                                        <input type="text" value="{{$job_list->title}}" required class="form-control form-control-sm " name="title"/>

                                                    </div>

                                                 

                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">Event Date</label>
                                                        <input type="text" value="{{$job_list->date}}" required class="form-control form-control-sm datepicker" name="date"/>

                                                    </div>


                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">Event Time</label>
                                                        <input type="text" value="{{$job_list->time}}" required class="form-control form-control-sm" name="time"/>

                                                    </div>


                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">Speaker Name</label>
                                                        <input type="text" value="{{$job_list->speaker}}" required class="form-control form-control-sm " name="speaker"/>

                                                    </div>
                                                  
                                                    
                                                  

                                                  </div>

                                                  <div class="row mt-3">
                                                    <div class="form-group col-md-12 col-sm-12">
                                                    <label for="name">Description</label>
                                                    <textarea required id="classic-editor" class="form-control form-control-sm"  name="des">
{{$job_list->des}}
                                                    </textarea>
                                                    </div>
                                                    
                                                      <div class="form-group col-md-12 col-sm-12">
                                                        <label for="name">status</label>
                                                        <select required class="form-control form-control-sm selectTag"  name="status">
                                                            <option value="">---Please Select---</option>
                                                            <option value="1" {{$job_list->status == 1 ? 'selected':''}}>Active</option>
                                                            <option value="0" {{$job_list->status == 0 ? 'selected':''}}>Inactive</option>
                                                        </select>
                                                    </div>


                                                  </div>
                                              </div>



                                              <div class="col-lg-12 mt-5">

                                                              <button type="submit" class="btn btn-primary  waves-effect  waves-light mr-1">
                                                                 Submit
                                                              </button>

                                              </div>
                                          </div> <!-- end col -->
                                      </form>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->






<!--  Modal content for the above example -->





@endsection

@section('script')

<script>
    $(document).ready(function(){


        $("#job_dp").change(function(){

var cat_name = $(this).val()



$.ajax({
url: "{{ route('getJobTitleForDepartment') }}",
method: 'GET',
data: {cat_name:cat_name},
success: function(data) {

  $("#job_title_id").html('');
  $("#job_title_id").html(data);
}
});
});

        ///////////////
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







