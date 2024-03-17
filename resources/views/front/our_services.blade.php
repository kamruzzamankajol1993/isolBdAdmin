<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISOL</title>


    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/vendor/fontawesome/css/all.min.css">
    <link href="{{ asset('/') }}public/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}public/front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/middle_header.css">


    <!--    slick slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/assets/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/assets/vendor/slick/slick-theme.css">

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
                <h2>Our Services</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

        <section id="services" class="services">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset('/') }}public/front/assets/img/partner_with_us/our_services.png" alt="">
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="mission_statement">
                        <p>
                            We are a Licensed and MLC Certified International HR Management Service provider.
                            We offer an array of services for Maritime, Oil and Gas Sectors, Cruise Ships, Mega-
                            Yachts, River Cruise, Cargo Shipping, Merchant Navy’s, Hotel &amp; Resorts, Chartered
                            Crew, Offshore and Hospitality Butlers worldwide.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End Mission Vision Section -->
</main>


<!-- ======= Footer ======= -->
@include('front.include.footer')

<script src="{{ asset('/') }}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/navik.menu.js"></script>

</body>
</html>
