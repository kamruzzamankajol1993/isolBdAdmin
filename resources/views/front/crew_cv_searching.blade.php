<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISOL</title>


    <link rel="stylesheet" href="{{asset('/')}}public/front/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}public/front/assets/vendor/fontawesome/css/all.min.css">
    <link href="{{asset('/')}}public/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('/')}}public/front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}public/front/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}public/front/assets/css/middle_header.css">


    <!--    slick slider-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/assets/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/assets/vendor/slick/slick-theme.css">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet"> <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet"> <!-- Google fonts -->
</head>
<body>

<!-- Header -->
@include('front.include.top_header')

<main>
    <!-- ======= Page Top Section ======= -->
    <section class="page_top_section">
        <div class="container">
            <div class="page-header my-auto">
                <h3>Interworld Shipping Overseas Limited</h3>
                <h2>Crew CV Searching</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">
        <div class="container pt-4">
            <div class="row ">
                <div class="col-lg-6 ">
                    <div class="card-body">
                        <img src="{{ asset('/') }}public/front/assets/img/employer/crew.png" style="width:100%;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center inquiry-content">
                    <h2>Crew CV searching:</h2>

                    <p>
                        Learn what candidates look for in your industry
                    </p>
                    <p>
                        To help you gain more information on employee motivation, we have broken down the data into a
                        series of Industry
                        Spotlights for you to read and download.
                    </p>
                    <p>
                        The Hospitality industry is considered as one of the industries that employs the diverse
                        range of talents in the professional
                        fields, therefore the labor market in this particular industry is wider than others. The
                        skill set, knowledge and other
                        capabilities of the professionals from different industries can usefully be adaptable and
                        applicable in this industry.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- End Mission Vision Section -->
</main>


<!-- ======= Footer ======= -->
@include('front.include.footer')

<script src="{{asset('/')}}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('/')}}public/front/assets/js/navik.menu.js"></script>

</body>
</html>
