<div class="faq-item " >
    <div id="missionType" class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Mission Type</span>
        <i class="fa-solid fa-chevron-down" id="rotateIcon" style="float: right; margin-right: 10px; color: grey; cursor: pointer;"></i>
    </div>
    <div class="faq-answer" style="display: none;">
  <div>
  <section  class="encapsulated-text mt-2 mb-4">Listing 1 - 20 of 61 </section>
  @foreach ($missions as $mission )
  <div style="margin-top: 15px;">
    <section class="encapsulated-text " >
        <a href="{{route('missionTypeClickingPage' , ['id' => $mission->id])}}" style="color:black;font-weight:bold;">{{$mission-> type}}</a>
    </section>
  </div>
  <div class="divider-within-class"></div> 
  @endforeach
</div>
  
  <div style="margin-top: 15px;">
    <section class="encapsulated-text " >
      <a href="{{url('/mission-type-clicking')}}" style="color:black;font-weight:bold;">Drass mission type 1</a>
  </section>
  </div>
  <div class="divider-within-class"></div> 
  
  
  <div style="margin-top: 15px;">
  
    <section class="encapsulated-text " >
      <a href="{{url('/mission-type-clicking')}}" style="color:black;font-weight:bold;">Drass mission type 1</a>
  </section>     
  </div>
  <div class="divider-within-class"></div> 
  
  <div style="margin-top: 15px;">
  
    <section class="encapsulated-text  " >
      <a href="{{url('/mission-type-clicking')}}" style="color:black;font-weight:bold;">Drass mission type 1</a>
  </section>
  </div>
  
  <div class="divider-within-class"></div> 
  <div style="margin-top: 15px;">
    <section class="encapsulated-text  " >
      <a href="{{url('/mission-type-clicking')}}" style="color:black;font-weight:bold;">Drass mission type 1</a>
  </section>
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
  
  
  
  
  
      
  </div>
  
  <div class="divider"></div>
  
  