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
                <h2>Values</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
               <div class="col-lg-12 d-flex flex-column justify-content-center inquiry-content">
                    <div class="section-title">
                        <h2>Our Values</h2>
                    </div>
                    <div class="mission_statement">
                        <ul>
                            <li>It is known and been said that Bangladesh seafarers are some of the best in the
                                world.
                            </li>
                            <li>We will help you find your seafarer requirements.</li>
                        </ul>
                    </div>
                    <div class="section-title mt-4">
                        <h2>Customer Focus:</h2>
                        <p>Our valued client(s) is / are our key to success, thus we have to ensure that each client(s) who
                            seek our service(s) is/are treated with respect, courtesy and sensitivity. We are committed to
                            meeting the needs of our client(s), and we constantly focus on giving top priority, service and
                            satisfaction.</p>
                        <h4 style="text-decoration: underline; padding-top: 15px;">This is what we do and advise for an applicant:</h4>
                        <p>We are ready to…..</p>
                        <div class="row mt-5">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Help</h4>
                                    <p>We are available 24/7 to attend, listen to and understand our client’s needs and

                                        expectations.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Assist</h4>
                                    <p>Our competent HR Manager will assess the crews’ CV’s and provide assistance and

                                        recommend steps on how to get hired.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Support</h4>
                                    <p>We not only provide you with leads on latest cruise ship jobs, but also valuable

                                        information and support for job seekers.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Offer Tips</h4>
                                    <p>The best way to get a job is to do your own research and find out every possible
                                        detail about working on a cruise ship by visiting their websites and then decide if
                                        you can adapt to the job.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Guide</h4>
                                    <p>After visiting our cruise liner website and if you find something suitable, ensure to
                                        update your CV to demonstrate your suitability for the job. Recruiters have only a
                                        few seconds to look at your CV so make sure you prepare a clear, brief, informative
                                        and well styled CV.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Advice</h4>
                                    <p>Do not apply for positions if you have no or little previous experience; and do not
                                        apply for jobs which require qualifications you don&#39;t hold – you will be only wasting
                                        your time and the recruiter’s time.</p>
                                </div>
                            </div>
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

<script src="{{ asset('/') }}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/navik.menu.js"></script>

</body>
</html>
