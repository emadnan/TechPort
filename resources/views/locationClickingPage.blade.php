@include('bootStrap')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPort</title>
    
</head>
<style>
    * {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
        }

        nav {
            width: 50%;
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
            padding-right: 6%;
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
            width: 114.4%;
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
            background: #E8E8E8;
            margin-bottom: 50px; /* White background for FAQ container */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            /* border-radius: 5px; */
        }

        .faq-item {
            
        }

        .faq-question {
           
            font-size: 18px;
            font-weight:bold;
            margin-bottom: 10px;
            margin-left:10px;
            margin-top:10px;
            color:black;
        }
        
        .faq-answer {
           padding: 10px;
            font-size: 16px;
            /* margin-bottom: 10px; */
            background: #FCFCFC;
        }

       
        .divider {
        width:100%;
        height: 1px; 
        background-color: white;
}
.divider-within-class{
    width: 100%;
    height: 1px; 
    background-color: rgba(128, 128, 128 ,0.5);
    margin-top: 20px;
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
    font-size:15px;
    margin-left:10px;
    padding-right:1rem;
  }
.planet-img {
    width: 300px;
    height: 200px;
}

.pagination {
  display: inline-block;
  margin-top:25px;
  margin-bottom:25px;
  font-size:10px
  
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




.solid-rectangle {
    
    margin-top:20px;
      width: 108%;
      height: 170px; 
      /* background-color: #3498db;  */
      text-align: center; 
      color: white; /* Text color */
      font-size: 18px; /* Font size of the text */
      /* line-height: 100px; */
      border-radius: 20px;
background: #002339; /* Vertically center the text (equal to the height of the rectangle) */
    }
    .yellow-square {
    width: 200px; /* Adjust the width and height as needed */
    height: 150px;
    background: #FFA800;
    border-radius: 20px;
}
.btn-custom {
            background-color: white;
            border: 2px solid transparent;
            color: #065386;
        }

</style>

<body>

    





<!-- <div class='body-container'> -->
    
<div class="container mt-4">
  @include('header')






        
        <!-- Add a new row for the image container -->
        <div class="row mt-4">
        <div class="col-md-12">
                <div class="custom-image-container">
                    <img src="{{asset('images/rectangle.jpg')}}" alt="Rectangular Image" class="custom-image">
                   
                    <div class="text-in-image">
                    <section >Houstan, Texas</section>
                    <div class="row">
    <div style="margin-left:20px;">
        <button class="btn" style="height: 20px;width:230px; padding: 0; font-size: 10px; background-color: white; color: black; line-height: 1;">Sort Order: Relevance</button>
    </div>
    <div style="margin-left:20px;">
        <button class="btn" style="height: 20px;width:230px; padding: 0; font-size: 10px; background-color: white; color: black; line-height: 1;">Words and Phrases: No Selection</button>
    </div>
</div>
                                <div class="solid-rectangle">

                               <div class="row"  style="margin-left:5px;padding:10px;">
                               <div class="col-md-2.9">
                               <div class="yellow-square ">
                                <section style="font-size:40px;">16,806</section>
                                <section>Projects found</section>
                                <button class="btn btn-custom">Modify Search</button>
                                </div>
                                </div>
                                

                                <div class="key-stats col-md-2" style="margin-left:20px;line-height:20px;">
                                    <section style="margin-bottom:10px;">Key Stats</section>
                                    <div class="divider" style="width:175px"></div>
                                    <div class="row" style="margin-left:2px;">
                                    <p style="color:#FFA800">944</p>
                                    <p style="float:right; margin-left: 50px;">Active</p>
                                    </div>
                                    <div class="divider" style="width:175px"></div>
                                    <div class="row" style="margin-left:2px;">
                                    <p style="color:#FFA800">944</p>
                                    <p style="float:right; margin-left: 25px;">Completed</p>
                                    </div>
                                    <div class="divider" style="width:175px"></div>
                                    <div class="row" style="margin-left:2px;">
                                    <p style="color:#FFA800">944</p>
                                    <p style="float:right; margin-left: 23px;">Partnerhips</p>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                <img src="{{asset('images/ractangle-graph.png')}}" style="height:133px;width:133px;">
                                </div>

                                <div>
                                <section style="font-size: 16px;">Technology Areas Represented</section>
                                <div style="display: flex; gap: 5px;margin-top:10px;">
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary">TX01</button>
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary">TX02</button>
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary">TX03</button>
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary">TX04</button>
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary">TX06</button>
                                </div>
                                <div style="display: flex; gap: 5px;margin-top:5px;">
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary">TX07</button>
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary">TX08</button>
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary">TX09</button>
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary p-0">TX010</button>
                                <button style="width: 50px; height: 30px; font-size: 12px;" class="btn btn-primary p-0">TX011</button>
                                </div>

                                

                                </div>
                                <div class="col-md-1"  style="magin-left:20px;">
                                    <section>Export</section>
                                    <i class="fa-regular fa-file-pdf" style="width: 51px;height: 51px;margin-top:10px;"></i>
                                </div>


                               </div>


                                </div>
                                </div>
                    
                    
        
                    
                    

                    </div>
                   
                  <!--  -->
                </div>
            </div>




            
<div class="faq-container mt-1">

@include('projectCode')
@include('organizationCode')
@include('foundSourcesCode')
@include('missionTypeCode')
@include('legalRolesCode')
@include('projectTargetCode')




            

    <div style="margin-top:100px"></div>

<footer>
@include('footer')
</footer>


  
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
    var rotated = false;
  
    function toggleAnswer(element) {
        const answer = element.nextElementSibling;
        const icon = element.querySelector('i.fa-chevron-down');
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
            icon.classList.remove('fa-rotate-180');
        } else {
            answer.style.display = 'block';
            icon.classList.add('fa-rotate-180');
        }
    }
    function toggleSubAnswer(element) {
      const answer = element.parentElement;
      const answer1 = answer.nextElementSibling;
      const answer2 = answer1.nextElementSibling;
        if (answer2.style.display === 'none') {
            answer2.style.display = 'block';
            element.classList.remove('fa-rotate-180');
        } else {
            answer2.style.display = 'none';
            element.classList.add('fa-rotate-180');
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

  var icon = document.getElementById('rotateIcon');


  icon.addEventListener('click', function() {
    
  });

</script>
</body>
</html>