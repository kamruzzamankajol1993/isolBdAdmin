<div class="navik-header header-shadow center-menu-1 header-opacity">
    <div class="container-fluid">
        <div class="d-none d-lg-block text-center">
            <h1 class="header_text">
                <span>I</span>nterworld
                <span>S</span>hipping
                <span>O</span>verseas
                <span>L</span>imited
            </h1>
        </div>

        <!-- Navik header -->
        <div class="navik-header-container">

            <!--Logo-->
            <div class="logo" data-mobile-logo="{{ asset('/') }}public/front/assets/img/logo.png" data-sticky-logo="assets/img/logo.png">
                <a href="index.php"><img src="{{ asset('/') }}public/front/assets/img/logo.png" alt="logo"/></a>
            </div>

            <!-- Burger menu -->
            <div class="burger-menu">
                <div class="line-menu line-half first-line"></div>
                <div class="line-menu"></div>
                <div class="line-menu line-half last-line"></div>
            </div>

            <!--Navigation menu-->
            <nav class="navik-menu menu-caret submenu-top-border submenu-scale">
                <ul>
                    <li><a href="{{ route('index') }}" class="other_button"> <span class="home_box">H</span>ome</a></li>
                    <li><a href="{{ route('how_it_work') }}" class="other_button">How It Works</a></li>
                    <li ><a href="#" class="other_button">Why Us</a>
                        <ul>
                            <li ><a href="{{ route('mission') }}" >Mission</a></li>
                            <li><a href="{{ route('vision') }}">Vision</a></li>
                            <li><a href="{{ route('values') }}">Values</a></li>
                        </ul>
                    </li>
                    <li ><a href="#" class="other_button">About ISOL</a>
                        <ul>
                            <li><a href="{{ route('our_experties') }}">Expertise</a></li>
                            <li><a href="{{ route('our_services') }}">Service</a></li>
                            <li><a href="{{ route('our_accreditations') }}">Accreditations</a></li>
                        </ul>
                    </li>
                    <li ><a href="#" class="other_button">Employer</a>
                        <ul>
                            <li><a href="{{ route('post_a_job') }}">Partner with us</a></li>
                            <li><a href="{{ route('crew_cv_searching') }}">Crew cv searching</a></li>
                            <li><a href="{{ route('top_notch') }}">Top notch candidate</a></li>
                            <li><a href="{{ route('hierarchy') }}">Hierarchy</a></li>
                        </ul>
                    </li>



                </ul>
                <ul>
                    <li ><a href="#" class="other_button">Crew Portal</a>
                        <ul>
                            <li><a href="{{ route('crew_login') }}">Login</a></li>
                            <li><a href="{{ route('help24_7') }}">Help 24/7</a></li>
                            <li><a href="{{ route('urgent_vacancy') }}">Urgent Vacancy</a></li>
                            <li><a href="{{ route('hiring_process') }}">Hiring Process</a></li>
                            <li><a href="{{ route('career_navigation') }}">Career Navigation</a></li>
                            <li><a href="#">Find Job</a>
                                <ul>
                                    <li><a href="{{ route('cruiseship') }}">Cruiseship</a></li>
                                    <li><a href="{{ route('megayacht') }}">Megayacht</a></li>
                                    <li><a href="{{ route('river_cruise') }}">River Cruise</a></li>
                                    <li><a href="{{ route('private_jets') }}">Private Jets</a></li>
                                    <li><a href="{{ route('hotel_ressort') }}">Hotel & Resort</a></li>
                                    <li><a href="{{ route('merchant_navy') }}">Merchant Navy</a></li>
                                    <li><a href="{{ route('offshore') }}">Offshore</a></li>
                                    <li><a href="{{ route('world_butler') }}">World Butler</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li ><a href="#" class="other_button">Insight</a>
                        <ul>
                            <li><a href="{{ route('event') }}">Event</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </li>
                    <li ><a href="#" class="other_button">Contact</a>
                        <ul>
                            <li><a href="#">Interview Appointment</a></li>
                            <li><a href="#">Enquiry</a></li>
                            <li><a href="#">Complain</a></li>
                            <li><a href="#">Survey</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('crew_login') }}" class="other_button">Hire Employee</a></li>
                    <li><a href="{{ route('crew_login') }}" class="other_button">CV Register</a></li>
                </ul>
            </nav>

        </div>

    </div>
</div>
