@include('bootStrap')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            
            font-family: 'Open Sans', sans-serif;

        }

        /* search bar and button */
        :root {
            --font: "Inter", sans-serif;
            --royal-blue: #065386;
            --black: #292929;
            --white: #fbfbfb;
        }

        /* SEARCH BAR CONTAINER */
        .search-local {
            width: 95%;
            /* max-width: 175rem; */
            display: flex;
            align-items: center;
            column-gap: 2rem;
            padding-left: 2rem;
            background: var(--white);
            border-radius: 0.6rem;
            /* min-height: 7rem; */
            height: 50px;
            border: 0.1rem solid #747474;
            border-right: none;
        }


        /* INPUT */
        .search-local input {
            height: 100%;
            width: 100%;
            flex: 1 1 25rem;
            background: var(--white);
            display: flex;
            outline: none;
            border: none;
            color: var(--black);
            /* font-size: 2.4rem; */
            font-size: 20px;
        }

        input[type="text"]::placeholder {
            /* color: var(--black); */
            /* font-size: 2.4rem; */
            font-size: 20px;
        }

        /* BUTTON */
        .search-local button {
            background: var(--royal-blue);
            border: none;
            border-radius: 0.6rem;
            font-size: 1.4rem;
            height: 50px;
            width: 100px;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            margin-left: 20px;

        }

        .btn_primary {
            /* height: 50px; */
            /* width: auto; */
            /* font-size: 20px; */
            /* text-align: center; */
            /* border-radius: 0.6rem; */
            background: #065386;
            color: white;
            /* pointer-events: none; */
            /* padding-top: 10px; */
            /* flex-shrink: 0; */
            font-weight: 500;
            font-family: Open Sans !important;
            

        }
        .btn_primary:hover{
            color:white;
        }

        /* MEDIAS */
        @media (max-width: 575px) {
            .search-local {
                padding-left: 0;
                column-gap: 0.25rem;
            }

            .search-local button {
                width: 10rem;
            }

            button a {
                display: none;
            }

            .search-local button .search-icon {
                display: block;
                margin-inline: auto;
                color: var(--white);
                font-size: 3rem;
                pointer-events: none;
            }

            input[type="text"]::placeholder {
                font-size: 1.7rem;
            }
        }



        /* end */

        nav {
            width: 50%;
            height: 50px;
            background-color: white;
            line-height: 50px;
        }

        /* Nav bar ImageContainer Starts */
        .image-container {
            position: relative;
            left: 9%;
            margin-top: 30px;
        }

        /* Nav bar ImageContainer Ends */

        .body-container {
            /* padding-top: 25px; */
            padding-right: 9.5%;
            padding-bottom: 25px;
            padding-left: 9.4%;
        }
        .popup {
  margin-top: 25%;
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  display: none;
  width: auto; /* Adjust the width as needed */
  background-color: transparent;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  transform: translateX(-50%);
}

/* Toggle this class - hide and show the popup */
.popup .show {
  display: block;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
        .custom-button {
            border-radius: 6px;
            background: #065386;
            color: white;
        }

        .custom-button i {
            color: white !important;
            /* Set icon color to white */
        }

        .custom-image-container {
            width: calc(100% - 140px);
            /* Adjust the width based on your design */
        }

        .custom-image {
            width: 114.4%;
            height: auto;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            filter: brightness(0.7);
        }

        .second-search-bar {
            position: absolute;
            margin-top: -5%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            /* background: transparent; */
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
            font-size: 40px;


        }

        .icon-in-image {
            position: absolute;
            top: 23px;
            right: 10px;
            margin-right: 3.5%;
            color: white;
            font-size: 1.7em;


        }

      


        .faq-container {
            max-width: 100%;
            margin: 0 auto;
            /* padding-left: 10px; */
            padding-top:5px;
            background: linear-gradient(to right, #065386 3.5%, #E8E8E8 2%);cursor:pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* border-radius: 5px; */
        }

        .faq-item {
            /* margin-bottom: 20px; */
        }

        .faq-question {
       
            cursor: pointer;
            font-size:24px;
        }

        .faq-answer {
            margin-left:40px;
            display: none;
            /* padding: 10px; */
            /* background-color: #f9f9f9; */
            /* border-left: 20px solid #007bff; */
            background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%);
            cursor: pointer;
            font-size:24px;
        }

        .faq-answer.active {
            display: block;
        }
        #sub-answer-description.active{
            display: block;
        }
        #sub-answer-description {
            margin-left:1px;
            display: none;
            background: linear-gradient(to right, #323E48 4%, #E8E8E8 2%);
        }
        .faq-subanswer{
            display: none;
            padding-left: 37px;
            margin-left:40px;
            background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%);
            cursor:pointer;
            font-size:24px;
        }
        .faq-subanswer.active{
            display: block;
        }
        .fa-angle-right,
        .fa-angle-down {
    color: white;
    padding-left:10px;  
    font-size:24px;
}

