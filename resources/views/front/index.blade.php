<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ISOL</title>


    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/vendor/fontawesome/css/all.min.css">
    <link href="{{ asset('/') }}public/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}public/front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/new_style.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/middle_header.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/vendor/fullView/fullview.css">

    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/vendor/owlCarousel/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!--    slick slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/assets/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/assets/vendor/slick/slick-theme.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet"> <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet"> <!-- Google fonts -->
</head>
<body>
    
<div class="modal" id="myModalnews" style="z-index: 999999">
    <div class="modal-dialog modal-dialog-centered modal-xl" >
        <div class="modal-content" style="background-color:white !important;">
            <div class="modal-header">
                <button type="button" style="background-color: white !important" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="text-align:center">
                    <h1 style="font-size: 40px; color: black">Under Construction</h1>
                    <img src="https://assets.nicepagecdn.com/d2cc3eaa/300651/images/60028-Converted.png" alt=""
                         width="250" height="270">
                    <p style="font-size:14px; color: #4e2b01; padding: 10px 20px; text-align: justify;">It seems that our website and maps are still under
                        development due to some missing information. We are actively working on improving and replacing
                        any content that is currently missing on our website, www.isol.com.bd. I apologize for any
                        inconvenience caused and appreciate your patience as we strive to complete these updates as soon
                        as possible.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
 @include('front.include.top_header')


<div id="fullview">


    <!--video section-->
    <div class="section">

        <!-- Content -->
        <div class="contentss">

            <!-- Hero banner -->
            <div class="hero-banner ">
                <video loop="true" autoplay="autoplay" muted class="video_section">
                    <source src="{{ asset('/') }}public/front/assets/img/video/Untitled.mp4" type="video/mp4">
                </video>
            </div>


            <!-- ======= Job Search Section ======= -->
            <div class="job_ser">
                <div class="container">

<!--                    <div class="section-title-job sliding_text">-->
<!--                        <h2 class="item-1">Turn Your Passion Into Your Profession</h2>-->
<!--                        <h2 class="item-2">Your Attitude Detiremines Your Direction</h2>-->
<!--                        <h2 class="item-3">Love Your Career</h2>-->
<!--                    </div>-->

                    <div id="sliders">
                        <ul class="ul">
                            <li class="li">
                                <div class="slider-container">
                                    <p>Turn Your Passion <br> <span style="padding-left: 1.5em;text-indent:-1.5em;">Into Your Profession</span> </p>
                                </div>
                            </li>
                            <li class="li">
                                <div class="slider-container">
                                    <p>Your Attitude  <br> <span style="padding-left: 1.5em;text-indent:-1.5em;"> Determines Your Direction </span></p>
                                </div>
                            </li>
                            <li class="li">
                                <div class="slider-container">
                                    <p>Love Your Career</p>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <form class="form-inline" role="form" id="filter_form">
                        <div class="row ">
                            <div class="col-md-3 form-group mb-2">

                                <select class="js-example-basic-single form-control custom-form" id="job_cat">
                                    <option value="">Select a Category</option>
                                    @foreach($headline_list1 as $all_headline_list1)
                                    <option value="{{ $all_headline_list1->name }}">{{ $all_headline_list1->name }}</option>
                                    @endforeach
                                    {{-- <option value="">MEGAYACHT</option>
                                    <option value="">RIVER CRUISE</option>
                                    <option value="">PRIVATE JETS</option>
                                    <option value="">HOTEL RESORT</option>
                                    <option value="">MERCHANT NAVY</option>
                                    <option value="">OFFSHORE</option>
                                    <option value="">WORLD BUTLER</option> --}}
                                </select>

                                <!--                                <input type="text" name="name" class="form-control custom-form" id="name"-->
<!--                                       placeholder="Job Title" required="">-->
                            </div>

                            <div class="col-md-3 form-group mb-2">

                                <select class="js-example-basic-single1 form-control custom-form" name="state" id="dp_name">
                                    <option value="">Select a Department</option>

                                </select>

<!--                                <input type="text" name="name" class="form-control custom-form" id="name"-->
<!--                                       placeholder="Department" required="">-->
                            </div>

                            <div class="col-md-3 form-group mb-2">

                                <select class="js-example-basic-single2 form-control custom-form" name="state" id="job_title_name">
                                    <option value=""> Select Job Title</option>



                                </select>


