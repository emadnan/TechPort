@include('bootStrap')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
            margin: 0;
            padding: 0;
            font-family: verdana;
        }

        nav {
            width: 100%;
            height: 50px;
            background-color: white;
            line-height: 50px;
        }

        .image-container {
            position: relative;
            left: 10%;
            margin-top: 30px;
        }

        .body-container {
            padding-right: 9.5%;
            padding-bottom: 25px;
            padding-left: 9.4%;
        }

        .custom-button {
            border-radius: 6px;
            background: #065386;
            color: white;
        }
        .custom-button i {
            color: white !important; /* Set icon color to white */
        }

        .custom-image-container {
            width: calc(100% - 140px); /* Adjust the width based on your design */
        }

        .custom-image {
            width: 114%;
            height: 300px;
        }
        .second-search-bar {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%; 
            background: transparent; 
            border: 1px solid white; 
            border-radius: 6px; 
        }

        
        .second-search-bar input,
        .second-search-bar button {
            background: transparent; 
            border: none;
            color: white !important; 
        }

        
        .second-search-bar input::placeholder {
            color: white; 
            border-radius: 6px; 
        }

        .text-in-image {
            position: absolute;
            top: 18px;
            left: 10px;
            margin-left: 4%;
            color: white;
            font-size: 28px;

        }

        .icon-in-image {
            position: absolute;
            top: 23px;
            right: 10px;
            margin-right: 4%;
            color: white;
            font-size: 1.7em;
            
        }

        .faq-section {
   background: linear-gradient(to right, #065386 2%, #E8E8E8 2%);
}
@media (max-width: 768px) {
            /* Adjust styles for screens up to 768px wide */
            .image-container {
                left: 5%;
                margin-top: 10px;
            }

            .body-container {
                padding-right: 5%;
                padding-left: 5%;
            }

            /* Add more responsive styles as needed */
        }

        @media (max-width: 576px) {
            /* Adjust styles for screens up to 576px wide */
            .image-container {
                left: 3%;
            }

         

            /* Add more responsive styles as needed */
        }

        /* background-color: #E8E8E8; */

body {
            background-color: white; /* Grey background color */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .faq-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 3px;
            background: #E8E8E8; /* White background for FAQ container */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            /* border-radius: 5px; */
        }

        .faq-item {
            margin-bottom: 20px;
        }

        .faq-question {
           
            font-size: 14px;
            font-weight:bold;
            margin-bottom: 10px;
            margin-left:10px;
            color:#065386;
        }
        
        .faq-answer {
           padding: 10px;
            font-size: 16px;
            /* margin-bottom: 10px; */
            background: #FCFCFC;
        }

       
        .divider {
    width:225px;
    height: 1px; 
    background-color: white;
}

.grey-divider{
    width: 100%;
    height: 1px; 
    background-color: grey;
}
.dropdown-menu {
            background: white;
            border: 1px solid black;
            opacity: 0.9; 
        }
        .question {
            font-size: 18px;
        }
        .qa-container {
            max-width: 99%;
            margin: 0 auto;
            font-size: 16px;
        }

        .qa-question {
            
            cursor: pointer;
        }

        .qa-answer {
            display: none;
            margin-left: 20px;
        }
       

        
        .faq-toggle-icon {
    cursor: pointer;
    font-size: 18px; /* Adjust the font size as needed */
    transition: transform 0.3s ease; /* Add a smooth transition effect */
}

.faq-toggle-icon.rotate {
    transform: rotate(90deg); /* Rotate the icon when the answer is expanded */
}
.square {
  height: 50px;
  width: 50px;
  background-color: #555;
}
.encapsulated-text{
    font-size:14px;
    margin-left:10px
}
.planet-img {
    width: 300px;
    height: 200px;
}

.pagination {
  display: inline-block;
  margin-top:40px;
  margin-bottom:40px;
  
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: #065386;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}




</style>

<body>

    




<nav>
    <div class="image-container">
        <img src="{{URL('images/DrassLogo1.png')}}" alt="">
        <br> 
        <img src="{{URL('images/DrassLogo2.png')}}" alt="">
    </div>
</nav>

<!-- <div class='body-container'> -->
    
<div class="container mt-4">
        <div class="row">
            <div class="col-md-9">
                <form class="form-inline w-100">
                    <div class="input-group w-100">
                        <input type="text" class="form-control w-100" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn custom-button" type="submit">
                                <i class="fas fa-search"></i> <!-- Font Awesome Search Icon -->
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <button class="btn custom-button btn-block">Advance Search</button>
            </div>
        </div>
        <!-- Add a new row for the image container -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="custom-image-container">
                    <img src="{{URL('images/Rectangle.png')}}" alt="Rectangular Image" class="custom-image">
                   
                    <div class="text-in-image">
                    <section > Search Results </section>
                    <div class="row">
    <div class="col-md-6 mb-1">
        <button class="btn" style="height: 20px;width:230px; padding: 0; font-size: 10px; background-color: white; color: black; line-height: 1;">Sort Order: Relevance</button>
    </div>
    <div class="col-md-6 mb-0">
        <button class="btn" style="height: 20px;width:230px; padding: 0; font-size: 10px; background-color: white; color: black; line-height: 1;">Words and Phrases: No Selection</button>
    </div>
</div>
                                <di v class="row">
                                    <div style="width: 200px; height: 200px; border-radius: 20px; background: #FFA800; text-align: center;font-size: 18px;line-height: 1.5;" class="col-md-6 mb-1">
                                <!-- 16,806<br> -->
                                <section style="font-weight:bold;font-size: 35;">16,906</section><br>
                                Projects Found<br>
                                <button class="btn" style="background-color: white; color: #065386;font-weight:bold; ">Modify Search</button><br>              
                                </div>
                                <div class="col-md-6 mb-1">
                                <section style="font-size: 16px;">Keya search</section>
                                <div class="divider"></div>
                                <div style="margin-left: 4px;line-height: 1;">
                                    <section style="color: yellow; font-size: 16px; display: inline-block;">944</section>
                                    <section style="font-size: 16px; margin-left: 120px; display: inline-block;">Active</section>
                                </div>
                                <div class="divider"></div>
                                <div style="margin-left: 4px;line-height: 1;">
                                    <section style="color: yellow; font-size: 16px; display: inline-block;">944</section>
                                    <section style="font-size: 16px; margin-left: 120px; display: inline-block;">Active</section>
                                </div>
                                <div class="divider"></div>
                                <div style="margin-left: 4px;line-height: 1;">
                                    <section style="color: yellow; font-size: 16px; display: inline-block;">944</section>
                                    <section style="font-size: 16px; margin-left: 120px; display: inline-block;">Active</section>
                                </div>

                                
                            </div>

                            
                            
                    
                    </div>
                    
        
                    
                    

                    </div>
                   
                  <!--  -->
                </div>
            </div>




            
<div class="faq-container">

<div class="faq-item">
    <div class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Development and Optimization of a Bimodal Ion-Chemical Thruster System Using Novel Ionic Liquid Monopropellants</span>
       
        <i class="fas fa-chevron-right" style="float: right;margin-top:15px; color:grey;"></i>
        <button style="float: right; margin-right: 20px; margin-top: 7px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">Active</button>
        <!-- Add the text below the span within the same div -->
        <div class="sub-title" style="color: grey;margin-left:10px;">
            Your additional text goes here.
        </div>
    </div>
    
    <div class="faq-answer" style="display: none;">
        <section class="encapsulated-text">For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space........ </section>
        <div class="row" style="margin-left:10px;margin-top:10px;">
    
        <div class="col-md-4">
    <div class="planet-image">
        <img src="{{URL('images/planet.png')}}" alt="" class="planet-img">
    </div>
</div>


    <div class="col-md-4">
      <div class="column">
        <section style="font-weight:bold;font-size:13px">Legal Entity Role</section>
        <section style="font-size:12px">Space Technology Mission Directorate (STMD)</section>
        <section style="font-weight:bold;font-size:13px">Organisation Performing Work</section>
        <section style="font-size:12px">Johnson Space Center</section>
        <section style="font-weight:bold;font-size:13px">Primary Technology Area:</section>
        <section style="font-size:12px">TX01.1.3 Cryogenic</section>
        <section style="font-weight:bold;font-size:13px">Start:</section>
        <section style="font-size:12px">Jan 2004</section>
      </div>
    </div>
    <div class="col-md-4">
    <div class="column">
        <section style="font-weight:bold;font-size:13px">Mission Type</section>
        <section style="font-size:12px">Drass mission type defined here.</section>
        <section style="font-weight:bold;font-size:13px">Found Source</section>
        <section style="font-size:12px">Source Name to be found here.</section>
        
        <div style="margin-top:35px;">
        <section style="font-weight:bold;font-size:13px">End:</section>
        <section style="font-size:12px">Jul 2004</section>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>


</div>

<div class="divider"></div>


            
<div class="faq-container">

<div class="faq-item">
    <div class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Non-invasive Detection of Liquid Propellant Location During Microgravity Transfer</span>
       
        <i class="fas fa-chevron-right" style="float: right;margin-top:15px; color:grey;"></i>
        <button style="float: right; margin-right: 20px; margin-top: 7px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">Active</button>
        <!-- Add the text below the span within the same div -->
        <div class="sub-title" style="color: grey;margin-left:10px;">
        This is a project within the Space Technology Research Grants Program
        </div>
    </div>
    
    <div class="faq-answer" style="display: none;">
        <section class="encapsulated-text">For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space........ </section>
        <div class="row" style="margin-left:10px;margin-top:10px;">
    
        <div class="col-md-4">
    <div class="planet-image">
        <img src="{{URL('images/planet.png')}}" alt="" class="planet-img">
    </div>
</div>


    <div class="col-md-4">
      <div class="column">
        <section style="font-weight:bold;font-size:13px">Legal Entity Role</section>
        <section style="font-size:12px">Space Technology Mission Directorate (STMD)</section>
        <section style="font-weight:bold;font-size:13px">Organisation Performing Work</section>
        <section style="font-size:12px">Johnson Space Center</section>
        <section style="font-weight:bold;font-size:13px">Primary Technology Area:</section>
        <section style="font-size:12px">TX01.1.3 Cryogenic</section>
        <section style="font-weight:bold;font-size:13px">Start:</section>
        <section style="font-size:12px">Jan 2004</section>
      </div>
    </div>
    <div class="col-md-4">
    <div class="column">
        <section style="font-weight:bold;font-size:13px">Mission Type</section>
        <section style="font-size:12px">Drass mission type defined here.</section>
        <section style="font-weight:bold;font-size:13px">Found Source</section>
        <section style="font-size:12px">Source Name to be found here.</section>
        
        <div style="margin-top:35px;">
        <section style="font-weight:bold;font-size:13px">End:</section>
        <section style="font-size:12px">Jul 2004</section>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>


</div>





<div class="divider"></div>


            
<div class="faq-container">

<div class="faq-item">
    <div class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Non-invasive Detection of Liquid Propellant Location During Microgravity Transfer</span>
       
        <i class="fas fa-chevron-right" style="float: right;margin-top:15px; color:grey;"></i>
        <button style="float: right; margin-right: 20px; margin-top: 7px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">Active</button>
        <!-- Add the text below the span within the same div -->
        <div class="sub-title" style="color: grey;margin-left:10px;">
        This is a project within the Space Technology Research Grants Program
        </div>
    </div>
    
    <div class="faq-answer" style="display: none;">
        <section class="encapsulated-text">For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space........ </section>
        <div class="row" style="margin-left:10px;margin-top:10px;">
    
        <div class="col-md-4">
    <div class="planet-image">
        <img src="{{URL('images/planet.png')}}" alt="" class="planet-img">
    </div>
</div>


    <div class="col-md-4">
      <div class="column">
        <section style="font-weight:bold;font-size:13px">Legal Entity Role</section>
        <section style="font-size:12px">Space Technology Mission Directorate (STMD)</section>
        <section style="font-weight:bold;font-size:13px">Organisation Performing Work</section>
        <section style="font-size:12px">Johnson Space Center</section>
        <section style="font-weight:bold;font-size:13px">Primary Technology Area:</section>
        <section style="font-size:12px">TX01.1.3 Cryogenic</section>
        <section style="font-weight:bold;font-size:13px">Start:</section>
        <section style="font-size:12px">Jan 2004</section>
      </div>
    </div>
    <div class="col-md-4">
    <div class="column">
        <section style="font-weight:bold;font-size:13px">Mission Type</section>
        <section style="font-size:12px">Drass mission type defined here.</section>
        <section style="font-weight:bold;font-size:13px">Found Source</section>
        <section style="font-size:12px">Source Name to be found here.</section>
        
        <div style="margin-top:35px;">
        <section style="font-weight:bold;font-size:13px">End:</section>
        <section style="font-size:12px">Jul 2004</section>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>


</div>





<div class="divider"></div>


            
<div class="faq-container">

<div class="faq-item">
    <div class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Non-invasive Detection of Liquid Propellant Location During Microgravity Transfer</span>
       
        <i class="fas fa-chevron-right" style="float: right;margin-top:15px; color:grey;"></i>
        <button style="float: right; margin-right: 20px; margin-top: 7px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">Active</button>
        <!-- Add the text below the span within the same div -->
        <div class="sub-title" style="color: grey;margin-left:10px;">
        This is a project within the Space Technology Research Grants Program
        </div>
    </div>
    
    <div class="faq-answer" style="display: none;">
        <section class="encapsulated-text">For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space........ </section>
        <div class="row" style="margin-left:10px;margin-top:10px;">
    
        <div class="col-md-4">
    <div class="planet-image">
        <img src="{{URL('images/planet.png')}}" alt="" class="planet-img">
    </div>
</div>


    <div class="col-md-4">
      <div class="column">
        <section style="font-weight:bold;font-size:13px">Legal Entity Role</section>
        <section style="font-size:12px">Space Technology Mission Directorate (STMD)</section>
        <section style="font-weight:bold;font-size:13px">Organisation Performing Work</section>
        <section style="font-size:12px">Johnson Space Center</section>
        <section style="font-weight:bold;font-size:13px">Primary Technology Area:</section>
        <section style="font-size:12px">TX01.1.3 Cryogenic</section>
        <section style="font-weight:bold;font-size:13px">Start:</section>
        <section style="font-size:12px">Jan 2004</section>
      </div>
    </div>
    <div class="col-md-4">
    <div class="column">
        <section style="font-weight:bold;font-size:13px">Mission Type</section>
        <section style="font-size:12px">Drass mission type defined here.</section>
        <section style="font-weight:bold;font-size:13px">Found Source</section>
        <section style="font-size:12px">Source Name to be found here.</section>
        
        <div style="margin-top:35px;">
        <section style="font-weight:bold;font-size:13px">End:</section>
        <section style="font-size:12px">Jul 2004</section>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>


</div>







<div class="divider"></div>


            
<div class="faq-container">

<div class="faq-item">
    <div class="faq-question" onclick="toggleAnswer(this)">
        <span class="faq-question">Development and Optimization of a Bimodal Ion-Chemical Thruster System Using Novel Ionic Liquid Monopropellants</span>
       
        <i class="fas fa-chevron-right" style="float: right;margin-top:15px; color:grey;"></i>
        <button style="float: right; margin-right: 20px; margin-top: 7px; background-color: white; border: 1px solid grey; color: grey; height: 30px; width: 80px; border-radius: 5px;">Active</button>
        <!-- Add the text below the span within the same div -->
        <div class="sub-title" style="color: grey;margin-left:10px;">
            Your additional text goes here.
        </div>
    </div>
    
    <div class="faq-answer" style="display: none;">
        <section class="encapsulated-text">For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space........ </section>
        <div class="row" style="margin-left:10px;margin-top:10px;">
    
        <div class="col-md-4">
    <div class="planet-image">
        <img src="{{URL('images/planet.png')}}" alt="" class="planet-img">
    </div>
</div>


    <div class="col-md-4">
      <div class="column">
        <section style="font-weight:bold;font-size:13px">Legal Entity Role</section>
        <section style="font-size:12px">Space Technology Mission Directorate (STMD)</section>
        <section style="font-weight:bold;font-size:13px">Organisation Performing Work</section>
        <section style="font-size:12px">Johnson Space Center</section>
        <section style="font-weight:bold;font-size:13px">Primary Technology Area:</section>
        <section style="font-size:12px">TX01.1.3 Cryogenic</section>
        <section style="font-weight:bold;font-size:13px">Start:</section>
        <section style="font-size:12px">Jan 2004</section>
      </div>
    </div>
    <div class="col-md-4">
    <div class="column">
        <section style="font-weight:bold;font-size:13px">Mission Type</section>
        <section style="font-size:12px">Drass mission type defined here.</section>
        <section style="font-weight:bold;font-size:13px">Found Source</section>
        <section style="font-size:12px">Source Name to be found here.</section>
        
        <div style="margin-top:35px;">
        <section style="font-weight:bold;font-size:13px">End:</section>
        <section style="font-size:12px">Jul 2004</section>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>


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



  
  <script>
     const questions = document.querySelectorAll('.qa-question');

questions.forEach(question => {
    question.addEventListener('click', () => {
        question.classList.toggle('active');
        const answer = question.querySelector('.qa-answer');
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});
    // JavaScript function to toggle FAQ answers and the lower arrow
    function toggleAnswer(element) {
        const answer = element.nextElementSibling;

        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            answer.style.display = 'block';
        }
    }
    function toggleQASubAnswer(element1){
        const subanswers=element.nextElementSibling;
        if(subanswers.style.display === 'block'){
            subanswers.style.display = 'none';
        }else{
            subanswers.style.display = 'block';
        }
    }
    function myFunction(x) {
  x.classList.toggle("fas fa-chevron-down");
}
function toggleQAAnswer(question) {
    var subanswer = question.nextElementSibling.nextElementSibling; // Select the next sibling (the sub-answer)
    if (subanswer.style.display === "none" || subanswer.style.display === "") {
        subanswer.style.display = "block"; // Show the sub-answer
    } else {
        subanswer.style.display = "none"; // Hide the sub-answer
    }
}
var slider = document.getElementById("myRange");
    var sliderValueDisplay = document.getElementById("sliderValue");

    // Update the <span> tag with the slider value when the slider is changed
    slider.addEventListener("input", function() {
        sliderValueDisplay.textContent = slider.value;
    });
</script>



</body>
</html>