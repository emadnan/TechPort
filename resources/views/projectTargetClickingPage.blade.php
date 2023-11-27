@include('bootStrap')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPort</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

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
        padding-right: 6%;
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
        height: 280px;
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
        margin-left: 2%;
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
        background: #E8E8E8;
        margin-bottom: 50px;
        /* White background for FAQ container */
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        /* border-radius: 5px; */
    }

    .faq-item {}

    .faq-question {

        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        margin-left: 10px;
        margin-top: 10px;
        color: black;
    }

    .faq-answer {
        padding: 10px;
        font-size: 16px;
        /* margin-bottom: 10px; */
        background: #FCFCFC;
    }


    .divider {
        width: 100%;
        height: 1px;
        background-color: white;
    }

    .divider-within-class {
        width: 100%;
        height: 1px;
        background-color: rgba(128, 128, 128, 0.5);
        margin-top: 20px;
    }

    .grey-divider {
        width: 100%;
        height: 1px;
        background-color: grey;
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



    .faq-toggle-icon {
        cursor: pointer;
        font-size: 18px;
        /* Adjust the font size as needed */
        transition: transform 0.3s ease;
        /* Add a smooth transition effect */
    }

    .faq-toggle-icon.rotate {
        transform: rotate(90deg);
        /* Rotate the icon when the answer is expanded */
    }

    .square {
        height: 50px;
        width: 50px;
        background-color: #555;
    }

    .encapsulated-text {
        font-size: 15px;
        margin-left: 10px;
        padding-right: 1rem;
    }

    .planet-img {
        width: 300px;
        height: 200px;
    }

    .pagination {
        display: inline-block;
        margin-top: 25px;
        margin-bottom: 25px;
        font-size: 10px
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
    }

    .pagination a.active {
        background-color: #065386;
        color: white;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }




    .solid-rectangle {

        margin-top: 20px;
        width: 108%;
        height: 170px;
        /* background-color: #3498db;  */
        text-align: center;
        color: white;
        /* Text color */
        font-size: 18px;
        /* Font size of the text */
        /* line-height: 100px; */
        border-radius: 20px;
        background: #002339;
        /* Vertically center the text (equal to the height of the rectangle) */
    }

    .yellow-square {
        width: 200px;
        /* Adjust the width and height as needed */
        height: 150px;
        background: #FFA800;
        border-radius: 20px;
    }

    .btn-custom {
        background-color: white;
        border: 2px solid transparent;
        color: #065386;
    }

    .btn-hover:hover {
        color: white;
        text-decoration: none;
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
</style>

<body>







    <!-- <div class='body-container'> -->

    <div class="container mt-4">
        @include('header')

        <ul class="breadCrumbs mt-2 mb-0">
            <li class="breadCrumbs-items"><a href="{{url('/')}}">Home</a></li>
            <li class="breadCrumbs-items">></li>
            <li class="breadCrumbs-items"><a href="{{url('/search-results')}}">Search Results</a></li>
            <li class="breadCrumbs-items">></li>
            <li class="breadCrumbs-items"><a href="{{url('/low-evolution')}}">Project view</a></li>
            <li class="breadCrumbs-items">></li>
            <li class="breadCrumbs-items"><a href="{{url('/project-targets')}}">Project Target  index</a></li>
            <li class="breadCrumbs-items">></li>
            <li class="breadCrumbs-items"><a href="{{url('/project-target-clicking')}}">Project Target view</a></li>
        </ul>
@include('layouts.image')

        <div class="faq-container mt-1">
            <div class="faq-item">
                <div id="project" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Projects</span>
                    <i class="fa-solid fa-chevron-down" id="rotateIcon"
                        style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
            
            
            
                </div>
            
                <div class="faq-answer" style="display: none;">
                    <section class="encapsulated-text mt-2 mb-4">Listing 1 - 20 of 61 </section>
                    @php
                        $projectID = 0;
                    @endphp
            @if ($projectID == $projOrg->id)
                
            @else
                    <div style="margin-top: 15px;">
                        <section class="encapsulated-text ">
                            <a href="{{ route('projectPage', ['id'=> $projOrg->id]) }}" style="color:#065386;font-weight:bold;">{{$projOrg->name}}</a>
                            <i class="fa-solid fa-chevron-down" style="float: right;margin-right:10px; color:grey;"
                                onclick="toggleSubAnswer(this)"></i>
                            <button
                                style="float: right; margin-right: 20px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">{{$projOrg->status->status}}</button>
                            <section>This is a project within the Space Technology Research Grants Program </section>
                        </section>
                        <section class="sub-answer mt-2 mb-4" style="margin-left:10px;font-size:15px; padding-right:4rem">{{$projOrg->description}}</section>
            
                        <div class="sub-answer mt-2 mb-4"
                            style=" display:none; margin-left:10px;font-size:15px; padding-right:4rem">
                            <div class="row my-4">
                                <div class="col">
                                    <img src="{{ asset('images/' . $projOrg->image) }}" width="350px">
                                </div>
                                <div class="col">
                                    <section class="mb-2" style="font-size:13px;"><b><a style="color:black;" href="{{url('/legal-entity-roles')}}">Legal Entity Role</a></b></section>
                                    @foreach ($projOrg->legalentityroles as $role )
                                    <section class="mb-2" style="font-size:13px;"><a style="color:black;" href="{{route('legalEntityClickingPage' , ['id'=>$role->id])}}">{{$role->name}}</a>
                                    </section>
                                    @endforeach
                                    <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/organizations')}}"> Organisation Performing Work</a></b></section>
                                    @foreach ($projOrg->orgperformingworks as $org )
                                    <section class="mb-2" style="font-size:13px"> <a style="color:black;" href="{{route('organizationClickingPage' , ['id' => $org->id])}}">{{$org->name}}</a></section>
                                    @endforeach
                                    <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/')}}"> Primary Technology Area:</a></b></section>
                                    <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/search-results')}}">TX01 {{$projOrg->techreferred->techarea->techarea}}</a></section>
                                    <section class="mb-2" style="font-size:13px"><b> Start: </b></section>
                                    <section style="font-size:13px">{{$projOrg->startdate}}</section>
                                </div>
                                <div class="col">
                                    <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/mission-type')}}"> Mission Type </a></b></section>
                                    <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{route('missionTypeClickingPage' , ['id'=>$projOrg->missiontype->id])}}"> {{$projOrg->missiontype->type}}</a></section>
                                    <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/found-sources')}}"> Found Source</a> </b></section>
                                    <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{route('foundSourcesClickingPage' , ['id'=>$projOrg->foundingsource->id])}}">{{$projOrg->foundingsource->name}}</a></section>
                                    <br><br>
                                    <section class="my-2" style="font-size:13px"><b> End: </b></section>
                                    <section style="font-size:13px">{{$projOrg->enddate}}</section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider-within-class"></div>
            @php
                $projectID = $projOrg->id;
            @endphp
            
            @endif    
                   
            
                    <center>
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">&raquo;</a>
                        </div>
            
                    </center>
                
            
                </div>
                
            </div>
            
            <div class="divider"></div>
          
            <div class="faq-item">
                <div id="organization" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Organizations</span><a id="organize"></a>
            
                    <i class="fa-solid fa-chevron-down" id="rotateIcon"
                        style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
            
            
            
                </div>
            
                <div class="faq-answer" style="display: none;">
                        <section class="encapsulated-text mt-2 mb-4">Listing 1 - 20 of 61 </section>
                        @php
                             $projectID = 0;
                        @endphp
            @if ($projectID == $projOrg->id)
            @else
                        <div style="margin-top: 15px;">
                        <section class="encapsulated-text ">
                            <a href="{{ route('organizationClickingPage', ['id' => $projOrg->orgperformingworks[0]->id]) }}" style="color:black;font-weight:bold;">{{$projOrg->orgperformingworks[0]->name}}</a>
                        </section>
                    </div>
                    <div class="divider-within-class"></div>
                    @php
                          $projectID = $projOrg->id;
                    @endphp
            @endif    
            
            
            
                    <div style="margin-top: 15px;">
            
                        <center>
                            <div class="pagination">
                                <a href="#">&laquo;</a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                                <a href="#">&raquo;</a>
                            </div>
            
                        </center>
                    </div>
                </div>
            </div>
            
            
            <div class="divider"></div>
            <div class="faq-item">
                <div id="foundSources" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Locations</span>
                    <i class="fa-solid fa-chevron-down" id="rotateIcon" style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
                </div>
                
                <div class="faq-answer" style="display: none;">
              <div>
              <section  class="encapsulated-text mt-2 mb-3">Listing 1 - 20 of 61 </section>
              @php
                $locationID = 0;
              @endphp
            
              @foreach ($projOrg->orgperformingworks as $org )
              @if ($org->location->id == $locationID)
                
              @else
              <div style="margin-top: 15px;">
                <section class="encapsulated-text" >
              <a href="{{ route('locationsClickingPage', ['id' => $org->location->id]) }}" style="color:black;font-weight:bold;">{{$org->location->city}} , {{$org->location->state}}</a>
              </section>
              </div>
              <div class="divider-within-class"></div> 
              @php
                $locationID = $org->location->id;
              @endphp
              @endif
              @endforeach
              
              
              
              
              <div style="margin-top: 15px;">
                  <center>
              <div class="pagination">
              <a href="#">&laquo;</a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">&raquo;</a>
              </div>
              
              </center>
              </div>
                </div>
              </div>
              
              
              <div class="divider"></div>
              <div class="faq-item">
                <div id="foundSources" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Found sources</span>
                    <i class="fa-solid fa-chevron-down" id="rotateIcon"
                        style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
                </div>
            
                <div class="faq-answer" style="display: none;">
                    <div>
                        <section class="encapsulated-text mt-2 mb-3">Listing 1 - 20 of 61 </section>
                        @php
                            $sourceID = 0;
                        @endphp
                    @if ($projOrg->foundingsource->id == $sourceID)
                        
                    @else
                        <div style="margin-top: 15px;">
                        <section class="encapsulated-text ">
                            <a href="{{ route('foundSourcesClickingPage', ['id' => $projOrg->foundingsource->id]) }}" style="color:black;font-weight:bold;"> {{$projOrg->foundingsource->name}} </a>
                        </section>
                    </div>
                    <div class="divider-within-class"></div>
                    @php
                        $sourceID = $projOrg->foundingsource->id;
                    @endphp
                    @endif
                </div>
            
                    
                    <div style="margin-top: 15px;">
                        <center>
                            <div class="pagination">
                                <a href="#">&laquo;</a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                                <a href="#">&raquo;</a>
                            </div>
            
                        </center>
                    </div>
                </div>
            </div>
            
            
            <div class="divider"></div>
            <div class="faq-item " >
                <div id="missionType" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Mission Type</span>
                    <i class="fa-solid fa-chevron-down" id="rotateIcon" style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
                </div>
                <div class="faq-answer" style="display: none;">
              <div>
              <section  class="encapsulated-text mt-2 mb-4">Listing 1 - 20 of 61 </section>
              @php
                $missionID = 0;
              @endphp
              @if ($projOrg->missiontype->id == $missionID)
                
              @else
              <div style="margin-top: 15px;">
                <section class="encapsulated-text " >
                    <a href="{{route('missionTypeClickingPage' , ['id' => $projOrg->missiontype->id])}}" style="color:black;font-weight:bold;">{{$projOrg->missiontype->type}}</a>
                </section>
              </div>
              <div class="divider-within-class"></div> 
            @php
              $missionID = $projOrg->missiontype->id;
            @endphp
              @endif
            </div>
              
              
              
                  <center>
              <div class="pagination">
              <a href="#">&laquo;</a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">&raquo;</a>
              </div>
              
              </center>
              </div>
                </div>
              
              
              
              
              
                  
              </div>
              
              <div class="divider"></div>
              <div class="faq-item">
                <div id="legalRoles" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Legal Entity Roles</span>
            
                    <i class="fa-solid fa-chevron-down" id="rotateIcon"
                        style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
            
            
            
                </div>
            
                <div class="faq-answer" style="display: none;">
                    <div>
                        <section class="encapsulated-text mt-2 mb-4">Listing 1 - 20 of 61 </section>
                        @php
                            $legalID = 0;
                        @endphp
                   @foreach ($projOrg->legalentityroles as $role)
                   @if ($role->id == $legalID)
                       
                   @else
                        <div style="margin-top: 15px;">
                        <section class="encapsulated-text py-3">
                            <a href="{{ route('legalEntityClickingPage', ['id' => $role->id]) }}" style="color:black;font-weight:bold;">{{$role->name}}</a>
                        </section>
                    </div>
                    <div class="divider-within-class"></div>
                    @php
                        $legalID = $role->id;
                    @endphp
                    @endif
                    @endforeach
                </div>
            
            
            
                
            
                        <center>
                            <div class="pagination">
                                <a href="#">&laquo;</a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                                <a href="#">&raquo;</a>
                            </div>
            
                        </center>
            
            
                    </div>
                </div>
            
            <div class="divider"></div>
            
        
        </div>
    </div>


    </div>
        <div style="margin-top:200px"></div>
 
        <footer>
            @include('footer')
        </footer>
    


    <script>