<!--                                <input type="text" name="name" class="form-control custom-form" id="name"-->
<!--                                       placeholder="Choose a Category" required="">-->
                            </div>


                            <div class="col-md-3">

                                <div class="custom_btn">
                                    <span class="text">Job Search <br> <span
                                                style="bx bx-searchfont-size: 10px; font-weight:normal"> Your Gateway to the world </span> </span>
                                    <i class="bx bx-search"></i>
                                </div>


                            </div>

                        </div>
                    </form>


                </div>
            </div>
            <!-- End Job Search Section -->

            <div class="widgets-container">
                <div class="widget-item">
                    <div class="widget-icon">
                        <a href="https://www.linkedin.com/company/interworld-shipping-overseas-limited-isol/?viewAsMember=true" target="_blank"><img src="{{ asset('/') }}public/front/assets/img/social_icon/linkeden.png" class="imge" alt=""></a>
                         <a href="https://www.facebook.com/profile.php?id=100095457271998" target="_blank"><img src="{{ asset('/') }}public/front/assets/img/social_icon/facebook.png" class="imge" alt=""></a>
                         <a href="https://www.youtube.com/@ManningAgent/featured" target="_blank"><img src="{{ asset('/') }}public/front/assets/img/social_icon/youtube.png" class="imge" alt=""></a>
                         <a href="https://g.page/r/CcKGtJQjvbksEB0/review" target="_blank"><img src="{{ asset('/') }}public/front/assets/img/social_icon/google.png" class="imge" alt=""></a>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <!--    second section-->

    <div class="section">

        <!-- ======= Banner Section ======= -->

        <div class="container-fluid ">
            <div class="second_first_Section">
                <div class="slider SecondDivSliderNav">
                    <div class="slider_box banner_img">
                        <img class="img-fluid" src="{{ asset('/') }}public/front/assets/img/second_slider/1.jpg" alt="">
                    </div>
                    <div class="slider_box banner_img">
                        <img class="img-fluid" src="{{ asset('/') }}public/front/assets/img/second_slider/2.jpg" alt="">
                    </div>
                    <div class="slider_box banner_img">
                        <img class="img-fluid" src="{{ asset('/') }}public/front/assets/img/second_slider/3.jpg" alt="">
                    </div>
                    <div class="slider_box banner_img">
                        <img class="img-fluid" src="{{ asset('/') }}public/front/assets/img/second_slider/4.jpg" alt="">
                    </div>
                    <div class="slider_box banner_img">
                        <img class="img-fluid" src="{{ asset('/') }}public/front/assets/img/second_slider/5.jpg" alt="">
                    </div>
                    <div class="slider_box banner_img">
                        <img class="img-fluid" src="{{ asset('/') }}public/front/assets/img/second_slider/6.jpg" alt="">
                    </div>
                    <div class="slider_box banner_img">
                        <img class="img-fluid" src="{{ asset('/') }}public/front/assets/img/second_slider/8.jpg" alt="">
                    </div>
                </div>

                <div class="second_first_Section_text">
                    <div class="container">
                        <div id="sliders-second-section">
                            <ul class="ul">
                                <li class="li">
                                    <div class="slider-container-second-section">
                                        <p>Discover Your Next Opportunities</p>
                                    </div>
                                </li>
                                <li class="li">
                                    <div class="slider-container-second-section">
                                        <p>What Career Are You Interested In</p>
                                    </div>
                                </li>
                                <li class="li">
                                    <div class="slider-container-second-section">
                                        <p>Connecting The Best Crew With The Maritime Industry's</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h1>CREW ON CALL</h1>
                    <p class="last_text">job vacancy openings! Click here for details!</p>
                </div>
            </div>
        </div>
        <!-- End Banner Section -->

        <!-- ======= Category Section ======= -->
        <div class="container-fluid category_section">
            <div class="d-flex flex-wrap  justify-content-center">
                <div class="category_box text-center mr-2 mb-2" onclick="window.location.href = '{{ route('cruiseship') }}';">
                    <img class="img-fluid " src="{{ asset('/') }}public/front/assets/img/category/1.png" alt="">
                    <h3>CRUISESHIP</h3>
                </div>
                <div class="category_box text-center mr-2 mb-2" onclick="window.location.href = '{{ route('megayacht') }}';">
                    <img class="img-fluid " src="{{ asset('/') }}public/front/assets/img/category/2.png" alt="">
                    <h3>MEGAYACHT</h3>
                </div>
                <div class="category_box text-center mr-2 mb-2"
                     onclick="window.location.href = '{{ route('river_cruise') }}';">
                    <img class="img-fluid " src="{{ asset('/') }}public/front/assets/img/category/river_cr.png" alt="">
                    <h3>RIVER CRUISE</h3>
                </div>
                <div class="category_box text-center mr-2 mb-2"
                     onclick="window.location.href = '{{ route('merchant_navy') }}';">
                    <img class="img-fluid " src="{{ asset('/') }}public/front/assets/img/category/5.png" alt="">
                    <h3>MERCHANT NAVY</h3>
                </div>

                <div class="category_box text-center mr-2 mb-2 "
                     onclick="window.location.href = '{{ route('hotel_ressort') }}';">
                    <img class="img-fluid " src="{{ asset('/') }}public/front/assets/img/category/3.png" alt="">
                    <h3>HOTEL RESORT</h3>
                </div>
                <div class="category_box text-center mr-2 mb-2"
                     onclick="window.location.href = '{{ route('private_jets') }}';">
                    <img class="img-fluid " src="{{ asset('/') }}public/front/assets/img/category/6.png" alt="">
                    <h3>CHARTERED CREW</h3>
                </div>
                <div class="category_box text-center mr-2 mb-2" onclick="window.location.href = '{{ route('offshore') }}';">
                    <img class="img-fluid " src="{{ asset('/') }}public/front/assets/img/category/7.png" alt="">
                    <h3>OFFSHORE</h3>
                </div>
                <div class="category_box text-center mr-2 mb-2"
                     onclick="window.location.href = '{{ route('world_butler') }}';">
                    <img class="img-fluid " src="{{ asset('/') }}public/front/assets/img/category/8.png" alt="">
                    <h3>THE BUTLER</h3>
                </div>
            </div>
        </div>
        <!-- End Category Section -->

        <!--        news slider-->
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center breaking-news" style="margin-left: -50px;">
                        <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center special py-2 px-1 news">
                            <span class="d-flex align-items-center" style="font-weight:bold; color: yellow;">&nbsp;IMPORTANT</span></div>
                        <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();"
                                 onmouseout="this.start();">
                            <a href="#" class="me-3 ms-3">[[ Candidates without relevant experience  are requested not to apply ]]</a>
                            <span class="dot"></span>
                            <a href="#" class="me-3 ms-3">[[ We can only reply to those who meet the requirements, in case we have a position available ]]</a>
                            <span class="dot"></span>
                            <a href="#" class="me-3 ms-3">[[Please schedule a meeting appointment through our website for face-to-face conversations, as walk-ins are not accommodated at the ISOL office]]</a>
                            <span class="dot"></span>
                            <a href="#" class="me-3 ms-3">[[ If you match one of our positions, we will contact you by email to schedule an online interview ]]</a>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--    third Section-->

    <div class="section">
        <!-- ======= Why Join Section ======= -->

        <div class="showcase">
            <img src="{{ asset('/') }}public/front/assets/img/why.jpg" alt="Picture">
            <div class="overlay section-content ">
                <div class="container">
                    <div class="section-title">
                        <h2>Why Join Us</h2>
                    </div>

                    <div class="row contentt">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/') }}public/front/assets/img/third/4.jpg" class=" third_img" alt="">
                                <div class="third_content">
                                    <h5>Global CV database reach</h5>
                                    <p>ISOL, offers talented professionals for our clientele according to their needs
                                        and demands. We have a talented global resource pull in the industry and a
                                        CV database of job specialized people. We desire to become the international
                                        recruitment agent in the global shipping management industry in the near
                                        future.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/') }}public/front/assets/img/third/5.jpg" class=" third_img" alt="">
                                <div class="third_content">
                                    <h5>Trusted by worldwide recognized companies.</h5>
                                    <p>We have an excellent track record of inspiring every stakeholder in the
                                        shipping management industry, with our comprehensive company culture and
                                        employee focused management practice.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/') }}public/front/assets/img/third/2.jpg" class=" third_img" alt="">
                                <div class="third_content">
                                    <h5>Innovating the highest industry standards.</h5>
                                    <p>Interworld Shipping Hospitality Overseas Limited (ISHOL) is a modern choice
                                        for the Crew Recruitment Agent. In ISOL, we cater to every micro and macro
                                        need of our valued clientele, whilst keeping an eye and attention to detail of
                                        their desired service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/') }}public/front/assets/img/third/1.jpg" class=" third_img" alt="">
                                <div class="third_content">
                                    <h5>Best of the best specialists.</h5>
                                    <p>We believe in a sustainable and mutually beneficial relationship philosophy.
                                        Professionalism, accountability, transparency and work excellence are our
                                        prime interests that we maintain at all times to conduct our business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/') }}public/front/assets/img/third/6.jpg" class="third_img" alt="">
                                <div class="third_content">
                                    <h5>Relationships built on loyalty, knowledge and reliability.</h5>
                                    <p>We are passionate to deliver our services to our valued clientele, through our
                                        loyalty, transparency and reliability of our crew recruitment service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/') }}public/front/assets/img/third/24_7.jpg" class="third_img" alt="">
                                <div class="third_content">
                                    <h5>24/7 and URGENT response is guaranteed.</h5>
                                    <p>Inter-World Overseas Shipping Hospitality Limited (ISHOL) offers 24/7, direct
                                        support service through our rapid communication channel. Our specialized
                                        Human Resources Department will provide you with a contract, headhunting
                                        or any other customized service at any time.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- End Why Join Section -->
    </div>

    <!--    forth Section-->

    <div class="section">

        <!-- ======= Mission Vision Section ======= -->
        <div class="section-content ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 forth_section">
                        <!--<h4>Our Mission</h4>-->
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="{{ asset('/') }}public/front/assets/img/1_MISSION.jpg" alt="Paris" style="width: 550px; height: 210px;">
                                </div>
                                <div class="flip-box-back">
                                    <p style="font-size:16px; color:white;">We Shall :</p>
                                    <ul style="list-style-type: none;">
                                        <li> <i class="fas fa-hand-o-right" style="margin-right: 10px; font-size: 20px;"></i> To be the finest provider of Seafarers to the Global Maritime Industry and
