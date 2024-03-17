@extends('backend.master.master')

@section('title')
 Update Job | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Update Job</h4>

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
                                                        <label for="name">Job Category / Vessel Type</label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_cat" name="job_category_id">
                                    <option value="">---Please Select---</option>
                                                            @foreach($headline_list1 as $all_dp)
                                    <option value="{{ $all_dp->name }}" {{ $all_dp->name == $job_list->job_category_id ? 'selected':''}}>{{ $all_dp->name }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Job Department </label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_dp" name="job_department_id">
                                                            <option value="">---Please Select---</option>

                                                            @foreach($headline_list2 as $all_dp)
                                                            <option value="{{ $all_dp->name }}" {{ $job_list->job_department_id == $all_dp->name ? 'selected':''  }}>{{ $all_dp->name }}</option>
                                                                                    @endforeach
                                                        </select>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Job Title</label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_title_id" name="job_title_id">
                                                            <option value="">---Please Select---</option>
                                                            @foreach($headline_list as $all_dp)
                                                            <option value="{{ $all_dp->name }}" {{ $job_list->job_title_id == $all_dp->name ? 'selected':''  }}>{{ $all_dp->name }}</option>
                                                                                    @endforeach

                                                        </select>

                                                    </div>


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
                                                        <label for="name">Job Area</label>
                                                        <input type="text" required class="form-control form-control-sm " name="job_area" value="{{ $job_list->job_area  }}"/>

                                                    </div>


                                                  </div>


                                                  <div class="row mt-3">

                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">Job Type </label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_type" name="job_type">
                                                            <option value="">---Please Select---</option>
                                                            <option value="Full Time" {{ $job_list->job_type == 'Full Time' ? 'selected':''  }}>Full Time</option>
                                                            <option value="Part time" {{ $job_list->job_type == 'Part time' ? 'selected':''  }}>Part time</option>
                                                            <option value="Permanent" {{ $job_list->job_type == 'Permanent' ? 'selected':''  }}>Permanent</option>
                                                            <option value="Several Trips" {{ $job_list->job_type == 'Several Trips' ? 'selected':''  }}>Several Trips</option>
                                                            <option value="Temporary" {{ $job_list->job_type == 'Temporary' ? 'selected':''  }}>Temporary</option>

                                                        </select>

                                                    </div>


                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">Contract Duration </label>
                                                        <select required class="form-control form-control-sm selectTag" id="duration" name="duration">
                                                            <option value="">---Please Select---</option>
                                                            <option value="1 week" {{ $job_list->duration == '1 week' ? 'selected':''  }}>1 week</option>
                                                            <option value="2 weeks" {{ $job_list->duration == '2 week' ? 'selected':''  }}>2 weeks</option>
                                                            <option value="2 weeks on/off" {{ $job_list->duration == '2 weeks on/off' ? 'selected':''  }}>2 weeks on/off</option>
                                                            <option value="3 weeks" {{ $job_list->duration == '3 weeks' ? 'selected':''  }}>3 weeks</option>
                                                            <option value="3-4 weeks" {{ $job_list->duration == '3-4 weeks' ? 'selected':''  }}>3-4 weeks</option>
                                                            <option value="4 weeks" {{ $job_list->duration == '4 weeks' ? 'selected':''  }}>4 weeks</option>
                                                            <option value="4 weeks on/off" {{ $job_list->duration == '4 weeks on/off' ? 'selected':''  }}>4 weeks on/off</option>
                                                            <option value="4 weeks +/-2" {{ $job_list->duration == '4 weeks +/-2' ? 'selected':''  }}>4 weeks +/-2</option>
                                                            <option value="4-6 weeks" {{ $job_list->duration == '4-6 weeks' ? 'selected':''  }}>4-6 weeks</option>
                                                            <option value="4-6 weeks on/off" {{ $job_list->duration == '4-6 weeks on/off' ? 'selected':''  }}>4-6 weeks on/off</option>
                                                            <option value="4-10 weeks" {{ $job_list->duration == '4-10 weeks' ? 'selected':''  }}>4-10 weeks</option>
                                                            <option value="5 weeks" {{ $job_list->duration == '5 weeks' ? 'selected':''  }}>5 weeks</option>
                                                            <option value="5 weeks on/off" {{ $job_list->duration == '5 weeks on/off' ? 'selected':''  }}>5 weeks on/off</option>
                                                            <option value="5-6 weeks on/off" {{ $job_list->duration == '5-6 weeks on/off' ? 'selected':''  }}>5-6 weeks on/off</option>
                                                            <option value="5-10 weeks" {{ $job_list->duration == '5-10 weeks' ? 'selected':''  }}>5-10 weeks</option>
                                                            <option value="6 weeks" {{ $job_list->duration == '6 weeks' ? 'selected':''  }}>6 weeks</option>
                                                            <option value="6 weeks on/off" {{ $job_list->duration == '6 weeks on/off' ? 'selected':''  }}>6 weeks on/off</option>
                                                            <option value="6 weeks +/- 2" {{ $job_list->duration == '6 weeks +/- 2' ? 'selected':''  }}>6 weeks +/- 2</option>
                                                            <option value="6 weeks on/ 2 weeks off" {{ $job_list->duration == '6 weeks on/ 2 weeks off' ? 'selected':''  }}>6 weeks on/ 2 weeks off</option>
                                                            <option value="6-7 weeks" {{ $job_list->duration == '6-7 weeks' ? 'selected':''  }}>6-7 weeks</option>
                                                            <option value="6-8 weeks" {{ $job_list->duration == '6-8 weeks' ? 'selected':''  }} >6-8 weeks</option>
                                                            <option value="6-10 weeks" {{ $job_list->duration == '6-10 weeks' ? 'selected':''  }}>6-10 weeks</option>
                                                            <option value="7 weeks" {{ $job_list->duration == '7 weeks' ? 'selected':''  }}>7 weeks</option>
                                                            <option value="7-8 weeks" {{ $job_list->duration == '7-8 weeks' ? 'selected':''  }}>7-8 weeks</option>
                                                            <option value="8 weeks" {{ $job_list->duration == '8 weeks' ? 'selected':''  }}>8 weeks</option>
                                                            <option value="8 weeks +/- 1" {{ $job_list->duration == '8 weeks +/- 1' ? 'selected':''  }}>8 weeks +/- 1</option>
                                                            <option value="8 weeks +/- 2" {{ $job_list->duration == '8 weeks +/- 2' ? 'selected':''  }}>8 weeks +/- 2</option>
                                                            <option value="8-10 weeks" {{ $job_list->duration == '8-10 weeks' ? 'selected':''  }}>8-10 weeks</option>
                                                            <option value="9 weeks" {{ $job_list->duration == '9 weeks' ? 'selected':''  }}>9 weeks</option>
                                                            <option value="9 weeks on/off" {{ $job_list->duration == '9 weeks on/off' ? 'selected':''  }}>9 weeks on/off</option>
                                                            <option value="9 weeks +/-1" {{ $job_list->duration == '9 weeks +/-1' ? 'selected':''  }}>9 weeks +/-1</option>
                                                            <option value="9-13 weeks" {{ $job_list->duration == '9-13 weeks' ? 'selected':''  }}>9-13 weeks</option>
                                                            <option value="10 weeks +/- 2" {{ $job_list->duration == '10 weeks +/- 2' ? 'selected':''  }}>10 weeks +/- 2</option>
                                                            <option value="10 weeks" {{ $job_list->duration == '10 weeks' ? 'selected':''  }}>10 weeks</option>
                                                            <option value="10 weeks on/off" {{ $job_list->duration == '10 weeks on/off' ? 'selected':''  }}>10 weeks on/off</option>
                                                            <option value="10-12 weeks" {{ $job_list->duration == '10-12 weeks' ? 'selected':''  }}>10-12 weeks</option>
                                                            <option value="12 weeks" {{ $job_list->duration == '12 weeks' ? 'selected':''  }}>12 weeks</option>
                                                            <option value="12-14 weeks" {{ $job_list->duration == '12-14 weeks' ? 'selected':''  }}>12-14 weeks</option>
                                                            <option value="13 weeks" {{ $job_list->duration == '13 weeks' ? 'selected':''  }}>13 weeks</option>
                                                            <option value="1 month" {{ $job_list->duration == '1 month' ? 'selected':''  }}>1 month</option>
                                                            <option value="1-2 months" {{ $job_list->duration == '1-2 months' ? 'selected':''  }}>1-2 months</option>
                                                            <option value="1 month/(negotiation)" {{ $job_list->duration == '1 month/(negotiation)' ? 'selected':''  }}>1 month/(negotiation)</option>
                                                            <option value="1.5-3 months" {{ $job_list->duration == '1.5-3 months' ? 'selected':''  }}>1.5-3 months</option>
                                                            <option value="2 months" {{ $job_list->duration == '2 months' ? 'selected':''  }}>2 months</option>
                                                            <option value="2-3 months" {{ $job_list->duration == '2-3 months' ? 'selected':''  }}>2-3 months</option>
                                                            <option value="2 months +/-1" {{ $job_list->duration == '2 months +/-1' ? 'selected':''  }}>2 months +/-1</option>
                                                            <option value="2 months on/off" {{ $job_list->duration == '2 months on/off' ? 'selected':''  }}>2 months on/off</option>
                                                            <option value="2.5 months" {{ $job_list->duration == '2.5 months' ? 'selected':''  }}>2.5 months</option>
                                                            <option value="2-3 months on/1-2 months off" {{ $job_list->duration == '2-3 months on/1-2 months off' ? 'selected':''  }}>2-3 months on/1-2 months off
                                                            </option>
                                                            <option value="2-4 months" {{ $job_list->duration == '2-4 months' ? 'selected':''  }}>2-4 months</option>
                                                            <option value="2.5-3 months" {{ $job_list->duration == '2.5-3 months' ? 'selected':''  }}>2.5-3 months</option>
                                                            <option value="3 months" {{ $job_list->duration == '3 months' ? 'selected':''  }}>3 months</option>
                                                            <option value="3 months +/-1" {{ $job_list->duration == '3 months +/-1' ? 'selected':''  }}>3 months +/-1</option>
                                                            <option value="3 months +/-1 (negotiable)" {{ $job_list->duration == '3 months +/-1 (negotiable)' ? 'selected':''  }}>3 months +/-1 (negotiable)</option>
                                                            <option value="3 months on/1 off" {{ $job_list->duration == '3 months on/1 off' ? 'selected':''  }}>3 months on/1 off</option>
                                                            <option value="3 months on/ 2 off" {{ $job_list->duration == '3 months on/ 2 off' ? 'selected':''  }}>3 months on/ 2 off</option>
                                                            <option value="3-2 months" {{ $job_list->duration == '3-2 months' ? 'selected':''  }}>3-2 months</option>
                                                            <option value="3-4 months" {{ $job_list->duration == '3-4 months' ? 'selected':''  }}>3-4 months</option>
                                                            <option value="4 months" {{ $job_list->duration == '4 months' ? 'selected':''  }}>4 months</option>
                                                            <option value="4 months +1" {{ $job_list->duration == '4 months +1' ? 'selected':''  }}>4 months +1</option>
                                                            <option value="4 months +/-1" {{ $job_list->duration == '4 months +/-1' ? 'selected':''  }}>4 months +/-1</option>
                                                            <option value="4 months on/ 1 month off" {{ $job_list->duration == '4 months on/ 1 month off' ? 'selected':''  }}>4 months on/ 1 month off</option>
                                                            <option value="4 months on/2 off" {{ $job_list->duration == '4 months on/2 off' ? 'selected':''  }}>4 months on/2 off</option>
                                                            <option value="4-5 months" {{ $job_list->duration == '4-5 months' ? 'selected':''  }}>4-5 months</option>
                                                            <option value="4-6 months" {{ $job_list->duration == '4-6 months' ? 'selected':''  }}>4-6 months</option>
                                                            <option value="5 months" {{ $job_list->duration == '5 months' ? 'selected':''  }}>5 months</option>
                                                            <option value="5 months +1" {{ $job_list->duration == '5 months +1' ? 'selected':''  }}>5 months +1</option>
                                                            <option value="5 months +/-1" {{ $job_list->duration == '5 months +/-1' ? 'selected':''  }}>5 months +/-1</option>
                                                            <option value="6 months" {{ $job_list->duration == '6 months' ? 'selected':''  }}>6 months</option>
                                                            <option value="6 months +/-1" {{ $job_list->duration == '6 months +/-1' ? 'selected':''  }}>6 months +/-1</option>
                                                            <option value="8-12 months" {{ $job_list->duration == '8-12 months' ? 'selected':''  }}>8-12 months</option>
                                                            <option value="All time" {{ $job_list->duration == 'All time' ? 'selected':''  }}>All time</option>
                                                            <option value="Onshore" {{ $job_list->duration == 'Onshore' ? 'selected':''  }}>Onshore</option>
                                                            <option value="Permanent job" {{ $job_list->duration == 'Permanent job' ? 'selected':''  }}>Permanent job</option>
                                                            <option value="Negotiable" {{ $job_list->duration == 'Negotiable' ? 'selected':''  }}>Negotiable</option>
                                                            <option value="8 days" {{ $job_list->duration == '8 days' ? 'selected':''  }}>8 days</option>
                                                            <option value="10 days" {{ $job_list->duration == '10 days' ? 'selected':''  }}>10 days</option>
                                                            <option value="28 days on/off" {{ $job_list->duration == '28 days on/off' ? 'selected':''  }}>28 days on/off</option>
                                                            <option value="30 days on/off" {{ $job_list->duration == '30 days on/off' ? 'selected':''  }}>30 days on/off</option>
                                                            <option value="40 days on/off" {{ $job_list->duration == '40 days on/off' ? 'selected':''  }}>40 days on/off</option>
                                                            <option value="42 days on/off" {{ $job_list->duration == '42 days on/off' ? 'selected':''  }}>42 days on/off</option>
                                                            <option value="44 days" {{ $job_list->duration == '44 days' ? 'selected':''  }}>44 days</option>
                                                            <option value="45 days on/off" {{ $job_list->duration == '45 days on/off' ? 'selected':''  }}>45 days on/off</option>
                                                            <option value="45-60 days on/off" {{ $job_list->duration == '45-60 days on/off' ? 'selected':''  }}>45-60 days on/off</option>
                                                            <option value="60 days on / 30 days off" {{ $job_list->duration == '60 days on / 30 days off' ? 'selected':''  }}>60 days on / 30 days off</option>
                                                            <option value="60 days on/off" {{ $job_list->duration == '60 days on/off' ? 'selected':''  }}>60 days on/off</option>
                                                            <option value="70 days on/off" {{ $job_list->duration == '70 days on/off' ? 'selected':''  }}>70 days on/off</option>
                                                            <option value="80 days on/off" {{ $job_list->duration == '80 days on/off' ? 'selected':''  }}>80 days on/off</option>
                                                            <option value="90 days on/off" {{ $job_list->duration == '90 days on/off' ? 'selected':''  }}>90 days on/off</option>
                                                            <option value="70/35 days on/off" {{ $job_list->duration == '70/35 days on/off' ? 'selected':''  }}>70/35 days on/off</option>
                                                            <option value="35/35 days on/off" {{ $job_list->duration == '35/35 days on/off' ? 'selected':''  }}>35/35 days on/off</option>
                                                            <option value="56/28 days on/off" {{ $job_list->duration == '56/28 days on/off' ? 'selected':''  }}>56/28 days on/off</option>
                                                            <option value="165/30 days on/off" {{ $job_list->duration == '165/30 days on/off' ? 'selected':''  }}>165/30 days on/off</option>
                                                            <option value="3 weeks on/off" {{ $job_list->duration == '3 weeks on/off' ? 'selected':''  }}>3 weeks on/off</option>
                                                            <option value="4-6 weeks" {{ $job_list->duration == '4-6 weeks' ? 'selected':''  }}>4-6 weeks</option>
                                                            <option value="100 Days" {{ $job_list->duration == '100 Days' ? 'selected':''  }}>100 Days</option>
                                                            <option value="105 Days" {{ $job_list->duration == '105 Days' ? 'selected':''  }}>105 Days</option>
                                                            <option value="8 months +/- 2" {{ $job_list->duration == '8 months +/- 2' ? 'selected':''  }}>8 months +/- 2</option>


                                                        </select>

                                                    </div>





                                                  </div>

                                                  <div class="row mt-3">

                                                    <div class="form-group col-md-3 col-sm-12">
                                                        <label for="name">Post Date</label>
                                                        <input type="text" required class="form-control form-control-sm datepicker" name="post_date" value="{{ $job_list->post_date  }}"/>

                                                    </div>


                                                    <div class="form-group col-md-3 col-sm-12">
                                                        <label for="name">Expier Date</label>
                                                        <input type="text" required class="form-control form-control-sm datepicker" name="expire_date" value="{{ $job_list->expire_date  }}"/>

                                                    </div>


                                                    <div class="form-group col-md-3 col-sm-12">
                                                        <label for="name">Job Experience</label>
                                                        <input type="text" required class="form-control form-control-sm " name="job_experience" value="{{ $job_list->job_experience  }}"/>

                                                    </div>
                                                    <div class="form-group col-md-3 col-sm-12">
                                                        <label for="name">status</label>
                                                        <select required class="form-control form-control-sm selectTag"  name="status">
                                                            <option value="">---Please Select---</option>
                                                            <option value="1" {{ $job_list->status == '1' ? 'selected':''  }}>Active</option>
                                                            <option value="0" {{ $job_list->status == '0' ? 'selected':''  }}>Inactive</option>
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







