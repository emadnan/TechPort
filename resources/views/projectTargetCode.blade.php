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
            @endphp
          @foreach ($projOrg->projects as $project )
          @if ($project->project_target->id == $targetID)
              
          @else
        <div style="margin-top: 15px;">
            <section class="encapsulated-text  ">
                <a href="{{ route('projectTargetClickingPage', ['id' => $project->project_target->id]) }}" style="color:black;font-weight:bold;">{{$project->project_target->name}}</a>
            </section>
        </div>
            <div class="divider-within-class"></div>
            @php
                $targetID = $project->project_target->id;
            @endphp
          @endif
          @endforeach
        </div>

        
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