ensure the highest quality, healthcare, safety and work environment.
                                        </li>
                                        <li> <i class="fas fa-hand-o-right" style="margin-right: 10px; font-size: 20px;"></i>To supply a highly trained crew work force with professionalism and integrity.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4 forth_section">
                        <!--<h4>Our Vision</h4>-->
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="{{ asset('/') }}public/front/assets/img/VISION_2.jpg" alt="Paris" style="width: 550px; height: 210px;">
                                </div>
                                <div class="flip-box-back">
                                    <p style="font-size:16px; color:white;">We Shall :</p>
                                    <ul style="list-style-type: none;">
                                        <li></li> <i class="fas fa-hand-o-right" style="margin-right: 10px; font-size: 20px;"></i>To continue as the most innovative, dynamic and passionate organization
within the Global Marine Industry.
                                        </li>
                                        <li></li> <i class="fas fa-hand-o-right" style="margin-right: 10px; font-size: 20px;"></i>To ensure an unparalleled quality service to the cruise Industry.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-2 forth_section">
                        <!--<h4>Connect People with the Right Jobs for Them</h4>-->
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="{{ asset('/') }}public/front/assets/img/T-4.png" alt="Paris" style="width: 100%; height: 320px;">
                                </div>
                                <div class="flip-box-back" style="height: 320px !important">
                                    <p>
                                        Our valued clients are key to our success, thus we have to make sure that each client(s)
who seek our services is/are treated with respect, courtesy and sensitivity. We are
committed to meeting the needs of our client(s), and we constantly focus on giving top
priority, service and satisfaction. This is what we do.
                                    </p>
                                    <div class="d-flex justify-content-around mb-3">
                                            <button class="btn btn-custom mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Help</button>

                                            <button class="btn btn-custom mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal1">Assistance</button>

                                            <button class="btn btn-custom mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal2">Support</button>
                                    </div>
                                    <div class="d-flex justify-content-around">

                                        <button class="btn btn-custom mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal3">Tips</button>

                                        <button class="btn btn-custom mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal4">Guidance</button>

                                        <button class="btn btn-custom mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal5">Advice</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-3 mt-2 forth_section">
                        <!--<h4>Are You Looking To Hire Bangladesh Seafarers?</h4>-->
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="{{ asset('/') }}public/front/assets/img/VALUE_3.jpg" alt="Paris" style="width: 550px; height: 210px; margin-top: 30px">
                                </div>
                                <div class="flip-box-back" style="margin-top: 30px">
                                    <p style="font-size:16px; color:white;">We Shall :</p>
                                    <ul style="list-style-type: none;">
                                        <li></li> <i class="fas fa-hand-o-right" style="margin-right: 10px; font-size: 20px;"></i>It's been said that Bangladesh Seafarers are some of the best in the world.</li>
                                        <li></li> <i class="fas fa-hand-o-right" style="margin-right: 10px; font-size: 20px;"></i>We will help you find your requirements.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Mission Vision Section -->
    </div>


    <!--    fifth section-->
