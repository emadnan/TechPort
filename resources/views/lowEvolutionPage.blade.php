@include('bootStrap')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
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
        top: 12px;
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
    .frame {
    width: 443px;
    height: 178px;
  }
  .frame .overlap-group {
    position: relative;
    width: 380px;
    height: 252px;
    top: -20px;
    left: 0px;
  }
  .frame .rectangle {
  position: absolute;
  width: 380px;
  height: 141px;
  top: 6px;
  left: -2px;
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
        </ul>
        <!-- Add a new row for the image container -->
        <div class="row mt-1">
            <div class="col-md-12">
                <div class="custom-image-container">
                    <img src="{{ asset('images/rectangle.jpg') }}" alt="Rectangular Image" class="custom-image">

                    <div class="text-in-image">
                        <div class="row">
                            <div class="col-10"><section style="font-size:22px; font-weight:700;">PROJECTS
                            </section></div>
                            {{-- <div class="col-2" style="margin-right:-30px;"> <section style="font-size: 12px">Export</section> 
                                <a href="{{route('downloadPdf', ['id' => $projOrg->id])}}">  <i class="fa-regular fa-file-pdf" 
                                    style="width: 21px;height: 21px;margin-top:10px; color:white;"></i></a>
                                </div> --}}
                        </div>
                        
                        
                           
                        {{-- <section style="font-size:14px; ">Small Business Innovation Research/Small Business Tech Transfer
                        </section> --}}
                        <section style="font-size:22px; font-weight:600; margin-bottom:10px; ">{{$projOrg->name}}</section>
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
                                <section>{{$projOrg->description}}</section>

                                <section style="font-weight:bold;margin-top:10px;">Benefit:</section>
                                <section>{{$projOrg->benifit}} </section>
                                <section style="font-weight:bold;margin-top:10px;">Work Locations:</section>
                                <div id="regions_div"></div>

                                <table>
                                    <tr>
                                        <th><a href="{{ url('/organizations') }}" style="color:#fff"> Organisation
                                                Performing Work</a></th>
                                        <th>Code</th>
                                        <th><a href="{{ url('/locationsPage') }}" style="color:#fff;">Location</a></th>
                                        <th>Description</th>
                                    </tr>
                           @foreach ( $projOrg->orgperformingworks as $org)
                                    <tr>
                                        <td><a href="{{ route('organizationClickingPage', ['id' => $org->id]) }}" style="color:black;">{{$org->name}}</a></td>
                                        <td>{{$org->code}}</td>
                                        <td><a href="{{ route('locationsClickingPage', ['id' => $org->location->id]) }}" style="color:black;">{{$org->location->state}},{{$org->location->city}}</a></td>
                                        <td>{{$org->description}}</td>
                                    </tr>
                            @endforeach

                                </table>
                                <section style="font-weight:bold;margin-top:30px;font-size:16px" class="mt-4"><a
                                        href="{{ url('/found-sources') }}" style="color:black;">Found Source</a>
                                </section>
                                <section>
                                    <p><a href="{{ route('foundSourcesClickingPage', ['id' => $projOrg->foundingsource->id]) }}" style="color:black;">{{$projOrg->foundingsource->name}} </a></p>
                                </section>

                            </div>





                            <div class="col-md-4">

                                <img src="{{ asset('images/' . $projOrg->image) }}" alt=""
                                    style="height:200px;width:auto;">
                                <section style="font-weight:bold;margin-top:30px;font-size:16px">
                                    Project Organization:
                                </section>
                                <section><a href="{{ url('/organizations') }}"
                                        style="color:black;font-weight:bold;">Organization Performing Work</a></section>
                           @foreach ( $projOrg->orgperformingworks as $org)
                                <section><a href="{{route('organizationClickingPage', ['id' => $org->id])}}" style="color:black;">{{$org->name}}</a></section>
                            @break;
                            @endforeach
                                <section style="font-weight:bold;margin-top:30px;"><a style="color:black;"
                                        href="{{ url('/legal-entity-roles') }}">Legal Entity Role</a></section>
                           @foreach ( $projOrg->legalentityroles as $entity)
                                        <section><a href="{{ route('legalEntityClickingPage', ['id' => $entity->id]) }}" style="color:black;">{{$entity->name}}</a></section>
                            @break;
                            @endforeach
                                <section style="font-weight:bold;margin-top:30px;"><a
                                        href="{{ url('/search-results') }}" style="color:black;">Project</a></section>
                                <section><a href="{{ url('/search-results') }}" style="color:black;">{{$projOrg->name}}</a></section>
                                <section style="font-weight:bold;margin-top:30px;font-size:16px">Project Duration
                                </section>
                                <section>
                                    <p>Start: {{$projOrg->startdate}}</p>
                                    <p>End : {{$projOrg->enddate}}</p>
                                </section>

                                <section style="font-weight:bold;margin-top:30px;font-size:16px"><a
                                        href="{{ url('/mission-type') }}" style="color:black;">Mission Type</a>
                                </section>
                                <section><a href="{{ route('missionTypeClickingPage', ['id' => $projOrg->missiontype->id]) }}" style="color:black;">{{$projOrg->missiontype->type}}</a></section>

                                <section style="font-weight:bold;margin-top:30px;font-size:16px">Technology Maturity
                                    (TRL)</section>
                                <section><strong style="padding-right: 10px">Start:</strong>{{$projOrg->trlstart->trllevel}}</section>
                                <section><strong style="padding-right: 10px">Current:</strong>{{$projOrg->trlactual->trllevel}}</section>
                                <section><strong style="padding-right: 10px">Estimated End:</strong>{{$projOrg->trlfinal->trllevel}}</section>

                                <div class="frame">
                                    <div class="overlap-group">
                                        <svg class="rectangle" xmlns="http://www.w3.org/2000/svg" width="488" height="142" viewBox="0 0 488 142" fill="none">
                                            <path d="M0.58609 0.27L455.524 0.251974L455.084 21.2701L0.586036 150.142L0.58609 31.27Z" fill="#FFFFFF"/>
                                            </svg>
                                            <svg id="rect_1" xmlns="http://www.w3.org/2000/svg" width="35" height="221" viewBox="0 0 51 221" fill="none">
                                                <rect width="100%" height="100%" fill="#E8E8E8"/>
                                                <text x="20" y="205" font-family="Arial" font-size="20" font-weight="bold" fill="black">1</text>
                                            </svg>
                                            <svg id="rect_2" xmlns="http://www.w3.org/2000/svg" width="35" height="221" viewBox="0 0 51 221" fill="none">
                                                <path d="M0 0H51V221H0V0Z" fill="#E8E8E8"/>
                                                <text x="20" y="205" font-family="Arial" font-size="20" font-weight="bold" fill="black">2</text>
                                            </svg>
                                                <svg id="rect_3" xmlns="http://www.w3.org/2000/svg" width="35" height="221" viewBox="0 0 51 221" fill="none">
                                                    <path d="M0 0H51V221H0V0Z" fill="#E8E8E8"/>
                                                <text x="20" y="205" font-family="Arial" font-size="20" font-weight="bold" fill="black">3</text>
                                            </svg>
                                                    <svg id="rect_4" xmlns="http://www.w3.org/2000/svg" width="35" height="221" viewBox="0 0 51 221" fill="none">
                                                        <path d="M0 0H51V221H0V0Z" fill="#E8E8E8"/>065386
                                                            <text x="20" y="205" font-family="Arial" font-size="20" font-weight="bold" fill="black">4</text>
                                                        </svg>
                                                        <svg id="rect_5" xmlns="http://www.w3.org/2000/svg" width="35" height="221" viewBox="0 0 51 221" fill="none">
                                                            <path d="M0 0H51V221H0V0Z" fill="#E8E8E8"/>
                                                                 <text x="20" y="205" font-family="Arial" font-size="20" font-weight="bold" fill="black">5</text>
                                                            </svg>
                                                            <svg id="rect_6" xmlns="http://www.w3.org/2000/svg" width="35" height="221" viewBox="0 0 51 221" fill="none">
                                                                <path d="M0 0H51V221H0V0Z" fill="#E8E8E8"/>
                                                                <text x="20" y="205" font-family="Arial" font-size="20" font-weight="bold" fill="black">6</text>
                                                                </svg>
                                                                <svg id="rect_7" xmlns="http://www.w3.org/2000/svg" width="35" height="221" viewBox="0 0 51 221" fill="none">
                                                                    <path d="M0 0H51V221H0V0Z" fill="#E8E8E8"/>
                                                                    <text x="20" y="205" font-family="Arial" font-size="20" font-weight="bold" fill="black">7</text>
                                                                </svg>
                                                                    <svg id="rect_8" xmlns="http://www.w3.org/2000/svg" width="35" height="221" viewBox="0 0 51 221" fill="none">
                                                                        <path d="M0 0H51V221H0V0Z" fill="#E8E8E8"/>
                                                                    <text x="20" y="205" font-family="Arial" font-size="20" font-weight="bold" fill="black">8</text>
                                                                </svg>
                                                                        <svg id="rect_9" xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 51 221" fill="none">
                                                                            <path d="M0 0H51V221H0V0Z" fill="#E8E8E8"/>
                                                                            <text x="20" y="205" font-family="Arial" font-size="20" font-weight="bold" fill="black">9</text>
                                                                </svg>  
                                        </div>
                                    <div style="display: flex; top:-82px; position:relative;" >
                                        <div style="width: 114px; height:50px; background-color:#E8E8E8; margin-right:3px;"><p style="margin-left: 25px;">Applied Research</p></div>
                                        <div style="width: 114px; height:50px; background-color:#E8E8E8; margin-right:3px;"><p style="margin-left: 5px;">Development</p></div>
                                        <div style="width: 114px; height:50px; background-color:#E8E8E8; margin-right:3px;"><p style="margin-left: 8px;">Demo & Test</p></div>
                                    </div>
                                
                                  </div>
<script>
    var project = @json($projOrg);

    switch (project.trlstart.trllevel) {
    case 1:
        var rect = document.getElementById("rect_1");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 2:
        var rect = document.getElementById("rect_2");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 3:
        var rect = document.getElementById("rect_3");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 4:
        var rect = document.getElementById("rect_4");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 5:
        var rect = document.getElementById("rect_5");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 6:
        var rect = document.getElementById("rect_6");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 7:
        var rect = document.getElementById("rect_7");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 8:
        var rect = document.getElementById("rect_8");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 9:
        var rect = document.getElementById("rect_9");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    default:
        console.log("No valid TRls");
}

switch (project.trlactual.trllevel) {
    case 1:
        var rect = document.getElementById("rect_1");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 2:
        var rect = document.getElementById("rect_2");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 3:
        var rect = document.getElementById("rect_3");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 4:
        var rect = document.getElementById("rect_4");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 5:
        var rect = document.getElementById("rect_5");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 6:
        var rect = document.getElementById("rect_6");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 7:
        var rect = document.getElementById("rect_7");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 8:
        var rect = document.getElementById("rect_8");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 9:
        var rect = document.getElementById("rect_9");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    default:
        console.log("No valid TRls");
}

switch (project.trlfinal.trllevel) {
    case 1:
        var rect = document.getElementById("rect_1");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 2:
        var rect = document.getElementById("rect_2");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 3:
        var rect = document.getElementById("rect_3");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 4:
        var rect = document.getElementById("rect_4");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 5:
        var rect = document.getElementById("rect_5");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 6:
        var rect = document.getElementById("rect_6");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 7:
        var rect = document.getElementById("rect_7");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 8:
        var rect = document.getElementById("rect_8");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    case 9:
        var rect = document.getElementById("rect_9");
        var path = rect.firstElementChild;
        var text = path.nextElementSibling;
        path.setAttribute("fill", "#065386");
        text.setAttribute("fill", "white");
        break;

    default:
        console.log("No valid TRls");
}
</script>
                                <section style="font-weight:bold;margin-top:80px;font-size:16px">Technology Areas
                                </section>
                                <section><a href="{{ url('/search-results') }}" style="color:black;">TX01 {{$projOrg->techreferred->techarea->techarea}}</a></section>
                                <div class="row ml-1">
                                    <svg xmlns="htp://www.w3.org/2000/svg" width="15" height="8"
                                        viewBox="0 0 15 8" fill="none">
                                        <line x1="0.5" y1="2.18561e-08" x2="0.5" y2="7"
                                            stroke="black" />
                                        <line x1="15" y1="7.5" y2="7.5" stroke="black" />
                                    </svg>
                                    <section style="margin-left:5px;"><a href="{{ url('/search-results') }}"
                                            style="color:black;">TX01.1 {{$projOrg->techreferred->techsector->techsector}}</a></section>
                                </div>
                                <div class="row" style="margin-left:25px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8"
                                        viewBox="0 0 15 8" fill="none">
                                        <line x1="0.5" y1="2.18561e-08" x2="0.5" y2="7"
                                            stroke="black" />
                                        <line x1="15" y1="7.5" y2="7.5" stroke="black" />
                                    </svg>
                                    <section style="margin-left:5px;"><a href="{{ url('/search-results') }}"
                                            style="color:black;">TX01.1.3 {{$projOrg->techreferred->techniche->techniche}}</a></section>
                                </div>
                                <section style="font-weight:bold;margin-top:25px;font-size:16px"><a
                                        href="{{ url('/project-targets') }}" style="color:black;">Project target</a>
                                </section>
                                <section style="margin-left:5px;"><a href=""
                                        style="color:black;">{{$projOrg->projecttarget}}</a></section>
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
 <script type="text/javascript">
 $(document).ready(function(){     
    
     google.charts.load('current', {
        'packages':['geochart'],
      });

        google.charts.setOnLoadCallback(function () {
    
            var projOrg = @json($projOrg);

            var rows = projOrg.orgperformingworks.map(function (org) {
            return [org.location.state];
        });

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'State');

        // Add rows to the data table
        
        data.addRows(rows);
        drawRegionsMap(data);

    })
       
    function drawRegionsMap(data)
    {

        var options = {
      region: 'US',
      displayMode: 'regions',
      resolution: 'provinces',
      backgroundColor: '#ededed',
      datalessRegionColor: '#c2c2c2',
      defaultColor: '#065386',
      boundaryColor: '#ffffff',
      boundaryOpacity: 0.5
       };

       var container = document.getElementById('regions_div');
        var chart = new google.visualization.GeoChart(container);

        google.visualization.events.addListener(chart, 'ready', function () {
    // Get all <path> elements inside the chart container
    var countries = container.getElementsByTagName('path');

    // Loop through each path and set its stroke color to red
    Array.prototype.forEach.call(countries, function(path) {
        path.setAttribute('stroke', 'white');
    });
});
        chart.draw(data, options);
    }
    });
    </script>
</html>
