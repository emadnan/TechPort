<div class="faq-item">
    <div id="foundSources" class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Locations</span>
        <i class="fa-solid fa-chevron-down" id="rotateIcon" style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
    </div>
    
    <div class="faq-answer" style="display: none;">
  <div>
  <section  class="encapsulated-text mt-2 mb-3">Listing 1 - 20 of 61 </section>
  @foreach ($locations as $location )
  <div style="margin-top: 15px;">
    <section class="encapsulated-text" >
  <a href="{{url('/location-clicking')}}" style="color:black;font-weight:bold;">{{$location->city}} , {{$location->state}}</a>
  </section>
  </div>
  <div class="divider-within-class"></div> 
  @endforeach
  <div style="margin-top: 15px;">
    <section class="encapsulated-text " >
      <a href="{{url('/location-clicking')}}" style="color:black;font-weight:bold;">Houstan, Texas</a>
      </section>
  </div>
  <div class="divider-within-class"></div> 
  
  
  <div style="margin-top: 15px;">
    <section class="encapsulated-text  " >
      <a href="{{url('/location-clicking')}}" style="color:black;font-weight:bold;">Houstan, Texas</a>
      </section>
  </div>
  <div class="divider-within-class"></div> 
  
  <div style="margin-top: 15px;">
    <section class="encapsulated-text  " >
      <a href="{{url('/location-clicking')}}" style="color:black;font-weight:bold;">Houstan, Texas</a>
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