<div class="section">
        <!-- ======= business goal Section ======= -->
        <div class="section-content ">
            <div class="container">
                <div class="scene scene--card">
                    <div class="card1">
                        <div class="card__face card__face--front">
                            <h3>Welcome On Board</h3>
                            <h5>We are representatives of the most important lines in the shipping industry.
                                Bangladesh's leading cruise ship crew recruitment agency</h5>
                            <div class="row mt-4">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="d-flex justify-content-start fifth_back_box">
                                        <img src="{{ asset('/') }}public/front/assets/img/icon/1.png" alt="">
                                        <p>Get an excellent economic income. No payment of rent, water, electricity or
                                            transportation. A cruise allows you to save thanks to its benefits</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="d-flex justify-content-start fifth_back_box">
                                        <img src="{{ asset('/') }}public/front/assets/img/icon/2.png" alt="">
                                        <p>The cruise industry is the fastest growing tourism segment worldwide. Develop
                                            your profession in an international company!</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="d-flex justify-content-start fifth_back_box">
                                        <img src="{{ asset('/') }}public/front/assets/img/icon/3.png" alt="">
                                        <p>We have job offers in various areas and job growth opportunities are
                                            extensive. the sea is the limit</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="d-flex justify-content-start fifth_back_box">
                                        <img src="{{ asset('/') }}public/front/assets/img/icon/4.png" alt="">
                                        <p>travel and discover exotic countries around the world. Make friendships that
                                            last a lifetime.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card__face card__face--back">
                            <div class="fifth_backimage">
                                <img src="{{ asset('/') }}public/front/assets/img/w.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 fifth_text_upper">
                        <h1>BENEFITS TO BE A CREW MEMBER</h1>
                        <p>Benefits vary by shipping company and position. This information is provided during final recruitment interviews.</p>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="d-flex flex-wrap">
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-bed"></i>
                                    <p>Lodging</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-utensil-spoon"></i>
                                    <p>Foods</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-shower"></i>
                                    <p>Bath</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-eye"></i>
                                    <p>TV</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-temperature-low"></i>
                                    <p>Air Conditioning</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-wifi"></i>
                                    <p>Computer Center</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-dumbbell"></i>
                                    <p>Gym</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-glass-cheers"></i>
                                    <p>Crew Bar</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-cog"></i>
                                    <p>Activities</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-recycle"></i>
                                    <p>Recreation</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-first-aid"></i>
                                    <p>Health Insurance</p>
                                </div>
                            </div>
                            <div class="fifth_icon_box">
                                <div class="d-flex justify-content-start">
                                    <i class="fa fa-shield-alt"></i>
                                    <p>Training</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h3 class="fifth_last_text">WORK ON CRUISE, TRAVEL AROUND THE WORLD & EARNED US$</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End business Section -->
    </div>

    <!--    six section-->
    <div class="section">
        <div class="section-content">
            <div class="container">

                <div class="section-title">
                    <h2>You've got a request- What's next?</h2>
                </div>
                <div class="row">
                    <div class="col-12 six_p">
                        <p>If you are looking for quality, reliability, efficiency and trusted collaboration, it's
                            nothing other than inter-world shipping overseas limited (ISOL) who could be your partner.
                            we offer flexible solutions, allowing you to focus on your core business goals. We have an
                            active diversified global recruiting network, from which you will be able to source for any
                            seafarer category at anytime, anywhere. Our global database has the ability to reach out to its worldwide and enables us to provide
                            you the most suitable candidates to fulfill your recruitment. Our sucessful partnerships
                            with worldwide clients allowed us to expand and perform at the highest level.</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="sixBelow">
                            <h2>WE SPECIALISE IN</h2>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="flip-card1">
                                        <div class="flip-card-inner1">
                                            <div class="flip-card-front1">
                                                <div class="d-flex justify-content-left">
                                                    <div class="specialise_img">
                                                        <img src="{{ asset('/') }}public/front/assets/img/sixthtab/middle_1.png" alt=""
                                                             class="mx-auto d-block">
                                                    </div>
                                                    <div class="specialise_box">
                                                        <p>Selection and Recruitment Solutions:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flip-card-back1">
                                                <p>We conduct a full recruitment process, covering search and selection
                                                    of the
                                                    candidates, background checks and screening, interviewing and
                                                    presentation.
                                                    ISOL team assists in the whole process, from contract management to
                                                    payroll
                                                    services, travel and insurance procedures etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="flip-card1">
                                        <div class="flip-card-inner1">
                                            <div class="flip-card-front1">
                                                <div class="d-flex justify-content-left">
                                                    <div class="specialise_img">
                                                        <img src="{{ asset('/') }}public/front/assets/img/sixthtab/middle_2.png" alt=""
                                                             class="mx-auto d-block">
                                                    </div>
                                                    <div class="specialise_box">
                                                        <p>Human Resources Managers:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flip-card-back1">
                                                <p>At Interworld Shipping Overseas Limited, we think differently. There
                                                    are many
                                                    benefits. Our HRM’s are highly motivated, ambitious and talented.
                                                    Our a pool of
                                                    qualified specialists through networking, headhunting and their own
                                                    extensive,
                                                    worldwide database of professionals are able to pick the right
                                                    candidate for the
                                                    right job.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="flip-card1">
                                        <div class="flip-card-inner1">
                                            <div class="flip-card-front1">
                                                <div class="d-flex justify-content-left">
                                                    <div class="specialise_img">
                                                        <img src="{{ asset('/') }}public/front/assets/img/sixthtab/middle_4.png" alt=""
                                                             class="mx-auto d-block">
                                                    </div>
                                                    <div class="specialise_box">
                                                        <p>Recruitment and Crew despatch solutions:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flip-card-back1">
                                                <p>With our vast experience and knowledge in the industry, we pride
                                                    ourselves on
                                                    being able to recruit the needed specialized crew within a very
                                                    short time frame.
                                                    Our team has the experience and ability to handle urgently required
                                                    crew and
                                                    organize their travel and arrival of required personnel to your
                                                    vessel and or unit
                                                    within 24 hours. We are contactable 24/7.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="flip-card1">
                                        <div class="flip-card-inner1">
                                            <div class="flip-card-front1">
                                                <div class="d-flex justify-content-left">
                                                    <div class="specialise_img">
                                                        <img src="{{ asset('/') }}public/front/assets/img/sixthtab/middle_5.png" alt=""
                                                             class="mx-auto d-block">
                                                    </div>
                                                    <div class="specialise_box">
                                                        <p>Topnotch <br> Candidates:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flip-card-back1">
                                                <p>ISHOL being part of a multi-disciplinary business, we utilize our
                                                    personal
                                                    experience to find and deliver the very best candidates.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="flip-card1">
                                        <div class="flip-card-inner1">
                                            <div class="flip-card-front1">
                                                <div class="d-flex justify-content-left">
                                                    <div class="specialise_img">
                                                        <img src="{{ asset('/') }}public/front/assets/img/sixthtab/middle_6.png" alt=""
                                                             class="mx-auto d-block">
                                                    </div>
                                                    <div class="specialise_box">
                                                        <p>Hospitality <br> Butler:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flip-card-back1">
                                                <p>We are able to provide you worldwide butler, not just with a basic
                                                    experience,
                                                    but Butlers who will have to have multi-tasking skills and
                                                    experience to handle
                                                    the work load.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="flip-card1">
                                        <div class="flip-card-inner1">
                                            <div class="flip-card-front1">
                                                <div class="d-flex justify-content-left">
                                                    <div class="specialise_img">
                                                        <img src="{{ asset('/') }}public/front/assets/img/sixthtab/middle_7.png" alt=""
                                                             class="mx-auto d-block">
                                                    </div>
                                                    <div class="specialise_box">
                                                        <p>Offshore <br> Crew:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flip-card-back1">
                                                <p>If you are looking for specialists in oil and gas renewable, marine
                                                    and offshore
                                                    sectors, we have the necessary resources to deliver the most
                                                    suitable crew for
                                                    you.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="flip-card1">
                                        <div class="flip-card-inner1">
                                            <div class="flip-card-front1">
                                                <div class="d-flex justify-content-left">
                                                    <div class="specialise_img">
                                                        <img src="{{ asset('/') }}public/front/assets/img/sixthtab/middle_8.png" alt=""
                                                             class="mx-auto d-block">
                                                    </div>
                                                    <div class="specialise_box">
                                                        <p>Payroll Services and Solutions:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flip-card-back1">
                                                <p>Payroll management is a vital part of a recruitment process. In line
                                                    with our
                                                    experience as Human Resources Partner, we offer you a full payroll
                                                    administration and transparent process in order to facilitate all
                                                    the needs of the
                                                    client.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="flip-card1">
                                        <div class="flip-card-inner1">
                                            <div class="flip-card-front1">
                                                <div class="d-flex justify-content-left">
                                                    <div class="specialise_img">
                                                        <img src="{{ asset('/') }}public/front/assets/img/sixthtab/middle_3.png" alt=""
                                                             class="mx-auto d-block">
                                                    </div>
                                                    <div class="specialise_box">
                                                        <p>Maritime Crew Manning:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flip-card-back1">
                                                <p>With the cruise industry rapidly growing and working on cruise ship
                                                    is popular,
                                                    the need for maritime crew is rapidly increasing as well. We have
                                                    the necessary
                                                    resources to provide you the most suitable maritime crew for you, be
                                                    it a
                                                    drillship, windmill, commercial vessels or cruise ship, mega yachts,
                                                    commercial
                                                    vessels, any hotels or resorts or personalized hospitality butler,
                                                    we are able to
                                                    supply you with talented and professionally qualified crew. We also
                                                    can provide
                                                    you number of experience crew having qualified in technical and
                                                    managerial
                                                    positions too.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 ">
                    <div class="col-6">
                        <button type="button" class="align-self-end btn custom-btn1 mb-2"
                                style="margin-top: auto; width:100%;">Find a Crew
                        </button>
                        <p class="six_last_p">Let's work together and we will bring the ideal candidates to your
                            doorstep</p>
                    </div>
                    <div class="col-6">
                        <button type="button" class="align-self-end btn custom-btn2 mb-2"
                                style="margin-top: auto; width:100%;">Upload a CV
                        </button>
                        <p class="six_last_p">Have a career like no other the right career move wiht the help of
                            ISOL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    seventh section-->
    <div class="section">
        <div class="section-content">
            <div class="container">
                <div class="slider slidernav_box">
                    <div class="slider_box hiringBox">
                        <div class="section-title">
                            <h2>Our Hiring Process-For Applicants</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_02.png" alt="">
                                        <h1><span>1.</span> <br>
                                            Job Offers</h1>
                                    </div>
                                    <p>
                                        Just browse the most recent positions that are currently available in our database.  
