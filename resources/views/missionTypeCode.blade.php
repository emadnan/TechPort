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
    $countMission = 0;
  @endphp
  @foreach ($projOrg->projects as $project )
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
  
  <div class="divider"></div>

  <script>

    function showSelectedMissionPage(element)
    {
        var selectedPageElement = element.previousElementSibling;
        var selectedPage = parseInt(selectedPageElement.value, 10);
        if (selectedPage <= {{$numMissionPages}}) {
            var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
            var endPage = Math.min(startPage + 9, {{$numMissionPages}});

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
  
  