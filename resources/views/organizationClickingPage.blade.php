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
        height: 300px;
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

    .pagination a:hover:not(.prevPage , .active , .prevOrgPage , .prevLocationsPage, .prevSourcePage , .prevMissionPage ,  .prevTargetPage , .prevEntityPage) {
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
    .tooltip-inner {
    background-color: #eff1cc; 
    color: black; 
    font-size:10px;
}
</style>

<body>







    <!-- <div class='body-container'> -->

    <div class="container">
        @include('header')

        <ul class="breadCrumbs mt-2 mb-0">
            <li class="breadCrumbs-items"><a href="{{url('/')}}">Home</a></li>
            <li class="breadCrumbs-items">></li>
            <li class="breadCrumbs-items"><a href="{{url('/organizations')}}">Company index</a></li>
            <li class="breadCrumbs-items">></li>
            <li class="breadCrumbs-items"><i>{{$projOrg->name}}</i></li>
        </ul>







@include('layouts.image')


        <div class="container py-4 my-2" style="   border:1px groove #E8E8E8;">
            <h5 class="px-2" style="font-family: Roboto; font-weight: bold; font-size:16px;">Company Description:</h5>
            <section class="pb-2 px-2" style="font-size:14px;">{{$projOrg->description}}</section>
        </div>


        <div class="faq-container mt-1">

            @include('projectCode')
            @include('locationsCode')
            @include('foundSourcesCode')
            @include('missionTypeCode')
            @include('legalRolesCode')
            @include('projectTargetCode')

        </div>
    </div>
    </div>



            <div style="margin-top:100px"></div>

            <footer>
                @include('footer')
            </footer>



            <script>

                
var title = $('#page_title').html('Companies');
var projOrg = @json($projOrg);
$(document).ready(function() {
        $('#dynamic_title').html(projOrg.name);
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
google.charts.setOnLoadCallback(function () {
    var allTrls = @json($allTrls); 
    var projOrg = @json($projOrg); 

    // Create an array to store data for the chart
    var chartData = [['TRL Level', 'Number of Projects' , { role: "style" }]];

    // Iterate through each TRL model
    function fetchDataForTrl(trl) {
    var baseUrl = '/getProjectsLengthByOrgID';
    var orgID = projOrg.id;
    var trlID = trl.id;
    var url = baseUrl + '/' + orgID + '/' + trlID;

    return fetch(url)
        .then(response => response.json())
        .then(data => {
            var numberOfProjects = data.project;
            return numberOfProjects;
        })
        .catch(error => {
            console.error('Error:', error);
            return 0; // Handle the error case by returning a default value
        });
}

// Use Promise.all to wait for all fetch operations to complete
Promise.all(allTrls.map(fetchDataForTrl))
    .then(numberOfProjectsArray => {
        // All fetch operations have completed here
        for (var i = 0; i < allTrls.length; i++) {
            var trl = allTrls[i];
            var numberOfProjects = numberOfProjectsArray[i];

            chartData.push([trl.trllevel.toString(), numberOfProjects, "#065386"]);
            // Add other chart-related logic here if needed
        }

        // Continue with other logic that depends on the completed chartData array
        // console.log(chartData);
        // Call the drawChart function or any other logic here
        drawChart(google.visualization.arrayToDataTable(chartData));
    // drawChart(data);
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
});
    function drawChart(data) {
      var options = {
        chartArea: { width: '100%' , height:'50%' , left:30, top:40
 },

        title: 'Technology Maturity:',
         titleTextStyle: {
         color: 'white',  // Change the color of the chart title
         fontSize: 18 ,     // Adjust the font size if needed
         bold:false,
    },
        width: 220,
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
    },

    },
        vAxis: {
        // title: 'Number of Projects',
        // titleTextStyle: {
        // color: '#0058a2',  // Text color
        // fontSize: 12,    // Font size
        // bold:true,
        // italic:false,   
        //                 }
        minValue: 4,                    
        viewWindow:{min:0}, /*this also makes 0 = min value*/         
        format: '0',  
        textStyle: {
      color: 'white'  // Change the color of x-axis labels
    }
               },
      };
    //   var projOrg = @json($projOrg);
        var container = document.getElementById("columnchart_values");
          var chart = new google.visualization.ColumnChart(container);
          chart.draw(data, options);
  }

  var projOrg = @json($projOrg);
  var projects = projOrg.projects;
  var totalTechareas = @json($totalTechareas);
  projects.forEach(function(project){
    var area = project.techreferred.techarea.code;
    for (let index = 1; index <= totalTechareas; index++) {
        if(area.includes('TX0'+index) || area.includes('TX'+index))
            {
            var area_btn =  document.getElementById('btn_tx0'+index);
            area_btn.classList.add('btn-primary');
            }
    }
  });

  var techareas = @json($techareas);
  techareas.forEach(function(techarea){
    var count = 0 ;
    techarea.projects.forEach(function(project){
        count = count + 1 ;
    })
    var areaCode = techarea.code;
    for (let index = 1; index <= totalTechareas; index++) {
        if (areaCode.includes('TX0'+index) || areaCode.includes('TX'+index)) {
            $('#btn_tx0'+index).tooltip({
                title: function () {
                    return getProjectCount(count);
                }
            });
        
   }
    }

  })
  function getProjectCount(count) {
            return 'Projects: ' + count;
        }
  </script>

</html>