Have you found any interesting offer? well, then look for our fascinating article enrolled with us on our blog given below. 

                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_04.png" alt="">
                                        <h1><span>2.</span> <br>
                                            Application</h1>
                                    </div>
                                    <p>
                                        Upload your CV with your supporting documents.  We do not charge any fee for processing the application(s).  Our recruiting team will visit the mailboxes and online applications.  They will examine all the seafarers’ experience in detail and also check for references authenticity, thus ensuring a proper service.   
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_06.png" alt="">
                                        <h1><span>3.</span> <br>
                                            Employment</h1>
                                    </div>
                                    <p>
                                        Our recruiting professionals will get in touch with you to set up an interview if you have fulfilled our client’s requirements in terms of experience and validity of documentation.   Our recruitment professionals will contact you to conduct and interview.  If everything’s well, you will receive a congratulatory email on your being shortlisted for employment.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_08.png" alt="">
                                        <h1><span>4.</span> <br>
                                            Resume / CV Storage</h1>
                                    </div>
                                    <p>
                                        You may upload your Resume / CV for future potential openings that may arise in accordance with your interest, qualifications and experience. Hopefully you might get more attractive offers to choose from no sooner job opportunities are available on our website.  It is highly recommended that you keep your updated Resume / CV in our database by sending any changes or details in your credentials or you when return from your contract. 
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_10.png" alt="">
                                        <h1><span>5.</span> <br>
                                            Your Career Goals</h1>
                                    </div>
                                    <p>
                                        Well, if you need any guidance, assistance or advice to pursue your career goals, you may get in touch with us we will be pleased to assist you in sourcing the ideal position in your career. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider_box hiringBox">
                        <div class="section-title">
                            <h2>Hiring Process-For Clients</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head1">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_01.png" alt="">
                                        <h1><span>1.</span> <br>
                                            Client Research</h1>
                                    </div>
                                    <p>
                                        We will make every effort to understand our clients job requirements and hiring process.  Our objective is to thoroughly understand our client’s business requirements, and delivery style.  Therefore, we are keen in getting to know you.  ISOL’s top priority is to build our clients trust and loyalty. In order to achieve this, we need to carefully under our clients business practices, expectations and requirements.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head1">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_03.png" alt="">
                                        <h1><span>2.</span> <br>
                                            Candidate Search</h1>
                                    </div>
                                    <p>
                                        Now it’s time to focus on the top-notch candidates. right?  Our extensive database, global, networking, and advertising, enables us to select the most suitable candidates over a short period of time.  Prior to a candidate(s) selection, we pay close attention to detail when reviewing the applicant(s), so that we can match your request(s) with their experience and expectations.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head1">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_05.png" alt="">
                                        <h1><span>3.</span> <br>
                                            Selection & Screening</h1>
                                    </div>
                                    <p>
                                        We will manage the applicant(s) screening process by verifying the documents and references to ensure a high-quality selection. Furthermore, we will assess the applicant(s) qualifications and experience by conducting preliminary interviews.  By this we will be able identify the potential of the employees whom we will be able to provide you and we forward to you a list of applications that would make successful employees. 
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head1">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_07.png" alt="">
                                        <h1><span>4.</span> <br>
                                            Presenting</h1>
                                    </div>
                                    <p>
                                        Only the most suitable applicant(s) profiles will be presented to you.  Once completing all equally important tasks like checklists, by double-checking the validity of documents, and receiving positive appraisals etc. We can provide you with a number of selected candidates for your final assessment and selection. 
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                                <div class="hiringBox_head1">
                                    <div class="d-flex justify-content-start mb-3">
                                        <img src="{{ asset('/') }}public/front/assets/img/hiring/b6_09.png" alt="">
                                        <h1><span>5.</span> <br>
                                            Delivery</h1>
                                    </div>
                                    <p>
                                        We will have the answer to your recruitment needs.  Need full payroll service? Would you like us to manage employment contracts?  Then feel free to contact us 24/7, we will be pleased to handle all your recruitment needs, in accordance with the law, and we assure you of a prompt response.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!--    eight section-->
    <div class="section">
        <div class="section-content">
            <div class="container">
                <div class="section-title">
                    <h2>Urgent Vacancy</h2>
                </div>

                <div class="slider urgentBox ">

                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" height="500" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/1.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/3.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/4.png" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/5.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/6.png" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/7.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/8.png" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/9.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/10.png" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/11.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/12.png" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/13.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/14.png" alt="Card image cap">
                        </div>
                    </div>
                    <div class="slider_box">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/') }}public/front/assets/img/urgent_vacancy/24.png" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    ninth section-->
    <div class="section">
        <div class="section-content">
            <div class="container">
                <div class="section-title">
                    <h2>What They Say About Us</h2>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="testimonial-slider" class="owl-carousel">
                                    <div class="testimonial">
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi
                                            dolorum
                                            earum fugiat, fugit hic id, ipsum laborum minus nostrum numquam perspiciatis
                                            saepe
                                            velit.
                                        </p>
                                        <div class="pic">
                                            <img src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg">
                                        </div>
                                        <div class="testimonial-profile">
                                            <h3 class="title">Crew Name</h3>
                                            <span class="post">Job Title</span>
                                            <div>
                                                <span class="bx bxs-star testimonial-checked"></span>
                                                <span class="bx bxs-star testimonial-checked"></span>
                                                <span class="bx bxs-star testimonial-checked"></span>
                                                <span class="bx bxs-star"></span>
                                                <span class="bx bxs-star"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg">
                                        </div>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi
                                            dolorum
                                            earum fugiat, fugit hic id, ipsum laborum minus nostrum numquam perspiciatis
                                            saepe
                                            velit.
                                        </p>
                                        <div class="testimonial-profile">
                                            <h3 class="title">Kristina-</h3>
                                            <span class="post">Web Designer</span>
                                            <div>
                                                <span class="bx bxs-star testimonial-checked"></span>
                                                <span class="bx bxs-star testimonial-checked"></span>
                                                <span class="bx bxs-star testimonial-checked"></span>
                                                <span class="bx bxs-star"></span>
                                                <span class="bx bxs-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg">
                                        </div>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi
                                            dolorum
                                            earum fugiat, fugit hic id, ipsum laborum minus nostrum numquam perspiciatis
                                            saepe
                                            velit.
                                        </p>
                                        <div class="testimonial-profile">
                                            <h3 class="title">Kristina-</h3>
                                            <span class="post">Web Designer</span>
                                            <div>
                                                <span class="bx bxs-star testimonial-checked"></span>
                                                <span class="bx bxs-star testimonial-checked"></span>
                                                <span class="bx bxs-star testimonial-checked"></span>
                                                <span class="bx bxs-star"></span>
                                                <span class="bx bxs-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 mb-3">
                        <div class="row text-center">
                            <div class="col-sm-3 counter-Txt"> Reviews:- <span class="counter-value">0</span></div>
                            <div class="col-sm-3 counter-Txt"> Seafarers:- <span class="counter-value">0</span>
                            </div>
                            <div class="col-sm-3 counter-Txt"> Applied:- <span class="counter-value">0</span></div>
                            <div class="col-sm-3 counter-Txt"> Available Job:- <span class="counter-value">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h4 class="text-center mb-3">Sign Up to receive our cruise job vacancies</h4>
                        <form action="">
                            <div class="row">
                                <div class="col-11">
                                    <div class="row form_border_reviews">
                                        <div class="col-4">
                                            <div class="row">
                                                <label for="" class="col-sm-2 col-form-label">Name:-</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control cusom_form_control_review"
                                                           id="" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <label for="" class="col-sm-3 col-form-label">Whatsappa:-</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control cusom_form_control_review"
                                                           id="" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <label for="" class="col-sm-3 col-form-label">Email:-</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control cusom_form_control_review"
                                                           id="" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <button class="btn btn-primary custom_button_text" type="button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 text-center mt-4" style="font-size: 18px; color: white;">
                        <input id="checkbox" type="checkbox" />
                        <label for="checkbox"> I agree to these <a href="#">Terms and Conditions</a>. <span class="text-danger">*</span> </label>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--    tenth section-->
    <div class="section ">
        <div class="section-content ">
            <div class="container">
                <div class="section-title">
                    <h2>Global Recruitment News</h2>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="slider newsBox">
                            <div class="slider_box">
                                <img src="{{ asset('/') }}public/front/assets/img/news/1.jpg" class="img-fluid news_img_box" alt="">
                            </div>
                            <div class="slider_box">
                                <img src="{{ asset('/') }}public/front/assets/img/news/2.png" class="img-fluid news_img_box" alt="">
                            </div>
                            <div class="slider_box">
                                <img src="{{ asset('/') }}public/front/assets/img/news/3.jpg" class="img-fluid news_img_box" alt="">
                            </div>
                            <div class="slider_box">
                                <img src="{{ asset('/') }}public/front/assets/img/news/4.Jpg" class="img-fluid news_img_box" alt="">
                            </div>
                            <div class="slider_box">
                                <img src="{{ asset('/') }}public/front/assets/img/news/5.Jpg" class="img-fluid news_img_box" alt="">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--    eleventh section-->
    <div class="section" style="background-color:black !important;">
        <!-- ======= Contact Section ======= -->
        <div id="contact" class="contact " >
            <div class="contact_wave">
                <div class="p-md-4 p-lg-4 mb-xxl-4">&nbsp;</div>
                <div class="container ">

                    <div class="section-title1">
                        <h2>Contact</h2>
                    </div>
                </div>


                <div class="container">
                    <div class="row mt-1">

                        <div class="col-lg-5">
                            <div class="info">
                                <div class="address">
                                    <i class="ri-map-pin-line"></i>
                                    <h4>Location:</h4>
                                    <p>
                                        1093/5A Khilbaritek, Vatara, Gulshan, <br>
                                        Dhaka 1212, Bangladesh
                                    </p>
                                    <br>
                                    <p>
                                        GPO Box 3030
                                        <br>
                                        Dhaka 1000, Bangladesh
                                    </p>
                                </div>

                                <div class="email">
                                    <i class="ri-mail-line"></i>
                                    <h4>Email:</h4>
                                    <p>info@isol.com.bd</p>
                                </div>

                                <div class="phone">
                                    <i class="ri-phone-line"></i>
                                    <h4>Call:</h4>
                                    <p>+880 1982-547679</p>
                                    <p>+880 28899210</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0">
                            
                            <h4>Enquiry</h4>
                            <p>Email us with any questions or inquiries</p>

                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                               placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="text" class="form-control" name="email" id="email"
                                               placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                           placeholder="Mobile Number" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                           placeholder=" Email Address" required>
                                </div>
                                <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                          required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
                <div class="wave"></div>
            </div>

        </div>
        <!-- End Contact Section -->
    </div>


    <!--    Twelveth section-->
     <div class="section">
        <div class="section-content">
            <div class="container">
                <div class="section-title">
                    <h2>Why Us</h2>
                </div>

                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-3 footer_upper_box">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('/') }}public/front/assets/img/icon/file.png" alt="">
                        </div>
                        <h3>Global CV <br> database reach</h3>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 footer_upper_box">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('/') }}public/front/assets/img/icon/helmet.png" alt="">
                        </div>
                        <h3>Best of the best <br> specialists</h3>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 footer_upper_box">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('/') }}public/front/assets/img/icon/shake-hands.png" alt="">
                        </div>
                        <h3>Relationships built on loyalty, knowledge and reliability</h3>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 footer_upper_box">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('/') }}public/front/assets/img/icon/safe.png" alt="">
                        </div>
                        <h3>Trusted by worldwide <br> recongnized companies</h3>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 footer_upper_box">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('/') }}public/front/assets/img/icon/light-bulb.png" alt="">
                        </div>
                        <h3>Innovating the highest <br> indistry standards</h3>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 footer_upper_box">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('/') }}public/front/assets/img/icon/headphones.png" alt="">
                        </div>
                        <h3>24/7 and URGENT <br> response is guaranteed</h3>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6 col-sm-12">
                        <div class="footer_text_box">
                            <h5>About Us</h5>
                            <p>ISOL (Interworld Shipping Overseas Limited) is a Licensed and MLC Certified Soli eTas
                                International HR Management Service Provider.</p>
                            <p>We provide services for Maritime, Oil and Gas Sectors, Cruise Ships, Mega-
                                Yachts, River Cruise, Cargo Shipping, Merchant Navy's, Hotels & Resorts,
                                Chartered Crew, Offshore and Hospitality Butlers respectively. </p>
                            <p>If you are looking for quality, reliability and efficient services — ISOL is the brand
                                name and partner you are sourcing for. We offer flexible HR solutions, allowing
                                you to focus on your core business goals</p>
                            <p>At ISOL, we think differently and there are a lot of benefits that you can reap
                                when you work with us. Our specialists are highly motivated, ambitious and
                                talented. We have developed recruitment solutions that meet and exceeds the
                                highest expectation of our clients.</p>
                                <p>License: 356375,  C-171113/2021</p>
                        </div>
                        <div class="copyright">
                            Interworld Shipping Overseas Limited (ISOL) All Rights Reserved &copy; <script>document.write(new Date().getFullYear());</script>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h5 class="footer_header">Others Link</h5>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="footer_link_list">
                                    <p><a href="">Contact</a></p>
                                    <p><a href="">Privacy Policies</a></p>
                                    <p><a href="">Terms & Condition</a></p>
                                    <p><a href="">Recruitment Procedures</a></p>
                                    <p><a href="">Fraud Warning Disclaimers</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 pt-4">
                                <button type="button" class="align-self-end btn custom-btn1 mb-3"
                                        style="margin-top: auto; width:100%;">Find a Crew
                                </button>
                                <button type="button" class="align-self-end btn custom-btn2"
                                        style="margin-top: auto; width:100%;">Upload a CV
                                </button>
                            </div>
                        </div>
                        <div class="second_box_gap">
                            <div class="row">
                                <div class="col-xl-4 col-sm-12 social_icon_list">
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100095457271998" class="ri-facebook-line"></a>
                                    <a target="_blank" href="https://www.linkedin.com/company/interworld-shipping-overseas-limited-isol/?viewAsMember=true" class="ri-linkedin-line"></a>
                                    <a target="_blank" href="https://www.youtube.com/@ManningAgent/featured" class="ri-youtube-line"></a>
                                    <a target="_blank" href="https://g.page/r/CcKGtJQjvbksEB0/review" class="ri-google-line"></a>
                                </div>
                                <div class="col-xl-8 col-sm-12">
                                    <div class="d-flex justify-content-between footer_link">
                                        <a href="">HOME</a>
                                        <a href="">HOW IT WORKS</a>
                                        <a href="">ABOUT US</a>
                                        <a href="">VACANCIES</a>
                                        <a href="">CONTACTS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flag_section">
                                <div class="row">
                                    <div class="col-12">
