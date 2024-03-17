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
                <h2>Hierarchy</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">
        <div class="container pt-4">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="card-body">
                        <img src="{{ asset('/') }}public/front/assets/img/employer/hire.png" style="width:100%;" alt="">
                    </div>
                </div>
                <div class="col-lg-12 d-flex flex-column justify-content-center inquiry-content mt-4">
                    <h2>Hierarchy::</h2>

                    <p>
                        ISOL’S THEORY OF THE HIERARCHY OF NEEDS CAN CHANGE THE WAY YOU THINK ABOUT SUCCESSFUL SERVICE
                        DELIVERY. We
                        have hierarchical selections that currently is represented as a wizard to the user. There is
                        tree which can have many branches
                        and each branch can have many leaves. For now I&#39;m using table row span attribute and allow
                        user to select branch associated
                        with tree or leaf associated with branch.
                    </p>
                    <p>
                        Another alternative is to use master-detail dropdowns so that by picking the branch the leaf
                        dropdown is updated with
                        available choices..
                    </p>
                    <p>
                        Both of these seem not natural and frankly ugly. We were wondering if there is better way of
                        doing this?
                    </p>
                    <ol>
                        <li>
                            Understanding The Guest Experience Hierarchy.
                            In 1943, Abraham Maslow published his theory of the hierarchy of needs, and his psychology
                            theory has profound
                            applications to the hospitality industry. As his treatise identified five sets of specific
                            individual needs, we’ll apply each
                            to how your guests approach an accommodation and how each subsequent level adds further
                            needs that are only
                            important once all predecessors have been satisfied.
                        </li>
                        <li>
                            Physiological needs.
                            This level denotes the physical accommodations your property delivers – a comfortable
                            night’s sleep, a functioning
                            washroom for proper hygiene, essential beverages like water and sustenance (note that this
                            is different from ‘food’
                            and ‘cuisine’). Also
                            Safety needs. More than just a door latch, safety means that you provide as stress-free an
                            environment as possible.
                            For instance, guests should not be woken by noisy people in the room next door. They should
                            not encounter
                            disgusting characters in your lobby as the security presence is both apparent and effective.
                            Guests should be
                            reassured that their cars are not vandalized in the parking lot. Finally, living in the
                            digital age means that their
                            personal data and credit card information is not willingly shared with third parties and
                            that you have done your due
                            diligence to ward off hackers.
                        </li>
                        <li>
                            Social needs.
                            This is the first category where service really comes into play, especially when you take
                            into account that the other
                            common name for this level is ‘love’.
                        </li>
                        <li>
                            Esteem needs.
                            This fourth echelon of service is where personalization starts to play a part. A typical
                            example of this is a loyalty
                            program, where VIP’s are given a preferred status, often with separate check-in, upgraded
                            amenities and additional
                            onsite privileges. For example, your staff should address guests by name when they pick up
                            the in-room phone to call
                            for restaurant reservations. The general manager might also compose a handwritten note on
                            arrival with a welcome
                            refreshment. Recognition of a birthday, anniversary or major life event also falls in this
                            category. Lastly, its
                            magnificent head again as providing a fine dining experience, above and beyond merely
                            refilling one’s energy stores.
                        </li>
                        <li>
                            Satisfying The Guest Experience Hierarchy
                            Self-actualization is where you want to be, delivery of which typically results in lifelong
                            memories, extreme levels of
                            positive sentiments and solid loyalty. Naturally, commentary on Yelp, Trip Advisor and other
                            third-party review sites
                            reflects these achievements with enthusiastic and exceptionally compelling appraisals, which
                            will definitely help to
                            convert future guests.
                            Think of these levels as building blocks, though. Remember, focusing on any higher level
                            within the hierarchy while
                            letting any of the lower levels slip will result in failure. Your restaurant could be
                            performing excellently, for instance,
                            but if your housekeeping is sloppy, the front desk agents are surly or the air conditioning
                            is noisy.
                        </li>
                    </ol>

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
