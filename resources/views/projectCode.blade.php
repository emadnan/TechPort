<div class="faq-item">
    <div id="project" class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Projects</span>
        <i class="fa-solid fa-chevron-down" id="rotateIcon"
            style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>



    </div>

    <div class="faq-answer" style="display: none;">
        <section class="encapsulated-text mt-2 mb-4">Listing 1 - 20 of 61 </section>
        @php
            $projectID = 0;
        @endphp
@foreach ($projOrg->projects as $project )
@if ($projectID == $project->id)
    
@else
        <div style="margin-top: 15px;">
            <section class="encapsulated-text ">
                <a href="{{ route('projectPage', ['id'=> $project->id]) }}" style="color:#065386;font-weight:bold;">{{$project->name}}</a>
                <i class="fa-solid fa-chevron-down" style="float: right;margin-right:10px; color:grey;"
                    onclick="toggleSubAnswer(this)"></i>
                <button
                    style="float: right; margin-right: 20px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">{{$project->status->status}}</button>
                <section>This is a project within the Space Technology Research Grants Program </section>
            </section>
            <section class="sub-answer mt-2 mb-4" style="margin-left:10px;font-size:15px; padding-right:4rem">{{$project->description}}</section>

            <div class="sub-answer mt-2 mb-4"
                style=" display:none; margin-left:10px;font-size:15px; padding-right:4rem">
                <div class="row my-4">
                    <div class="col">
                        <img src="{{ asset('images/' . $project->image) }}" width="350px">
                    </div>
                    <div class="col">
                        <section class="mb-2" style="font-size:13px;"><b><a style="color:black;" href="{{url('/legal-entity-roles')}}">Legal Entity Role</a></b></section>
                        <section class="mb-2" style="font-size:13px;"><a style="color:black;" href="{{route('legalEntityClickingPage' , ['id'=>$projOrg->id])}}">{{$projOrg->name}}</a>
                        </section>
                        <section class="mb-2" style="font-size:13px"><b><a style="color:black;" href="{{url('/organizations')}}">Lead Organization</a></b></section>
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
@endphp

@endif    
@endforeach
       

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
