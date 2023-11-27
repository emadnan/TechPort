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
  @endphp

  @foreach ($projOrg->projects as $project )
  @foreach ($project->orgperformingworks as $org )
  @if ($org->location->id == $locationID)
    
  @else
  <div style="margin-top: 15px;">
    <section class="encapsulated-text" >
  <a href="{{ route('locationsClickingPage', ['id' => $org->location->id]) }}" style="color:black;font-weight:bold;">{{$org->location->city}} , {{$org->location->state}}</a>
  </section>
  </div>
  <div class="divider-within-class"></div> 
  @php
    $locationID = $org->location->id;
  @endphp
  @endif
  @endforeach
  @endforeach
  
  
  
  
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