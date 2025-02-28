@extends('backend.master.master')

@section('title')
Survey List| {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Survey List</h4>

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
                        {!! $allComplainList->links() !!}
                        @foreach ($allComplainList as $user)
                        <div class="col-6 mt-3">
                            <div class="card">
                                <div class="card-body">

                                   <div class="table-responsive">
                                                <table class="table table-striped table-hover" >
                                               
                                                <tbody>
                                                    <tr>
                                                        <td>Question</td>
                                                        <td>Answer</td>
                                                    </tr>
                                                    


                                        <tr>
                                
                                           <td>What is your current employment status?</td>
                                           <td>{{$user->employee_status}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>What is your total employment period with the Company?</td>
                                           <td>{{$user->duration}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>On a scale of 1-5, how much do you enjoy working for the Company?</td>
                                           <td>{{$user->enjoy_rating}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>On a scale of 1-5, how well does your supervisor/manager encourage teamwork?/td>
                                           <td>{{$user->encourage_rating}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>On a scale of 1-5, how would you rate the teamwork in your department?</td>
                                           <td>{{$user->teamwork_rating}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>On a scale of 1-5, how fair and respectful do you feel treated by your supervisor/manager?</td>
                                           <td>{{$user->respect_rating}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>On a scale of 1-5, do you feel that your supervisor/manager is interested in listening to your concerns?</td>
                                           <td>{{$user->listen_rating}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>On a scale of 1-5, do you believe that your supervisor/manager provides you with enough training and supports your career development?</td>
                                           <td>{{$user->support_rating}}</td>
                                          
                                         
                                        </tr>
                                        <tr>
                                
                                           <td>What benefits do you appreciate the most? (Multiple answers possible)</td>
                                           <td>{{$user->benefit}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>What reasons keep you loyal to the Company and make you return for another contract? (Multiple answers possible)</td>
                                           <td>{{$user->loyal}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>What reasons would you consider leaving the Company? (Multiple answers possible)</td>
                                           <td>{{$user->leaving}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>If you decide not to return for another contract, would you inform your management team on board before signing off?</td>
                                           <td>{{$user->contract}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>What benefits would you like to have that we currently do not offer? (Free text box)</td>
                                           <td>{{$user->do_not_offer}}</td>
                                          
                                         
                                        </tr>
                                        
                                        <tr>
                                
                                           <td>If you could change one thing on board, what would that be? (Free text box)</td>
                                           <td>{{$user->onBoard}}</td>
                                          
                                         
                                        </tr>
                                        
                                       
                                    
                                                </tbody>

                                            </table>

                                            </div>

                                </div>
                            </div>
                        </div>
                         @endforeach
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







