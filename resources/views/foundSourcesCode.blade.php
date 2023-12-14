<div class="faq-item">
    <div id="foundSources" class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Found sources</span>
        <i class="fa-solid fa-chevron-down" id="rotateIcon"
            style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
    </div>

    <div class="faq-answer" style="display: none;">
        <div>
            <section id="sourePagesList" class="encapsulated-text mt-2 mb-3"></section>
            @php
                $sourceID = 0;
                $countSource = 0;
            @endphp
        @foreach ($projOrg->projects as $project )
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


<div class="divider"></div>

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