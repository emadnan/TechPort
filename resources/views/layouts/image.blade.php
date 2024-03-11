 <!-- Add a new row for the image container -->
 <div class="row mt-1">
    <div class="col-md-12">
        <div class="custom-image-container">
            <img src="{{ asset('images/rectangle.jpg') }}" alt="Rectangular Image" class="custom-image">

            <div class="text-in-image">
                <section id="page_title" style=" font-weight: 700; margin-bottom:0px;"></section>
                {{-- @foreach ($projOrgs as $projOrg ) --}}
                <section id="dynamic_title" style="font-size:17px; font-weight: 700; margin-bottom:10px;"></section>
                {{-- @break --}}
                {{-- @endforeach --}}

                <div class="solid-rectangle">

                    <div class="row" style="margin-left:5px;padding:10px;">
                        <div class="col-md-2.9">
                            <div class="yellow-square ">
                                <section style="font-size:40px; padding-top:0px;">{{$count}}</section>
                                <section style="padding-bottom:2px; margin-bottom:3px; ">Projects found
                                </section>
                                <button class="btn btn-custom"><a style="text-decoration: none; color:black;"
                                        href="{{ url('/advanceSearch') }}"> Modify Search</a></button>
                            </div>
                        </div>


                        <div class="key-stats col-md-2" style="margin-left:20px;line-height:20px;">
                            <section style="margin-bottom:10px;">Key Stats</section>
                            <div class="divider" style="width:140px"></div>
                            <div class="row" style="margin-left:2px;">
                                <p style="float:left;  color:#FFA800; margin-top:6px; margin-bottom:6px; font-size:14px;">{{$active}}
                                </p>
                                <p style="float:right; margin-left: 25px; margin-top:6px; margin-bottom:6px; font-size:14px;">
                                    Active</p>
                            </div>
                            <div class="divider" style="width:140px"></div>
                            <div class="row" style="margin-left:2px;">
                                <p style="float:left;  color:#FFA800; margin-top:6px; margin-bottom:6px; font-size:14px;">{{$complete}}
                                </p>
                                <p style="float:right; margin-left: 25px; margin-bottom:6px; margin-top:6px; font-size:14px;">
                                    Completed</p>
                            </div>
                            <div class="divider" style="width:140px"></div>
                            <div class="row" style="margin-left:2px;">
                                <p style="float:left;  color:#FFA800; margin-top:6px; margin-bottom:6px; font-size:14px;">{{$partnership}}
                                </p>
                                <p style="float:right; margin-left: 25px; margin-bottom:6px; margin-top:6px; font-size:14px; ">
                                    Partnerhips</p>
                            </div>
                        </div>


                        <div class="col-md-3">
                    <div id="columnchart_values" ></div>

                            {{-- <h5 style="font-size: 18px; ">Technology Maturity</h5>
                            <img src="{{ asset('images/Group 154.svg') }}" style="height:140px;width:180px;"> --}}
                        </div>

                        <div style="margin-left: 30px">
                            <section style="font-size: 16px; margin-bottom:5px;">Technology Areas Represented</section>
                            @for($i = 1; $i <= $totalTechareas; $i++)
                                @if(($i - 1) % 6 === 0)
                                    <div class="row" style="gap: 5px;">
                                @endif
                                <button id="btn_tx0{{$i}}" style="width: 50px; height: 30px; font-size: 12px;" class="btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                    <a class="btn-hover" style="color: white;">TX0{{$i}}</a>
                                </button>
                                @if($i % 6 === 0 || $i === $totalTechareas)
                                    </div>
                                @endif
                            @endfor
                                <!-- <button id="btn_tx01" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn"><a class="btn-hover" style="color:white;" 
                                        href="{{ url('/') }}">TX01</a></button>
                                <button id="btn_tx02" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn"><a class="btn-hover" style="color:white;"
                                        href="{{ url('/') }}">TX02</a></button>
                                <button id="btn_tx03" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn"><a class="btn-hover" style="color:white;"
                                        href="{{ url('/') }}">TX03</a></button>
                                <button id="btn_tx04" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn"><a class="btn-hover" style="color:white;"
                                        href="{{ url('/') }}">TX04</a></button>
                                <button id="btn_tx05" style="width: 50px; height: 30px; font-size: 12px;"
                                        class="btn"><a class="btn-hover" style="color:white;"
                                            href="{{ url('/') }}">TX05</a></button>
                                <button id="btn_tx06" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn"><a class="btn-hover" style="color:white;"
                                        href="{{ url('/') }}">TX06</a></button> -->
                            <!-- </div> -->
                            <!-- <div style="display: flex; gap: 5px;margin-top:5px;">
                                <button id="btn_tx07" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn"><a class="btn-hover" style="color:white;"
                                        href="{{ url('/') }}">TX07</a></button>
                                <button id="btn_tx08" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn"><a class="btn-hover" style="color:white;"
                                        href="{{ url('/') }}">TX08</a></button>
                                <button id="btn_tx09" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn"><a class="btn-hover" style="color:white;"
                                        href="{{ url('/') }}">TX09</a></button>
                                <button id="btn_tx010" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn p-0"><a class="btn-hover" style="color:white;"
                                        href="{{ url('/') }}">TX010</a></button>
                                <button id="btn_tx011" style="width: 50px; height: 30px; font-size: 12px;"
                                    class="btn p-0"><a class="btn-hover" style="color:white;"
                                        href="{{ url('/') }}">TX011</a></button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function showProjectsCount(index) {

    }
</script>