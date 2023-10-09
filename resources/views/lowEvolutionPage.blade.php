@include('bootStrap')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPort</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
    }

    nav {
        width: 50%;
        height: 50px;
        background-color: white;
        line-height: 50px;
    }

    .image-container {
        position: relative;
        left: 10%;
        margin-top: 30px;
    }

    .body-container {
        padding-right: 9.5%;
        padding-bottom: 25px;
        padding-left: 9.4%;
    }

    .custom-button {
        border-radius: 6px;
        background: #065386;
        color: white;
    }

    .custom-button i {
        color: white !important;
        /* Set icon color to white */
    }

    .custom-image-container {
        width: calc(100% - 140px);
        /* Adjust the width based on your design */
    }

    .custom-image {
        width: 114.5%;
        height: 148px;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }

    .second-search-bar {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        background: transparent;
        border: 1px solid white;
        border-radius: 6px;
    }


    .second-search-bar input,
    .second-search-bar button {
        background: transparent;
        border: none;
        color: white !important;
    }


    .second-search-bar input::placeholder {
        color: white;
        border-radius: 6px;
    }

    .text-in-image {
        position: absolute;
        top: 50px;
        left: 10px;
        margin-left: 4%;
        color: white;
        font-size: 28px;

    }

    .icon-in-image {
        position: absolute;
        top: 23px;
        right: 10px;
        margin-right: 4%;
        color: white;
        font-size: 1.7em;

    }

    .faq-section {
        background: linear-gradient(to right, #065386 2%, #E8E8E8 2%);
    }

    @media (max-width: 768px) {

        /* Adjust styles for screens up to 768px wide */
        .image-container {
            left: 5%;
            margin-top: 10px;
        }

        .body-container {
            padding-right: 5%;
            padding-left: 5%;
        }

        /* Add more responsive styles as needed */
    }

    @media (max-width: 576px) {

        /* Adjust styles for screens up to 576px wide */
        .image-container {
            left: 3%;
        }



        /* Add more responsive styles as needed */
    }

    /* background-color: #E8E8E8; */

    body {
        background-color: white;
        /* Grey background color */
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .faq-container {
        max-width: 100%;
        margin: 0 auto;
        padding: 3px;
        background: linear-gradient(to right, #065386 4%, #E8E8E8 2%);
        /* White background for FAQ container */
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        /* border-radius: 5px; */
    }


    .divider {
        width: 100%;
        height: 1px;
        background-color: white;
    }




    .custom-card {
        background-color: white;
        /* Replace with your desired grey color */
        width: 100.1%;
        border-radius: 0;
    }

    table {
        margin-top: 10px;
        width: 99%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #000;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #065386;
        /* Change this to your desired background color */
        color: #fff;
        /* Change this to your desired text color */
    }
</style>

<body>








    <!-- <div class='body-container'> -->

    <div class="container mt-4">
        @include('header')
        <!-- Add a new row for the image container -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="custom-image-container">
                    <img src="{{ asset('images/rectangle.jpg') }}" alt="Rectangular Image" class="custom-image">

                    <div class="text-in-image">
                        <section style="font-size:14px">Small Business Innovation Research/Small Business Tech Transfer
                        </section>
                        <section style="font-size:20px"> Low evaporation rate storage media for cryogenic liquids, Phase
                            I</section>
                        <div class="row" style="margin-left:5px;">
                            <div class="">
                                <button class="btn"
                                    style="height: 25px;width:230px; padding: 0; font-size: 10px; background-color: white; color: black; line-height: 1;">Sort
                                    Order: Relevance</button>
                            </div>
                            <div style="margin-left:20px;">
                                <button class="btn"
                                    style="height: 25px;width:230px; padding: 0; font-size: 10px; background-color: white; color: black; line-height: 1;">Words
                                    and Phrases: No Selection</button>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-card">
                    <div class="card-body">



                        <div class="row">
                            <div class="col-md-8">


                                <section style="font-weight:bold;">Project Description</section>
                                <section>
                                    Considerable design work has been devoted to the development of cryogenic liquid
                                    storage containers. Containers which hold cryogenic liquids such as liquid nitrogen,
                                    oxygen, hydrogen, etc. often are double walled vacuum insulated or super insulation
                                    flasks, bottles or tanks. Vessels so designed for space applications have the lowest
                                    cryogen evaporation rates of any available, but research is ongoing to render these
                                    containers less permeable to heat flux. We propose a different approach to
                                    increasing the cryogenic liquid hold time. We propose increasing the heat needed to
                                    drive off the cryogenic liquid by fundamentally changing the heat needed to cause
                                    evaporation of the cryogenic liquid. Our unique approach should not be confused with
                                    technology developed to support cryogens during shipping or other mechanical
                                    gyrations, exploits the unique physics and chemistry of nanomaterials and their
                                    interaction with the cryogenic liquid. Successful development of the proposed
                                    technology will result in longer hold times, decreased payload mass, lower volume,
                                    increased safety and decreased energy utilization.
                                </section>

                                <section style="font-weight:bold;margin-top:10px;">Benefit:</section>
                                <section>
                                    Considerable design work has been devoted to the development of cryogenic liquid
                                    storage containers. Containers which hold cryogenic liquids such as liquid nitrogen,
                                    oxygen, hydrogen, etc. often are double walled vacuum insulated or super insulation
                                    flasks, bottles or tanks.
                                </section>
                                <section style="font-weight:bold;margin-top:10px;">Work Locations:</section>
                                <img src="{{ asset('images/map-image.png') }}" style="width: 700px;height: 410px;">
                                <!-- <img src="{{ asset('images/table-data.png') }}" alt=""style="width:90%;margin-top:10px;"> -->

                                <table>
                                    <tr>
                                        <th><a href="{{ url('/organizations') }}" style="color:#fff"> Organisation
                                                Performing Work</a></th>
                                        <th>Code</th>
                                        <th><a href="{{ url('/locationsPage') }}" style="color:#fff;">Location</a></th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ url('/organization-clicking') }}" style="color:black;">State
                                                University
                                                Main Campus</a></td>
                                        <td>23044</td>
                                        <td><a href="{{ url('/location-clicking') }}" style="color:black;">Houston,
                                                Texas</a></td>
                                        <td>This Organisation
                                                is responisble for Project Finance</td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ url('/organization-clicking') }}" style="color:black;">State
                                                University
                                                Main Campus</a></td>
                                        <td>23044</td>
                                        <td><a href="{{ url('/location-clicking') }}" style="color:black;">Houston,
                                                Texas</a></td>
                                        <td>This Organisation
                                                is responisble for Project Finance</td>
                                    </tr>


                                </table>
                                <section style="font-weight:bold;margin-top:30px;font-size:16px" class="mt-4"><a
                                        href="{{ url('/found-sources') }}" style="color:black;">Found Source</a>
                                </section>
                                <section>
                                    <p><a href="{{ url('/found-sources-clicking') }}" style="color:black;">T220 found
                                            source name to be found here</a></p>
                                </section>

                            </div>





                            <div class="col-md-4">

                                <img src="{{ asset('images/planet.png') }}" alt=""
                                    style="height:200px;width:auto;">
                                <section style="font-weight:bold;margin-top:30px;font-size:16px">
                                    Project Organization:
                                </section>
                                <section><a href="{{ url('/organizations') }}"
                                        style="color:black;font-weight:bold;">Organisation Performing Work</a></section>
                                <section><a href="{{ url('/organization-clicking') }}" style="color:black;">State
                                        University
                                        Main Campus</a></section>

                                <section style="font-weight:bold;margin-top:30px;"><a style="color:black;"
                                        href="{{ url('/legal-entity-roles') }}">Legal Entity Role</a></section>
                                <section><a href="{{ url('/legal-entity-roles-clicking') }}" style="color:black;">Space Technology Mission 
                                    Directorate (STMD)</a></section>
                                <section style="font-weight:bold;margin-top:30px;"><a
                                        href="{{ url('/search-results') }}" style="color:black;">Project</a></section>
                                <section><a href="{{ url('/search-results') }}" style="color:black;">Space
                                        technology Research Grant</a></section>
                                <section style="font-weight:bold;margin-top:30px;font-size:16px">Project Duration
                                </section>
                                <section>
                                    <p>Start: 24 Jan</p>
                                    <p>End : 31 Mar, 2025</p>
                                </section>

                                <section style="font-weight:bold;margin-top:30px;font-size:16px"><a
                                        href="{{ url('/mission-type') }}" style="color:black;">Mission Type</a>
                                </section>
                                <section><a href="{{ url('/mission-type-clicking') }}" style="color:black;">Drass
                                        mission type defined here.</a></section>

                                <section style="font-weight:bold;margin-top:30px;font-size:16px">Technology Maturity
                                    (TRL)</section>
                                <section><strong>Start:</strong>&nbsp;2</section>
                                <section><strong>Current:</strong> 2</section>
                                <section><strong>Estimated End:</strong> 3</section>
                                <img src="{{ asset('images/Group 153 (1).png') }}" alt="" width="100%">
                                <!-- <section style="font-weight:bold;margin-top:30px;font-size:16px">Technology Areas</section>
                <section>TX01 Propulsion Systems</section>
                <div class="row" style="margin-left:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8" fill="none">
                    <line x1="0.5" y1="2.18561e-08" x2="0.5" y2="7" stroke="black"/>
                    <line x1="15" y1="7.5" y2="7.5" stroke="black"/>
                </svg> <section style="margin-left:5px;">TX01.1 Chemical Space Propulsion</section>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8" fill="none">
                    <line x1="0.5" y1="2.18561e-08" x2="0.5" y2="7" stroke="black"/>
                    <line x1="15" y1="7.5" y2="7.5" stroke="black"/>
                </svg> <section style="margin-left:5px;">TX01.1 Chemical Space Propulsion</section>
                <section style="margin-left:5px;">
                
                TX01.1 Chemical Space Propulsion</section> -->
                                <section style="font-weight:bold;margin-top:30px;font-size:16px">Technology Areas
                                </section>
                                <section><a href="{{ url('/search-results') }}" style="color:black;">TX01 Propulsion
                                        Systems</a></section>
                                <div class="row ml-1">
                                    <svg xmlns="htp://www.w3.org/2000/svg" width="15" height="8"
                                        viewBox="0 0 15 8" fill="none">
                                        <line x1="0.5" y1="2.18561e-08" x2="0.5" y2="7"
                                            stroke="black" />
                                        <line x1="15" y1="7.5" y2="7.5" stroke="black" />
                                    </svg>
                                    <section style="margin-left:5px;"><a href="{{ url('/search-results') }}"
                                            style="color:black;">TX01.1 Chemical Space Propulsion</a></section>
                                </div>
                                <div class="row" style="margin-left:25px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8"
                                        viewBox="0 0 15 8" fill="none">
                                        <line x1="0.5" y1="2.18561e-08" x2="0.5" y2="7"
                                            stroke="black" />
                                        <line x1="15" y1="7.5" y2="7.5" stroke="black" />
                                    </svg>
                                    <section style="margin-left:5px;"><a href="{{ url('/search-results') }}"
                                            style="color:black;">TX01.1.3 Cryogenic</a></section>
                                </div>
                                <section style="font-weight:bold;margin-top:25px;font-size:16px"><a
                                        href="{{ url('/project-targets') }}" style="color:black;">Project target</a>
                                </section>
                                <section style="margin-left:5px;"><a href="{{ url('/project-target-clicking') }}"
                                        style="color:black;">Earth</a></section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>


    <div style="margin-top:200px"></div>

    <footer>
        @include('footer')
    </footer>

</body>

</html>
