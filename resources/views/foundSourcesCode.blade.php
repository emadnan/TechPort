<div class="faq-item">
    <div id="foundSources" class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Found sources</span>
        <i class="fa-solid fa-chevron-down" id="rotateIcon"
            style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
    </div>

    <div class="faq-answer" style="display: none;">
        <div>
            <section class="encapsulated-text mt-2 mb-3">Listing 1 - 20 of 61 </section>
        @foreach ($projOrgs as $projOrg )
            <div style="margin-top: 15px;">
            <section class="encapsulated-text ">
                <a href="{{ route('foundSourcesClickingPage', ['id' => $projOrg->sourceID]) }}" style="color:black;font-weight:bold;"> {{$projOrg-> sourceName}} </a>
            </section>
        </div>
        <div class="divider-within-class"></div>
        @endforeach
    </div>

        <div style="margin-top: 15px;">
            <section class="encapsulated-text ">
                <a href="{{ url('/found-sources-clicking') }}" style="color:black;font-weight:bold;">Source 1
                    mention</a>
            </section>
        </div>
        <div class="divider-within-class"></div>


        <div style="margin-top: 15px;">
            <section class="encapsulated-text ">
                <a href="{{ url('/found-sources-clicking') }}" style="color:black;font-weight:bold;">Source 1
                    mention</a>
            </section>
        </div>
        <div class="divider-within-class"></div>

        <div style="margin-top: 15px;">

            <section class="encapsulated-text  ">
                <a href="{{ url('/found-sources-clicking') }}" style="color:black;font-weight:bold;">Source 1
                    mention</a>
            </section>
        </div>
        <div class="divider-within-class"></div>

        <div style="margin-top: 15px;">
            <center>
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>

            </center>
        </div>
    </div>
</div>


<div class="divider"></div>
