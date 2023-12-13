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
    $countLocations = 0;
  @endphp

  @foreach ($projOrg->projects as $project )
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
  <div class="divider"></div>

  <script>

    function showSelectedLocationsPage(element)
    {
        var selectedPageElement = element.previousElementSibling;
        var selectedPage = parseInt(selectedPageElement.value, 10);
        if (selectedPage <= {{$numLocationsPages}}) {
            var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
            var endPage = Math.min(startPage + 9, {{$numLocationsPages}});

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