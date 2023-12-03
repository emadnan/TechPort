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
        width: 100%;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        overflow: hidden;
        height: 90px;
    }

    .custom-image {
        width: 114.4%;
        height: auto;
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
        top: 18px;
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
        /* padding: 20px; */

        /* White background for FAQ container */
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        /* border-radius: 5px; */
    }


    .faq-question {
        background-color: #E8E8E8;
        font-weight: bold;
        font-size: 18px;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        margin-top: 1px;
    }

    .faq-answer {
        padding: 10px;
        font-size: 16px;
        margin-bottom: 1px;
        background: white;
        border: 1px solid #E8E8E8;
    }


    /* .divider {
        width: 100%;
        height: 2px;
        background-color: #E8E8E8;
    } */

    .grey-divider {
        width: 100%;
        height: 1px;
        background-color: E8E8E8;
    }

    .dropdown-menu {
        background: white;
        border: 1px solid black;
        opacity: 0.9;
    }

    .question {
        font-size: 18px;
    }

    .qa-container {
        max-width: 99%;
        margin: 0 auto;
        font-size: 16px;
    }

    .qa-question {

        cursor: pointer;
    }

    .qa-answer {
        display: none;
        margin-left: 20px;
    }

    .qa-sub-answer {
        display: none;
        margin-left: 60px;
    }
    


    .faq-toggle-icon {
        cursor: pointer;
        /* font-size: 18px; Adjust the font size as needed */
        transition: transform 0.3s ease;
        /* Add a smooth transition effect */
    }

    .faq-toggle-icon.rotate {
        transform: rotate(90deg);
        /* Rotate the icon when the answer is expanded */
    }

    .custom-button-1 {
        padding: 10px;
        width: 200px;
        text-align: center;
        background-color: white;
        color: #065386;
        font-weight: bold;
        border: none;
        margin-left: 420px;
    }

    .reset-btn:hover {
        background-color: #065386;
        color: white;
    }
    .fa-solid{
        margin-right:10px;
    }
    .breadCrumbs {
        list-style: none;
    
    }

    .breadCrumbs-items {
        display: inline;
        font-size: 13px;
        font-weight: 600;
        color: #065386;
       
    }
    .breadCrumbs-items a{
        font-weight: 600;
        color: #065386;
    }
    .breadCrumbs-items a:hover{
        text-decoration: none;
        
    }

    input[type='range']
    {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 90%;
    outline: none;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    background-color: transparent;
    pointer-events: none;
    }
    .slider-track1{
    width: 90%;
    height: 5px;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    border-radius: 5px;
}

.slider-track2{
    width: 90%;
    height: 5px;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    border-radius: 5px;
}
.slider-track3{
    width: 90%;
    height: 5px;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    border-radius: 5px;
}

input[type="range"]::-webkit-slider-runnable-track{
    -webkit-appearance: none;
    height: 15px;
}
input[type="range"]::-moz-range-track{
    -moz-appearance: none;
    height: 15px;
}
input[type="range"]::-ms-track{
    appearance: none;
    height: 15px;
}
input[type="range"]::-webkit-slider-thumb{
    -webkit-appearance: none;
    height: 1em;
    width: 1em;
    background-color: #3264fe;
    cursor: pointer;
    margin-top: 0px;
    pointer-events: auto;
    border-radius: 50%;
}
input[type="range"]::-moz-range-thumb{
    -webkit-appearance: none;
    height: 1em;
    width: 1em;
    cursor: pointer;
    border-radius: 50%;
    background-color: #3264fe;
    pointer-events: auto;
}
input[type="range"]::-ms-thumb{
    appearance: none;
    height: 1em;
    width: 1em;
    cursor: pointer;
    border-radius: 50%;
    background-color: #3264fe;
    pointer-events: auto;
}
input[type="range"]:active::-webkit-slider-thumb{
    background-color: #3264fe;
    border: 3px solid #3264fe;
}
.wrapper{
    position: relative;
    width: 95vmin;
    background-color: #ffffff;
    padding: 50px 40px 20px 40px;
    border-radius: 10px;
}
</style>

