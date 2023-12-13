<div class="faq-item">
    <div id="projectTargets" class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Project Targets</span>

        <i class="fa-solid fa-chevron-down" id="rotateIcon"
            style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>



    </div>

    <div class="faq-answer" style="display: none;">
        <div>
            <section class="encapsulated-text mt-2 mb-4">Listing 1 - 20 of 61 </section>
            @php
                $targetID = 0;
                $countTarget = 0;
            @endphp
          @foreach ($projOrg->projects as $project )
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
<div class="divider"></div>

<script>

    function showSelectedTargetPage(element)
    {
        var selectedPageElement = element.previousElementSibling;
        var selectedPage = parseInt(selectedPageElement.value, 10);
        if (selectedPage <= {{$numTargetPages}}) {
            var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
            var endPage = Math.min(startPage + 9, {{$numTargetPages}});

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
