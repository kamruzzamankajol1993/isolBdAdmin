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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
</head>
<body>

<!-- Header -->
@include('front.include.top_header')

<main>
    <!-- ======= Page Top Section ======= -->
    <section class="page_top_section">
        <div class="container">
            <div class="page-header my-auto">
                <h3>Interworld Shipping
                    Hospitality Overseas Limited</h3>
                <h2>CV Login</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body custom_form_color">
                            <div class="custom_form_div">
                                <h1 class="text-center">Register Your Interest</h1>
                                @include('flash_message')
                                <div class="about_header mb-4">
                                    <h3>Speculative Applications </h3>
                                    <p> If you can't see a role that you want to apply for right now, complete the
                                        form to be notified of any roles that come along that meet your criteria.

                                        You'll receive an email when you register, and then again once a job comes
                                        up that you would be interested in. </p>
                                </div>
                                <form action="{{ route('jobSeekerPartTwoPost') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $decode }}" name="id">
                                    <div class="form_header mb-3">
                                        <h3>1. Personal Details </h3>
                                        <p>We'll need these details in order to be able to contact you when a job is
                                            made available. </p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">First Name</label>
                                        <input class="form-control" name="first_name" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Last Name</label>
                                        <input class="form-control" name="last_name" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email Address</label>
                                        <input class="form-control" name="email_address" type="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Phone Number</label>
                                        <input class="form-control" name="phone" id="phone" type="tel" name="phone">
                                    </div>


                                    <div class="form_header mb-3 mt-5">
                                        <h3>2. Upload Resume / CV </h3>
                                        <p>Having some information helps us inform you about the right jobs </p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Resume / CV </label>
                                        <small>Accepted file formats are .pdf and .docx </small>
                                        <input name="cv" class="form-control" accept=".pdf" type="file">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Personal Summary </label>
                                        <small>This section is optional. Use it to tell us a little more about
                                            yourself. </small>
                                        <textarea name="personal_summary" class="form-control" id="" rows="4"></textarea>
                                    </div>

                                    <div class="form_header mb-3 mt-5">
                                        <h3>3. Teams </h3>
                                        <p>Please let us know what type of opportunities you're interested in. </p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Teams</label>
                                        <select name="team" class="form-select" aria-label="Default select example">
                                            <option value="">Select here ...</option>
                                            <option value="Beverage">Beverage</option>
                                            <option value="Guest service">Guest service</option>
                                            <option value="Administrative">Administrative</option>
                                            <option value="Human Resource">Human Resource</option>
                                            <option value="IT">IT</option>
                                        </select>
                                    </div>

                                    <div class="form_header mb-3 mt-5">
                                        <h3>4. Questions </h3>
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Do you currently work, or have you ever worked,
                                            for The Ritz-Carlton brand? </label>
                                        <select name="ritz_carlton_brand_work" class="form-select" aria-label="Default select example">
                                            <option value="">Select here ...</option>
                                            <option value="Yes, I currently work for The Ritz-Carlton.">Yes, I currently work for The Ritz-Carlton.</option>
                                            <option value="Yes, I currently work for The Ritz-Carlton on a J-1 visa.">Yes, I currently work for The Ritz-Carlton on a J-1 visa.</option>
                                            <option value="Yes, I formerly worked for The Ritz-Carlton.">Yes, I formerly worked for The Ritz-Carlton.</option>
                                            <option value="Yes, I formerly worked for The Ritz-Carlton on a J-1 visa.">Yes, I formerly worked for The Ritz-Carlton on a J-1 visa.</option>
                                            <option value="No, I do not currently work, nor have I ever worked, for The
                                            Ritz-Carlton.">No, I do not currently work, nor have I ever worked, for The
                                                Ritz-Carlton.
                                            </option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Do you currently hold a valid Schengen
                                            visa? </label>
                                        <select name="valid_schengen_visa" class="form-select" aria-label="Default select example">
                                            <option value="">Select here ...</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">NO</option>
                                            <option value="A Schemagen visa is not required for my nationality.">A Schemagen visa is not required for my nationality.</option>
                                        </select>
                                    </div>

                                    <div class="form_header mb-3 mt-5">
                                        <h3>Diversity and Inclusion </h3>
                                        <p>
                                            Diversity, equity, and inclusion are important to us. In an effort to
                                            promote diverse candidate outreach, equal opportunity for employment, and to
                                            reinforce fair hiring practices, we have included the below optional
                                            demographic questions. <b> Your response, or your choice not to respond, is
                                                entirely anonymous and cannot be associated with your application.
                                                Demographic data is presented in aggregate reporting only. </b>
                                        </p>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Gender </label>
                                                <select name="gender" class="form-select" aria-label="Default select example">
                                                    <option value="">Select here ...</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Non-binary">Non-binary</option>
                                                    <option value="I prefer not to answer">I prefer not to answer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Gender Identity </label>
                                                <select name="gender_identity" class="form-select" aria-label="Default select example">
                                                    <option value="">Select here ...</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Transgender">Transgender</option>
                                                    <option value="Non-binary">Non-binary</option>
                                                    <option value="I prefer not to answer">I prefer not to answer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Nationality </label>
                                                <select name="nationality" class="form-select" aria-label="Default select example">
                                                    <option value="">Select here ...</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Indian">Indian</option>
                                                    <option value="Indonesian">Indonesian</option>
                                                    <option value="Filipino">Filipino</option>
                                                    <option value="Thai">Thai</option>
                                                    <option value="Other Asian">Other Asian</option>
                                                    <option value="African">African</option>
                                                    <option value="Eastern European">Eastern European</option>
                                                    <option value="Western European">Western European</option>
                                                    <option value="North American">North American</option>
                                                    <option value="Central American">Central American</option>
                                                    <option value="South American">South American</option>
                                                    <option value="Caribbean Islands">Caribbean Islands</option>
                                                    <option value="Oceania">Oceania</option>
                                                    <option value="Other nationality">Other nationality</option>
                                                    <option value="I prefer not to answer">I prefer not to answer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Marital Status </label>
                                                <select name="martial_status" class="form-select" aria-label="Default select example">
                                                    <option selected>Select here ...</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Domestic partnership">Domestic partnership</option>
                                                    <option value="I prefer not to answer">I prefer not to answer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Age Bracket </label>
                                                <select name="age_bracket" class="form-select" aria-label="Default select example">
                                                    <option value="">Select here ...</option>
                                                    <option value="Under 18 years">Under 18 years</option>
                                                    <option value="18-20 years">18-20 years</option>
                                                    <option value="21-25 years">21-25 years</option>
                                                    <option value="26-30 years">26-30 years</option>
                                                    <option value="31-35 years">31-35 years</option>
                                                    <option value="36-40 years">36-40 years</option>
                                                    <option value="41-45 years">41-45 years</option>
                                                    <option value="46-50 years">46-50 years</option>
                                                    <option value="51-55 years">51-55 years</option>
                                                    <option value="56-60 years">56-60 years</option>
                                                    <option value="61-64 years">61-64 years</option>
                                                    <option value="65+ years">65+ years</option>
                                                    <option value="I prefer not to answer">I prefer not to answer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Disability </label>
                                                <select name="disability" class="form-select" aria-label="Default select example">
                                                    <option value="">Select here ...</option>
                                                    <option value="I have a disability">I have a disability</option>
                                                    <option value="I do not have a disability">I do not have a disability</option>
                                                    <option value="I prefer not to answer">I prefer not to answer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Veteran Status </label>
                                                <select name="veteran_status" class="form-select" aria-label="Default select example">
                                                    <option value="">Select here ...</option>
                                                    <option value="Active Wartime or Combat Badge veteran">Active Wartime or Combat Badge veteran
                                                    </option>
                                                    <option value="Armed Forces Service Medal veteran">Armed Forces Service Medal veteran</option>
                                                    <option value="Disabled veteran">Disabled veteran</option>
                                                    <option value="Recently separated veteran">Recently separated veteran</option>
                                                    <option value="Protected veteran but choose not to self-identify classification">Protected veteran but choose not to
                                                        self-identify classification
                                                    </option>
                                                    <option value="I am not a veteran">I am not a veteran</option>
                                                    <option value="I prefer not to answer">I prefer not to answer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Preferred Pronouns </label>
                                                <select name="preferred_pronouns" class="form-select" aria-label="Default select example">
                                                    <option value="">Select here ...</option>
                                                    <option value="She/Her/Hers">She/Her/Hers</option>
                                                    <option value="He/Him/His">He/Him/His</option>
                                                    <option value="They/Them/Theirs">They/Them/Theirs</option>
                                                    <option value="Other">Other</option>
                                                    <option value="I prefer not to answer">I prefer not to answer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form_header mb-3 mt-5">
                                        <h3>5. Submit </h3>
                                        <p>
                                            To contact you regarding potential employment, we need to store the personal
                                            data you provide. You may delete this data at any time using the "manage
                                            your data" link found on our careers site and included in our emails. Our
                                            maximum retention period is 48 months, after which time your data will be
                                            automatically and securely deleted unless you instruct otherwise. </p>

                                        <p> If you agree for us to store your data please click the checkbox below:</p>

                                        <p> You can view our <a href="#">privacy notice</a>  for more information.</p>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                            <label class="form-check-label" for="gridCheck">
                                                Allow us to process your personal information.
                                            </label>
                                        </div>
                                    </div>



                                    <div class="d-grid gap-2 mt-4">

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="d-grid gap-2 mt-4">
                                                <a style="background-color:red; padding:16px;" class="btn btn-success"
                                                href="{{ route('jobSeekerPartOne',$enCode) }}">Previous

                                                </a>
                                                </div>
        </div>
                                            <div class="col-md-6">
                                                <div class="d-grid gap-2 mt-4">
                                                <button style="background-color:black; padding:16px;" class="btn btn-success"
                                                type="submit">Submit
                                        </button>
                                                </div>
                                    </div>
                                        </div>





                                    </div>
                                </form>
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

<script src="{{asset('/')}}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('/')}}public/front/assets/js/navik.menu.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>

</body>
</html>
