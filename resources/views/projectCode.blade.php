<div class="faq-item">
    <div id="project" class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Projects</span>
        <i class="fa-solid fa-chevron-down" id="rotateIcon"
            style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>



    </div>

    <div class="faq-answer" style="display: none;">
        <section class="encapsulated-text mt-2 mb-4">Listing 1 - 20 of 61 </section>
@foreach ($projOrgs as $projOrg )
        <div style="margin-top: 15px;">
            <section class="encapsulated-text ">
                <a href="{{ route('projectPage', ['id' => $projOrg->projectID]) }}" style="color:#065386;font-weight:bold;">{{$projOrg->projectName}}</a>
                <i class="fa-solid fa-chevron-down" style="float: right;margin-right:10px; color:grey;"
                    onclick="toggleSubAnswer(this)"></i>
                <button
                    style="float: right; margin-right: 20px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">{{$projOrg->status}}</button>
                <section>This is a project within the Space Technology Research Grants Program </section>
            </section>
            <section class="sub-answer mt-2 mb-4" style="margin-left:10px;font-size:15px; padding-right:4rem">{{$projOrg->projectDescription}}</section>

            <div class="sub-answer mt-2 mb-4"
                style=" display:none; margin-left:10px;font-size:15px; padding-right:4rem">
                <div class="row my-4">
                    <div class="col">
                        <img src="images/{{$projOrg->image}}" width="350px">
                    </div>
                    <div class="col">
                        <section class="mb-2" style="font-size:13px;"><b><a style="color:black;" href="{{url('/legal-entity-roles')}}">Legal Entity Role</a></b></section>
                        <section class="mb-2" style="font-size:13px;"><a style="color:black;" href="{{route('legalEntityClickingPage' , ['id'=>$projOrg->legalID])}}">{{$projOrg->legalName}}</a>
                        </section>
                        <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/organizations')}}"> Organisation Performing Work</a></b></section>
                        <section class="mb-2" style="font-size:13px"> <a style="color:black;" href="{{route('organizationClickingPage' , ['id' => $projOrg->orgID])}}">{{$projOrg->orgName}}</a></section>
                        <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/')}}"> Primary Technology Area:</a></b></section>
                        <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/search-results')}}">TX01 {{$projOrg->techarea}}</a></section>
                        <section class="mb-2" style="font-size:13px"><b> Start: </b></section>
                        <section style="font-size:13px">{{$projOrg->startdate}}</section>
                    </div>
                    <div class="col">
                        <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/mission-type')}}"> Mission Type </a></b></section>
                        <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{route('missionTypeClickingPage' , ['id'=>$projOrg->missionID])}}"> {{$projOrg->missionType}}</a></section>
                        <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/found-sources')}}"> Found Source</a> </b></section>
                        <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{route('foundSourcesClickingPage' , ['id'=>$projOrg->sourceID])}}">{{$projOrg->sourceName}}</a></section>
                        <br><br>
                        <section class="my-2" style="font-size:13px"><b> End: </b></section>
                        <section style="font-size:13px">{{$projOrg->enddate}}</section>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-within-class"></div>

