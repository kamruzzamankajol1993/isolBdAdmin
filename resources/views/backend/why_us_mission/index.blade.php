@extends('backend.master.master')

@section('title')
Why Us Mission | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Why Us Mission</h4>

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

                                    @if(count($why_us_mission_list) == 1)

                                    @foreach($why_us_mission_list as $all_back_video)

 <form class="custom-validation" action="{{ route('admin.why_us_mission.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{ $all_back_video->id }}" name="id" />
       <div class="row">
        <div class="form-group col-md-12 col-sm-12">
            <label for="name">Description</label>
            <textarea  class="form-control form-control-sm" id="classic-editor" name="des" placeholder="Enter Description">{!! $all_back_video->des !!}</textarea>

        </div>


        <div class="form-group col-md-12 col-sm-12">
            <label for="name">Image</label>
            <input type="file" class="form-control form-control-sm"  id="name" name="image" placeholder="Enter Title">
            <img src="{{ asset('/') }}{{ $all_back_video->image }}" style="height:20px;"/>

        </div>
       </div>
       <button type="submit" class="btn btn-primary btn-lg mt-3 waves-effect  btn-sm waves-light mr-1">
        Submit
     </button>
</form>
@endforeach
                                    @else
                                    <form class="custom-validation" action="{{ route('admin.why_us_mission.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                           <div class="row">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name">Description</label>
                                                <textarea  class="form-control form-control-sm" id="classic-editor" name="des" placeholder="Enter Description"></textarea>

                                            </div>


                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name">Image</label>
                                                <input type="file" class="form-control form-control-sm" value="" id="name" name="image" placeholder="Enter Title">

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



@endsection

@section('script')




@endsection







