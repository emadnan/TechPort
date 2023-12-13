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
                $countEntity = 0;
            @endphp
       @foreach ($projOrg->projects as $project)
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
<div class="divider"></div>

<script>

    function showSelectedEntityPage(element)
    {
        var selectedPageElement = element.previousElementSibling;
        var selectedPage = parseInt(selectedPageElement.value, 10);
        if (selectedPage <= {{$numEntityPages}}) {
            var startPage = Math.floor((selectedPage - 1) / 10) * 10 + 1;
            var endPage = Math.min(startPage + 9, {{$numEntityPages}});

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
