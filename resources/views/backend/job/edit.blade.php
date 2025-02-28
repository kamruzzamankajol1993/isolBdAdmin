@extends('backend.master.master')

@section('title')
 Update Vacancy | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Update Vacancy</h4>

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

                                    <form  action="{{ route('jobList.update',$job_list->id) }}" method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">
                                        @csrf
                                        @method('PUT')
                                           <div class="row">

                                              <div class="col-lg-12">
                                                <div class="row">

                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Vacancy Category / Vessel Type</label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_cat" name="job_category_id">
                                    <option value="">---Please Select---</option>
                                                            @foreach($headline_list1 as $all_dp)
                                    <option value="{{ $all_dp->name }}" {{ $all_dp->name == $job_list->job_category_id ? 'selected':''}}>{{ $all_dp->name }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Vacancy Department </label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_dp" name="job_department_id">
                                                            <option value="">---Please Select---</option>

                                                            @foreach($headline_list2 as $all_dp)
                                                            <option value="{{ $all_dp->name }}" {{ $job_list->job_department_id == $all_dp->name ? 'selected':''  }}>{{ $all_dp->name }}</option>
                                                                                    @endforeach
                                                        </select>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Vacancy Title</label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_title_id" name="job_title_id">
                                                            <option value="">---Please Select---</option>
                                                            @foreach($headline_list as $all_dp)
                                                            <option value="{{ $all_dp->name }}" {{ $job_list->job_title_id == $all_dp->name ? 'selected':''  }}>{{ $all_dp->name }}</option>
                                                                                    @endforeach

                                                        </select>

                                                    </div>


                                                     <!-- new code start --->

                                                     <div class="form-group col-md-6 col-sm-12 mt-3">
                                                        <label for="name">Vacancy Contract Type</label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_contract_type" name="job_contract_type">
                                    <option value="">---Please Select---</option>
                                                            @foreach($contactTypeList as $all_dp)
                                    <option value="{{ $all_dp->name }}"  {{ $job_list->job_contract_type == $all_dp->name ? 'selected':''  }}>{{ $all_dp->name }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>


                                                    <div class="form-group col-md-6 col-sm-12 mt-3">
                                                        <label for="name">Vacancy Location</label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_location" name="job_location">
                                    <option value="">---Please Select---</option>
                                                            @foreach($locationList as $all_dp)
                                    <option value="{{ $all_dp->name }}"  {{ $job_list->job_location == $all_dp->name ? 'selected':''  }}>{{ $all_dp->name }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>


                                                    <!-- new code end -->


                                                  </div>


                                                  <div class="row mt-3">

                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Agency Name</label>
                                                        <input type="text" required class="form-control form-control-sm " value="{{ $job_list->agency_name  }}" name="agency_name"/>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Salary</label>
                                                        <input type="text" required class="form-control form-control-sm " name="salary" value="{{ $job_list->salary  }}"/>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Vacancy Type </label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_type" name="job_type">
                                                            <option value="">---Please Select---</option>
                                                            <option value="Full Time" {{ $job_list->job_type == 'Full Time' ? 'selected':''  }}>Full Time</option>
                                                            <option value="Part time" {{ $job_list->job_type == 'Part time' ? 'selected':''  }}>Part time</option>
                                                            <option value="Permanent" {{ $job_list->job_type == 'Permanent' ? 'selected':''  }}>Permanent</option>
                                                            <option value="Several Trips" {{ $job_list->job_type == 'Several Trips' ? 'selected':''  }}>Several Trips</option>
                                                            <option value="Temporary" {{ $job_list->job_type == 'Temporary' ? 'selected':''  }}>Temporary</option>

                                                        </select>

                                                    </div>


                                                  </div>

                                                  <div class="row mt-3">

                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Post Date</label>
                                                        <input type="text" required class="form-control form-control-sm datepicker" name="post_date" value="{{ $job_list->post_date  }}"/>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Expier Date</label>
                                                        <input type="text" required class="form-control form-control-sm datepicker" name="expire_date" value="{{ $job_list->expire_date  }}"/>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Vacancy Experience</label>
                                                        <input type="text" required class="form-control form-control-sm " name="job_experience" value="{{ $job_list->job_experience  }}"/>

                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">status</label>
                                                        <select required class="form-control form-control-sm selectTag"  name="status">
                                                            <option value="">---Please Select---</option>
                                                            <option value="1" {{ $job_list->status == '1' ? 'selected':''  }}>Active</option>
                                                            <option value="0" {{ $job_list->status == '0' ? 'selected':''  }}>Inactive</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">Urgent Vacancy</label>
                                                        <select required class="form-control form-control-sm selectTag"  name="urgent_vacancy">
                                                            <option value="">---Please Select---</option>
                                                            <option value="1" {{ $job_list->urgent_vacancy == '1' ? 'selected':''  }}>Yes</option>
                                                            <option value="0" {{ $job_list->urgent_vacancy == '0' ? 'selected':''  }}>No</option>
                                                        </select>
                                                    </div>

                                                  </div>

                                                  <div class="row mt-3">
                                                    <div class="form-group col-md-12 col-sm-12">
                                                    <label for="name">Description</label>
                                                    <textarea required id="classic-editor" class="form-control form-control-sm"  name="description">
{!! $job_list->description !!}
                                                    </textarea>
                                                    </div>


                                                  </div>
                                              </div>



                                              <div class="col-lg-12 mt-5">

                                                              <button type="submit" class="btn btn-primary  waves-effect   waves-light mr-1">
                                                                 Update
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







