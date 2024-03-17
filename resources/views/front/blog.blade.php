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
                <h2>Blog</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section id="blog" class="blog">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-5 posts-list">
                        <div class="col-lg-6">
                            <article class="d-flex flex-column">
                                <div class="post-img"><img src="{{asset('/')}}public/front/assets/img/mission.jpg" alt="" class="img-fluid">
                                </div>
                                <h2 class="title"><a href="#">Dolorum optio tempore voluptas dignissimos
                                        cumque fuga qui quibusdam quia</a></h2>
                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="#">John Doe</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="#">
                                                <time datetime="2022-01-01">Jan 1, 2022</time>
                                            </a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="#">12 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="content"><p> Similique neque nam consequuntur ad non maxime aliquam quas.
                                        Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem
                                        aliquid dicta.</p></div>
                                <div class="read-more mt-auto align-self-end"><a href="#">Read More <i
                                                class="bi bi-arrow-right"></i></a></div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <article class="d-flex flex-column">
                                <div class="post-img"><img src="{{asset('/')}}public/front/assets/img/vission.webp" alt="" class="img-fluid">
                                </div>
                                <h2 class="title"><a href="#">Nisi magni odit consequatur autem nulla
                                        dolorem</a></h2>
                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="#">John Doe</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="#">
                                                <time datetime="2022-01-01">Jan 1, 2022</time>
                                            </a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="blog-details.html">12 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="content"><p> Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint
                                        ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.</p>
                                </div>
                                <div class="read-more mt-auto align-self-end"><a href="#">Read More <i
                                                class="bi bi-arrow-right"></i></a></div>
                            </article>
                        </div>
                    </div>
                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li ><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="sidebar ps-lg-4">
                        <div class="sidebar-item search-form"><h3 class="sidebar-title">Search</h3>
                            <form action="" class="mt-3"><input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar-item categories"><h3 class="sidebar-title">Categories</h3>
                            <ul class="mt-3">
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Educaion <span>(14)</span></a></li>
                            </ul>
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