<a href="https://info.flagcounter.com/avW9"><img src="https://s01.flagcounter.com/count/avW9/bg_000000/txt_F5F5F5/border_080317/columns_8/maxflags_50/viewers_www.isol.com.bd+visitors/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--                    modal section-->
<div class="modal align-middle " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Help</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close btn-close-white"></button>
            </div>
            <div class="modal-body">
                <p>We are available 24/7 to attend, listen to and understand our clients
                    needs and expectations.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal align-middle" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Assistance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close btn-close-white"></button>
            </div>
            <div class="modal-body">
                <p>Our highly motivated HR Managers will assess the crews CVs and provide
                    assistance and recommend steps on how to get hired.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal align-middle" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Support</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close btn-close-white"></button>
            </div>
            <div class="modal-body">
                <p>We not only provide you with leads on latest cruise ship jobs, but also
                    valuable information and support for job seekers</p>
            </div>
        </div>
    </div>
</div>
<div class="modal align-middle" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tips</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close btn-close-white"></button>
            </div>
            <div class="modal-body">
                <p>The best way to get a job, is to do your own research and find out every
                    possible detail about working on cruise ship by visiting their websites and
                    then decide if you can adapt to the job.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal align-middle" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guidance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close btn-close-white"></button>
            </div>
            <div class="modal-body">
                <p>After visiting the cruise liner websites and if you find something suitable,
                    ensure to update your CV to demonstrate your suitability for the job.
                    Recruiters have only a few seconds to look at your CV so make sure you
                    prepare a clear, brief, informative and well styled CV.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal align-middle" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Advice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Do not apply for positions if you have no or little previous experience; and
                    do not apply for jobs which require qualifications you don&#39;t hold – you will
                    be only wasting your time and the recruiter’s time.</p>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('/') }}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/navik.menu.js"></script>