@endforeach
        <div style="margin-top: 15px;">

            <section class="encapsulated-text ">
                <a href="{{ url('/low-evolution') }}" style="color:#065386;font-weight:bold;">Development and
                    Optimization of a Bimodal Ion-Chemical Thruster System Using Novel Ionic Liquid Monopropellants</a>
                <i class="fa-solid fa-chevron-down" style="float: right;margin-right:10px; color:grey;"
                    onclick="toggleSubAnswer(this)"></i>
                <button
                    style="float: right; margin-right: 20px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">Active</button>
                <section>This is a project within the Space Technology Research Grants Program </section>
            </section>
            <section class="sub-answer mt-2 mb-4" style="margin-left:10px;font-size:15px; padding-right:4rem"> For
                launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS),
                roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems,
                propellant storage and transfer, nanocomposites, green propellants. For in-space........ </section>
            <div class="sub-answer mt-2 mb-4" style="display:none; margin-left:10px;font-size:15px; padding-right:4rem">
                <div class="row my-4">
                    <div class="col">
                        <img src="{{ asset('images\STMD-Programs-SBIR 1.png') }}" width="350px">
                    </div>
                    <div class="col">
                      <section class="mb-2" style="font-size:13px;"><b><a style="color:black;" href="{{url('/legal-entity-roles')}}">Legal Entity Role</a></b></section>
                      <section class="mb-2" style="font-size:13px;"><a style="color:black;" href="{{url('/legal-entity-roles-clicking')}}">Space Technology Mission Directorate (STMD) </a>
                      </section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/organizations')}}"> Organisation Performing Work</a></b></section>
                      <section class="mb-2" style="font-size:13px"> <a style="color:black;" href="{{url('/organization-clicking')}}">Johnson Space Center</a></section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/')}}"> Primary Technology Area:</a></b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/search-results')}}">TX01.1.3 Cryogenic</a></section>
                      <section class="mb-2" style="font-size:13px"><b> Start: </b></section>
                      <section style="font-size:13px">Jan 2004</section>
                  </div>
                  <div class="col">
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/mission-type')}}"> Mission Type </a></b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/mission-type-clicking')}}"> Drass mission type defined here.</a></section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/found-sources')}}"> Found Source</a> </b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/founf-sources-clicking')}}">Source Name to be found here.</a></section>
                      <br><br>
                      <section class="my-2" style="font-size:13px"><b> End: </b></section>
                      <section style="font-size:13px">Jul 2004</section>
                  </div>
                </div>
            </div>
        </div>

        <div class="divider-within-class"></div>
        <div style="margin-top: 15px;">
            <section class="encapsulated-text ">
                <a href="{{ url('/low-evolution') }}" style="color:#065386;font-weight:bold;">Development and
                    Optimization of a Bimodal Ion-Chemical Thruster System Using Novel Ionic Liquid Monopropellants</a>
                <i class="fa-solid fa-chevron-down" style="float: right;margin-right:10px; color:grey;"
                    onclick="toggleSubAnswer(this)"></i>
                <button
                    style="float: right; margin-right: 20px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">Active</button>
                <section>This is a project within the Space Technology Research Grants Program </section>
            </section>
            <section class="sub-answer mt-2 mb-4" style="margin-left:10px;font-size:15px; padding-right:4rem"> For
                launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS),
                roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems,
                propellant storage and transfer, nanocomposites, green propellants. For in-space........ </section>
            <div class="sub-answer mt-2 mb-4"
                style=" display:none; margin-left:10px;font-size:15px; padding-right:4rem">
                <div class="row my-4">
                    <div class="col">
                        <img src="{{ asset('images\STMD-Programs-SBIR 1.png') }}" width="350px">
                    </div>
                    <div class="col">
                      <section class="mb-2" style="font-size:13px;"><b><a style="color:black;" href="{{url('/legal-entity-roles')}}">Legal Entity Role</a></b></section>
                      <section class="mb-2" style="font-size:13px;"><a style="color:black;" href="{{url('/legal-entity-roles-clicking')}}">Space Technology Mission Directorate (STMD) </a>
                      </section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/organizations')}}"> Organisation Performing Work</a></b></section>
                      <section class="mb-2" style="font-size:13px"> <a style="color:black;" href="{{url('/organization-clicking')}}">Johnson Space Center</a></section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/')}}"> Primary Technology Area:</a></b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/search-results')}}">TX01.1.3 Cryogenic</a></section>
                      <section class="mb-2" style="font-size:13px"><b> Start: </b></section>
                      <section style="font-size:13px">Jan 2004</section>
                  </div>
                  <div class="col">
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/mission-type')}}"> Mission Type </a></b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/mission-type-clicking')}}"> Drass mission type defined here.</a></section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/found-sources')}}"> Found Source</a> </b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/founf-sources-clicking')}}">Source Name to be found here.</a></section>
                      <br><br>
                      <section class="my-2" style="font-size:13px"><b> End: </b></section>
                      <section style="font-size:13px">Jul 2004</section>
                  </div>
                </div>
            </div>
        </div>
        <div class="divider-within-class"></div>
        <div style="margin-top: 15px;">

            <section class="encapsulated-text ">
                <a href="{{ url('/low-evolution') }}" style="color:#065386;font-weight:bold;">Development and
                    Optimization of a Bimodal Ion-Chemical Thruster System Using Novel Ionic Liquid Monopropellants</a>
                <i class="fa-solid fa-chevron-down" style="float: right;margin-right:10px; color:grey;"
                    onclick="toggleSubAnswer(this)"></i>
                <button
                    style="float: right; margin-right: 20px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">Active</button>
                <section>This is a project within the Space Technology Research Grants Program </section>
            </section>
            <section class="sub-answer mt-2 mb-4" style="margin-left:10px;font-size:15px; padding-right:4rem"> For
                launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS),
                roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems,
                propellant storage and transfer, nanocomposites, green propellants. For in-space........ </section>

            <div class="sub-answer mt-2 mb-4"
                style="display:none; margin-left:10px;font-size:15px; padding-right:4rem">
                <div class="row my-4">
                    <div class="col">
                        <img src="{{ asset('images\STMD-Programs-SBIR 1.png') }}" width="350px">
                    </div>
                    <div class="col">
                      <section class="mb-2" style="font-size:13px;"><b><a style="color:black;" href="{{url('/legal-entity-roles')}}">Legal Entity Role</a></b></section>
                      <section class="mb-2" style="font-size:13px;"><a style="color:black;" href="{{url('/legal-entity-roles-clicking')}}">Space Technology Mission Directorate (STMD) </a>
                      </section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/organizations')}}"> Organisation Performing Work</a></b></section>
                      <section class="mb-2" style="font-size:13px"> <a style="color:black;" href="{{url('/organization-clicking')}}">Johnson Space Center</a></section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/')}}"> Primary Technology Area:</a></b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/search-results')}}">TX01.1.3 Cryogenic</a></section>
                      <section class="mb-2" style="font-size:13px"><b> Start: </b></section>
                      <section style="font-size:13px">Jan 2004</section>
                  </div>
                  <div class="col">
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/mission-type')}}"> Mission Type </a></b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/mission-type-clicking')}}"> Drass mission type defined here.</a></section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/found-sources')}}"> Found Source</a> </b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/founf-sources-clicking')}}">Source Name to be found here.</a></section>
                      <br><br>
                      <section class="my-2" style="font-size:13px"><b> End: </b></section>
                      <section style="font-size:13px">Jul 2004</section>
                  </div>
                </div>
            </div>
        </div>
        <div class="divider-within-class"></div>
        <div style="margin-top: 15px;">
            <section class="encapsulated-text ">
                <a href="{{ url('/low-evolution') }}" style="color:#065386;font-weight:bold;">Development and
                    Optimization of a Bimodal Ion-Chemical Thruster System Using Novel Ionic Liquid Monopropellants</a>
                <i class="fa-solid fa-chevron-down" style="float: right;margin-right:10px; color:grey;"
                    onclick="toggleSubAnswer(this)"></i>
                <button
                    style="float: right; margin-right: 20px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">Active</button>
                <section>This is a project within the Space Technology Research Grants Program </section>
            </section>
            <section class="sub-answer mt-2 mb-4" style="margin-left:10px;font-size:15px; padding-right:4rem"> For
                launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS),
                roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems,
                propellant storage and transfer, nanocomposites, green propellants. For in-space........ </section>

            <div class="sub-answer mt-2 mb-4"
                style=" display:none; margin-left:10px;font-size:15px; padding-right:4rem">
                <div class="row my-4">
                    <div class="col">
                        <img src="{{ asset('images\STMD-Programs-SBIR 1.png') }}" width="350px">
                    </div>
                    <div class="col">
                      <section class="mb-2" style="font-size:13px;"><b><a style="color:black;" href="{{url('/legal-entity-roles')}}">Legal Entity Role</a></b></section>
                      <section class="mb-2" style="font-size:13px;"><a style="color:black;" href="{{url('/legal-entity-roles-clicking')}}">Space Technology Mission Directorate (STMD) </a>
                      </section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/organizations')}}"> Organisation Performing Work</a></b></section>
                      <section class="mb-2" style="font-size:13px"> <a style="color:black;" href="{{url('/organization-clicking')}}">Johnson Space Center</a></section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/')}}"> Primary Technology Area:</a></b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/search-results')}}">TX01.1.3 Cryogenic</a></section>
                      <section class="mb-2" style="font-size:13px"><b> Start: </b></section>
                      <section style="font-size:13px">Jan 2004</section>
                  </div>
                  <div class="col">
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/mission-type')}}"> Mission Type </a></b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/mission-type-clicking')}}"> Drass mission type defined here.</a></section>
                      <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/found-sources')}}"> Found Source</a> </b></section>
                      <section class="mb-2" style="font-size:13px"><a style="color:black;" href="{{url('/founf-sources-clicking')}}">Source Name to be found here.</a></section>
                      <br><br>
                      <section class="my-2" style="font-size:13px"><b> End: </b></section>
                      <section style="font-size:13px">Jul 2004</section>
                  </div>
                </div>
            </div>
        </div>

        <div class="divider-within-class"></div>


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

<div class="divider"></div>
