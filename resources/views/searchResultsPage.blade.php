@include('bootStrap')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TechPort</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <script>
          window.onload = function()
          {
        let element= document.getElementById('project');
        let show = element.nextElementSibling;
        show.style.display = 'block';
      } 
    </script>
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
        height: 300px;
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

        margin: 0;
        padding: 0;
    }

    .faq-container {
        max-width: 100%;
        margin: 0 auto;
        padding: 3px;
        margin-bottom: 50px;
        background: #E8E8E8;
        /* White background for FAQ container */
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        /* border-radius: 5px; */
    }

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

    .divider-within-class {
        width: 100%;
        height: 1px;
        background-color: rgba(128, 128, 128, 0.5);
        margin-top: 20px;
    }

    .divider {
        width: 100%;
        height: 1px;
        background-color: white;
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
        font-size: 14px;
        margin-left: 10px
    }

    .planet-img {
        width: 300px;
        height: 200px;
    }

    .pagination {
        display: inline-block;
        margin-top: 25px;
        margin-bottom: 25px;
        font-size: 10px;

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

    .graph-image img {
        width: 190%;
        border-radius: 25px;
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
    .project {
            display: none;
    }
    .project:nth-child(-n+2) {
            display: block;
    }
    .organization {
            display: none;
    }
    .organization:nth-child(-n+10) {
            display: block;
    }
    .tooltip-inner {
    background-color: #eff1cc; 
    color: black; 
    font-size:10px;
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
                    <section id="projectPagesList" class="encapsulated-text mt-2 mb-4"></section>
                    @php
                        $projectID = 0;
                    @endphp
            @foreach ($projOrgs as $project )
            @if ($projectID == $project->id)
                
            @else
                    <div class="project" id="project_div_{{$project->id}}" style="margin-top: 15px;">
                        <section class="encapsulated-text ">
                            <a href="{{ route('projectPage', ['id'=> $project->id]) }}" style="color:#065386;font-weight:bold;">{{$project->name}}</a>
                            <i class="fa-solid fa-chevron-down" style="float: right;margin-right:10px; color:grey;"
                                onclick="toggleSubAnswer(this)"></i>
                            <button
                            class="px-2"  style="float: right; margin-right: 20px; background-color: white; border: 1px solid grey; color: grey; height: 30px; min-width: 80px; border-radius: 5px;">{{$project->status->status}}</button>
                            <section><br></section>
                        </section>
                        <section class="sub-answer mt-2 mb-4" style="margin-left:10px;font-size:15px; padding-right:4rem; max-height:70px; overflow:auto;">{{$project->description}}</section>
            
                        <div class="sub-answer mt-2 mb-4"
                            style=" display:none; margin-left:10px;font-size:15px; padding-right:4rem">
                            <div class="row my-4">
                                <div class="col">
                                    <img src="{{ asset('images/' . $project->image) }}" width="350px">
                                </div>
                                <div class="col">
                                    <section class="mb-2" style="font-size:13px;"><b><a style="color:black;" href="{{url('/legal-entity-roles')}}">Legal Entity Role</a></b></section>
                                    @foreach ($project->legalentityroles as $role )
                                    <section class="mb-2" style="font-size:13px;"><a style="color:black;" href="{{route('legalEntityClickingPage' , ['id'=>$role->id])}}">{{$role->name}}</a>
                                    </section>
                                    @break
                                    @endforeach
                                    <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/organizations')}}"> Organisation Performing Work</a></b></section>
                                    @foreach ($project->orgperformingworks as $org )
                                    <section class="mb-2" style="font-size:13px"> <a style="color:black;" href="{{route('organizationClickingPage' , ['id' => $org->id])}}">{{$org->name}}</a></section>
                                    @break
                                    @endforeach
                                    <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/')}}"> Primary Technology Area:</a></b></section>
                                    <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/search-results')}}">TX01 {{$project->techreferred->techarea->techarea}}</a></section>
                                    <section class="mb-2" style="font-size:13px"><b> Start: </b></section>
                                    <section style="font-size:13px">{{$project->startdate}}</section>
                                </div>
                                <div class="col">
                                    <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/mission-type')}}"> Mission Type </a></b></section>
                                    <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{route('missionTypeClickingPage' , ['id'=>$project->missiontype->id])}}"> {{$project->missiontype->type}}</a></section>
                                    <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/found-sources')}}"> Found Source</a> </b></section>
                                    <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{route('foundSourcesClickingPage' , ['id'=>$project->foundingsource->id])}}">{{$project->foundingsource->name}}</a></section>
                                    <section class="my-2" style="font-size:13px"><b> End: </b></section>
                                    <section style="font-size:13px">{{$project->enddate}}</section>
                                </div>
                            </div>
                        </div>
                    <div class="divider-within-class"></div>
                    </div>
            @php
                $projectID = $project->id;
            @endphp
            
            @endif    
            @endforeach
            
                    <center>
                        <div class="project_pagination pagination">
                            <a id="prevPage" class="prevPage">&laquo;</a>
                            @php $numPages = ceil(count($projOrgs) / 10); @endphp
                            @for ($i = 1; $i <= $numPages; $i++)
                                @if ($i>10)
                                    <a class="pages" style="display:none;" onclick="showPage({{$i}})">{{$i}}</a>
                                @else
                                    <a class="pages" onclick="showPage({{$i}})">{{$i}}</a>
                                @endif
                            @endfor
                            <a id="nextPage" class="nextPage">&raquo;</a>
                        </div>

                        <div class="row justify-content-center">
                            <label for="selectPage" style="color: #065386;"><b>Select Specific Page:</b></label>
                            <input  id="selectPage" name="selectPage" type="text" style=" border-radius:5px; border:1px solid #E8E8E8; width:40px;height:30px;margin-left: 10px; margin-right: 10px;">
                            <button class=" btn btn-small " style=" background-color: #065386; color:#fff;height:30px;padding-top: 1px;" type="submit" onclick="showSelectedPage(this)">Go</button>
                        </div>
                    </center>
                </div>
            </div>
            <script>

                var list = "Listing 1-10 of "+{{$numPages}};
                var section = document.getElementById("projectPagesList");
                section.textContent = list;

                function showSelectedPage(element)
                {
                    var selectedPageElement = element.previousElementSibling;
                    var selectedPage = parseInt(selectedPageElement.value, 10);
                    if (selectedPage <= {{$numPages}}) {
                        var startPage = Math.floor((selectedPage - 1) / 01) * 10 + 1;
                        var endPage = Math.min(startPage + 9, {{$numPages}});
                        var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numPages}};
                        $('#projectPagesList').text(list);
                        $('.project_pagination a.pages').hide();
                        $('.project').hide();
                        prevPageHover(selectedPage);
                        nextPageHover(selectedPage);
                        $('.project').slice((selectedPage - 1) * 10, selectedPage * 10).show();
                        var pages = $(".project_pagination").find('a');
                        pages.each(function(){
                            var page = parseInt($(this).text(), 10);
                            if(page == selectedPage)
                                {
                                   $(this).addClass('active');
                                   $("#selectPage").val(selectedPage);
                                       // console.log( $("#selectPage").val());
                                }
                               else
                                {
                                   $(this).removeClass('active')
                                }
                            if (page >= startPage && page <= endPage) {
                                $(this).show();
                            }
                            
                        });
                    }
                }
                function prevPageHover(currentPage)
                    {
                        if(currentPage == 1)
                        {
                            $('#prevPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#prevPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }

                    function nextPageHover(currentPage)
                    {
                        if(currentPage < {{$numPages}})
                        {
                            $('#nextPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#nextPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }
               
                $(document).ready(function() {
                    var currentPage = 1;
                    var pages = $(".project_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == currentPage)
                        {
                            $(this).addClass('active');
                            $("#selectPage").val(currentPage);
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })

                    $('.project').slice(0, 10).show();

                    $('#prevPage').click(function() {
                        var currentPage = parseInt($('.project_pagination a.active').text()) || 1;
                        if (currentPage > 1) {
                           if(currentPage % 10 === 1)
                           {
                               prevPageGroup(currentPage);
                           }
                        currentPage--;
                        showPage(currentPage);   
                        }
                        
                    });

                    $('#nextPage').click(function() {
                        var currentPage = parseInt($('.project_pagination a.active').text()) || 1;
                        let maxButtons = 10;

                        if(currentPage % 10 === 0)
                        {
                            nextPageGroup(currentPage);
                        }
                        if (currentPage < {{$numPages}}) {
                        currentPage++;
                        showPage(currentPage);
                        }
                        
                    });
                });
                
                function showPage(pageNumber) {
                    // Hide all projects
                    $('.project').hide();
                    prevPageHover(pageNumber);
                    nextPageHover(pageNumber);
                    // Show projects for the selected page
                    $('.project').slice((pageNumber - 1) * 10, pageNumber * 10).show();
                    var pages = $(".project_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == pageNumber)
                        {
                            $(this).addClass('active');
                            $("#selectPage").val(pageNumber);
                            // console.log( $("#selectPage").val());
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })
                }

                function nextPageGroup(pageNumber)
                {
                    $('.project_pagination a.pages').hide();
                    let maxButtons = 10;
                    let startPage = Math.floor(pageNumber / maxButtons) * maxButtons + 1;
                            let endPage = Math.min(startPage + maxButtons - 1 , {{$numPages}});
                            var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numPages}};
                        $('#projectPagesList').text(list);
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.project_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

                function prevPageGroup(pageNumber)
                {
                    let maxButtons = 10;
                    let endPage = Math.floor(pageNumber / maxButtons) * maxButtons;
                            let startPage = Math.min(endPage - maxButtons + 1 , {{$numPages}});
                            var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numPages}};
                        $('#projectPagesList').text(list);
                    $('.project_pagination a.pages').hide();
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.project_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

            </script>
            <div class="divider"></div>
            
            <div class="faq-item">
                <div id="organization" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Organizations</span><a id="organize"></a>
            
                    <i class="fa-solid fa-chevron-down" id="rotateIcon"
                        style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
                </div>
            
                <div class="faq-answer" style="display: none;">
                        <section id="organizationPagesList" class="encapsulated-text mt-2 mb-4"></section>
                        @php
                             $orgID = 0;
                             $projectID = 0;
                             $countOrgs=0;
                        @endphp
            @foreach ($projOrgs as $project )
            @if ($projectID == $project->id)

            @else

            @foreach ($project->orgperformingworks as $org )
            @if ($orgID == $org->id)
            @else
                        <div class="organization" style="margin-top: 15px;">
                        <section class="encapsulated-text ">
                            <a href="{{ route('organizationClickingPage', ['id' => $org->id]) }}" style="color:black;font-weight:bold;">{{$org->name}}</a>
                        </section>
                    <div class="divider-within-class"></div>
                </div>
                    @php
                        $orgID = $org->id;
                        $countOrgs++;
                    @endphp
            @endif  
            @endforeach
           
            @endif
            @endforeach
                    <div style="margin-top: 15px;">
                        <center>
                        <div class="pagination organization_pagination ">
                            <a id="prevOrgPage" class="prevOrgPage">&laquo;</a>
                            {{-- @php $numPages = ceil(count($projOrgs) / 10); @endphp --}}
                            @php
                            $numOrgPages = ceil($countOrgs / 10);
                        @endphp
                            @for ($i = 1; $i <= $numOrgPages; $i++)
                                @if ($i>10)
                                    <a class="pages" style="display:none;" onclick="showOrgPage({{$i}})">{{$i}}</a>
                                @else
                                    <a class="pages" onclick="showOrgPage({{$i}})">{{$i}}</a>
                                @endif
                            @endfor
                            <a id="nextOrgPage" class="nextOrgPage">&raquo;</a>
                        </div>

                        <div class="row justify-content-center">
                            <label for="selectOrgPage" style="color: #065386;"><b>Select Specific Page:</b></label>
                            <input  id="selectOrgPage" name="selectOrgPage" type="text" style=" border-radius:5px; border:1px solid #E8E8E8; width:40px;height:30px;margin-left: 10px; margin-right: 10px;">
                            <button class=" btn btn-small " style=" background-color: #065386; color:#fff;height:30px;padding-top: 1px;" type="submit" onclick="showSelectedOrgPage(this)">Go</button>
                        </div>
                    </center>
                    </div>
                </div>
            </div>

         <script>

                var list = 'Listing 1-10 of '+{{$numOrgPages}};
                        $('#organizationPagesList').text(list);
                function showSelectedOrgPage(element)
                {
                    var selectedOrgPageElement = element.previousElementSibling;
                    var selectedOrgPage = parseInt(selectedOrgPageElement.value, 10);
                 
                    if (selectedOrgPage <= {{$numOrgPages}}) {
                        var startPage = Math.floor((selectedOrgPage - 1) / 10) * 10 + 1;
                        var endPage = Math.min(startPage + 9, {{$numOrgPages}});
                        var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numOrgPages}};
                        $('#organizationPagesList').text(list);
                        $('.organization_pagination a.pages').hide();
                        $('.organization').hide();
                        prevOrgPageHover(selectedOrgPage);
                        nextOrgPageHover(selectedOrgPage);
                        $('.organization').slice((selectedOrgPage - 1) * 10, selectedOrgPage * 10).show();
                        var pages = $(".organization_pagination").find('a');
                        pages.each(function(){
                            var page = parseInt($(this).text(), 10);
                            if(page == selectedOrgPage)
                                {
                                   $(this).addClass('active');
                                   $("#selectOrgPage").val(selectedOrgPage);
                                       // console.log( $("#selectOrgPage").val());
                                }
                               else
                                {
                                   $(this).removeClass('active')
                                }
                            if (page >= startPage && page <= endPage) {
                                $(this).show();
                            }
                            
                        });
                    }
                }
                function prevOrgPageHover(currentPage)
                    {
                        if(currentPage == 1)
                        {
                            $('#prevOrgPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#prevOrgPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }

                    function nextOrgPageHover(currentPage)
                    {
                        if(currentPage < {{$numOrgPages}})
                        {
                            $('#nextOrgPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#nextOrgPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }
               
                $(document).ready(function() {
                    var currentPage = 1;
                    var pages = $(".organization_pagination").find('a');
                    pages.each(function(){
                    console.log($(this));

                        if($(this).text() == currentPage)
                        {
                            $(this).addClass('active');
                            $("#selectOrgPage").val(currentPage);
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })

                    $('.organization').slice(0, 10).show();

                    $('#prevOrgPage').click(function() {
                        var currentPage = parseInt($('.organization_pagination a.active').text()) || 1;
                        if (currentPage > 1) {
                           if(currentPage % 10 === 1)
                           {
                               prevOrgPageGroup(currentPage);
                           }
                        currentPage--;
                        showPage(currentPage);   
                        }
                        
                    });

                    $('#nextOrgPage').click(function() {
                        var currentPage = parseInt($('.organization_pagination a.active').text()) || 1;
                        let maxButtons = 10;

                        if(currentPage % 10 === 0)
                        {
                            nextOrgPageGroup(currentPage);
                        }
                        if (currentPage < {{$numOrgPages}}) {
                        currentPage++;
                        showPage(currentPage);
                        }
                        
                    });
                });
                
                function showOrgPage(pageNumber) {
                    $('.organization').hide();
                    prevOrgPageHover(pageNumber);
                    nextOrgPageHover(pageNumber);
                    $('.organization').slice((pageNumber - 1) * 10, pageNumber * 10).show();
                    var pages = $(".organization_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == pageNumber)
                        {
                            $(this).addClass('active');
                            $("#selectOrgPage").val(pageNumber);
                            // console.log( $("#selectOrgPage").val());
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })
                }

                function nextOrgPageGroup(pageNumber)
                {
                    $('.organization_pagination a.pages').hide();
                    let maxButtons = 10;
                    let startPage = Math.floor(pageNumber / maxButtons) * maxButtons + 1;
                            let endPage = Math.min(startPage + maxButtons - 1 , {{$numOrgPages}});
                            var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numOrgPages}};
                            $('#organizationPagesList').text(list);
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.organization_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

                function prevOrgPageGroup(pageNumber)
                {
                    let maxButtons = 10;
                    let endPage = Math.floor(pageNumber / maxButtons) * maxButtons;
                            let startPage = Math.min(endPage - maxButtons + 1 , {{$numOrgPages}});
                            var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numOrgPages}};
                            $('#organizationPagesList').text(list);
                            $('.organization_pagination a.pages').hide();
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.organization_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

            </script>
            
            <div class="divider"></div>
            <div class="faq-item">
                <div id="locations" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Locations</span>
                    <i class="fa-solid fa-chevron-down" id="rotateIcon" style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
                </div>
                
                <div class="faq-answer" style="display: none;">
              <div>
              <section id="locationPagesList"  class="encapsulated-text mt-2 mb-3"></section>
              @php
                $locationID = 0;
                $countLocations = 0;
              @endphp
            
              @foreach ($projOrgs as $project )
              @foreach ($project->orgperformingworks as $org )
              @if ($org->location->id == $locationID)
                
              @else
              <div class="location" style="margin-top: 15px;">
                <section class="encapsulated-text" >
              <a href="{{ route('locationsClickingPage', ['id' => $org->location->id]) }}" style="color:black;font-weight:bold;">{{$org->location->city}} , {{$org->location->state}}</a>
              </section>
              </div>
              <div class="divider-within-class"></div> 
              @php
                $locationID = $org->location->id;
                $countLocations++;
              @endphp
              @endif
              @endforeach
              @endforeach
              
              <div style="margin-top: 15px;">
                <center>
                    <div class="location_pagination pagination">
                        <a id="prevLocationsPage" class="prevLocationsPage">&laquo;</a>
                        @php $numLocationsPages = ceil($countLocations / 10); @endphp
                        @for ($i = 1; $i <= $numLocationsPages; $i++)
                            @if ($i>10)
                                <a class="pages" style="display:none;" onclick="showLocationsPage({{$i}})">{{$i}}</a>
                            @else
                                <a class="pages" onclick="showLocationsPage({{$i}})">{{$i}}</a>
                            @endif
                        @endfor
                        <a id="nextLocationsPage" class="nextLocationsPage">&raquo;</a>
                    </div>

                    <div class="row justify-content-center">
                        <label for="selectLocationsPage" style="color: #065386;"><b>Select Specific Page:</b></label>
                        <input  id="selectLocationsPage" name="selectLocationsPage" type="text" style=" border-radius:5px; border:1px solid #E8E8E8; width:40px;height:30px;margin-left: 10px; margin-right: 10px;">
                        <button class=" btn btn-small " style=" background-color: #065386; color:#fff;height:30px;padding-top: 1px;" type="submit" onclick="showSelectedLocationsPage(this)">Go</button>
                    </div>
                </center>
              </div>
                </div>
              </div>
              <script>

                    var list = 'Listing 1-10 of'+{{$numLocationsPages}};
                        $('#locationPagesList').text(list);

                function showSelectedLocationsPage(element)
                {
                    var selectedPageElement = element.previousElementSibling;
                    var selectedPage = parseInt(selectedPageElement.value, 10);
                    if (selectedPage <= {{$numLocationsPages}}) {
                        var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
                        var endPage = Math.min(startPage + 9, {{$numLocationsPages}});
                        var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numLocationsPages}};
                        $('#locationPagesList').text(list);
                        $('.location_pagination a.pages').hide();
                        $('.location').hide();
                        prevLocationsPageHover(selectedPage);
                        nextLocationsPageHover(selectedPage);
                        $('.location').slice((selectedPage - 1) * 10, selectedPage * 10).show();
                        var pages = $(".location_pagination").find('a');
                        pages.each(function(){
                            var page = parseInt($(this).text(), 10);
                            if(page == selectedPage)
                                {
                                   $(this).addClass('active');
                                   $("#selectLocationsPage").val(selectedPage);
                                       // console.log( $("#selectLocationsPage").val());
                                }
                               else
                                {
                                   $(this).removeClass('active')
                                }
                            if (page >= startPage && page <= endPage) {
                                $(this).show();
                            }
                            
                        });
                    }
                }
                function prevLocationsPageHover(currentPage)
                    {
                        if(currentPage == 1)
                        {
                            $('#prevLocationsPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#prevLocationsPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }

                    function nextLocationsPageHover(currentPage)
                    {
                        if(currentPage < {{$numLocationsPages}})
                        {
                            $('#nextLocationsPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#nextLocationsPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }
               
                $(document).ready(function() {
                    var currentPage = 1;
                    var pages = $(".location_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == currentPage)
                        {
                            $(this).addClass('active');
                            $("#selectLocationsPage").val(currentPage);
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })

                    $('.location').slice(0, 10).show();

                    $('#prevLocationsPage').click(function() {
                        var currentPage = parseInt($('.location_pagination a.active').text()) || 1;
                        if (currentPage > 1) {
                           if(currentPage % 10 === 1)
                           {
                               prevLocationsPageGroup(currentPage);
                           }
                        currentPage--;
                        showLocationsPage(currentPage);   
                        }
                        
                    });

                    $('#nextLocationsPage').click(function() {
                        var currentPage = parseInt($('.location_pagination a.active').text()) || 1;
                        let maxButtons = 10;

                        if(currentPage % 10 === 0)
                        {
                            nextLocationsPageGroup(currentPage);
                        }
                        if (currentPage < {{$numLocationsPages}}) {
                        currentPage++;
                        showLocationsPage(currentPage);
                        }
                        
                    });
                });
                
                function showLocationsPage(pageNumber) {
                    // Hide all location
                    $('.location').hide();
                    prevLocationsPageHover(pageNumber);
                    nextLocationsPageHover(pageNumber);
                    // Show location for the selected page
                    $('.location').slice((pageNumber - 1) * 10, pageNumber * 10).show();
                    var pages = $(".location_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == pageNumber)
                        {
                            $(this).addClass('active');
                            $("#selectLocationsPage").val(pageNumber);
                            // console.log( $("#selectLocationsPage").val());
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })
                }

                function nextLocationsPageGroup(pageNumber)
                {
                    $('.location_pagination a.pages').hide();
                    let maxButtons = 10;
                    let startPage = Math.floor(pageNumber / maxButtons) * maxButtons + 1;
                    let endPage = Math.min(startPage + maxButtons - 1 , {{$numLocationsPages}});
                    var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numLocationsPages}};
                    $('#locationPagesList').text(list);        
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.location_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

                function prevLocationsPageGroup(pageNumber)
                {
                    let maxButtons = 10;
                    let endPage = Math.floor(pageNumber / maxButtons) * maxButtons;
                            let startPage = Math.min(endPage - maxButtons + 1 , {{$numLocationsPages}});
                            var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numLocationsPages}};
                            $('#locationPagesList').text(list);
                            $('.location_pagination a.pages').hide();
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.location_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

            </script>
              
              <div class="divider"></div>
              <div class="faq-item">
                <div id="foundSources" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Found sources</span>
                    <i class="fa-solid fa-chevron-down" id="rotateIcon"
                        style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
                </div>
            
                <div class="faq-answer" style="display: none;">
                    <div>
                        <section id="sourcePagesList" class="encapsulated-text mt-2 mb-3"></section>
                        @php
                            $sourceID = 0;
                            $countSource = 0;
                        @endphp
              @foreach ($projOrgs as $project )
              @if ($project->foundingsource->id == $sourceID)
                        
                    @else
                        <div class="source" style="margin-top: 15px;">
                        <section class="encapsulated-text ">
                            <a href="{{ route('foundSourcesClickingPage', ['id' => $project->foundingsource->id]) }}" style="color:black;font-weight:bold;"> {{$project->foundingsource->name}} </a>
                        </section>
                    </div>
                    <div class="divider-within-class"></div>
                    @php
                        $sourceID = $project->foundingsource->id;
                        $countSource++;
                    @endphp
                    @endif
                    @endforeach
                </div>
            
                    
                    <div style="margin-top: 15px;">
                        <center>
                            <div class="source_pagination pagination">
                                <a id="prevSourcePage" class="prevSourcePage">&laquo;</a>
                                @php $numSourcePages = ceil($countSource / 10); @endphp
                                @for ($i = 1; $i <= $numSourcePages; $i++)
                                    @if ($i>10)
                                        <a class="pages" style="display:none;" onclick="showSourcePage({{$i}})">{{$i}}</a>
                                    @else
                                        <a class="pages" onclick="showSourcePage({{$i}})">{{$i}}</a>
                                    @endif
                                @endfor
                                <a id="nextSourcePage" class="nextSourcePage">&raquo;</a>
                            </div>
    
                            <div class="row justify-content-center">
                                <label for="selectSourcePage" style="color: #065386;"><b>Select Specific Page:</b></label>
                                <input  id="selectSourcePage" name="selectSourcePage" type="text" style=" border-radius:5px; border:1px solid #E8E8E8; width:40px;height:30px;margin-left: 10px; margin-right: 10px;">
                                <button class=" btn btn-small " style=" background-color: #065386; color:#fff;height:30px;padding-top: 1px;" type="submit" onclick="showSelectedSourcePage(this)">Go</button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            
            <script>

                    var list = 'Listing 1-10 of '+{{$numSourcePages}};
                        $('#sourcePagesList').text(list);

                function showSelectedSourcePage(element)
                {
                    var selectedPageElement = element.previousElementSibling;
                    var selectedPage = parseInt(selectedPageElement.value, 10);
                    if (selectedPage <= {{$numSourcePages}}) {
                        var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
                        var endPage = Math.min(startPage + 9, {{$numSourcePages}});
                        var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numSourcePages}};
                        $('#sourcePagesList').text(list);
                        $('.source_pagination a.pages').hide();
                        $('.source').hide();
                        prevSourcePageHover(selectedPage);
                        nextSourcePageHover(selectedPage);
                        $('.source').slice((selectedPage - 1) * 10, selectedPage * 10).show();
                        var pages = $(".source_pagination").find('a');
                        pages.each(function(){
                            var page = parseInt($(this).text(), 10);
                            if(page == selectedPage)
                                {
                                   $(this).addClass('active');
                                   $("#selectSourcePage").val(selectedPage);
                                       // console.log( $("#selectSourcePage").val());
                                }
                               else
                                {
                                   $(this).removeClass('active')
                                }
                            if (page >= startPage && page <= endPage) {
                                $(this).show();
                            }
                            
                        });
                    }
                }
                function prevSourcePageHover(currentPage)
                    {
                        if(currentPage == 1)
                        {
                            $('#prevSourcePage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#prevSourcePage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }

                    function nextSourcePageHover(currentPage)
                    {
                        if(currentPage < {{$numSourcePages}})
                        {
                            $('#nextSourcePage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#nextSourcePage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }
               
                $(document).ready(function() {
                    var currentPage = 1;
                    var pages = $(".source_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == currentPage)
                        {
                            $(this).addClass('active');
                            $("#selectSourcePage").val(currentPage);
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })

                    $('.source').slice(0, 10).show();

                    $('#prevSourcePage').click(function() {
                        var currentPage = parseInt($('.source_pagination a.active').text()) || 1;
                        if (currentPage > 1) {
                           if(currentPage % 10 === 1)
                           {
                            prevSourcePageGroup(currentPage);
                           }
                        currentPage--;
                        showSourcePage(currentPage);   
                        }
                        
                    });

                    $('#nextSourcePage').click(function() {
                        var currentPage = parseInt($('.source_pagination a.active').text()) || 1;
                        let maxButtons = 10;

                        if(currentPage % 10 === 0)
                        {
                            nextSourcePageGroup(currentPage);
                        }
                        if (currentPage < {{$numSourcePages}}) {
                        currentPage++;
                        showSourcePage(currentPage);
                        }
                        
                    });
                });
                
                function showSourcePage(pageNumber) {
                    // Hide all source
                    $('.source').hide();
                    prevSourcePageHover(pageNumber);
                    nextSourcePageHover(pageNumber);
                    // Show source for the selected page
                    $('.source').slice((pageNumber - 1) * 10, pageNumber * 10).show();
                    var pages = $(".source_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == pageNumber)
                        {
                            $(this).addClass('active');
                            $("#selectSourcePage").val(pageNumber);
                            // console.log( $("#selectSourcePage").val());
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })
                }

                function nextSourcePageGroup(pageNumber)
                {
                    $('.source_pagination a.pages').hide();
                    let maxButtons = 10;
                    let startPage = Math.floor(pageNumber / maxButtons) * maxButtons + 1;
                    let endPage = Math.min(startPage + maxButtons - 1 , {{$numSourcePages}});
                    var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numSourcePages}};
                    $('#sourcePagesList').text(list);
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.source_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

                function prevSourcePageGroup(pageNumber)
                {
                    let maxButtons = 10;
                    let endPage = Math.floor(pageNumber / maxButtons) * maxButtons;
                    let startPage = Math.min(endPage - maxButtons + 1 , {{$numSourcePages}});
                    var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numSourcePages}};
                    $('#sourcePagesList').text(list);
                    $('.source_pagination a.pages').hide();
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.source_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

            </script>
            
            <div class="divider"></div>
            <div class="faq-item " >
                <div id="missionType" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Mission Type</span>
                    <i class="fa-solid fa-chevron-down" id="rotateIcon" style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
                </div>
                <div class="faq-answer" style="display: none;">
              <div>
              <section id="missionPagesList" class="encapsulated-text mt-2 mb-4"></section>
              @php
                $missionID = 0;
                $countMission = 0;
              @endphp
              @foreach ($projOrgs as $project )
              @if ($project->missiontype->id == $missionID)
                
              @else
              <div class="mission" style="margin-top: 15px;">
                <section class="encapsulated-text " >
                    <a href="{{route('missionTypeClickingPage' , ['id' => $project->missiontype->id])}}" style="color:black;font-weight:bold;">{{$project->missiontype->type}}</a>
                </section>
              </div>
              <div class="divider-within-class"></div> 
            @php
              $missionID = $project->missiontype->id;
              $countMission++;
            @endphp
              @endif
              @endforeach
            </div>
            <center>
                <div class="mission_pagination pagination">
                    <a id="prevMissionPage" class="prevMissionPage">&laquo;</a>
                    @php $numMissionPages = ceil($countMission / 10); @endphp
                    @for ($i = 1; $i <= $numMissionPages; $i++)
                        @if ($i>10)
                            <a class="pages" style="display:none;" onclick="showMissionPage({{$i}})">{{$i}}</a>
                        @else
                            <a class="pages" onclick="showMissionPage({{$i}})">{{$i}}</a>
                        @endif
                    @endfor
                    <a id="nextMissionPage" class="nextMissionPage">&raquo;</a>
                </div>

                <div class="row justify-content-center">
                    <label for="selectMissionPage" style="color: #065386;"><b>Select Specific Page:</b></label>
                    <input  id="selectMissionPage" name="selectMissionPage" type="text" style=" border-radius:5px; border:1px solid #E8E8E8; width:40px;height:30px;margin-left: 10px; margin-right: 10px;">
                    <button class=" btn btn-small " style=" background-color: #065386; color:#fff;height:30px;padding-top: 1px;" type="submit" onclick="showSelectedMissionPage(this)">Go</button>
                </div>
            </center>
              </div>
                </div> 
              </div>

              <script>

                 var list = 'Listing 1-10 of '+{{$numMissionPages}};
                    $('#missionPagesList').text(list);

                function showSelectedMissionPage(element)
                {
                    var selectedPageElement = element.previousElementSibling;
                    var selectedPage = parseInt(selectedPageElement.value, 10);
                    if (selectedPage <= {{$numMissionPages}}) {
                        var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
                        var endPage = Math.min(startPage + 9, {{$numMissionPages}});
                        var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numMissionPages}};
                        $('#missionPagesList').text(list);
                        $('.mission_pagination a.pages').hide();
                        $('.mission').hide();
                        prevMissionPageHover(selectedPage);
                        nextMissionPageHover(selectedPage);
                        $('.mission').slice((selectedPage - 1) * 10, selectedPage * 10).show();
                        var pages = $(".mission_pagination").find('a');
                        pages.each(function(){
                            var page = parseInt($(this).text(), 10);
                            if(page == selectedPage)
                                {
                                   $(this).addClass('active');
                                   $("#selectMissionPage").val(selectedPage);
                                       // console.log( $("#selectMissionPage").val());
                                }
                               else
                                {
                                   $(this).removeClass('active')
                                }
                            if (page >= startPage && page <= endPage) {
                                $(this).show();
                            }
                            
                        });
                    }
                }
                function prevMissionPageHover(currentPage)
                    {
                        if(currentPage == 1)
                        {
                            $('#prevMissionPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#prevMissionPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }

                    function nextMissionPageHover(currentPage)
                    {
                        if(currentPage < {{$numMissionPages}})
                        {
                            $('#nextMissionPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#nextMissionPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }
               
                $(document).ready(function() {
                    var currentPage = 1;
                    var pages = $(".mission_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == currentPage)
                        {
                            $(this).addClass('active');
                            $("#selectMissionPage").val(currentPage);
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })

                    $('.mission').slice(0, 10).show();

                    $('#prevMissionPage').click(function() {
                        var currentPage = parseInt($('.mission_pagination a.active').text()) || 1;
                        if (currentPage > 1) {
                           if(currentPage % 10 === 1)
                           {
                               prevMissionPageGroup(currentPage);
                           }
                        currentPage--;
                        showMissionPage(currentPage);   
                        }
                        
                    });

                    $('#nextMissionPage').click(function() {
                        var currentPage = parseInt($('.mission_pagination a.active').text()) || 1;
                        let maxButtons = 10;

                        if(currentPage % 10 === 0)
                        {
                            nextMissionPageGroup(currentPage);
                        }
                        if (currentPage < {{$numMissionPages}}) {
                        currentPage++;
                        showMissionPage(currentPage);
                        }
                        
                    });
                });
                
                function showMissionPage(pageNumber) {
                    // Hide all mission
                    $('.mission').hide();
                    prevMissionPageHover(pageNumber);
                    nextMissionPageHover(pageNumber);
                    // Show mission for the selected page
                    $('.mission').slice((pageNumber - 1) * 10, pageNumber * 10).show();
                    var pages = $(".mission_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == pageNumber)
                        {
                            $(this).addClass('active');
                            $("#selectMissionPage").val(pageNumber);
                            // console.log( $("#selectMissionPage").val());
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })
                }

                function nextMissionPageGroup(pageNumber)
                {
                    $('.mission_pagination a.pages').hide();
                    let maxButtons = 10;
                    let startPage = Math.floor(pageNumber / maxButtons) * maxButtons + 1;
                    let endPage = Math.min(startPage + maxButtons - 1 , {{$numMissionPages}});
                    var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numMissionPages}};
                    $('#missionPagesList').text(list);
                        for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.mission_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

                function prevMissionPageGroup(pageNumber)
                {
                    let maxButtons = 10;
                    let endPage = Math.floor(pageNumber / maxButtons) * maxButtons;
                    let startPage = Math.min(endPage - maxButtons + 1 , {{$numMissionPages}});
                    var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numMissionPages}};
                    $('#missionPagesList').text(list);
                    $('.mission_pagination a.pages').hide();
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.mission_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

            </script>
              
              <div class="divider"></div>
              <div class="faq-item">
                <div id="legalRoles" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Legal Entity Roles</span>
            
                    <i class="fa-solid fa-chevron-down" id="rotateIcon"
                        style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
            
            
            
                </div>
            
                <div class="faq-answer" style="display: none;">
                    <div>
                        <section id="entityPagesList" class="encapsulated-text mt-2 mb-4"></section>
                        @php
                            $legalID = 0;
                            $countEntity = 0;
                        @endphp
                   @foreach ($projOrgs as $project)
                   @foreach ($project->legalentityroles as $role)
                   @if ($role->id == $legalID)
                       
                   @else
                        <div class="entity" style="margin-top: 15px;">
                        <section class="encapsulated-text py-3">
                            <a href="{{ route('legalEntityClickingPage', ['id' => $role->id]) }}" style="color:black;font-weight:bold;">{{$role->name}}</a>
                        </section>
                    </div>
                    <div class="divider-within-class"></div>
                    @php
                        $legalID = $role->id;
                        $countEntity++;
                    @endphp
                    @endif
                    @endforeach
                    @endforeach
                </div>
             <center>
                        <div class="entity_pagination pagination">
                            <a id="prevEntityPage" class="prevEntityPage">&laquo;</a>
                            @php $numEntityPages = ceil($countEntity / 10); @endphp
                            @for ($i = 1; $i <= $numEntityPages; $i++)
                                @if ($i>10)
                                    <a class="pages" style="display:none;" onclick="showEntityPage({{$i}})">{{$i}}</a>
                                @else
                                    <a class="pages" onclick="showEntityPage({{$i}})">{{$i}}</a>
                                @endif
                            @endfor
                            <a id="nextEntityPage" class="nextEntityPage">&raquo;</a>
                        </div>

                        <div class="row justify-content-center">
                            <label for="selectEntityPage" style="color: #065386;"><b>Select Specific Page:</b></label>
                            <input  id="selectEntityPage" name="selectEntityPage" type="text" style=" border-radius:5px; border:1px solid #E8E8E8; width:40px;height:30px;margin-left: 10px; margin-right: 10px;">
                            <button class=" btn btn-small " style=" background-color: #065386; color:#fff;height:30px;padding-top: 1px;" type="submit" onclick="showSelectedEntityPage(this)">Go</button>
                        </div>
                    </center>
                    </div>
                </div>

                <script>

                    var list = 'Listing 1-10 of '+{{$numEntityPages}};
                    $('#entityPagesList').text(list);

                    function showSelectedEntityPage(element)
                    {
                        var selectedPageElement = element.previousElementSibling;
                        var selectedPage = parseInt(selectedPageElement.value, 10);
                        if (selectedPage <= {{$numEntityPages}}) {
                            var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
                            var endPage = Math.min(startPage + 9, {{$numEntityPages}});
                            var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numEntityPages}};
                            $('#entityPagesList').text(list);
                            $('.entity_pagination a.pages').hide();
                            $('.entity').hide();
                            prevEntityPageHover(selectedPage);
                            nextEntityPageHover(selectedPage);
                            $('.entity').slice((selectedPage - 1) * 10, selectedPage * 10).show();
                            var pages = $(".entity_pagination").find('a');
                            pages.each(function(){
                                var page = parseInt($(this).text(), 10);
                                if(page == selectedPage)
                                    {
                                       $(this).addClass('active');
                                       $("#selectEntityPage").val(selectedPage);
                                           // console.log( $("#selectEntityPage").val());
                                    }
                                   else
                                    {
                                       $(this).removeClass('active')
                                    }
                                if (page >= startPage && page <= endPage) {
                                    $(this).show();
                                }
                                
                            });
                        }
                    }
                    function prevEntityPageHover(currentPage)
                        {
                            if(currentPage == 1)
                            {
                                $('#prevEntityPage').hover(function(){
                                $(this).css('background-color' , '#fff');
                            } ,
                            function(){
                                $(this).css('background-color' , '#fff');
                            });
                            }
                            else
                            {
                                $('#prevEntityPage').hover(function(){
                                $(this).css('background-color' , '#ddd');
                            } ,
                            function(){
                                $(this).css('background-color' , '#fff');
                            });
                            }
                        }
    
                        function nextEntityPageHover(currentPage)
                        {
                            if(currentPage < {{$numEntityPages}})
                            {
                                $('#nextEntityPage').hover(function(){
                                $(this).css('background-color' , '#ddd');
                            } ,
                            function(){
                                $(this).css('background-color' , '#fff');
                            });
                            }
                            else
                            {
                                $('#nextEntityPage').hover(function(){
                                $(this).css('background-color' , '#fff');
                            } ,
                            function(){
                                $(this).css('background-color' , '#fff');
                            });
                            }
                        }
                   
                    $(document).ready(function() {
                        var currentPage = 1;
                        var pages = $(".entity_pagination").find('a');
                        pages.each(function(){
                            if($(this).text() == currentPage)
                            {
                                $(this).addClass('active');
                                $("#selectEntityPage").val(currentPage);
                            }
                            else
                            {
                                $(this).removeClass('active')
    
                            }
                        })
    
                        $('.entity').slice(0, 10).show();
    
                        $('#prevEntityPage').click(function() {
                            var currentPage = parseInt($('.entity_pagination a.active').text()) || 1;
                            if (currentPage > 1) {
                               if(currentPage % 10 === 1)
                               {
                                prevEntityPageGroup(currentPage);
                               }
                            currentPage--;
                            showEntityPage(currentPage);   
                            }
                            
                        });
    
                        $('#nextEntityPage').click(function() {
                            var currentPage = parseInt($('.entity_pagination a.active').text()) || 1;
                            let maxButtons = 10;
    
                            if(currentPage % 10 === 0)
                            {
                                nextEntityPageGroup(currentPage);
                            }
                            if (currentPage < {{$numEntityPages}}) {
                            currentPage++;
                            showEntityPage(currentPage);
                            }
                            
                        });
                    });
                    
                    function showEntityPage(pageNumber) {
                        // Hide all entity
                        $('.entity').hide();
                        prevEntityPageHover(pageNumber);
                        nextEntityPageHover(pageNumber);
                        // Show entity for the selected page
                        $('.entity').slice((pageNumber - 1) * 10, pageNumber * 10).show();
                        var pages = $(".entity_pagination").find('a');
                        pages.each(function(){
                            if($(this).text() == pageNumber)
                            {
                                $(this).addClass('active');
                                $("#selectEntityPage").val(pageNumber);
                                // console.log( $("#selectEntityPage").val());
                            }
                            else
                            {
                                $(this).removeClass('active')
    
                            }
                        })
                    }
    
                    function nextEntityPageGroup(pageNumber)
                    {
                        $('.entity_pagination a.pages').hide();
                        let maxButtons = 10;
                        let startPage = Math.floor(pageNumber / maxButtons) * maxButtons + 1;
                        let endPage = Math.min(startPage + maxButtons - 1 , {{$numEntityPages}});
                        var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numEntityPages}};
                        $('#entityPagesList').text(list);   
                            for (let i = startPage; i <= endPage; i++)
                                {
                                    var selected =  $('.entity_pagination a').filter(function () {
                                        return parseInt($(this).text(), 10) === i;
                                    });
                                    selected.show();
                                }
                    }
    
                    function prevEntityPageGroup(pageNumber)
                    {
                        let maxButtons = 10;
                        let endPage = Math.floor(pageNumber / maxButtons) * maxButtons;
                        let startPage = Math.min(endPage - maxButtons + 1 , {{$numEntityPages}});
                        var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numEntityPages}};
                        $('#entityPagesList').text(list);
                        $('.entity_pagination a.pages').hide();
                                for (let i = startPage; i <= endPage; i++)
                                {
                                    var selected =  $('.entity_pagination a').filter(function () {
                                        return parseInt($(this).text(), 10) === i;
                                    });
                                    selected.show();
                                }
                    }
    
                </script>
            
            <div class="divider"></div>

            <div class="faq-item">
                <div id="projectTargets" class="faq-question" onclick="toggleAnswer(this)">
                    <span class="faq-question">Project Targets</span>
            
                    <i class="fa-solid fa-chevron-down" id="rotateIcon"
                        style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
            
            
            
                </div>
            
                <div class="faq-answer" style="display: none;">
                    <div>
                        <section id="targetPagesList" class="encapsulated-text mt-2 mb-4"></section>
                        @php
                            $targetID = 0;
                            $countTarget = 0;
                        @endphp
                      @foreach ($projOrgs as $project )
                      @if ($project->project_target->id == $targetID)
                          
                      @else
                    <div class="target" style="margin-top: 15px;">
                        <section class="encapsulated-text  ">
                            <a href="{{ route('projectTargetClickingPage', ['id' => $project->project_target->id]) }}" style="color:black;font-weight:bold;">{{$project->project_target->name}}</a>
                        </section>
                    </div>
                        <div class="divider-within-class"></div>
                        @php
                            $targetID = $project->project_target->id;
                            $countTarget++;
                        @endphp
                      @endif
                      @endforeach
                    </div>
                    <center>
                        <div class="target_pagination pagination">
                            <a id="prevTargetPage" class="prevTargetPage">&laquo;</a>
                            @php $numTargetPages = ceil($countTarget / 10); @endphp
                            @for ($i = 1; $i <= $numTargetPages; $i++)
                                @if ($i>10)
                                    <a class="pages" style="display:none;" onclick="showTargetPage({{$i}})">{{$i}}</a>
                                @else
                                    <a class="pages" onclick="showTargetPage({{$i}})">{{$i}}</a>
                                @endif
                            @endfor
                            <a id="nextTargetPage" class="nextTargetPage">&raquo;</a>
                        </div>

                        <div class="row justify-content-center">
                            <label for="selectTargetPage" style="color: #065386;"><b>Select Specific Page:</b></label>
                            <input  id="selectTargetPage" name="selectTargetPage" type="text" style=" border-radius:5px; border:1px solid #E8E8E8; width:40px;height:30px;margin-left: 10px; margin-right: 10px;">
                            <button class=" btn btn-small " style=" background-color: #065386; color:#fff;height:30px;padding-top: 1px;" type="submit" onclick="showSelectedTargetPage(this)">Go</button>
                        </div>
                    </center>
                    </div>
                </div>
            </div>

            <script>

                 var list = 'Listing 1-10 of '+{{$numTargetPages}};
                    $('#targetPagesList').text(list);

                function showSelectedTargetPage(element)
                {
                    var selectedPageElement = element.previousElementSibling;
                    var selectedPage = parseInt(selectedPageElement.value, 10);
                    if (selectedPage <= {{$numTargetPages}}) {
                        var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
                        var endPage = Math.min(startPage + 9, {{$numTargetPages}});
                        var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numTargetPages}};
                        $('#targetPagesList').text(list);
                        $('.target_pagination a.pages').hide();
                        $('.target').hide();
                        prevTargetPageHover(selectedPage);
                        nextTargetPageHover(selectedPage);
                        $('.target').slice((selectedPage - 1) * 10, selectedPage * 10).show();
                        var pages = $(".target_pagination").find('a');
                        pages.each(function(){
                            var page = parseInt($(this).text(), 10);
                            if(page == selectedPage)
                                {
                                   $(this).addClass('active');
                                   $("#selectTargetPage").val(selectedPage);
                                       // console.log( $("#selectTargetPage").val());
                                }
                               else
                                {
                                   $(this).removeClass('active')
                                }
                            if (page >= startPage && page <= endPage) {
                                $(this).show();
                            }
                            
                        });
                    }
                }
                function prevTargetPageHover(currentPage)
                    {
                        if(currentPage == 1)
                        {
                            $('#prevTargetPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#prevTargetPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }

                    function nextTargetPageHover(currentPage)
                    {
                        if(currentPage < {{$numTargetPages}})
                        {
                            $('#nextTargetPage').hover(function(){
                            $(this).css('background-color' , '#ddd');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                        else
                        {
                            $('#nextTargetPage').hover(function(){
                            $(this).css('background-color' , '#fff');
                        } ,
                        function(){
                            $(this).css('background-color' , '#fff');
                        });
                        }
                    }
               
                $(document).ready(function() {
                    var currentPage = 1;
                    var pages = $(".target_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == currentPage)
                        {
                            $(this).addClass('active');
                            $("#selectTargetPage").val(currentPage);
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })

                    $('.target').slice(0, 10).show();

                    $('#prevTargetPage').click(function() {
                        var currentPage = parseInt($('.target_pagination a.active').text()) || 1;
                        if (currentPage > 1) {
                           if(currentPage % 10 === 1)
                           {
                            prevTargetPageGroup(currentPage);
                           }
                        currentPage--;
                        showTargetPage(currentPage);   
                        }
                        
                    });

                    $('#nextTargetPage').click(function() {
                        var currentPage = parseInt($('.target_pagination a.active').text()) || 1;
                        let maxButtons = 10;

                        if(currentPage % 10 === 0)
                        {
                            nextTargetPageGroup(currentPage);
                        }
                        if (currentPage < {{$numTargetPages}}) {
                        currentPage++;
                        showTargetPage(currentPage);
                        }
                        
                    });
                });
                
                function showTargetPage(pageNumber) {
                    // Hide all target
                    $('.target').hide();
                    prevTargetPageHover(pageNumber);
                    nextTargetPageHover(pageNumber);
                    // Show target for the selected page
                    $('.target').slice((pageNumber - 1) * 10, pageNumber * 10).show();
                    var pages = $(".target_pagination").find('a');
                    pages.each(function(){
                        if($(this).text() == pageNumber)
                        {
                            $(this).addClass('active');
                            $("#selectTargetPage").val(pageNumber);
                            // console.log( $("#selectTargetPage").val());
                        }
                        else
                        {
                            $(this).removeClass('active')

                        }
                    })
                }

                function nextTargetPageGroup(pageNumber)
                {
                    $('.target_pagination a.pages').hide();
                    let maxButtons = 10;
                    let startPage = Math.floor(pageNumber / maxButtons) * maxButtons + 1;
                    let endPage = Math.min(startPage + maxButtons - 1 , {{$numTargetPages}});
                    var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numTargetPages}};
                    $('#targetPagesList').text(list);  
                        for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.target_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

                function prevTargetPageGroup(pageNumber)
                {
                    let maxButtons = 10;
                    let endPage = Math.floor(pageNumber / maxButtons) * maxButtons;
                    let startPage = Math.min(endPage - maxButtons + 1 , {{$numTargetPages}});
                    var list = 'Listing '+startPage+'-'+endPage+' of '+{{$numTargetPages}};
                    $('#targetPagesList').text(list);
                    $('.target_pagination a.pages').hide();
                            for (let i = startPage; i <= endPage; i++)
                            {
                                var selected =  $('.target_pagination a').filter(function () {
                                    return parseInt($(this).text(), 10) === i;
                                });
                                selected.show();
                            }
                }

            </script>

            <div class="divider"></div>
        </div>
    </div>
</div>
    <div style="margin-top:200px"></div>
   
    <footer>
        @include('footer')
    </footer>

    <script>



$('#page_title').html('Search Results:');

var title = @json($title);
$('#dynamic_title').html(title);




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

    
       
    </script>



</body>
<script type="text/javascript">
     google.charts.load("45", {packages:['corechart']});
google.charts.setOnLoadCallback(function () {
    var allTrls = @json($allTrls); 
    var projOrgs = @json($projOrgs); 

    var chartData = [['TRL Level', 'Number of Projects' , { role: "style" }]];

    function fetchDataForTrl(trl) {
    var url = '/getProjectsLengthBySearchID';
    var trlID = trl.id;
    var jsonData = {
            'trlID' : trlID,
            'projOrgs' : projOrgs
        }
        var data = JSON.stringify(jsonData);

    return fetch(url,{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            // Add any other headers if needed
            'x-csrf-token' : $('meta[name="csrf-token"]').attr('content')
        },
        body: data,
    })
        .then(response => response.json())
        .then(data => {
            var numberOfProjects = data.projects;
            return numberOfProjects;
        })
        .catch(error => {
            console.error('Error:', error);
            return 0; // Handle the error case by returning a default value
        });
}

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
        minValue: 4,                    
            viewWindow:{min:0}, /*this also makes 0 = min value*/         
            format: '0',  
        textStyle: {
      color: 'white'  // Change the color of x-axis labels
    }
               },
      };
    //   var projOrgs = @json($projOrgs);
        var container = document.getElementById("columnchart_values");
          var chart = new google.visualization.ColumnChart(container);
          chart.draw(data, options);
  }

  </script>
</html>
