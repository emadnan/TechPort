@include('bootStrap')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;

        }

        /* search bar and button */
        :root {
            --font: "Inter", sans-serif;
            --royal-blue: #065386;
            --black: #292929;
            --white: #fbfbfb;
        }

        /* SEARCH BAR CONTAINER */
        .search-local {
            width: 95%;
            /* max-width: 175rem; */
            display: flex;
            align-items: center;
            column-gap: 2rem;
            padding-left: 2rem;
            background: var(--white);
            border-radius: 0.6rem;
            /* min-height: 7rem; */
            height: 50px;
            border: 0.1rem solid #747474;
            border-right: none;
        }


        /* INPUT */
        .search-local input {
            height: 100%;
            width: 100%;
            flex: 1 1 25rem;
            background: var(--white);
            display: flex;
            outline: none;
            border: none;
            color: var(--black);
            /* font-size: 2.4rem; */
            font-size: 20px;
        }

        input[type="text"]::placeholder {
            /* color: var(--black); */
            /* font-size: 2.4rem; */
            font-size: 20px;
        }

        /* BUTTON */
        .search-local button {
            background: var(--royal-blue);
            border: none;
            border-radius: 0.6rem;
            font-size: 1.4rem;
            height: 50px;
            width: 100px;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            margin-left: 20px;

        }

        .advance_search_btn {
            height: 50px;
            width: auto;
            margin-left: -50px;
            font-size: 18px;
            /* text-align: center; */
            border-radius: 0.6rem;
            background: #065386;
            color: white;
            pointer-events: none;
            padding-top: 10px;
            /* flex-shrink: 0; */
            font-family: Open Sans !important;
            font-weight: 500;

        }

        /* MEDIAS */
        @media (max-width: 575px) {
            .search-local {
                padding-left: 0;
                column-gap: 0.25rem;
            }

            .search-local button {
                width: 10rem;
            }

            button a {
                display: none;
            }

            .search-local button .search-icon {
                display: block;
                margin-inline: auto;
                color: var(--white);
                font-size: 3rem;
                pointer-events: none;
            }

            input[type="text"]::placeholder {
                font-size: 1.7rem;
            }
        }



        /* end */

        nav {
            width: 100%;
            height: 50px;
            background-color: white;
            line-height: 50px;
        }

        /* Nav bar ImageContainer Starts */
        .image-container {
            position: relative;
            left: 9%;
            margin-top: 30px;
        }

        /* Nav bar ImageContainer Ends */

        .body-container {
            /* padding-top: 25px; */
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
            width: 114.4%;
            height: auto;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            filter: brightness(0.7);
        }

        .second-search-bar {
            position: absolute;
            margin-top: -5%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            /* background: transparent; */
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
            top: 18px;
            left: 10px;
            margin-left: 4%;
            color: white;
            font-size: 40px;


        }

        .icon-in-image {
            position: absolute;
            top: 23px;
            right: 10px;
            margin-right: 3.5%;
            color: white;
            font-size: 1.7em;


        }

        .faq-section {
            background: linear-gradient(to right, #065386 4%, #E8E8E8 2%);
        }


        .faq-question {
            /* padding: 2px; */
            /* font-weight: bold; */
            cursor: pointer;
            position: relative;
            font-size: 24px;
            font-weight: 400;
            line-height: normal;
            font-style: normal;
            letter-spacing: -0.36px;
        }

        .faq-answer {
            padding-bottom: 8px;
            display: none;
            margin-left: 20px;
            cursor: pointer;
            background: linear-gradient(to right, yellow 2%, #E8E8E8 2%);
        }

        .faq-sub-answer {
            display: none;
            margin-left: 50px;
        }

        .expanded-color-container {
            position: relative;
            display: inline-block;
        }

        /* for handle the rotation */
        .expanded-color-container .fa-angle-right {
            transition: transform 0.3s;
            /* Add a transition for smooth rotation */
        }

        .expanded {
            transform: rotate(90deg);
            /* Rotate the arrow 90 degrees when open */
        }

        .sub-answer {
            display: none;
            /* Initially hide the sub-answer content */
        }

        /* end */

        .solid-square {
            position: absolute;
            width: 40px;
            height: 40px;

            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fa-angle-right {
            color: black;
            font-size: 12px;
            margin-left: 5px;
            margin-right: 10px;
        }

        .faq-question .faq-question {
            margin-top: 10px;
            border-top: 1px solid white;
            padding-top: 10px;
        }

        .faq-question .fa-arrow-right {
            position: absolute;
            top: 0;
            right: 0;
            margin-top: 10px;
            margin-right: 10px;
        }

        .lower-arrow {
            /* margin-top: 10px; */
            color: white;
            transition: transform 0.3s;
            padding: 10px;

        }

        .open {
            transform: rotate(90deg);
            /* Rotate the arrow 90 degrees when open */
        }

        .faq-question+.faq-answer::before {
            content: "";
            display: block;
            height: 1px;
            background-color: white;
            /* Choose your preferred divider color */
            margin-top: 10px;
            /* Adjust the margin as needed */
        }

        /* Add the background gradient to the faq-answer */
        .faq-answer {
            display: none;
            margin-left: 23px;
            cursor: pointer;
            background: linear-gradient(to right, #FFA800 2%, #E8E8E8 2%);
            /* Apply yellow background gradient */
        }

        /* Adjust the FAQ sub-answer styles */
        .faq-sub-answer {
            display: none;
            margin-left: 23px;
            background: linear-gradient(to right, #FFA800 2%, #E8E8E8 2%);
            /* Apply the same yellow background gradient */
        }

        .faq-sub-answer-text {
            margin-left: 23px;
        }


        .custom-icon {
            float: right;
            margin-top: 5px;
            margin-right: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        /* Define the styles for the divider */
        .divider {
            height: 1px;
            /* Adjust the height as needed */
            background-color: white;
            /* Set the background color of the divider */

        }


        .popup {
            position: relative;
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin-left: 50px;
        }

        /* The actual popup */
        /* Popup container */
        .popup .popuptext {
            visibility: hidden;
            width: 0px;
            height: 0px;
            background-color: white;
            color: black;
            text-align: center;
            border-radius: 2px;
            padding: 8px 0;
            position: absolute;
            z-index: 1;
            top: 57%;
            /* Change this to 'top' instead of 'bottom' */
            left: -715%;
            margin-left: -80px;
            /* border: 2px solid #065386; */
        }



        /* Toggle this class - hide and show the popup */
        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        #encapsulation {
            width: 100%;
            padding: 50px 0;
            text-align: center;
            background-color: lightblue;
            margin-top: 20px;
        }

        #rotate-icon {
            transition: transform 0.3s ease;
            /* Add a smooth transition effect */
            cursor: pointer;
            /* Change the cursor to a pointer when hovering over the icon */
        }

        .rotate {
            transform: rotate(180deg);
            /* Adjust the degrees for the desired rotation */
        }
    </style>
</head>


<body>

    <div class="container">
        {{-- Site Logo --}}
        <div class="row mt-5">
            <div class="col-md-10 mt-5 mb-5">
                <img class="mb-3" src="{{ URL('images/DrassLogo1.png') }}" alt="">
                <br>
                <img src="{{ URL('images/DrassLogo2.png') }}" alt="">
            </div>
        </div>
        <div class="col-md-2"></div>
        {{-- End --}}

        {{-- Search Bar goes here --}}
        <div class="row top-search-bar">
            <div class="col-md-10 mb-2">
                <form>
                    <div class="search-local">
                        <input type="text" placeholder="Search Project">
                        <button>
                            <i class="fas fa-search fa-light fa-sm " style="color:#f4f7fa; "></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <a href="{{ url('/AdvanceSearch') }}" class="btn btn-block btn-lg advance_search_btn">Advanced
                    Search</a>
            </div>
        </div>
        {{-- end --}}

        {{-- section of Drass Taxonomy with background image --}}
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="custom-image-container">
                    <img src="{{ URL('images/rectangle.jpg') }}" alt="Rectangular Image" class="custom-image">
                    <!-- Text inside the image container -->
                    <div class="text-in-image">
                        <b>DRASS Taxonomy</b>
                    </div>
                    <div class="icon-in-image">
                        <div class="graph-icon"><img src="{{ URL('images/icon-white.png') }}"
                                style="height:50px;width:50px;"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Row for second search bar --}}
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline second-search-bar">
                    <div class="input-group w-100">
                        <input type="text" class="form-control w-100" placeholder="Filter Taxanomy"
                            style="border-radius: 0; width: 100%; background-color: rgba(0, 0, 0, 0); font-size:20px">
                        <!-- Adjust the width here -->

                        <button class="btn" type="submit" style="background-color: rgba(0, 0, 0, 0) !important;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        {{-- end --}}


        <div class="row">
            <div class="col-md-12">
                <div class="faq-section">
                    <!-- FAQ Question and Answer -->
                    <div class="faq-container">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                            <i class="fa-solid fa-angle-right lower-arrow"></i><span style="padding-left: 10px;">TX01 Propulsion Systems</span>
                            <div class="graph-icon custom-icon popup" onclick="myFunction()">
                                <img src="{{ URL('images/icon-blue.png') }}" style="width:18px;">
                            </div>
                        </div>

                        <div class="faq-answer" onclick="toggleSubAnswer(this)">
                            <div class="expanded-color-container">
                                <div class="solid-square"></div>
                                <i id="icon" class="fa-solid fa-angle-right" style="color:white;"></i>
                                TX01.1 Chemical Space Propulsion

                            </div>

                            <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">

                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>

                        </div>

                        {{-- sub-answer section --}}
                        <div class="faq-sub-answer">
                            <div class="faq-sub-answer-text">
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div class="divider"></div>
                                    <div style="display:flex;" id="myClickableDiv">
                                        <i class="fa-solid fa-angle-right" style="margin-top:10px;color:white"></i>
                                        <div>TX01.1.1 Integrated Systems and Ancillary Technologies
                                            <div class="graph-icon custom-icon popup float-end" style="align-items: end"
                                                onclick="myFunction()"><img src="{{ URL('images/icon-black.png') }}"
                                                    style="width:18px; margin-left:556px;">
                                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                                <span class="popuptext" id="myPopup">
                                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="display:flex;display:none;" id="myDIV">


                                    <div
                                        style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);">
                                        <div style="margin-left: 26px;font-size:12px;">
                                            <b>Example Technologies</b><br>
                                            For launch vehicles: Thrust vector control (TVC), main propulsion systems,
                                            reaction control systems (RCS), roll control systems (RoCS), separation
                                            motors, ullage settling motors, abort propulsion systems, propellant storage
                                            and transfer, nanocomposites, green propellants. For in-space propulsion:
                                            CubeSat propulsion, propellant management devices (PMDs).
                                        </div>
                                    </div>

                                </div>



                                <div class="divider"></div>
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div class="divider"></div>
                                    <i class="fa-solid fa-angle-right" id="toggleButton" style="color:white;"></i>
                                    TX01.1.1 Integrated Systems and Ancillary Technologies

                                    <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                            src="{{ URL('images/icon-black.png') }}" style="width:19px;">
                                        <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                        <span class="popuptext" id="myPopup">
                                            <img src="{{ URL('images/pop-up-graph.png') }}">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
        <div class="divider"></div>



        <div class="row">
            <div class="col-md-12">
                <div class="faq-section">
                    <!-- FAQ Question and Answer -->
                    <div class="faq-container">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                            <i class="fa-solid fa-angle-right lower-arrow"></i><span style="padding-left: 10px;">TX02 Flight Computing and Avionics</span>

                            <div class="graph-icon custom-icon popup" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-blue.png') }}" style="width:18px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>

                            <!-- </i> -->
                        </div>


                        <div class="faq-answer" onclick="toggleSubAnswer(this)">
                            <div class="expanded-color-container">
                                <div class="solid-square"></div>
                                <i class="fa-solid fa-angle-right rotate-icon"></i>
                                TX01.1 Chemical Space Propulsion
                            </div>
                            <!-- <div class="divider"></div> -->
                            <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>
                        </div>


                        <div class="faq-sub-answer">
                            <div class="faq-sub-answer-text">
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div style="display:flex;" id="myClickableDiv">
                                        <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i>
                                        <div>Chemical Space Propulsion
                                            <div class="graph-icon custom-icon popup float-end"
                                                style="align-items: end" onclick="myFunction()"><img
                                                    src="{{ URL('images/icon-black.png') }}"
                                                    style="width:18px; margin-left:749px;">
                                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                                <span class="popuptext" id="myPopup">
                                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                </div>



                                <div style="display:flex;display:none;" id="myDIV">
                                    <div
                                        style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);">
                                        <div style="margin-left: 26px;">
                                            For launch vehicles: Thrust vector control (TVC), main propulsion systems,
                                            reaction control systems (RCS), roll control systems (RoCS), separation
                                            motors, ullage settling motors, abort propulsion systems, propellant storage
                                            and transfer, nanocomposites, green propellants. For in-space propulsion:
                                            CubeSat propulsion, propellant management devices (PMDs).
                                        </div>
                                    </div>

                                </div>



                                <div class="divider"></div>
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space
                                    Propulsion

                                    <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                            src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                        <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                        <span class="popuptext" id="myPopup">
                                            <img src="{{ URL('images/pop-up-graph.png') }}">
                                        </span>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
        <div class="divider"></div>





        <div class="row">
            <div class="col-md-12">
                <div class="faq-section">
                    <!-- FAQ Question and Answer -->
                    <div class="faq-container">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                            <i class="fa-solid fa-angle-right lower-arrow"></i><span style="padding-left: 10px;">TX03 Aerospace Power and Energy Storage</span>

                            <div class="graph-icon custom-icon popup" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-blue.png') }}" style="width:18px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>

                            <!-- </i> -->
                        </div>


                        <div class="faq-answer" onclick="toggleSubAnswer(this)">
                            <div class="expanded-color-container">
                                <div class="solid-square"></div>
                                <i class="fa-solid fa-angle-right rotate-icon"></i>
                                TX01.1 Chemical Space Propulsion
                            </div>
                            <!-- <div class="divider"></div> -->
                            <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>
                        </div>


                        <div class="faq-sub-answer">
                            <div class="faq-sub-answer-text">
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div style="display:flex;" id="myClickableDiv">
                                        <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i>
                                        <div>Chemical Space Propulsion
                                            <div class="graph-icon custom-icon popup float-end"
                                                style="align-items: end" onclick="myFunction()"><img
                                                    src="{{ URL('images/icon-black.png') }}"
                                                    style="width:18px; margin-left:749px;">
                                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                                <span class="popuptext" id="myPopup">
                                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                </div>



                                <div style="display:flex;display:none;" id="myDIV">
                                    <div
                                        style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);">
                                        <div style="margin-left: 26px;">
                                            For launch vehicles: Thrust vector control (TVC), main propulsion systems,
                                            reaction control systems (RCS), roll control systems (RoCS), separation
                                            motors, ullage settling motors, abort propulsion systems, propellant storage
                                            and transfer, nanocomposites, green propellants. For in-space propulsion:
                                            CubeSat propulsion, propellant management devices (PMDs).
                                        </div>
                                    </div>

                                </div>
                                <div class="divider"></div>
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space
                                    Propulsion

                                    <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                            src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                        <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                        <span class="popuptext" id="myPopup">
                                            <img src="{{ URL('images/pop-up-graph.png') }}">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
        <div class="divider"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="faq-section">
                    <!-- FAQ Question and Answer -->
                    <div class="faq-container">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                            <i class="fa-solid fa-angle-right lower-arrow"></i><span style="padding-left: 10px;">TX04 Robotic Systems</span>

                            <div class="graph-icon custom-icon popup" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-blue.png') }}" style="width:18px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>

                            <!-- </i> -->
                        </div>


                        <div class="faq-answer" onclick="toggleSubAnswer(this)">
                            <div class="expanded-color-container">
                                <div class="solid-square"></div>
                                <i class="fa-solid fa-angle-right rotate-icon"></i>
                                TX01.1 Chemical Space Propulsion
                            </div>
                            <!-- <div class="divider"></div> -->
                            <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>
                        </div>


                        <div class="faq-sub-answer">
                            <div class="faq-sub-answer-text">
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div style="display:flex;" id="myClickableDiv">
                                        <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i>
                                        <div>Chemical Space Propulsion
                                            <div class="graph-icon custom-icon popup float-end"
                                                style="align-items: end" onclick="myFunction()"><img
                                                    src="{{ URL('images/icon-black.png') }}"
                                                    style="width:18px; margin-left:749px;">
                                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                                <span class="popuptext" id="myPopup">
                                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                </div>



                                <div style="display:flex;display:none;" id="myDIV">
                                    <div
                                        style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);">
                                        <div style="margin-left: 26px;">
                                            For launch vehicles: Thrust vector control (TVC), main propulsion systems,
                                            reaction control systems (RCS), roll control systems (RoCS), separation
                                            motors, ullage settling motors, abort propulsion systems, propellant storage
                                            and transfer, nanocomposites, green propellants. For in-space propulsion:
                                            CubeSat propulsion, propellant management devices (PMDs).
                                        </div>
                                    </div>

                                </div>



                                <div class="divider"></div>
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space
                                    Propulsion

                                    <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                            src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                        <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                        <span class="popuptext" id="myPopup">
                                            <img src="{{ URL('images/pop-up-graph.png') }}">
                                        </span>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
        <div class="divider"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="faq-section">
                    <!-- FAQ Question and Answer -->
                    <div class="faq-container">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                            <i class="fa-solid fa-angle-right lower-arrow"></i><span style="padding-left: 10px;">TX05 Communications, Navigation, and
                            Orbital Debris Tracking and Characterization Systems</span>

                            <div class="graph-icon custom-icon popup" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-blue.png') }}" style="width:18px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>

                            <!-- </i> -->
                        </div>


                        <div class="faq-answer" onclick="toggleSubAnswer(this)">
                            <div class="expanded-color-container">
                                <div class="solid-square"></div>
                                <i class="fa-solid fa-angle-right rotate-icon"></i>
                                TX01.1 Chemical Space Propulsion
                            </div>
                            <!-- <div class="divider"></div> -->
                            <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>
                        </div>


                        <div class="faq-sub-answer">
                            <div class="faq-sub-answer-text">
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div style="display:flex;" id="myClickableDiv">
                                        <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i>
                                        <div>Chemical Space Propulsion
                                            <div class="graph-icon custom-icon popup float-end"
                                                style="align-items: end" onclick="myFunction()"><img
                                                    src="{{ URL('images/icon-black.png') }}"
                                                    style="width:18px; margin-left:749px;">
                                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                                <span class="popuptext" id="myPopup">
                                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                </div>



                                <div style="display:flex;display:none;" id="myDIV">
                                    <div
                                        style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);">
                                        <div style="margin-left: 26px;">
                                            For launch vehicles: Thrust vector control (TVC), main propulsion systems,
                                            reaction control systems (RCS), roll control systems (RoCS), separation
                                            motors, ullage settling motors, abort propulsion systems, propellant storage
                                            and transfer, nanocomposites, green propellants. For in-space propulsion:
                                            CubeSat propulsion, propellant management devices (PMDs).
                                        </div>
                                    </div>

                                </div>



                                <div class="divider"></div>
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space
                                    Propulsion

                                    <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                            src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                        <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                        <span class="popuptext" id="myPopup">
                                            <img src="{{ URL('images/pop-up-graph.png') }}">
                                        </span>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
        <div class="divider"></div>







        <div class="row">
            <div class="col-md-12">
                <div class="faq-section">
                    <!-- FAQ Question and Answer -->
                    <div class="faq-container">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                            <i class="fa-solid fa-angle-right lower-arrow"></i><span style="padding-left: 10px;">TX06 Human Health, Life Support, and
                            Habitation Systems</span>

                            <div class="graph-icon custom-icon popup" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-blue.png') }}" style="width:18px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>

                            <!-- </i> -->
                        </div>


                        <div class="faq-answer" onclick="toggleSubAnswer(this)">
                            <div class="expanded-color-container">
                                <div class="solid-square"></div>
                                <i class="fa-solid fa-angle-right rotate-icon"></i>
                                TX01.1 Chemical Space Propulsion
                            </div>
                            <!-- <div class="divider"></div> -->
                            <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>
                        </div>


                        <div class="faq-sub-answer">
                            <div class="faq-sub-answer-text">
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div style="display:flex;" id="myClickableDiv">
                                        <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i>
                                        <div>Chemical Space Propulsion
                                            <div class="graph-icon custom-icon popup float-end"
                                                style="align-items: end" onclick="myFunction()"><img
                                                    src="{{ URL('images/icon-black.png') }}"
                                                    style="width:18px; margin-left:749px;">
                                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                                <span class="popuptext" id="myPopup">
                                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                </div>



                                <div style="display:flex;display:none;" id="myDIV">
                                    <div
                                        style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);">
                                        <div style="margin-left: 26px;">
                                            For launch vehicles: Thrust vector control (TVC), main propulsion systems,
                                            reaction control systems (RCS), roll control systems (RoCS), separation
                                            motors, ullage settling motors, abort propulsion systems, propellant storage
                                            and transfer, nanocomposites, green propellants. For in-space propulsion:
                                            CubeSat propulsion, propellant management devices (PMDs).
                                        </div>
                                    </div>

                                </div>



                                <div class="divider"></div>
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space
                                    Propulsion

                                    <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                            src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                        <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                        <span class="popuptext" id="myPopup">
                                            <img src="{{ URL('images/pop-up-graph.png') }}">
                                        </span>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
        <div class="divider"></div>







        <div class="row">
            <div class="col-md-12">
                <div class="faq-section">
                    <!-- FAQ Question and Answer -->
                    <div class="faq-container">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                            <i class="fa-solid fa-angle-right lower-arrow"></i><span style="padding-left: 10px;">TX07 Exploration Destination Systems</span>

                            <div class="graph-icon custom-icon popup" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-blue.png') }}" style="width:18px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>

                            <!-- </i> -->
                        </div>


                        <div class="faq-answer" onclick="toggleSubAnswer(this)">
                            <div class="expanded-color-container">
                                <div class="solid-square"></div>
                                <i class="fa-solid fa-angle-right rotate-icon"></i>
                                TX01.1 Chemical Space Propulsion
                            </div>
                            <!-- <div class="divider"></div> -->
                            <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>
                        </div>


                        <div class="faq-sub-answer">
                            <div class="faq-sub-answer-text">
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div style="display:flex;" id="myClickableDiv">
                                        <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i>
                                        <div>Chemical Space Propulsion
                                            <div class="graph-icon custom-icon popup float-end"
                                                style="align-items: end" onclick="myFunction()"><img
                                                    src="{{ URL('images/icon-black.png') }}"
                                                    style="width:18px; margin-left:749px;">
                                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                                <span class="popuptext" id="myPopup">
                                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                </div>



                                <div style="display:flex;display:none;" id="myDIV">
                                    <div
                                        style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);">
                                        <div style="margin-left: 26px;">
                                            For launch vehicles: Thrust vector control (TVC), main propulsion systems,
                                            reaction control systems (RCS), roll control systems (RoCS), separation
                                            motors, ullage settling motors, abort propulsion systems, propellant storage
                                            and transfer, nanocomposites, green propellants. For in-space propulsion:
                                            CubeSat propulsion, propellant management devices (PMDs).
                                        </div>
                                    </div>

                                </div>



                                <div class="divider"></div>
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space
                                    Propulsion

                                    <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                            src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                        <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                        <span class="popuptext" id="myPopup">
                                            <img src="{{ URL('images/pop-up-graph.png') }}">
                                        </span>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
        <div class="divider"></div>








        <div class="row">
            <div class="col-md-12">
                <div class="faq-section">
                    <!-- FAQ Question and Answer -->
                    <div class="faq-container">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                            <i class="fa-solid fa-angle-right lower-arrow"></i><span style="padding-left: 10px;">TX08 Sensors and Instruments</span>

                            <div class="graph-icon custom-icon popup" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-blue.png') }}" style="width:18px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>

                            <!-- </i> -->
                        </div>


                        <div class="faq-answer" onclick="toggleSubAnswer(this)">
                            <div class="expanded-color-container">
                                <div class="solid-square"></div>
                                <i class="fa-solid fa-angle-right rotate-icon"></i>
                                TX01.1 Chemical Space Propulsion
                            </div>
                            <!-- <div class="divider"></div> -->
                            <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>
                        </div>


                        <div class="faq-sub-answer">
                            <div class="faq-sub-answer-text">
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div style="display:flex;" id="myClickableDiv">
                                        <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i>
                                        <div>Chemical Space Propulsion
                                            <div class="graph-icon custom-icon popup float-end"
                                                style="align-items: end" onclick="myFunction()"><img
                                                    src="{{ URL('images/icon-black.png') }}"
                                                    style="width:18px; margin-left:749px;">
                                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                                <span class="popuptext" id="myPopup">
                                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                </div>



                                <div style="display:flex;display:none;" id="myDIV">
                                    <div
                                        style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);">
                                        <div style="margin-left: 26px;">
                                            For launch vehicles: Thrust vector control (TVC), main propulsion systems,
                                            reaction control systems (RCS), roll control systems (RoCS), separation
                                            motors, ullage settling motors, abort propulsion systems, propellant storage
                                            and transfer, nanocomposites, green propellants. For in-space propulsion:
                                            CubeSat propulsion, propellant management devices (PMDs).
                                        </div>
                                    </div>

                                </div>



                                <div class="divider"></div>
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space
                                    Propulsion

                                    <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                            src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                        <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                        <span class="popuptext" id="myPopup">
                                            <img src="{{ URL('images/pop-up-graph.png') }}">
                                        </span>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
        <div class="divider"></div>






        <div class="row">
            <div class="col-md-12">
                <div class="faq-section">
                    <!-- FAQ Question and Answer -->
                    <div class="faq-container">
                        <div class="faq-question" onclick="toggleAnswer(this)">
                            <i class="fa-solid fa-angle-right lower-arrow"></i><span style="padding-left: 10px;">TX09 Entry, Descent, and Landing</span>

                            <div class="graph-icon custom-icon popup" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-blue.png') }}" style="width:18px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>

                            <!-- </i> -->
                        </div>


                        <div class="faq-answer" onclick="toggleSubAnswer(this)">
                            <div class="expanded-color-container">
                                <div class="solid-square"></div>
                                <i class="fa-solid fa-angle-right rotate-icon"></i>
                                TX01.1 Chemical Space Propulsion
                            </div>
                            <!-- <div class="divider"></div> -->
                            <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                    src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                <span class="popuptext" id="myPopup">
                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                </span>
                            </div>
                        </div>


                        <div class="faq-sub-answer">
                            <div class="faq-sub-answer-text">
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <div style="display:flex;" id="myClickableDiv">
                                        <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i>
                                        <div>Chemical Space Propulsion
                                            <div class="graph-icon custom-icon popup float-end"
                                                style="align-items: end" onclick="myFunction()"><img
                                                    src="{{ URL('images/icon-black.png') }}"
                                                    style="width:18px; margin-left:749px;">
                                                <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                                <span class="popuptext" id="myPopup">
                                                    <img src="{{ URL('images/pop-up-graph.png') }}">
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                </div>



                                <div style="display:flex;display:none;" id="myDIV">
                                    <div
                                        style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);">
                                        <div style="margin-left: 26px;">
                                            For launch vehicles: Thrust vector control (TVC), main propulsion systems,
                                            reaction control systems (RCS), roll control systems (RoCS), separation
                                            motors, ullage settling motors, abort propulsion systems, propellant storage
                                            and transfer, nanocomposites, green propellants. For in-space propulsion:
                                            CubeSat propulsion, propellant management devices (PMDs).
                                        </div>
                                    </div>

                                </div>
                                <div class="divider"></div>
                                <div
                                    style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                                    <i class="fa-solid fa-angle-right" onclick="changeIcon()"id="icon"></i>
                                    Chemical Space Propulsion

                                    <div class="graph-icon custom-icon popup float-end" onclick="myFunction()"><img
                                            src="{{ URL('images/icon-yellow.png') }}" style="width:22px;">
                                        <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                                        <span class="popuptext" id="myPopup">
                                            <img src="{{ URL('images/pop-up-graph.png') }}">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
        <div style="margin-top:200px"></div>

