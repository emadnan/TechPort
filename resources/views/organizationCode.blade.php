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
            @foreach ($projOrg->projects as $project )
@if ($projectID == $project->id)
@else
            @foreach ($project->orgperformingworks as $org )
@if ($orgID == $org->id)
@else
            <div class="organization" style="margin-top: 15px;">
            <section class="encapsulated-text ">
                <a href="{{ route('organizationClickingPage', ['id' => $org->id]) }}" style="color:black;font-weight:bold;">{{$org->name}}</a>
            </section>
        </div>
        <div class="divider-within-class"></div>
        @php
              $orgID = $org->id;
              $projectID = $project->id;
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
<div class="divider"></div>
<script>
    var list = 'Listing 1-10 of '+{{$numOrgPages}};
    $('#organizationPagesList').text(list);
    function showSelectedOrgPage(element)
    {
        var selectedOrgPageElement = element.previousElementSibling;
        var selectedOrgPage = parseInt(selectedOrgPageElement.value, 10);
        console.log(selectedOrgPageElement);
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