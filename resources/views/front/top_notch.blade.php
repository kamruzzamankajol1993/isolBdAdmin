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
                <h2>Top Notch Candidates</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="card-body">
                        <img src="{{ asset('/') }}public/front/assets/img/employer/top_notch.png" style="width:100%;" alt="">
                    </div>
                </div>
                <div class="col-lg-12 mt-4 d-flex flex-column justify-content-center inquiry-content">
                    <h2>Top Notch Candidates:</h2>

                    <p>
                        Discover even more about candidates with our interactive and dynamic data exploration tool.
                        You need top-notch people to help you grow your business. In this day and age, recruiting top-notch candidates are proving
                        to be more difficult than clearing your hectic schedule.
                    </p>
                    <p>
                        Let’s face it, the workforce landscape is changing and organizations need to adjust their approach to recruiting if they are to
                        succeed. Today’s top-notch candidates look for more than a good payroll. To attract the best talent, companies need to know
                        what candidates are looking for.
                    </p>
                    <p>
                        A winning recruiting strategy has a two-way approach. Know what you need from a candidate (i.e. job description, soft skills,
                        hard skills, etc.), but also make sure that what your organization has to offer, appeals to their needs and wants.
                    </p>
                    <p>
                        For your firm to succeed at this, you need to recognize, a safe and healthy work Environment.
                    </p>
                    <p>
                        Pause for a moment and look around. What do you see? Are your employees engaged in their work? Do they seem satisfied
                        or do they have long faces? Their facial expression is perhaps the easiest way to tell whether your firm’s work environment is
                        healthy and productive, or if adjustments are needed. A healthy work environment should feel like a place where ideas are
                        heard and the best are put into action collectively. It’s also a place where leadership provides a mix of challenges,
                        opportunities, acknowledgements and rewards. A place where some mistakes are allowed, so nobody feels like they’re
                        walking on eggshells. A safe and healthy working environment is always a good asset in the recruitment process.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- End Mission Vision Section -->
</main>


<!-- ======= Footer ======= -->
@include('front.include.top_header')

<script src="{{asset('/')}}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('/')}}public/front/assets/js/navik.menu.js"></script>

</body>
</html>