<footer>
@include('footer')
</footer>

        <script>
            //     function myFunctionChildSubanswer() {
            //   var x = document.getElementById("myDIV");
            //   if (x.style.display === "none") {
            //     x.style.display = "block";
            //   } else {
            //     x.style.display = "none";
            //   }
            // }
            const icon = document.getElementById("rotate-icon");

            icon.addEventListener("click", () => {
                // Toggle the rotation by adding or removing a CSS class
                if (icon.classList.contains("rotate")) {
                    icon.classList.remove("rotate");
                } else {
                    icon.classList.add("rotate");
                }
            });

            function changeIcon() {
                var icon = document.getElementById("icon").querySelector("i");

                if (icon.classList.contains("fa-angle-right")) {
                    icon.classList.remove("fa-angle-right");
                    icon.classList.add("fa-angle-down");
                } else if (icon.classList.contains("fa-angle-down")) {
                    icon.classList.remove("fa-angle-down");
                    icon.classList.add("fa-angle-right");
                }
            }


            var clickableDiv = document.getElementById("myClickableDiv");

            clickableDiv.addEventListener("click", function() {
                var x = document.getElementById("myDIV");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            });
            // JavaScript function to toggle FAQ answers and the lower arrow
            // function toggleAnswer(element) {
            //     const answer = element.nextElementSibling;
            //     const lowerArrow = element.querySelector('.lower-arrow');

            //     if (answer.style.display === 'block') {
            //         answer.style.display = 'none';
            //         subAnswer.style.display = 'none';
            //         // Add the down arrow class
            //     } else {
            //         answer.style.display = 'block';
            //         // Add the up arrow class
            //     }
            // }
            function toggleAnswer(element) {
                const answer = element.nextElementSibling;
                const lowerArrow = element.querySelector('.lower-arrow');

                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                    lowerArrow.classList.remove('open'); // Remove the open class
                } else {
                    answer.style.display = 'block';
                    lowerArrow.classList.add('open'); // Add the open class to rotate the arrow
                }
            }

            // function toggleSubAnswer(element) {
            //     const subAnswer = element.nextElementSibling;
            //     if (subAnswer.style.display === 'block') {
            //         subAnswer.style.display = 'none';
            //     } else {
            //         subAnswer.style.display = 'block';
            //     }
            // }
            function toggleSubAnswer(element) {
                const subAnswer = element.nextElementSibling;
                const arrowIcon = element.querySelector('.fa-angle-right');

                if (subAnswer.style.display === 'block' || subAnswer.style.display === '') {
                    subAnswer.style.display = 'none';
                    arrowIcon.classList.remove('expanded'); // Remove the expanded class
                } else {
                    subAnswer.style.display = 'block';
                    arrowIcon.classList.add('expanded'); // Add the expanded class to rotate the arrow
                }
            }


            function openPopup() {
                const popup = document.getElementById('popup');
                popup.style.display = 'flex';
            }

            function closePopup() {
                const popup = document.getElementById('popup');
                popup.style.display = 'none';
            }


            const toggleButton = document.getElementById("toggleButton");
            const abcSection = document.getElementById("abcSection");

            // Add a click event listener to the button
            toggleButton.addEventListener("click", () => {
                // Toggle the display property of the encapsulated section
                if (abcSection.style.display === "none") {
                    abcSection.style.display = "block";
                } else {
                    abcSection.style.display = "none";
                }
            });


            function myFunction() {
                var popup = document.getElementById("myPopup");
                popup.classList.toggle("show");
            }
        </script>

</body>

</html>
