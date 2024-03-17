<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}">

    <!-- DataTables -->
  <link href="{{ asset('/') }}public/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/') }}public/admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />


   <!-- plugin css -->
   <link href="{{ asset('/') }}public/admin/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
   <link href="{{ asset('/') }}public/admin/assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('/') }}public/admin/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/') }}public/admin/assets/libs/%40chenfengyuan/datepicker/datepicker.min.css">
  <!-- Responsive datatable examples -->
  {{-- <link href="{{ asset('/') }}public/admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> --}}
    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}public/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/') }}public/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/') }}public/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- MY Css-->
    <link href="{{ asset('/') }}public/admin/assets/css/select2_modal_css.css" id="app-style" rel="stylesheet" type="text/css" />
<!-- CSS -->
<link rel="stylesheet" href="/https:/cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
    @yield('css')
    <script src="{{ asset('/') }}public/admin/assets/libs/jquery/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</head>


<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="colored"> -->

<!-- Begin page -->
<div id="layout-wrapper">


     <!-- Top Header ======= -->
     @include('backend.include.header');
     <!-- TOP END HEADER -->


     <!-- ========== Left Sidebar Start ========== -->
     @include('backend.include.sidebar');
     <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

               @yield('body')


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('backend.include.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}public/admin/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

 <!-- Chart JS -->
 <script src="{{ asset('/') }}public/admin/assets/libs/chart.js/Chart.bundle.min.js"></script>
 <script src="{{ asset('/') }}public/admin/assets/js/pages/chartjs.init.js"></script>


 <!-- jquery-knob -->
 <script src="{{ asset('/') }}public/admin/assets/libs/jquery-knob/jquery.knob.min.js"></script>

 <script src="{{ asset('/') }}public/admin/assets/js/pages/jquery-knob.init.js"></script>


<!-- apexcharts -->
<script src="{{ asset('/') }}public/admin/assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{ asset('/') }}public/admin/assets/js/pages/dashboard.init.js"></script>
   <!-- Required datatable js -->
   <script src="{{ asset('/') }}public/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="{{ asset('/') }}public/admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   <!-- Buttons examples -->
   <script src="{{ asset('/') }}public/admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
   <script src="{{ asset('/') }}public/admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
   <script src="{{ asset('/') }}public/admin/assets/libs/jszip/jszip.min.js"></script>
   <script src="{{ asset('/') }}public/admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
   <script src="{{ asset('/') }}public/admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
   <script src="{{ asset('/') }}public/admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
   <script src="{{ asset('/') }}public/admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
   <script src="{{ asset('/') }}public/admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

   <!-- Responsive examples -->
   {{-- <script src="{{ asset('/') }}public/admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
   <script src="{{ asset('/') }}public/admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script> --}}

   <!-- Datatable init js -->
   <script src="{{ asset('/') }}public/admin/assets/js/pages/datatables.init.js"></script>

    <!-- plugins -->
    <script src="{{ asset('/') }}public/admin/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('/') }}public/admin/assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="{{ asset('/') }}public/admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="{{ asset('/') }}public/admin/assets/libs/%40chenfengyuan/datepicker/datepicker.min.js"></script>

    <!-- init js -->
    <script src="{{ asset('/') }}public/admin/assets/js/pages/form-advanced.init.js"></script>
<!-- ckeditor -->
<script src="{{ asset('/') }}public/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

<!--tinymce js-->
<script src="{{ asset('/') }}public/admin/assets/libs/tinymce/tinymce.min.js"></script>

<!-- init js -->
<script src="{{ asset('/') }}public/admin/assets/js/pages/form-editor.init.js"></script>

<!-- App js -->
<script src="{{ asset('/') }}public/admin/assets/js/app.js"></script>
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

<script>
    jQuery(document).ready(function () {
        jQuery("#run").on("click", function () {
            jQuery("#mymodal").modal("show");

            $("#test").select2({

            });

            $("#type").select2({

});
            $("#test1").select2({

            });

            $("#test2").select2({

});
        });
    });

</script>

<script>
    ClassicEditor
    .create( document.querySelector( '#classic-editor' ) )
    .catch( error => {
        console.error( error );
    } );
    </script>
    <script>
        $('#bt1').dataTable();
        $('#bt2').dataTable();
    </script>
@yield('script')

</body>

</html>