var title = $('#page_title').html('Project Target');
var projOrg = @json($projOrg);
$(document).ready(function() {
        $('#dynamic_title').html(projOrg.projecttarget);
});
        const questions = document.querySelectorAll('.qa-question');

        questions.forEach(question => {
            question.addEventListener('click', () => {
                question.classList.toggle('active');
                const answer = question.querySelector('.qa-answer');
                answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
            });
        });
        // JavaScript function to toggle FAQ answers and the lower arrow
        var rotated = false;

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

        function toggleSubAnswer(element) {
            const answer = element.parentElement;
            const answer1 = answer.nextElementSibling;
            const answer2 = answer1.nextElementSibling;
            if (answer2.style.display === 'none') {
                answer2.style.display = 'block';
                element.classList.remove('fa-rotate-180');
            } else {
                answer2.style.display = 'none';
                element.classList.add('fa-rotate-180');
            }
        }

        function toggleQASubAnswer(element1) {
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
            var subanswer = question.nextElementSibling.nextElementSibling; // Select the next sibling (the sub-answer)
            if (subanswer.style.display === "none" || subanswer.style.display === "") {
                subanswer.style.display = "block"; // Show the sub-answer
            } else {
                subanswer.style.display = "none"; // Hide the sub-answer
            }
        }
        var slider = document.getElementById("myRange");
        var sliderValueDisplay = document.getElementById("sliderValue");

        // Update the <span> tag with the slider value when the slider is changed
        slider.addEventListener("input", function() {
            sliderValueDisplay.textContent = slider.value;
        });

        var icon = document.getElementById('rotateIcon');


        icon.addEventListener('click', function() {

        });
    </script>
