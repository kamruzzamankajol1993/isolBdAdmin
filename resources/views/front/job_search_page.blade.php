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
                <h3>Interworld Shipping
                    Hospitality Overseas Limited</h3>
                <h2>Mission</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="card">
                <div class="card-body custom_form_color">
                    <form class="" action="">
                        <div class="custom_form_div">
                            <div class="row ">
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example" name="position">
                                        <option value="" selected="">Position</option>
                                        <option value="1st Engineer">1st Engineer</option>
                                        <option value="1st and 2nd Engineers">1st and 2nd Engineers</option>
                                        <option value="2nd Backhoe Operator">2nd Backhoe Operator</option>
                                        <option value="2nd Cook">2nd Cook</option>
                                        <option value="2nd Engineer">2nd Engineer</option>
                                        <option value="2nd Engineer DP">2nd Engineer DP</option>
                                        <option value="2nd Mate">2nd Mate</option>
                                        <option value="2nd Mate/DPO">2nd Mate/DPO</option>
                                        <option value="2nd Mate/JDPO">2nd Mate/JDPO</option>
                                        <option value="2nd Mate /SDPO">2nd Mate /SDPO</option>
                                        <option value="3rd Engineer">3rd Engineer</option>
                                        <option value="3rd/Single Engineer">3rd/Single Engineer</option>
                                        <option value="3rd Mate">3rd Mate</option>
                                        <option value="3rd Mate/DPO">3rd Mate/DPO</option>
                                        <option value="4th Engineer">4th Engineer</option>
                                        <option value="AB">AB</option>
                                        <option value="AB/Banksman">AB/Banksman</option>
                                        <option value="AB with a Motorman COC">AB with a Motorman COC</option>
                                        <option value="AB/COOK">AB/COOK</option>
                                        <option value="AB/Crane Operator">AB/Crane Operator</option>
                                        <option value="AB/Motorman">AB/Motorman</option>
                                        <option value="AB or Motorman">AB or Motorman</option>
                                        <option value="AB/OS">AB/OS</option>
                                        <option value="AB/Rigger">AB/Rigger</option>
                                        <option value="AB/Welder">AB/Welder</option>
                                        <option value="Ampelmann">Ampelmann</option>
                                        <option value="Ballast Engineer">Ballast Engineer</option>
                                        <option value="Bosun">Bosun</option>
                                        <option value="Camp Boss">Camp Boss</option>
                                        <option value="Carpenter">Carpenter</option>
                                        <option value="Carousel Operator">Carousel Operator</option>
                                        <option value="Chief Engineer">Chief Engineer</option>
                                        <option value="Chief Engineer/2nd Engineer">Chief Engineer/2nd Engineer</option>
                                        <option value="Chief Engineer/Single Engineer">Chief Engineer/Single Engineer
                                        </option>
                                        <option value="Chief Cook">Chief Cook</option>
                                        <option value="COOK">COOK</option>
                                        <option value="Cook/AB">Cook/AB</option>
                                        <option value="Cook Assistant">Cook Assistant</option>
                                        <option value="Cook/OS">Cook/OS</option>
                                        <option value="Chief Mate">Chief Mate</option>
                                        <option value="Chief Mate/2nd Mate">Chief Mate/2nd Mate</option>
                                        <option value="CO DPO">CO DPO</option>
                                        <option value="CO SDPO">CO SDPO</option>
                                        <option value="Crane Operator">Crane Operator</option>
                                        <option value="CROP/AB">CROP/AB</option>
                                        <option value="Crane OP stage 2">Crane OP stage 2</option>
                                        <option value="Crane OP stage 3">Crane OP stage 3</option>
                                        <option value="Crew for an Oil/Chemical Tanker">Crew for an Oil/Chemical
                                            Tanker
                                        </option>
                                        <option value="Crew for a Drillship">Crew for a Drillship</option>
                                        <option value="Deck Cadet">Deck Cadet</option>
                                        <option value="Deck and Engine Cadets">Deck and Engine Cadets</option>
                                        <option value="Deck, Engine, and Electrician Cadets">Deck, Engine, and
                                            Electrician
                                            Cadets
                                        </option>
                                        <option value="Deck Fitter">Deck Fitter</option>
                                        <option value="Deck Foreman">Deck Foreman</option>
                                        <option value="Deckhand">Deckhand</option>
                                        <option value="Deckhand with Engine rating cert.">Deckhand with Engine rating
                                            cert.
                                        </option>
                                        <option value="Deck Team Members">Deck Team Members</option>
                                        <option value="Diver">Diver</option>
                                        <option value="DPO">DPO</option>
                                        <option value="Dredger Team Members">Dredger Team Members</option>
                                        <option value="Driller">Driller</option>
                                        <option value="Electrical Engineer">Electrical Engineer</option>
                                        <option value="Electrical Mechanic">Electrical Mechanic</option>
                                        <option value="Electrician">Electrician</option>
                                        <option value="Electr. asistant">Electr. asistant</option>
                                        <option value="Electrical Foreman">Electrical Foreman</option>
                                        <option value="Engineer">Engineer</option>
                                        <option value="Engine Cadet">Engine Cadet</option>
                                        <option value="Engine Team Members">Engine Team Members</option>
                                        <option value="EROT (Engine Rating Officer Trainee)">EROT (Engine Rating Officer
                                            Trainee)
                                        </option>
                                        <option value="ETO">ETO</option>
                                        <option value="Excavator/ Backhoe">Excavator/ Backhoe</option>
                                        <option value="Fitter">Fitter</option>
                                        <option value="AB/Fitter">AB/Fitter</option>
                                        <option value="Fitter/Motorman">Fitter/Motorman</option>
                                        <option value="Fitter/Welder">Fitter/Welder</option>
                                        <option value="Greaser">Greaser</option>
                                        <option value="HSE/Medic">HSE/Medic</option>
                                        <option value="Hydraulic mechanic">Hydraulic mechanic</option>
                                        <option value="JDPO">JDPO</option>
                                        <option value="Junior Electrician">Junior Electrician</option>
                                        <option value="Junior Officer">Junior Officer</option>
                                        <option value="Marine Superintendent">Marine Superintendent</option>
                                        <option value="Master">Master</option>
                                        <option value="Master/Chief Mate">Master/Chief Mate</option>
                                        <option value="Master/DPO">Master/DPO</option>
                                        <option value="Medic">Medic</option>
                                        <option value="Messman">Messman</option>
                                        <option value="Mechanic Foreman">Mechanic Foreman</option>
                                        <option value="Motorman">Motorman</option>
                                        <option value="Motorman / 3rd Engineer">Motorman / 3rd Engineer</option>
                                        <option value="MM with 3rd Eng. COC">MM with 3rd Eng. COC</option>
                                        <option value="Night Chief  Electrician">Night Chief Electrician</option>
                                        <option value="Oiler">Oiler</option>
                                        <option value="Oiler/Fitter">Oiler/Fitter</option>
                                        <option value="Oiler/4th Engineer">Oiler/4th Engineer</option>
                                        <option value="OOW">OOW</option>
                                        <option value="OS">OS</option>
                                        <option value="OS/Crane Operator">OS/Crane Operator</option>
                                        <option value="OS/MM">OS/MM</option>
                                        <option value="Painter">Painter</option>
                                        <option value="Pipe Operator">Pipe Operator</option>
                                        <option value="Plumber">Plumber</option>
                                        <option value="Pumpman">Pumpman</option>
                                        <option value="Refrigerator Mechanic">Refrigerator Mechanic</option>
                                        <option value="Radio Operator">Radio Operator</option>
                                        <option value="Ref. Engineer">Ref. Engineer</option>
                                        <option value="Rigger">Rigger</option>
                                        <option value="Rigger Foreman">Rigger Foreman</option>
                                        <option value="Roustabout">Roustabout</option>
                                        <option value="ROV Operator">ROV Operator</option>
                                        <option value="Skipper">Skipper</option>
                                        <option value="SDPO">SDPO</option>
                                        <option value="Single Engineer">Single Engineer</option>
                                        <option value="Safety Officer">Safety Officer</option>
                                        <option value="Steward(ess)">Steward(ess)</option>
                                        <option value="Steward(ess) Medic">Steward(ess) Medic</option>
                                        <option value="Storekeeper">Storekeeper</option>
                                        <option value="Superintendent">Superintendent</option>
                                        <option value="Tuggerhoist Operator">Tuggerhoist Operator</option>
                                        <option value="Welder">Welder</option>
                                        <option value="Wiper">Wiper</option>
                                        <option value="Recruiter">Recruiter</option>
                                        <option value="HR Asisstant">HR Asisstant</option>
                                        <option value="HR Manager">HR Manager</option>
                                        <option value="Crew Coordinator">Crew Coordinator</option>
                                        <option value="Travel Coordinator">Travel Coordinator</option>
                                        <option value="Mechanic">Mechanic</option>
                                        <option value="Hotel manager">Hotel manager</option>
                                        <option value="Night Cook">Night Cook</option>
                                        <option value="Ballast Engineer">Ballast Engineer</option>
                                        <option value="Recruiter">Recruiter</option>
                                        <option value="Crew Coordinator / Recruiter">Crew Coordinator / Recruiter
                                        </option>
                                        <option value="HR Assistant / Recruiter">HR Assistant / Recruiter</option>
                                        <option value="Coxswain">Coxswain</option>
                                        <option value="Boatman">Boatman</option>
                                        <option value="Camp Boss / Chief Cook">Camp Boss / Chief Cook</option>
                                        <option value="DP operator">DP operator</option>
                                        <option value="Floorman">Floorman</option>
                                        <option value="HR Director/ Head of HR">HR Director/ Head of HR</option>
                                        <option value="2nd Deck Engineer ">2nd Deck Engineer</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example" name="contract">
                                        <option value="" selected="">Type of contract</option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part time">Part time</option>
                                        <option value="Permanent">Permanent</option>
                                        <option value="Several Trips">Several Trips</option>
                                        <option value="Temporary">Temporary</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example" name="location">
                                        <option value="" selected="">Location</option>
                                        <option value="Africa (Mauritius)">Africa (Mauritius)</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                        <option value="Africa (Gabon)">Africa (Gabon)</option>
                                        <option value="Asia">Asia</option>
                                        <option value="Asia/Australia">Asia/Australia</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Balearic Sea">Balearic Sea</option>
                                        <option value="Baltic Sea">Baltic Sea</option>
                                        <option value="Barents Sea">Barents Sea</option>
                                        <option value="Black Sea">Black Sea</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Caribbean Sea">Caribbean Sea</option>
                                        <option value="Caribbean - Europe">Caribbean - Europe</option>
                                        <option value="Cadiz/Malaysia">Cadiz/Malaysia</option>
                                        <option value="Central America">Central America</option>
                                        <option value="China">China</option>
                                        <option value="China-Singapore">China-Singapore</option>
                                        <option value="Dutch continental shelf">Dutch continental shelf</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="East Africa">East Africa</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Europe">Europe</option>
                                        <option value="Europe-Caribbean">Europe-Caribbean</option>
                                        <option value="Estonian Waters">Estonian Waters</option>
                                        <option value="France">France</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Far East">Far East</option>
                                        <option value="Far East Asia">Far East Asia</option>
                                        <option value="Finland">Finland</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Germany/Norway">Germany/Norway</option>
                                        <option value="German waters rivers / sea">German waters rivers / sea</option>
                                        <option value="Gdynia (Poland)">Gdynia (Poland)</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gdansk (Poland)">Gdansk (Poland)</option>
                                        <option value="Great Lakes – St. Lawrence Waterway">Great Lakes – St. Lawrence
                                            Waterway
                                        </option>
                                        <option value="Great Lakes">Great Lakes</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="GOM">GOM</option>
                                        <option value="India - Sri Lanka">India - Sri Lanka</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Mediterranean">Mediterranean</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Las Palmas">Las Palmas</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Lauwersoog (Netherlands)">Lauwersoog (Netherlands)</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Norway">Norway</option>
                                        <option value="North America">North America</option>
                                        <option value="North Europe">North Europe</option>
                                        <option value="North Sea">North Sea</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Persian Offshore sectors">Persian Offshore sectors</option>
                                        <option value="Persian Gulf">Persian Gulf</option>
                                        <option value="Peniche (Portugal)">Peniche (Portugal)</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="UAE">UAE</option>
                                        <option value="USA">USA</option>
                                        <option value="UK">UK</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="South America">South America</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Spain - Mexico ">Spain - Mexico</option>
                                        <option value="South East Asia">South East Asia</option>
                                        <option value="South West Africa">South West Africa</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="West Africa">West Africa</option>
                                        <option value="West Europe">West Europe</option>
                                        <option value="West Ice Shelf">West Ice Shelf</option>
                                        <option value="Worldwide">Worldwide</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Estonia">Estonia</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example" name="trip_length">
                                        <option value="" selected="">Contract duration</option>
                                        <option value="1 week">1 week</option>
                                        <option value="2 weeks">2 weeks</option>
                                        <option value="2 weeks on/off">2 weeks on/off</option>
                                        <option value="3 weeks">3 weeks</option>
                                        <option value="3-4 weeks">3-4 weeks</option>
                                        <option value="4 weeks">4 weeks</option>
                                        <option value="4 weeks on/off">4 weeks on/off</option>
                                        <option value="4 weeks +/-2">4 weeks +/-2</option>
                                        <option value="4-6 weeks">4-6 weeks</option>
                                        <option value="4-6 weeks on/off">4-6 weeks on/off</option>
                                        <option value="4-10 weeks">4-10 weeks</option>
                                        <option value="5 weeks">5 weeks</option>
                                        <option value="5 weeks on/off">5 weeks on/off</option>
                                        <option value="5-6 weeks on/off">5-6 weeks on/off</option>
                                        <option value="5-10 weeks">5-10 weeks</option>
                                        <option value="6 weeks">6 weeks</option>
                                        <option value="6 weeks on/off">6 weeks on/off</option>
                                        <option value="6 weeks +/- 2">6 weeks +/- 2</option>
                                        <option value="6 weeks on/ 2 weeks off">6 weeks on/ 2 weeks off</option>
                                        <option value="6-7 weeks">6-7 weeks</option>
                                        <option value="6-8 weeks">6-8 weeks</option>
                                        <option value="6-10 weeks">6-10 weeks</option>
                                        <option value="7 weeks">7 weeks</option>
                                        <option value="7-8 weeks">7-8 weeks</option>
                                        <option value="8 weeks">8 weeks</option>
                                        <option value="8 weeks +/- 1">8 weeks +/- 1</option>
                                        <option value="8 weeks +/- 2">8 weeks +/- 2</option>
                                        <option value="8-10 weeks">8-10 weeks</option>
                                        <option value="9 weeks">9 weeks</option>
                                        <option value="9 weeks on/off">9 weeks on/off</option>
                                        <option value="9 weeks +/-1">9 weeks +/-1</option>
                                        <option value="9-13 weeks">9-13 weeks</option>
                                        <option value="10 weeks +/- 2">10 weeks +/- 2</option>
                                        <option value="10 weeks">10 weeks</option>
                                        <option value="10 weeks on/off">10 weeks on/off</option>
                                        <option value="10-12 weeks">10-12 weeks</option>
                                        <option value="12 weeks">12 weeks</option>
                                        <option value="12-14 weeks">12-14 weeks</option>
                                        <option value="13 weeks">13 weeks</option>
                                        <option value="1 month">1 month</option>
                                        <option value="1-2 months">1-2 months</option>
                                        <option value="1 month/(negotiation)">1 month/(negotiation)</option>
                                        <option value="1.5-3 months">1.5-3 months</option>
                                        <option value="2 months">2 months</option>
                                        <option value="2-3 months">2-3 months</option>
                                        <option value="2 months +/-1">2 months +/-1</option>
                                        <option value="2 months on/off">2 months on/off</option>
                                        <option value="2.5 months">2.5 months</option>
                                        <option value="2-3 months on/1-2 months off">2-3 months on/1-2 months off
                                        </option>
                                        <option value="2-4 months">2-4 months</option>
                                        <option value="2.5-3 months">2.5-3 months</option>
                                        <option value="3 months">3 months</option>
                                        <option value="3 months +/-1">3 months +/-1</option>
                                        <option value="3 months +/-1 (negotiable)">3 months +/-1 (negotiable)</option>
                                        <option value="3 months on/1 off">3 months on/1 off</option>
                                        <option value="3 months on/ 2 off">3 months on/ 2 off</option>
                                        <option value="3-2 months">3-2 months</option>
                                        <option value="3-4 months">3-4 months</option>
                                        <option value="4 months">4 months</option>
                                        <option value="4 months +1">4 months +1</option>
                                        <option value="4 months +/-1">4 months +/-1</option>
                                        <option value="4 months on/ 1 month off">4 months on/ 1 month off</option>
                                        <option value="4 months on/2 off">4 months on/2 off</option>
                                        <option value="4-5 months">4-5 months</option>
                                        <option value="4-6 months">4-6 months</option>
                                        <option value="5 months">5 months</option>
                                        <option value="5 months +1">5 months +1</option>
                                        <option value="5 months +/-1">5 months +/-1</option>
                                        <option value="6 months">6 months</option>
                                        <option value="6 months +/-1">6 months +/-1</option>
                                        <option value="8-12 months">8-12 months</option>
                                        <option value="All time">All time</option>
                                        <option value="Onshore">Onshore</option>
                                        <option value="Permanent job">Permanent job</option>
                                        <option value="Negotiable">Negotiable</option>
                                        <option value="8 days">8 days</option>
                                        <option value="10 days">10 days</option>
                                        <option value="28 days on/off">28 days on/off</option>
                                        <option value="30 days on/off">30 days on/off</option>
                                        <option value="40 days on/off">40 days on/off</option>
                                        <option value="42 days on/off">42 days on/off</option>
                                        <option value="44 days">44 days</option>
                                        <option value="45 days on/off">45 days on/off</option>
                                        <option value="45-60 days on/off">45-60 days on/off</option>
                                        <option value="60 days on / 30 days off">60 days on / 30 days off</option>
                                        <option value="60 days on/off">60 days on/off</option>
                                        <option value="70 days on/off">70 days on/off</option>
                                        <option value="80 days on/off">80 days on/off</option>
                                        <option value="90 days on/off">90 days on/off</option>
                                        <option value="70/35 days on/off">70/35 days on/off</option>
                                        <option value="35/35 days on/off">35/35 days on/off</option>
                                        <option value="56/28 days on/off">56/28 days on/off</option>
                                        <option value="165/30 days on/off">165/30 days on/off</option>
                                        <option value="3 weeks on/off">3 weeks on/off</option>
                                        <option value="4-6 weeks">4-6 weeks</option>
                                        <option value="100 Days">100 Days</option>
                                        <option value="105 Days">105 Days</option>
                                        <option value="8 months +/- 2">8 months +/- 2</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-1">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary btn-lg" type="button">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="">
                        <div class="vacancies">
                            <section class="table">
                                <div class="container">
                                    <div>
                                        <h3 style="display: inline">COOK </h3>
                                        <p class="posted-date">March 1, 2024</p>
                                    </div>

                                    <div class="left">
                                        <span>Type of vessel: AHTS</span>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_cards.png">

                                        <p>$185</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_flag.png">

                                        <p>Worldwide</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_clocl.png">

                                        <p>60 days on/off</p>
                                    </div>
                                    <div class="right">
                                        <a href="#"
                                           class="button apply-button float-end">Apply now</a>
                                    </div>
                                    <div class="clear-both"></div>

                                </div>

                                <div class="container">
                                    <div>
                                        <h3 style="display: inline">Chief Mate </h3>

                                        <p class="posted-date">March 1, 2024</p>
                                    </div>

                                    <div class="left">
                                        <span>Type of vessel: </span>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_cards.png">

                                        <p>$350</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_flag.png">

                                        <p>Worldwide</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_clocl.png">

                                        <p>60 days on/off</p>
                                    </div>
                                    <div class="right">
                                        <a href="#"
                                           class="button apply-button float-end">Apply now</a>

                                    </div>
                                    <div class="clear-both"></div>

                                </div>

                                <div class="container">
                                    <div>
                                        <h3 style="display: inline">Motorman </h3>

                                        <p class="posted-date">March 1, 2024</p>
                                    </div>

                                    <div class="left">
                                        <span>Type of vessel: OSV</span>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_cards.png">

                                        <p>$185</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_flag.png">

                                        <p>Worldwide</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_clocl.png">

                                        <p>6 weeks</p>
                                    </div>
                                    <div class="right">
                                        <a href="#"
                                           class="button apply-button float-end">Apply now</a>

                                    </div>
                                    <div class="clear-both"></div>

                                </div>

                                <div class="container">
                                    <div>
                                        <h3 style="display: inline">3rd Engineer </h3>

                                        <p class="posted-date">February 29, 2024</p>
                                    </div>

                                    <div class="left">
                                        <span>Type of vessel: Reefer</span>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_cards.png">

                                        <p>$3699</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_flag.png">

                                        <p>Worldwide</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_clocl.png">

                                        <p>4 months +/-1</p>
                                    </div>
                                    <div class="right">
                                        <a href=""
                                           class="button apply-button float-end">Apply now</a>
                                    </div>
                                    <div class="clear-both"></div>

                                </div>

                                <div class="container">
                                    <div>
                                        <h3 style="display: inline">Single Engineer </h3>

                                        <p class="posted-date">February 29, 2024</p>
                                    </div>

                                    <div class="left">
                                        <span>Type of vessel: General Cargo</span>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_cards.png">

                                        <p>€7800</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_flag.png">

                                        <p>Worldwide</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_clocl.png">

                                        <p>8 weeks</p>
                                    </div>
                                    <div class="right">
                                        <a href="#"
                                           class="button apply-button float-end">Apply now</a>

                                    </div>
                                    <div class="clear-both"></div>

                                </div>

                                <div class="container">
                                    <div>
                                        <h3 style="display: inline">Deck Cadet </h3>

                                        <p class="posted-date">February 29, 2024</p>
                                    </div>

                                    <div class="left">
                                        <span>Type of vessel: General Cargo</span>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_cards.png">

                                        <p>€500</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_flag.png">

                                        <p>Worldwide</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_clocl.png">

                                        <p>3 months</p>
                                    </div>
                                    <div class="right">
                                        <a href=""
                                           class="button apply-button float-end">Apply now</a>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </section>
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
