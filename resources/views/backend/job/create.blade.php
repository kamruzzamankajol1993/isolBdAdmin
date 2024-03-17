@extends('backend.master.master')

@section('title')
 Create Job | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Create Job</h4>

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

                                    <form  action="{{ route('jobList.store') }}" method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">
                                        @csrf
                                           <div class="row">

                                              <div class="col-lg-12">
                                                <div class="row">

                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Job Category / Vessel Type</label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_cat" name="job_category_id">
                                    <option value="">---Please Select---</option>
                                                            @foreach($headline_list1 as $all_dp)
                                    <option value="{{ $all_dp->name }}"  >{{ $all_dp->name }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Job Department </label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_dp" name="job_department_id">
                                                            <option value="">---Please Select---</option>


                                                        </select>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Job Title</label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_title_id" name="job_title_id">
                                                            <option value="">---Please Select---</option>


                                                        </select>

                                                    </div>


                                                  </div>


                                                  <div class="row mt-3">

                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Agency Name</label>
                                                        <input type="text" required class="form-control form-control-sm " name="agency_name"/>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Salary</label>
                                                        <input type="text" required class="form-control form-control-sm " name="salary"/>

                                                    </div>


                                                    <div class="form-group col-md-4 col-sm-12">
                                                        <label for="name">Job Area</label>
                                                        <input type="text" required class="form-control form-control-sm " name="job_area"/>

                                                    </div>


                                                  </div>


                                                  <div class="row mt-3">

                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">Job Type </label>
                                                        <select required class="form-control form-control-sm selectTag" id="job_type" name="job_type">
                                                            <option value="">---Please Select---</option>
                                                            <option value="Full Time">Full Time</option>
                                                            <option value="Part time">Part time</option>
                                                            <option value="Permanent">Permanent</option>
                                                            <option value="Several Trips">Several Trips</option>
                                                            <option value="Temporary">Temporary</option>

                                                        </select>

                                                    </div>


                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label for="name">Contract Duration </label>
                                                        <select required class="form-control form-control-sm selectTag" id="duration" name="duration">
                                                            <option value="">---Please Select---</option>
                                                            <option value="1 week">1 week</option>
                                                            <option value="2 weeks">2 weeks</option>
                                                            <option value="2 weeks on/off">2 weeks on/off</option>
                                                            <option value="3 weeks">3 weeks</option>
                                                            <option value="3-4 weeks">3-4 weeks</option>
                                                            <option value="4 weeks">4 weeks</option>
                                                            <option value="4 weeks on/off">4 weeks on/off</option>
                                                            <option value="4 weeks +/-2">4 weeks +/-2</option>
                                                            <option value="4-6 weeks">4-6 weeks</option>
                                                            <option value="4-6 weeks on/off">4-6 weeks on/off</option>
                                                            <option value="4-10 weeks">4-10 weeks</option>
                                                            <option value="5 weeks">5 weeks</option>
                                                            <option value="5 weeks on/off">5 weeks on/off</option>
                                                            <option value="5-6 weeks on/off">5-6 weeks on/off</option>
                                                            <option value="5-10 weeks">5-10 weeks</option>
                                                            <option value="6 weeks">6 weeks</option>
                                                            <option value="6 weeks on/off">6 weeks on/off</option>
                                                            <option value="6 weeks +/- 2">6 weeks +/- 2</option>
                                                            <option value="6 weeks on/ 2 weeks off">6 weeks on/ 2 weeks off</option>
                                                            <option value="6-7 weeks">6-7 weeks</option>
                                                            <option value="6-8 weeks">6-8 weeks</option>
                                                            <option value="6-10 weeks">6-10 weeks</option>
                                                            <option value="7 weeks">7 weeks</option>
                                                            <option value="7-8 weeks">7-8 weeks</option>
                                                            <option value="8 weeks">8 weeks</option>
                                                            <option value="8 weeks +/- 1">8 weeks +/- 1</option>
                                                            <option value="8 weeks +/- 2">8 weeks +/- 2</option>
                                                            <option value="8-10 weeks">8-10 weeks</option>
                                                            <option value="9 weeks">9 weeks</option>
                                                            <option value="9 weeks on/off">9 weeks on/off</option>
                                                            <option value="9 weeks +/-1">9 weeks +/-1</option>
                                                            <option value="9-13 weeks">9-13 weeks</option>
                                                            <option value="10 weeks +/- 2">10 weeks +/- 2</option>
                                                            <option value="10 weeks">10 weeks</option>
                                                            <option value="10 weeks on/off">10 weeks on/off</option>
                                                            <option value="10-12 weeks">10-12 weeks</option>
                                                            <option value="12 weeks">12 weeks</option>
                                                            <option value="12-14 weeks">12-14 weeks</option>
                                                            <option value="13 weeks">13 weeks</option>
                                                            <option value="1 month">1 month</option>
                                                            <option value="1-2 months">1-2 months</option>
                                                            <option value="1 month/(negotiation)">1 month/(negotiation)</option>
                                                            <option value="1.5-3 months">1.5-3 months</option>
                                                            <option value="2 months">2 months</option>
                                                            <option value="2-3 months">2-3 months</option>
                                                            <option value="2 months +/-1">2 months +/-1</option>
                                                            <option value="2 months on/off">2 months on/off</option>
                                                            <option value="2.5 months">2.5 months</option>
                                                            <option value="2-3 months on/1-2 months off">2-3 months on/1-2 months off
                                                            </option>
                                                            <option value="2-4 months">2-4 months</option>
                                                            <option value="2.5-3 months">2.5-3 months</option>
                                                            <option value="3 months">3 months</option>
                                                            <option value="3 months +/-1">3 months +/-1</option>
                                                            <option value="3 months +/-1 (negotiable)">3 months +/-1 (negotiable)</option>
                                                            <option value="3 months on/1 off">3 months on/1 off</option>
                                                            <option value="3 months on/ 2 off">3 months on/ 2 off</option>
                                                            <option value="3-2 months">3-2 months</option>
                                                            <option value="3-4 months">3-4 months</option>
                                                            <option value="4 months">4 months</option>
                                                            <option value="4 months +1">4 months +1</option>
                                                            <option value="4 months +/-1">4 months +/-1</option>
                                                            <option value="4 months on/ 1 month off">4 months on/ 1 month off</option>
                                                            <option value="4 months on/2 off">4 months on/2 off</option>
                                                            <option value="4-5 months">4-5 months</option>
                                                            <option value="4-6 months">4-6 months</option>
                                                            <option value="5 months">5 months</option>
                                                            <option value="5 months +1">5 months +1</option>
                                                            <option value="5 months +/-1">5 months +/-1</option>
                                                            <option value="6 months">6 months</option>
                                                            <option value="6 months +/-1">6 months +/-1</option>
                                                            <option value="8-12 months">8-12 months</option>
                                                            <option value="All time">All time</option>
                                                            <option value="Onshore">Onshore</option>
                                                            <option value="Permanent job">Permanent job</option>
                                                            <option value="Negotiable">Negotiable</option>
                                                            <option value="8 days">8 days</option>
                                                            <option value="10 days">10 days</option>
                                                            <option value="28 days on/off">28 days on/off</option>
                                                            <option value="30 days on/off">30 days on/off</option>
                                                            <option value="40 days on/off">40 days on/off</option>
                                                            <option value="42 days on/off">42 days on/off</option>
                                                            <option value="44 days">44 days</option>
                                                            <option value="45 days on/off">45 days on/off</option>
                                                            <option value="45-60 days on/off">45-60 days on/off</option>
                                                            <option value="60 days on / 30 days off">60 days on / 30 days off</option>
                                                            <option value="60 days on/off">60 days on/off</option>
                                                            <option value="70 days on/off">70 days on/off</option>
                                                            <option value="80 days on/off">80 days on/off</option>
                                                            <option value="90 days on/off">90 days on/off</option>
                                                            <option value="70/35 days on/off">70/35 days on/off</option>
                                                            <option value="35/35 days on/off">35/35 days on/off</option>
                                                            <option value="56/28 days on/off">56/28 days on/off</option>
                                                            <option value="165/30 days on/off">165/30 days on/off</option>
                                                            <option value="3 weeks on/off">3 weeks on/off</option>
                                                            <option value="4-6 weeks">4-6 weeks</option>
                                                            <option value="100 Days">100 Days</option>
                                                            <option value="105 Days">105 Days</option>
                                                            <option value="8 months +/- 2">8 months +/- 2</option>


                                                        </select>

                                                    </div>





                                                  </div>

                                                  <div class="row mt-3">

                                                    <div class="form-group col-md-3 col-sm-12">
                                                        <label for="name">Post Date</label>
                                                        <input type="text" required class="form-control form-control-sm datepicker" name="post_date"/>

                                                    </div>


                                                    <div class="form-group col-md-3 col-sm-12">
                                                        <label for="name">Expier Date</label>
                                                        <input type="text" required class="form-control form-control-sm datepicker" name="expire_date"/>

                                                    </div>


                                                    <div class="form-group col-md-3 col-sm-12">
                                                        <label for="name">Job Experience</label>
                                                        <input type="text" required class="form-control form-control-sm " name="job_experience"/>

                                                    </div>
                                                    <div class="form-group col-md-3 col-sm-12">
                                                        <label for="name">status</label>
                                                        <select required class="form-control form-control-sm selectTag"  name="status">
                                                            <option value="">---Please Select---</option>
                                                            <option value="1" selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>

                                                  </div>

                                                  <div class="row mt-3">
                                                    <div class="form-group col-md-12 col-sm-12">
                                                    <label for="name">Description</label>
                                                    <textarea required id="classic-editor" class="form-control form-control-sm"  name="description">

                                                    </textarea>
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