.divider {
    width: 100%;
    height: 1px; 
    background-color: white;
}
    
    
     
.graph-image{
    margin-right:10px;
    margin-top:5px;
    width:24px;
}

      
    </style>
</head>


<body>

    <div class="container">
        {{-- Site Logo --}}
        <div class="row mt-5">
            <div class="col-md-10 mt-5 mb-5">
                <img class="mb-3" src="{{ asset('images/DrassLogo1.png') }}" alt="">
                <br>
                <img src="{{ asset('images/DrassLogo2.png') }}" alt="">
            </div>
        </div>
        <div class="col-md-2"></div>
        {{-- End --}}

        {{-- Search Bar goes here --}}
        <div class="row top-search-bar">
            <div class="col-md-9 mb-2">
                <form>
                    <div class="search-local">
                        <input type="text" placeholder="Search Project">
                        <button>
                            <i class="fas fa-search fa-light fa-sm " style="color:#f4f7fa; "></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"> 
                <a href="{{ url('/AdvanceSearch') }}"><button type="button"  class="btn btn-lg btn_primary float-right">Advanced
                    Search </button></a>
            </div>
        </div>
        {{-- end --}}

        {{-- section of Drass Taxonomy with background image --}}
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="custom-image-container">
                    <img src="{{ asset('images/rectangle.jpg') }}" alt="Rectangular Image" class="custom-image">
                    <!-- Text inside the image container -->
                    <div class="text-in-image">
                        <b>DRASS Taxonomy</b>
                    </div>
                    <div class="icon-in-image">
                        <div class="graph-icon"><img src="{{ asset('images/icon-white.png') }}"
                                style="height:50px;width:50px;"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Row for second search bar --}}
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline second-search-bar">
                    <div class="input-group w-100">
                        <input type="text" class="form-control w-100" placeholder="Filter Taxanomy"
                            style="border-radius: 0; width: 100%; background-color: rgba(0, 0, 0, 0); font-size:20px">
                        <!-- Adjust the width here -->

                        <button class="btn" type="submit" style="background-color: rgba(0, 0, 0, 0) !important;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        {{-- end --}}


        <div class="faq-container">
        <!-- parent tile -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswers('answers1')"> 
            <div class="arrow-icon" id="icon-togglequestion">  
            <i class="fa-solid fa-angle-right"></i> <span style="padding-left:22px;">TX01 Propulsion Systems</span>
           
            <img src="{{ asset('images/icon-blue.png') }}" alt=""  class="float-right graph-image">
            
            
            </div> 
            
            <!-- <div class="graph-image float-right">
                <img src="{{ asset('images/icon-black.png') }}" alt="" style="width:19px;">
            </div>  -->
            </div>
            <div class="faq-answer" id="answers1" onclick="toggleSubAnswers('answers1-1')">
            <div class="divider"></div>
             <div class="arrow-icon" id="icon-toggleanswer">
             <i class="fa-solid fa-angle-right"></i><span style="margin-left:20px;">TX01.1 Chemical Space Propulsion</span>
             <img src="{{ asset('images/icon-yellow.png') }}" alt=""  style="width:30px;margin-right:7px;margin-top:2px;" class="float-right">
             </div>
            </div>
            <div class="faq-subanswer" id="answers1-1">

            <div class="divider"></div>
            <div style="background: linear-gradient(to right, #323E48 4%, #E8E8E8 2%);margin-left:1px;" onclick="toggleSubAnswersDescreption('sub-answer-description')">
            <div  id="icon-toggle-description">  
            <i class="fa-solid fa-angle-right"></i> <span style="padding-left:10px;">
                <a href="{{ url('/project-targets') }}"style="color:#000000">
            TX01.1.1 Integrated Systems and Ancillary Technologies</span>
            </a>
            <img src="{{ asset('images/icon-black.png') }}" alt=""  class="float-right graph-image">
            </div>  
        </div>
        <div id="sub-answer-description">
            <div style="margin-left:50px; font-size:20px;font-weight:bold">Example Technologies</div>
            <section style="padding-left:50px;font-size:20px;">
            For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
            </section>
        </div>
        <div class="divider"></div> 

            <div style="background: linear-gradient(to right, #323E48 4%, #E8E8E8 2%);margin-left:1px;">
            <div class="arrow-icon" id="icon-togglequestion">  
            <i class="fa-solid fa-angle-right"></i> <span style="padding-left:10px;">TX01.1.2 Earth Storable</span>
            <img src="{{ asset('images/icon-black.png') }}" alt=""  class="float-right graph-image">
            </div> 
            </div>

         
           
        <!-- <div class="divider"></div>  -->
            </div>
            
            <div class="faq-answer" id="answers1">
            <div class="divider"></div> 
            <div class="arrow-icon" id="icon-togglequestion">
            <i class="fa-solid fa-angle-right"></i><span style="margin-left:20px;">TX01.2 Electric Space Propulsion</span>
            <img src="{{ asset('images/icon-yellow.png') }}" alt=""  style="width:30px;margin-right:7px;margin-top:2px;" class="float-right">
            </div> </div>
        </div>
        <div class="divider"></div>
        <!-- parent tile ends here-->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswers('answers2')">
            <div class="arrow-icon" id="icon-togglequestion">
            <i class="fa-solid fa-angle-right"></i><span style="padding-left:26px">TX02 Flight Computing and Avionics</span>
            <img src="{{ asset('images/icon-blue.png') }}" alt=""  class="float-right graph-image" onclick="showimage()">
            <img src="{{ asset('images/pop-up-graph.png') }}" alt="" class="popuptext float-right" id="myPopup1" style="display:none; position: absolute;right:195px;">
            </div> 
            
        </div>

            <!-- <div class="faq-answer" id="answers2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
            <div class="faq-answer" id="answers2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div> -->
        </div>
        <div class="divider"></div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswers('answers3')">
            <div class="arrow-icon" id="icon-togglequestion">
            <i class="fa-solid fa-angle-right"></i><span style="padding-left:26px">TX03 Aerospace Power and Energy Storage</span>
            <img src="{{ asset('images/icon-blue.png') }}" alt=""  class="float-right graph-image">
            </div> 
           </div>
            <!-- <div class="faq-answer" id="answers3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
            <div class="faq-answer" id="answers3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div> -->
        </div>


        <div class="divider"></div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswers('answers4')">
            <div class="arrow-icon" id="icon-togglequestion">
            <i class="fa-solid fa-angle-right"></i><span style="padding-left:26px">TX04 Robotic Systems</span>
            <img src="{{ asset('images/icon-blue.png') }}" alt=""  class="float-right graph-image">
            </div> 
           </div>
            <!-- <div class="faq-answer" id="answers3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
            <div class="faq-answer" id="answers3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div> -->
        </div>


        <div class="divider"></div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswers('answers5')">
            <div class="arrow-icon" id="icon-togglequestion">
            <i class="fa-solid fa-angle-right"></i><span style="padding-left:26px">TX05 Communications, Navigation, and Orbital Debris Tracking and Characterization <img src="{{ asset('images/icon-blue.png') }}" alt=""  class="float-right graph-image"></span>
            
            </div> 
           </div>
            <!-- <div class="faq-answer" id="answers3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
            <div class="faq-answer" id="answers3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div> -->
        </div>


        <div class="divider"></div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswers('answers6')">
            <div class="arrow-icon" id="icon-togglequestion">
            <i class="fa-solid fa-angle-right"></i><span style="padding-left:26px">TX06 Human Health, Life Support, and Habitation Systems</span>
            <img src="{{ asset('images/icon-blue.png') }}" alt=""  class="float-right graph-image">
            </div> 
           </div>
            <!-- <div class="faq-answer" id="answers3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
            <div class="faq-answer" id="answers3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div> -->
        </div>


        <div class="divider"></div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswers('answers7')">
            <div class="arrow-icon" id="icon-togglequestion">
            <i class="fa-solid fa-angle-right"></i><span style="padding-left:26px">TX07 Exploration Destination Systems</span>
            <img src="{{ asset('images/icon-blue.png') }}" alt=""  class="float-right graph-image">
            </div> 
           </div>
            <!-- <div class="faq-answer" id="answers3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
            <div class="faq-answer" id="answers3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div> -->
        </div>


        <div class="divider"></div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswers('answers8')">
            <div class="arrow-icon" id="icon-togglequestion">
            <i class="fa-solid fa-angle-right"></i><span style="padding-left:26px">TX08 Sensors and Instruments</span>
            <img src="{{ asset('images/icon-blue.png') }}" alt=""  class="float-right graph-image">
            </div> 
           </div>
            <!-- <div class="faq-answer" id="answers3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
            <div class="faq-answer" id="answers3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div> -->
        </div>


        <div class="divider"></div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswers('answers9')">
            <div class="arrow-icon" id="icon-togglequestion">
            <i class="fa-solid fa-angle-right"></i><span style="padding-left:26px">TX09 Entry, Descent, and Landing</span>
            <img src="{{ asset('images/icon-blue.png') }}" alt=""  class="float-right graph-image">
            </div> 
           </div>
            <!-- <div class="faq-answer" id="answers3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
            <div class="faq-answer" id="answers3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</div> -->
        </div>
    </div>
    </div>

    <div style="margin-top:200px"></div>

    <footer>
