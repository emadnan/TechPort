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
            $countProjects = 0;
        @endphp
@foreach ($projOrg->projects as $project )
@if ($projectID == $project->id)
    
@else
        <div class="project" id="project_div_{{$project->id}}"  style="margin-top: 15px;">
            <section class="encapsulated-text ">
                <a href="{{ route('projectPage', ['id'=> $project->id]) }}" style="color:#065386;font-weight:bold;">{{$project->name}}</a>
                <i class="fa-solid fa-chevron-down" style="float: right;margin-right:10px; color:grey;"
                    onclick="toggleSubAnswer(this)"></i>
                <button
                class="px-2" style="float: right; margin-right: 20px; background-color: white; border: 1px solid grey; color: grey; height: 30px; min-width: 80px; border-radius: 5px;">{{$project->status->status}}</button>
                    <section><br></section>
            </section>
            <section class="sub-answer mt-2 mb-4" style="margin-left:10px;font-size:15px; padding-right:4rem;  max-height:70px; overflow:auto;">{{$project->description}}</section>

            <div class="sub-answer mt-2 mb-4"
                style=" display:none; margin-left:10px;font-size:15px; padding-right:4rem">
                <div class="row my-4">
                    <div class="col">
                        <img src="{{ asset('images/' . $project->image) }}" width="350px">
                    </div>
                    <div class="col">
                        <section class="mb-2" style="font-size:13px;"><b><a style="color:black;" href="{{url('/legal-entity-roles')}}">Type of Company</a></b></section>
                        <section class="mb-2" style="font-size:13px;"><a style="color:black;" href="{{route('legalEntityClickingPage' , ['id'=>$projOrg->id])}}">{{$projOrg->name}}</a>
                        </section>
                        <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/organizations')}}">Lead Company</a></b></section>
                        @foreach ($project->orgperformingworks as $org )
                        <section class="mb-2" style="font-size:13px"> <a style="color:black;" href="{{route('organizationClickingPage' , ['id' => $org->id])}}">{{$org->name}}</a></section>
                        @endforeach
                        <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/')}}"> Primary Technology Area:</a></b></section>
                        <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/search-results')}}">{{$project->techreferred->techarea->techarea}}</a></section>
                        <section class="mb-2" style="font-size:13px"><b> Start: </b></section>
                        <section style="font-size:13px">{{$project->startdate}}</section>
                    </div>
                    <div class="col">
                        <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/mission-type')}}"> Responsible Mission Directorate: </a></b></section>
                        <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{route('missionTypeClickingPage' , ['id'=>$project->missiontype->id])}}"> {{$project->missiontype->type}}</a></section>
                        <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/found-sources')}}"> Found Source</a> </b></section>
                        <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{route('foundSourcesClickingPage' , ['id'=>$project->foundingsource->id])}}">{{$project->foundingsource->name}}</a></section>
                        <br><br>
                        <section class="my-2" style="font-size:13px"><b> End: </b></section>
                        <section style="font-size:13px">{{$project->enddate}}</section>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-within-class"></div>
@php
    $projectID = $project->id;
    $countProjects++;
@endphp

@endif    
@endforeach
<center>
    <div class="project_pagination pagination">
        <a id="prevPage" class="prevPage">&laquo;</a>
        @php $numPages = ceil($countProjects / 10); @endphp
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
<div class="divider"></div>

<script>
    
    var list = 'Listing 1-10 of '+{{$numPages}};
        $('#projectPagesList').text(list);

    function showSelectedPage(element)
    {
        var selectedPageElement = element.previousElementSibling;
        var selectedPage = parseInt(selectedPageElement.value, 10);
        if (selectedPage <= {{$numPages}}) {
            var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
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
