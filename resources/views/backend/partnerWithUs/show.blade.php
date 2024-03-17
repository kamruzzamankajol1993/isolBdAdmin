@extends('backend.master.master')

@section('title')
{{$partnerWithUs->name }} | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Partner With US</h4>

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

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row mt-2">
                        @include('flash_message')
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">

                                    <li>Name: {{$partnerWithUs->name }}</li>
                                    <li>Company Name: {{$partnerWithUs->company_name }}</li>
                                    <li>State: {{$partnerWithUs->state }}</li>
                                    <li>Country: {{$partnerWithUs->country }}</li>
                                    <li>Email: {{$partnerWithUs->email }}</li>
                                    <li>Phone: {{$partnerWithUs->phone }}</li>
                                    <li>Message: {{$partnerWithUs->des }}</li>
                                    <li>Status: {{$partnerWithUs->status }}</li>
                                </div>
                            </div>
                        </div>
                        @if($partnerWithUs->status == 'Accepted')

                        @else
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                            <form method="post" action="{{ route('partnerWithUs.update',$partnerWithUs->id) }}">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="name" value="{{$partnerWithUs->name }}"/>
                                <input type="hidden" name="email" value="{{$partnerWithUs->email }}"/>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="password">Change Status</label>
                                    <select name="status" id="roles" class="form-control form-control-sm">
                                        <option value="">--Select--</option>
                    <option value="Pending" {{ $partnerWithUs->status == 'Pending' ? 'selected':'' }}>Pending</option>
                    <option value="Accepted" {{ $partnerWithUs->status == 'Accepted' ? 'selected':'' }}>Accepted</option>
                    <option value="Rejected" {{ $partnerWithUs->status == 'Rejected' ? 'selected':'' }}>Rejected</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                        </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div> <!-- end row -->






<!--  Modal content for the above example -->





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