<script src="{{ asset('/') }}public/front/assets/vendor/fullView/fullview.js"></script>
<script src="{{ asset('/') }}public/front/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/vendor/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('/') }}public/front/assets/vendor/owlCarousel/owl.carousel.js"></script>

<script>
    $(document).ready(function () {
        $("#myModalnews").modal('show');
    });
</script>

<script>
    $('.SecondDivSliderNav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>


<script>
    $('.slidernav').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>


<script>
    $('.slidernav_box').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: true,
    });
</script>


<script>
    $('.urgentBox').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>

<script>
    $('.newsBox').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>

<script>
    $('.flags_box').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>

<script>
    $(document).ready(function () {
        var fv = $("#fullview").fullView({
            //Navigation
            dots: true,

            //Scrolling
            easing: "swing",
            backToTop: true,

            // Accessibility
            keyboardScrolling: true,

            // Callback
            onScrollEnd: function (currentView, preView) {
                console.log("Current", currentView);
                console.log("Previus", preView);
            }
        });

        $("#down").click(function () {
            // To Scroll Down 1 Section
            fv.data("fullView").scrollDown();

            // To Scroll Up 1 Section
            // fv.data('fullView').scrollDown();
        });

        $("#select").change(function () {
            // To Scroll to Specfic Section
            fv.data("fullView").scrollTo($(this).val());
        });
    });
