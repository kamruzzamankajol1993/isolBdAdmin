@extends('backend.master.master')

@section('title')
Dashboard
@endsection


@section('body')
 <!-- start page title -->
 <div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Dashboard</h4>

            @include('flash_message')
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">

                <div class="float-end mt-2">
                    <div id="total-revenue-chart"></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$partnerWithUsPTotal}}</span></h4>
                    <p class="text-muted mb-0">Total Pending Cv </p>
                </div>
                
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart"> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$partnerWithUsATotal}}</span></h4>
                    <p class="text-muted mb-0">Total Accepted Cv </p>
                </div>
               
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="customers-chart"> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$totalJob}}</span></h4>
                    <p class="text-muted mb-0">Total Job</p>
                </div>
               
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">

        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="growth-chart"></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$totalEvent}}</span></h4>
                    <p class="text-muted mb-0">Total Event</p>
                </div>
                
            </div>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div id="piechart_3d" style="width: 500px; height: 240px;"></div>
</div>
 </div>
                
            </div>
            
            <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                                 <div>
  <canvas id="myChart"></canvas>
</div>
</div>
 </div>
                
            </div>
        </div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Cv Register Request</h4>
                 <div class="table-responsive">
                                                <table id="bt1" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>


                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Nationality</th>
                                                        <th>Matrial Status</th>
                                                        <th>Status</th>
                                                      <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($partnerWithUsP as $user)


                                        <tr>
                                           <td>{{ $loop->index+1 }}</td>


                                           <td>{{$user->first_name.' '.$user->last_name }}</td>
                                           <td>{{$user->email_address }}</td>
                                           <td>{{$user->phone }}</td>
                                           <td>{{$user->nationality }}</td>
                                           <td>{{$user->martial_status }}</td>
                                           <td>{{$user->status }}</td>




                                            <td>
                                                @if (Auth::guard('admin')->user()->can('jobSeekerView'))

                                                <a   href="{{ route('jobSeeker.show',$user->id) }}" class="btn btn-success waves-light waves-effect  btn-sm" ><i class="fas fa-eye"></i></a>


                                                @endif

                                      
                                            </td>
                                        </tr>
        @endforeach


                                                </tbody>

                                            </table>

                                            </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php 

$dataOne = date('Y/m/d',strtotime("-1 days"));
$formateDateOne = date('d/m/y', strtotime($dataOne)); 

$dataTwo = date('Y/m/d',strtotime("-2 days"));
$formateDateTwo = date('d/m/y', strtotime($dataTwo)); 


$dataThree = date('Y/m/d',strtotime("-3 days"));
$formateDateThree = date('d/m/y', strtotime($dataThree)); 

$dataOneDataPresent = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d'))
->count();

$dataOneData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-1 days")))
->count();


$dataTwoData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-2 days")))
->count();


$dataThreeData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-3 days")))
->count();


$dataFourData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-4 days")))
->count();

$dataFiveData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-5 days")))
->count();

$dataSixData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-6 days")))
->count();

$dataSevenData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-7 days")))
->count();

$dataEightData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-8 days")))
->count();

$dataNineData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-9 days")))
->count();


$dataTenData = DB::table('job_seekers')
->whereDate('created_at', date('Y-m-d',strtotime("-10 days")))
->count();

?>



<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['{{date('d/m/y')}}','{{$formateDateOne}}', '{{$formateDateTwo}}', '{{$formateDateThree}}', '{{date('d/m/y',strtotime("-4 days"))}}', '{{date('d/m/y',strtotime("-5 days"))}}', '{{date('d/m/y',strtotime("-6 days"))}}','{{date('d/m/y',strtotime("-7 days"))}}','{{date('d/m/y',strtotime("-8 days"))}}','{{date('d/m/y',strtotime("-9 days"))}}'],
      datasets: [{
        label: 'Last 10 Day Cv Request',
        data: [{{$dataOneDataPresent}}, {{$dataOneData}},{{$dataTwoData}}, {{$dataThreeData}}, {{$dataFourData}}, {{$dataFiveData}}, {{$dataSixData}}, {{$dataSevenData}},{{$dataEightData}},{{$dataNineData}}],
        borderWidth: 1
      }]
    },
   
  });
</script>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Accepted',     {{$partnerWithUsATotal}}],
          ['Pending',      {{$partnerWithUsPTotal}}],
          ['Rejected',  {{$partnerWithUsRTotal}}]
        ]);

        var options = {
          title: 'Cv Register Request'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));

        chart.draw(data, options);
      }
    </script>

@endsection