@include('footer')
</footer>

    <script>
       function toggleSubAnswersDescreption(descriptiveAnswer) {
    const answers = document.querySelectorAll(`#${descriptiveAnswer}`);
    answers.forEach(answer => {
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            answer.style.display = 'block';
        }
    });
}
function showimage(){
    var check = document.getElementById("myPopup1").style.display;
    if(check == "none")
    {
        document.getElementById("myPopup1").style.display = "block";
    } else{
        document.getElementById("myPopup1").style.display= "none";
    }

}
// function toggleSubAnswers(subAnswerGroup) {
//     const subAnswers = document.querySelectorAll(`#${subAnswerGroup}`);
//     subAnswers.forEach(subAnswer => {
//         if (subAnswer.style.display === 'block') {
//             subAnswer.style.display = 'none';
//         } else {
//             subAnswer.style.display = 'block';
//         }
//     });
// }

function toggleSubAnswers(subAnswerGroup) {
    const answers = document.querySelectorAll(`#${subAnswerGroup}`);
    answers.forEach(answer => {
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            answer.style.display = 'block';
        }
    });

    const iconToggle = document.getElementById("icon-toggleanswer");
    const iconElement = iconToggle.querySelector("i");

    if (iconElement.classList.contains("fa-angle-right")) {
        // Change to the down arrow icon
        iconElement.classList.remove("fa-angle-right");
        iconElement.classList.add("fa-angle-down");
    } else {
        // Change back to the right arrow icon
        iconElement.classList.remove("fa-angle-down");
        iconElement.classList.add("fa-angle-right");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const iconToggle = document.getElementById("icon-answer");
    iconToggle.addEventListener("click", function () {
        toggleAnswersAndIcon("your-answer-group-id"); // Replace with your actual answer group ID
    });
});



