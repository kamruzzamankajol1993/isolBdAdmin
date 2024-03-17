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
                <h2>Crew Login</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                <div class="col-lg-5 col-md-5 col-sm-12 col-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            New Visitor
                        </div>
                        <div class="card-body">
                            <p class="card-text">If you are new to our site or have not previously registered, please create a new account.</p>
                            <hr style="height:1px;background-color: #b34e07;">
                            <a href="crew_registration.php" class="btn btn-secondary">Create a new account</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            Returning Visitor
                        </div>
                        <div class="card-body">
                            <p class="card-title mb-3">Sign in here to review the status of your application, apply for a different job, or update your information.</p>
                            <form action="">
                                <div class="form-group row mb-3">
                                    <label class="form-label col-12">Email Address</label>
                                    <div class="col-sm-11">
                                        <input type="Email" class="form-control" id="" placeholder="Email">
                                    </div>
                                    <div class="col-sm-1 my-auto">
                                        <img src="{{asset('/')}}public/front/assets/img/asterisk-black-star-shape.png" class="img-fluid crew_reg_icon" alt="">
                                    </div>


                                </div>
                                <div class="form-group row mb-3">
                                    <label class="form-label col-12">Password</label>
                                    <div class="col-sm-11">
                                    <input type="password" class="form-control" id="" placeholder="Password">
                                    </div>
                                    <div class="col-sm-1 my-auto">
                                        <img src="{{asset('/')}}public/front/assets/img/asterisk-black-star-shape.png" class="img-fluid crew_reg_icon" alt="">
                                    </div>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="" value="option1">
                                    <label class="form-check-label" for="">Remember me</label>
                                </div>
                            </form>
                            <div class="links">
                                <a href="#">I have forgotten my password</a>
                            </div>
                            <hr style="height:1px;background-color: #b34e07;">
                            <a href="#" class="btn btn-secondary">Sign In</a>
                        </div>
                    </div>
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