</script>



<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            loop: true,
            items: 3,
            margin: 0,
            autoplay: false,
            dots: false,
            autoplayTimeout: 2000,
            smartSpeed: 450,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1170: {
                    items: 3
                }
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $("#testimonial-slider1").owlCarousel({
            loop: true,
            items: 1,
            margin: 0,
            autoplay: true,
            dots: false,
            autoplayTimeout: 2000,
            smartSpeed: 450,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1170: {
                    items: 1
                }
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single1').select2();
    });
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single2').select2();
    });
</script>

<script>
    $(document).ready(function () {

        $('.counter').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

    });
</script>

<script>
    var cards = document.querySelectorAll(".card1");

    [...cards].forEach((card) => {
        card.addEventListener("click", function () {
            card.classList.toggle("is-flipped");
        });
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function(){
        $("#job_cat").change(function(){

            var cat_name = $(this).val()



            $.ajax({
            url: "{{ route('get_dp_name_from_cat') }}",
            method: 'GET',
            data: {cat_name:cat_name},
            success: function(data) {

              $("#dp_name").html('');
              $("#dp_name").html(data);
            }
        });
    });


    $("#dp_name").change(function(){

var cat_name = $(this).val()



$.ajax({
url: "{{ route('get_title_name_from_dp') }}",
method: 'GET',
data: {cat_name:cat_name},
success: function(data) {

  $("#job_title_name").html('');
  $("#job_title_name").html(data);
}
});
});

});
</script>
</body>
</html>