</body>
<script type="text/javascript">
    google.charts.load("45", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Level", "Projects", { role: "style" } ],
        ["1", 8.94, "#065386"],
        ["2", 10.49, "#065386"],
        ["3", 19.30, "#065386"],
        ["4", 21.45, "#065386"],
        ["5", 30.45, "#065386"],
        ["6", 21.45, "#065386"],
        ["7", 50.45, "#065386"],
        ["8", 21.45, "#065386"],
        ["9", 40.45, "#065386"],
      ]);

      var view = new google.visualization.DataView(data);
    //   view.setColumns([0, 1,
    //                    { calc: "stringify",
    //                      sourceColumn: 1,
    //                      type: "string",
    //                      role: "annotation" },
    //                    2]);

      var options = {
        chartArea: { width: '100%' , height:'50%' , left:15, top:40
 },
        title: 'Technology Maturity:',
         titleTextStyle: {
         color: 'white',  // Change the color of the chart title
         fontSize: 18 ,     // Adjust the font size if needed
         bold:false,
    },
        width: 210,
        height: 150,
        backgroundColor: {
            fill: 'transparent'
    },
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
        hAxis: {
        // titleTextStyle: {
        // color: '#0058a2',  // Text color
        // fontSize: 12,    // Font size
        // bold:true,    
        // italic:false,   
        //                 }
        textStyle: {
      color: 'white'  // Change the color of x-axis labels
    }
               },
        vAxis: {
        // title: 'Number of Projects',
        // titleTextStyle: {
        // color: '#0058a2',  // Text color
        // fontSize: 12,    // Font size
        // bold:true,
        // italic:false,   
        //                 }
        textStyle: {
      color: 'white'  // Change the color of x-axis labels
    }
               },
      };
      var projOrg = @json($projOrg);
        var container = document.getElementById("columnchart_values");
          var chart = new google.visualization.ColumnChart(container);
          chart.draw(view, options);
  }
  </script>
</html>