<body>







    <!-- <div class='body-container'> -->

    <div class="container mt-4">
        @include('header')
        <ul class="breadCrumbs mt-2 mb-0">
            <li class="breadCrumbs-items"><a href="{{url('/')}}">Home</a></li>
            <li class="breadCrumbs-items">></li>
            <li class="breadCrumbs-items"><a href="{{url('/AdvanceSearch')}}">Advance Search</a></li>
        </ul>

        <!-- Add a new row for the image container -->
        <div class="row mt-1">
            <div class="col-md-12">
                <div class="custom-image-container">
                    <img src="{{ asset('images/rectangle.jpg') }}" alt="Rectangular Image" class="custom-image">

                    <div class="text-in-image">
                        <span style="font-weight:700; font-size:30px;">Advance Search</span>


                        <a href="{{ url('/search-results') }}" type="button" class="btn  custom-button-1"
                            style="">Search</a>



                        <button class="btn reset-btn"
                            style="width:200px;height:40px;color:white;border-color: white;">Reset Search
                            Options</button>



                    </div>



                    <!--  -->
                </div>
            </div>
        </div>
<form action= '#', method="GET">
        <!-- QA Section -->
        <div class="faq-container mt-1">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">Sort Order<i class="fa-solid fa-chevron-down"
                        style="float: right;margin-top:4px;"></i></div>
                <div class="faq-answer" style="display: none;">
                    <div class="dropdown show">
                        <select name="order" class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink"
                            style="background-color: white; border: 1px solid grey; color: black;font-size: 14px;">
                            <option selected value="">-- SELECT --</option>
                            <option  value="Relevance">Relevance</option>
                            <option value="AlphaNumeric">Alpha Numeric</option>
                            <option value="StartDate">Start Date</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">Words and Phrases<i
                        class="fa-solid fa-chevron-down" style="float: right;margin-top:4px;"></i></div>
                <div class="faq-answer" style="display: none;">
                    <div class="row">
                        <div class="col-4">
                            <!-- Each radio button takes 4 columns (1/3 of the row) -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="searchType"
                                    id="flexRadioDefault1" value="">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Items containing all search terms
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="searchType"
                                    id="flexRadioDefault2" value="">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Items containing any of the terms
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="searchType"
                                    id="flexRadioDefault3" value="">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Items containing the exact phrase
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="input-group rounded" style="margin-top:10px;">
                        <input type="search" id="words_search_bar" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" oninput="updateRadioValue()" />

                    </div>
                </div>
            </div>
<script>
    function updateRadioValue()
    {
      var searchInput = document.getElementById('words_search_bar').value;
      console.log(searchInput);
      var radioButtons = document.getElementsByName('searchType');

      for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
          radioButtons[i].value = searchInput;
        }
      }
    }
</script>

            <div class="divider"></div>
            <!-- Add more FAQ items as needed -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">Status<i class="fa-solid fa-chevron-down"
                        style="float: right;margin-top:4px;"></i></div>
                <div class="faq-answer" style="display: none;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Active"
                                        id="flexCheckChecked1" name="Status">
                                    <label class="form-check-label" for="flexCheckChecked1">
                                        Active
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Completed"
                                        id="flexCheckChecked3" name="Status">
                                    <label class="form-check-label" for="flexCheckChecked3">
                                        Completed
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Partnerships"
                                        id="flexCheckChecked4" name="Status">
                                    <label class="form-check-label" for="flexCheckChecked4">
                                        Partnerships
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="divider"></div>
            <!-- Add more FAQ items as needed -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">Active Date<i class="fa-solid fa-chevron-down"
                        style="float: right;margin-top:4px;"></i></div>
                <div class="faq-answer" style="display: none;">
                    <div class="row">
                        <div class="col-2">
                            <!-- Each radio button takes 4 columns (1/3 of the row) -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="active-date-type"
                                    id="flexRadioDefault1" value="active-after">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active after
                                </label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="active-date-type"
                                    id="flexRadioDefault2" value="active-before">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Active before
                                </label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="active-date-type"
                                    id="flexRadioDefault3" value="active-between">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Active between
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row" style="margin-top: 10px;">

                            <h5 style="font-size: 13px; align-content:center; display:flex; flex-wrap:wrap;"><b>Start Month:</b></h5>
                            <div class="btn-group">


                                <div class="form-group col-md-12">

                                    <select class="form-control" id="month-select" onchange="updateActiveDateRadioValueMonth()">
                                        <option selected value="">--Select Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                            </div>
                            <h5 style="font-size: 13px; align-content:center; display:flex; flex-wrap:wrap;"><b>Start Year:</b> </h5>
                            <div class="btn-group" style="margin-left: 10px;">
                               
                                <div class="form-group" style="margin-left: 10px;">
                                    <select class="form-control" id="year-select" onchange="updateActiveDateRadioValueYear()">
                                        <option selected value="">--Select Year</option>
                                        <option value="2023">2023</option> <option value="2022">2022</option>
                                        <option value="2021">2021</option> <option value="2020">2020</option>
                                        <option value="2019">2019</option> <option value="2018">2018</option>
                                        <option value="2017">2017</option> <option value="2016">2016</option>
                                        <option value="2015">2015</option> <option value="2014">2014</option>
                                        <option value="2013">2013</option> <option value="2012">2012</option>
                                        <option value="2011">2011</option> <option value="2010">2010</option>
                                        <option value="2009">2009</option> <option value="2008">2008</option>
                                        <option value="2007">2007</option> <option value="2006">2006</option>
                                        <option value="2005">2005</option> <option value="2004">2004</option>
                                        <option value="2003">2003</option> <option value="2002">2002</option>
                                        <option value="2001">2001</option> <option value="2000">2000</option>
                                        <option value="1999">1999</option> <option value="1998">1998</option>
                                        <option value="1997">1997</option> <option value="1996">1996</option>
                                        <!-- Add more years as needed -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
    function updateActiveDateRadioValueMonth() {
      var month = document.getElementById('month-select').value;
      var year = document.getElementById('year-select').value;
      var radioButtons = document.getElementsByName('active-date-type');

      for (var i = 0; i < radioButtons.length; i++) {
          radioButtons[i].value = radioButtons[i].value + ' ' + month;
      }
    }
    function updateActiveDateRadioValueYear() {
      var month = document.getElementById('month-select').value;
      var year = document.getElementById('year-select').value;
      var radioButtons = document.getElementsByName('active-date-type');

      for (var i = 0; i < radioButtons.length; i++) {
          radioButtons[i].value = radioButtons[i].value + ' ' + year;
      }
    }