function toggleAnswers(answerGroup) {
    const answers = document.querySelectorAll(`#${answerGroup}`);
    answers.forEach(answer => {
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            answer.style.display = 'block';
        }
    });

    const iconToggle = document.getElementById("icon-togglequestion");
    const iconElement = iconToggle.querySelector("i");

    if (iconElement.classList.contains("fa-angle-right")) {
        // Change to the down arrow icon
        iconElement.classList.remove("fa-angle-right");
        iconElement.classList.add("fa-angle-down");
    } else {
        // Change back to the right arrow icon
        iconElement.classList.remove("fa-angle-down");
        iconElement.classList.add("fa-angle-right");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const iconToggle = document.getElementById("icon-togglequestion");
    iconToggle.addEventListener("click", function () {
        toggleAnswersAndIcon("your-answer-group-id"); // Replace with your actual answer group ID
    });
});



function myFunction(popupId) {
  var popup = document.getElementById(popupId);
  popup.classList.toggle("show");
}


document.addEventListener("DOMContentLoaded", function () {
      const iconToggle = document.getElementById("icon-toggle-description");
      const iconElement = iconToggle.querySelector("i");

      iconToggle.addEventListener("click", function () {
        if (iconElement.classList.contains("fa-angle-right")) {
          // Change to the down arrow icon
          iconElement.classList.remove("fa-angle-right");
          iconElement.classList.add("fa-angle-down");
        } else {
          // Change back to the right arrow icon
          iconElement.classList.remove("fa-angle-down");
          iconElement.classList.add("fa-angle-right");
        }
      });
    });
    </script>


</body>

</html>