</script>
            <div class="divider"></div>
            <!-- Add more FAQ items as needed -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">Technology Area<i
                        class="fa-solid fa-chevron-down" style="float: right;margin-top:4px;"></i></div>
                <div class="faq-answer" style="display: none;">
                    @foreach ($techs as $tech )
                    <div class="qa-container">
                            <div class="question" style="margin-left:15px; font-size:16px;"  onclick="toggleQAAnswer(this)">
                                <i class="fa-solid fa-chevron-down" style="float: left;margin-top:4px;"></i>
                                <div class="form-check" style="margin-left:20px">
                                    <input class="form-check-input" type="checkbox" value="{{$tech->id}}"
                                        id="flexCheckChecked">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        TX0{{$loop->index+1}} {{$tech->techarea}}
                                    </label>
                                </div>
                            </div>
                            <div class="qa-answer" >
                                @php
                                    $sectorID = [];
                                @endphp
                            @foreach ($tech->techsectors as $sector )
                            @if ( in_array( $sector->id, $sectorID))
                            @else
                            <div class="form-check" onclick="toggleQASubAnswer(this)" >
                                <i class="fa-solid fa-chevron-down" style="float: left;margin-top:4px; padding-right:15px;"></i>
                                <input class="form-check-input" type="checkbox" value="{{$sector->id}}"
                                        id="flexCheckChecked">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            TX01.{{$loop->index+1}} {{$sector->techsector}}
                                        </label>
                                </div>
                                <div class="qa-sub-answer" >
                                @foreach ($sector->techniches as $niche )
                                <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$niche->id}}"
                                                id="flexCheckChecked">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    TX01.1.{{$loop->index+1}} {{$niche->techniche}}
                                                </label>
                                    </div>
                                   
                                    @endforeach
                                </div>
                                @php
                                    array_push($sectorID, $sector->id)
                                @endphp
                                @endif
                                    @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="divider"></div>
        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Locations<i class="fa-solid fa-chevron-down"
                    style="float: right;margin-top:4px;"></i></div>
            <div class="faq-answer" style="display: none;">

                <!-- ///////////Multiple check box Starts -->
                <div class="container">
                    <div class="row" style="gap: 10px;">
                        @foreach ($locations as $location )
                        <div class="form-check" style="padding-right: 100px; margin-right: 20px;">
                                <input class="form-check-input" type="checkbox" value="{{$location->id}}"
                                    id="flexCheckChecked1" name="location">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    {{$location->city}}, {{$location->state}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /////////Multiple Check Box Ends Here -->

            </div>
        </div>
        <div class="divider"></div>
        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Technology Maturity<i
                    class="fa-solid fa-chevron-down" style="float: right;margin-top:4px;"></i></div>
            <div class="faq-answer" style="display: none;">
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="start-trl" name="start-trl">
                        <label class="form-check-label" for="start-trl">
                            Start TRL
                        </label>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-check">
                                <label class="form-check-label">
                                    Min: <span id="startRange1">1</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8" style="  position: relative; width: 100%;">
                            <div class="slider-track1"></div>
                            <input type="range" min="1" max="9" value="1" id="start-slider-1" oninput="startSlideOne()" onchange="startTrl()">
                            <input type="range" min="1" max="9" value="9" id="start-slider-2" oninput="startSlideTwo()" onchange="startTrl()">
                            <!-- <p>Value: <span id="sliderValue">10</span></p> -->

                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <label class="form-check-label" >
                                    Max: <span id="startRange2">9</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="current-trl" name="current-trl">
                        <label class="form-check-label" for="current-trl">
                            Current TRL
                        </label>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-check">
                                <label class="form-check-label">
                                    Min: <span id="currentRange1">1</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8" style="  position: relative; width: 100%;">
                            <div class="slider-track2"></div>
                            <input type="range" min="1" max="9" value="1" id="current-slider-1" oninput="currentSlideOne()" onchange="currentTrl()">
                            <input type="range" min="1" max="9" value="9" id="current-slider-2" oninput="currentSlideTwo()" onchange="currentTrl()">
                            <!-- <p>Value: <span id="sliderValue">10</span></p> -->

                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <label class="form-check-label" >
                                    Max: <span id="currentRange2">9</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="final-trl" name="final-trl">
                        <label class="form-check-label" for="final-trl">
                            Final TRL
                        </label>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-check">
                                <label class="form-check-label">
                                    Min: <span id="finalRange1">1</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8" style="  position: relative; width: 100%;">
                            <div class="slider-track3"></div>
                            <input type="range" min="1" max="9" value="1" id="final-slider-1" oninput="finalSlideOne()" onchange="finalTrl()">
                            <input type="range" min="1" max="9" value="9" id="final-slider-2" oninput="finalSlideTwo()" onchange="finalTrl()">
                            <!-- <p>Value: <span id="sliderValue">10</span></p> -->

                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <label class="form-check-label" >
                                    Max:<span id="finalRange2">9</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    <script>
        window.onload = function(){
    startSlideOne();
    currentSlideOne();
    finalSlideOne();
    startSlideTwo();
    currentSlideTwo();
    finalSlideTwo();
}
const start_trl = document.getElementById("start-trl");
const current_trl = document.getElementById("current-trl");
const final_trl = document.getElementById("final-trl");
let startSliderOne = document.getElementById("start-slider-1");
let startSliderTwo = document.getElementById("start-slider-2");
let currentSliderOne = document.getElementById("current-slider-1");
let currentSliderTwo = document.getElementById("current-slider-2");
let finalSliderOne = document.getElementById("final-slider-1");
let finalSliderTwo = document.getElementById("final-slider-2");
let displayStartValOne = document.getElementById("startRange1");
let displayStartValTwo = document.getElementById("startRange2");
let displayCurrentValOne = document.getElementById("currentRange1");
let displayCurrentValTwo = document.getElementById("currentRange2");
let displayFinalValOne = document.getElementById("finalRange1");
let displayFinalValTwo = document.getElementById("finalRange2");
let minGap = 1;
let sliderTrack1 = document.querySelector(".slider-track1");
let sliderTrack2 = document.querySelector(".slider-track2");
let sliderTrack3 = document.querySelector(".slider-track3");
let sliderMaxValue = parseFloat(startSliderTwo.max);

function startSlideOne(){
    if(parseInt(startSliderTwo.value) - parseInt(startSliderOne.value) <= minGap){
        startSliderOne.value = parseInt(startSliderTwo.value) - minGap;
    }
    displayStartValOne.textContent = startSliderOne.value;
    fillColor1();
}

function currentSlideOne(){
    if(parseInt(currentSliderTwo.value) - parseInt(currentSliderOne.value) <= minGap){
        currentSliderOne.value = parseInt(currentSliderTwo.value) - minGap;
    }
   
    displayCurrentValOne.textContent = currentSliderOne.value;
    fillColor2();
}

function finalSlideOne(){
    if(parseInt(finalSliderTwo.value) - parseInt(finalSliderOne.value) <= minGap){
        finalSliderOne.value = parseInt(finalSliderTwo.value) - minGap;
    }
   
    displayFinalValOne.textContent = finalSliderOne.value;
    fillColor3();
}

function startSlideTwo(){
    if(parseInt(startSliderTwo.value) - parseInt(startSliderOne.value) <= minGap){
        startSliderTwo.value = parseInt(startSliderOne.value) + minGap;
    }
   
    displayStartValTwo.textContent = startSliderTwo.value;
    fillColor1();
}

function currentSlideTwo(){
    if(parseInt(currentSliderTwo.value) - parseInt(currentSliderOne.value) <= minGap){
        currentSliderTwo.value = parseInt(currentSliderOne.value) + minGap;
    }
   
    displayCurrentValTwo.textContent = currentSliderTwo.value;
    fillColor2();
}

function finalSlideTwo(){
    if(parseInt(finalSliderTwo.value) - parseInt(finalSliderOne.value) <= minGap){
        finalSliderTwo.value = parseInt(finalSliderOne.value) + minGap;
    }
   
    displayFinalValTwo.textContent = finalSliderTwo.value;
    fillColor3();
}
function fillColor1(){
    let range = sliderMaxValue - parseFloat(startSliderOne.min);
        let percent1 = ((parseFloat(startSliderOne.value) - parseFloat(startSliderOne.min)) / range) * 100;
        let percent2 = ((parseFloat(startSliderTwo.value) - parseFloat(startSliderTwo.min)) / range) * 100;
            sliderTrack1.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3264fe ${percent1}% , #3264fe ${percent2}%, #dadae5 ${percent2}%)`;
}
function fillColor2(){
    let range = sliderMaxValue - parseFloat(currentSliderOne.min);
        let percent1 = ((parseFloat(currentSliderOne.value) - parseFloat(currentSliderOne.min)) / range) * 100;
        let percent2 = ((parseFloat(currentSliderTwo.value) - parseFloat(currentSliderTwo.min)) / range) * 100;
            sliderTrack2.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3264fe ${percent1}% , #3264fe ${percent2}%, #dadae5 ${percent2}%)`;
}
function fillColor3(){
    let range = sliderMaxValue - parseFloat(finalSliderOne.min);
        let percent1 = ((parseFloat(finalSliderOne.value) - parseFloat(finalSliderOne.min)) / range) * 100;
        let percent2 = ((parseFloat(finalSliderTwo.value) - parseFloat(finalSliderTwo.min)) / range) * 100;
            sliderTrack3.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3264fe ${percent1}% , #3264fe ${percent2}%, #dadae5 ${percent2}%)`;
}

function startTrl()
{
    var parent = start_trl.parentElement;
    var grandParent = parent.parentElement;
    var nextElement1 = grandParent.nextElementSibling;
    var nextElement2 = nextElement1.nextElementSibling;
    var childElement1 = nextElement2.firstElementChild;
    var childElement2 = childElement1.firstElementChild;
    var checkBoxDiv = childElement2.nextElementSibling;
    var checkboxes = checkBoxDiv.querySelectorAll('input[type="range"]');
    let checkboxesArray = [];
    checkboxes.forEach(function(checkbox){
        checkboxesArray.push(checkbox.value);
    })
    start_trl.value = checkboxesArray;
    console.log(start_trl.value);
}

function currentTrl()
{
    var parent = current_trl.parentElement;
    var grandParent = parent.parentElement;
    var nextElement1 = grandParent.nextElementSibling;
    var nextElement2 = nextElement1.nextElementSibling;
    var childElement1 = nextElement2.firstElementChild;
    var childElement2 = childElement1.firstElementChild;
    var checkBoxDiv = childElement2.nextElementSibling;
    var checkboxes = checkBoxDiv.querySelectorAll('input[type="range"]');
    let checkboxesArray = [];
    checkboxes.forEach(function(checkbox){
        checkboxesArray.push(checkbox.value);
    })
    current_trl.value = checkboxesArray;
    console.log(current_trl.value);
}

function finalTrl()
{
    var parent = final_trl.parentElement;
    var grandParent = parent.parentElement;
    var nextElement1 = grandParent.nextElementSibling;
    var nextElement2 = nextElement1.nextElementSibling;
    var childElement1 = nextElement2.firstElementChild;
    var childElement2 = childElement1.firstElementChild;
    var checkBoxDiv = childElement2.nextElementSibling;
    var checkboxes = checkBoxDiv.querySelectorAll('input[type="range"]');
    let checkboxesArray = [];
    checkboxes.forEach(function(checkbox){
        checkboxesArray.push(checkbox.value);
    })
    final_trl.value = checkboxesArray;
    console.log(final_trl.value);
}
    </script>
        <div class="divider"></div>
        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Target Destinations<i
                    class="fa-solid fa-chevron-down" style="float: right;margin-top:4px;"></i></div>
            <div class="faq-answer" style="display: none;">
                <div class="container">
                    <div class="row">
                        @foreach ($projects as $target)
                            <div class="form-check" style="padding-right: 100px; margin-right: 30px;">
                                <input class="form-check-input" type="checkbox" value="{{$target->id}}"
                                    id="flexCheckChecked1" name="target">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    {{$target->projecttarget}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="divider"></div>
        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Legal Entities<i class="fa-solid fa-chevron-down"
                    style="float: right;margin-top:4px;"></i></div>
            <div class="faq-answer" style="display: none;">
                <div class="container">
                    <div class="row">
                        @foreach ($roles as $role )
                            <div class="form-check" style="padding-right: 80px; margin-right: 20px;">
                                <input class="form-check-input" type="checkbox" value="{{$role->id}} "
                                    id="flexCheckChecked1" name="legal entity">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    {{$role->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        
        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Mission Type<i class="fa-solid fa-chevron-down"
                    style="float: right;margin-top:4px;"></i></div>
            <div class="faq-answer" style="display: none;">
                <div class="container">
                    <div class="row">
                        @foreach ($missions as $mission)
                        <div class="form-check" style="padding-right: 80px; margin-right: 20px;">
                            <input class="form-check-input" type="checkbox" value="{{$mission->id}}"
                                id="flexCheckChecked1" name="mission type">
                            <label class="form-check-label" for="flexCheckChecked1">
                                {{$mission->type}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>

        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Centers and Facilities<i
                    class="fa-solid fa-chevron-down" style="float: right;margin-top:4px;"></i></div>
            <div class="faq-answer" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1" style="color: #065386;">
                                   <b> Acting as Lead Center/Facility</b>
                                </label>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4" style="color: #065386;">
                                   <b> Acting as Supporting Center/Facility</b>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grey-divider"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    Ames Research Center (ARC)
                                </label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4">
                                    Kennedy Space Center (KSC)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    Armstrong Flight Research Center (AFRC)
                                </label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4">
                                    Langley Research Center (LaRC)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    Glenn Research Center (GRC)
                                </label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4">
                                    Marshall Space Flight Center (MSFC)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    Goddard Institute of Space Studies (GISS)
                                </label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4">
                                    Michoud Assembly Facility (MAF)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    Michoud Assembly Facility (MAF)
                                </label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4">
                                    Headquarters (HQ)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    Independent Verification and Validation Facility (IV&V)
                                </label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4">
                                    Stennis Space Center (SSC)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    Johnson Space Center (JSC)
                                </label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4">
                                    Wallops Flight Facility (WFF)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="divider"></div>
        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Supporting Organizations<i
                    class="fa-solid fa-chevron-down" style="float: right;margin-top:4px;"></i></div>
            <div class="faq-answer" style="display: none;">
                <div class="row">
                    <div class="col-4">
                        <!-- Each radio button takes 4 columns (1/3 of the row) -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1" onclick="toggleOrgtype(this)">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Filter by organization type
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault2" onclick="toggleOrgName(this)">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Filter by organization name
                            </label>
                        </div>
                    </div>
                </div>
                <div class="rows" style="display: none; margin-top:20px;">
                    <button  type="button" class="btn btn-light" onclick="selectAll(this)">Select all</button>
                    <button  type="button" class="btn btn-light" onclick="selectNone(this)">None</button>
                </div>
                <div style="display: none; margin-top:10px;">
                    @foreach ($orgtypes as $orgtype)
                    <div class="row " onclick="subAnswer(this)">
                    <div class="form-check ml-3">
                    <i class="fa-solid fa-chevron-down mt-1 pr-2 ml-0" ></i>
                    <input class="form-check-input" type="checkbox" value="{{$orgtype->id}}" id="flexCheckChecked1" name="organizationType" onclick="toggleCheckBox(this)">
                        <label class="form-check-label ml-2" for="flexCheckChecked1">
                            {{$orgtype->type}}
                        </label>
                    </div>
                </div>
                <div class="col ml-5" style="display: none;">
                @foreach ($orgtype->orgperformingworks as $organization )
                    <div class="form-check ml-3" >
                        <input class="form-check-input" type="checkbox" value="{{$organization->id}}" id="flexCheckChecked1" name="orgTypeName">
                        <label class="form-check-label ml-2" for="flexCheckChecked1">
                            {{$organization->name}}
                        </label>
                    </div>
                    @endforeach
                </div>
                    @endforeach
                </div>

                <div class="row" style="display:none; margin-top:10px;">
                    <div class="col-md-6">
                         <input class="form-control" type="text" name="orgName" placeholder="Organization Name">
                    </div>
                </div>
            </div>
        </div>
        <script>
            function toggleOrgtype(element)
            {
                var parent = element.parentElement;
                var grandParent = parent.parentElement;
                var greatGrandParent = grandParent.parentElement;
                var nextElement = greatGrandParent.nextElementSibling;
                var orgType = nextElement.nextElementSibling;
                var orgName = orgType.nextElementSibling;

                if(element.checked === true)
                {
                    nextElement.style.display = 'block';
                    orgType.style.display = 'block';
                    orgName.style.display = 'none';
                    var searchbar = orgName.querySelector('input[type="text"]');
                    var value = searchbar.value = '';
                    console.log(value);
                }
            }

            function toggleOrgName(element)
            {
                var parent = element.parentElement;
                var grandParent = parent.parentElement;
                var greatGrandParent = grandParent.parentElement;
                var nextElement = greatGrandParent.nextElementSibling;
                var orgType = nextElement.nextElementSibling;
                var orgName = orgType.nextElementSibling;
                
                if(element.checked === true)
                {
                    nextElement.style.display = 'none';
                    orgName.style.display = 'block';
                    orgType.style.display = 'none';
                    var checkboxes = orgType.querySelectorAll('input[type="checkbox"]');
                    checkboxes.forEach(function(checkbox){
                        checkbox.checked = false;
                    });
                }
            }

            function subAnswer(element)
            {
                var answer = element.nextElementSibling;
                if(answer.style.display === 'none')
                {
                    answer.style.display = 'block';
                }
                else
                {
                    answer.style.display = 'none';
                }
            }
    
            function selectAll(element)
            {
                var parent = element.parentElement;
                var orgTypeCheck = parent.nextElementSibling;
                var checkboxes = orgTypeCheck.querySelectorAll('input[type="checkbox"]');
    
                checkboxes.forEach(function(checkbox){
                    checkbox.checked = true;
                });
    
            }
            function selectNone(element)
            {
                var parent = element.parentElement;
                var orgTypeCheck = parent.nextElementSibling;
                var checkboxes = orgTypeCheck.querySelectorAll('input[type="checkbox"]');
    
                checkboxes.forEach(function(checkbox){
                    checkbox.checked = false;
                });
            }
    
            function toggleCheckBox(element)
            {
                var parent = element.parentElement;
                var grandParent = parent.parentElement;
                var orgCheckDiv = grandParent.nextElementSibling;
                var checkboxes = orgCheckDiv.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(function(checkbox){
                    if(element.checked === true)
                    {
                        checkbox.checked = true;
                    }
                    else
                    {
                        checkbox.checked = false;
                    }
                })
            }
    
        </script>
        <div class="divider"></div>
        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Programs<i class="fa-solid fa-chevron-down"
                    style="float: right;margin-top:4px;"></i></div>
            <div class="faq-answer" style="display: none;">
                <div class="row mt-2">
                    {{-- <i class="fa-solid fa-chevron-right mt-1 ml-4"></i> --}}
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                        <label class="form-check-label ml-2" for="flexCheckChecked1">
                            Bialogical and Physical Sciences
                        </label>
                    </div>
                </div>
                <div class="row mt-2">
                    {{-- <i class="fa-solid fa-chevron-right mt-1 ml-4"></i> --}}
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                        <label class="form-check-label ml-2" for="flexCheckChecked1">
                            Center Independent Research & Development
                        </label>
                    </div>
                </div>
                <div class="row mt-2">
                    {{-- <i class="fa-solid fa-chevron-right mt-1 ml-4"></i> --}}
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                        <label class="form-check-label ml-2" for="flexCheckChecked1">
                            Digital Transformation
                        </label>
                    </div>
                </div>
                <div class="row mt-2">
                    {{-- <i class="fa-solid fa-chevron-right mt-1 ml-4"></i> --}}
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                        <label class="form-check-label ml-2" for="flexCheckChecked1">
                            Earth Science
                        </label>
                    </div>
                </div>
                <div class="row mt-2">
                    {{-- <i class="fa-solid fa-chevron-right mt-1 ml-4"></i> --}}
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                        <label class="form-check-label ml-2" for="flexCheckChecked1">
                            Flight Opportunities
                        </label>
                    </div>
                </div>
                <div class="row mt-2">
                    {{-- <i class="fa-solid fa-chevron-right mt-1 ml-4"></i> --}}
                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                        <label class="form-check-label ml-2" for="flexCheckChecked1">
                            Game Changing Development
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider"></div>
        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Mission Directorates and Offices<i
                    class="fa-solid fa-chevron-down" style="float: right;margin-top:4px;"></i></div>
            <div class="faq-answer" style="display: none;">

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Alabama
                            </label>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                                Kentucky
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                North Carolina
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Wisconsin
                            </label>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Alaska
                            </label>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                                Louisiana
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Oklahoma
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">


                        <section style="font-size: 14px;font-weight: bold;">
                            U.S. Territories
                        </section>



                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Arizona
                            </label>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                                Maine
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Oregon
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                District of Columbia
                            </label>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Arkansas
                            </label>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                                Maryland
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Pennsylvania
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Northern Mariana Islands
                            </label>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Florida
                            </label>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                                Nevada
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                South Dakota
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Virgin Islands
                            </label>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Georgia
                            </label>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                                New Jersey
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Texas
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <section style="font-weight:bold;font-size:15;">
                            Other Locations
                        </section>


                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Indiana
                            </label>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                                New York
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Virginia
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Outside United States
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Found Sources<i onclick="myFunction(this)"
                    class="fa-solid fa-chevron-down faq-toggle-icon" style="float: right; margin-top:4px;" id="icon"></i>
            </div>
            <div class="faq-answer" style="display: none;">
                <div class="container">
                <div class="row">
                    @foreach ($sources as $source)
                        <div class="form-check" style="padding-right: 80px; margin-right: 20px;">
                            <input class="form-check-input" type="checkbox" value="{{$source->id}}"
                                id="flexCheckChecked1" name="found source">
                            <label class="form-check-label" for="flexCheckChecked1">
                               {{$source->name}}
                            </label>
                        </div>
                    @endforeach
                    {{-- <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Office of the Chef Engineer (OCE)
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Exploration Systems Developement Misson Directorate (ESDMD)
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                                Office of the Chef Information Officier (OCIO)
                            </label>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
        <div class="divider"></div>
        <!-- Add more FAQ items as needed -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">TechPort ID <i onclick="myFunction(this)"
                    class="fa-solid fa-chevron-down faq-toggle-icon" style="float: right; margin-top:4px;" id="icon"></i>
            </div>
            <div class="faq-answer" style="display: none;">
                <div class="row">
                    <div class="col-md-3">
                        <input class="form-control" type="text" name="techport id" id="techport_id" placeholder="TechPort ID">
                    </div>
                </div>
            </div>
        </div>
    
        
            <button class="btn btn-primary float-right " type="submit"
                style="width:200px; background:#065386; margin-top:30px;">Search</button>
    </div>
</form>


    




    <div style="margin-top:200px"></div>

    <footer>
        @include('footer')
    </footer>

    <script>
        const questions = document.querySelectorAll('.qa-question');

        questions.forEach(question => {
            
            question.addEventListener('click', () => {
                const answer = question.querySelector('.qa-answer');
                answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
            });
        });
        // JavaScript function to toggle FAQ answers and the lower arrow
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            const icon = element.querySelector('i.fa-chevron-down');

            if (answer.style.display === 'block') {
                answer.style.display = 'none';
                icon.classList.remove('fa-rotate-180');
            } else {
                answer.style.display = 'block';
                icon.classList.add('fa-rotate-180');
            }
        }

        function toggleQASubAnswer(element) {
            const subanswers = element.nextElementSibling;
            if (subanswers.style.display === 'block') {
                subanswers.style.display = 'none';
            } else {
                subanswers.style.display = 'block';
            }
        }

        function myFunction(x) {
            x.classList.toggle("fas fa-chevron-down");
        }

        function toggleQAAnswer(question) {
            var subanswer = question.nextElementSibling // Select the next sibling (the sub-answer)
            if (subanswer.style.display === "none" || subanswer.style.display === "") {
                subanswer.style.display = "block"; // Show the sub-answer
            } else {
                subanswer.style.display = "none"; // Hide the sub-answer
            }
        }
    </script>
</body>

</html>
