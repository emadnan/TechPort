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
        font-family: 'Open Sans', sans-serif;
        
    }

    nav {
        width: 100%;
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

    .body-container{
        /* padding-top: 25px; */
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
            width: 114.4%;
            height: auto;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
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
/* .faq-question::after {
    content: "\f009"; 
    font-family: "Font Awesome 5 Free";
    font-weight: 800;
    position: absolute;
    top: 0;
    right: 10px;
    color: green; 
} */

        .faq-question {
            padding:2px;
            /* font-weight: bold; */
            cursor: pointer;
            position: relative;
            font-size: 24px;
            font-weight: 400;
            line-height: normal;
            font-style: normal;
            letter-spacing: -0.36px;
        }

        .faq-answer {
            padding-bottom:8px;
            display: none;
            margin-left: 20px;
            cursor: pointer;
            background: linear-gradient(to right, yellow 2%, #E8E8E8 2%);
        }
        .faq-sub-answer {
            display: none; 
            margin-left: 50px; 
        }
        .expanded-color-container {
  position: relative;
  display: inline-block;
}

.solid-square {
  position: absolute;
  width: 40px; 
  height: 40px; 
 
  border-radius: 8px; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.fa-angle-right {
  color: black; 
  font-size: 12px;
  margin-left: 5px;
            margin-right: 10px;
}
.faq-question + .faq-question {
    margin-top: 10px; 
    border-top: 1px solid white;
    padding-top: 10px; 
}

.faq-question .fa-arrow-right {
    position: absolute;
    top: 0;
    right: 0;
    margin-top: 10px;
    margin-right: 10px;
}
.lower-arrow {
    margin-top: 10px;
    color:white;
   
}
.faq-question + .faq-answer::before {
    content: "";
    display: block;
    height: 1px;
    background-color: white; /* Choose your preferred divider color */
    margin-top: 10px; /* Adjust the margin as needed */
}
/* Add the background gradient to the faq-answer */
.faq-answer {
    display: none;
    margin-left: 23px;
    cursor: pointer;
    background: linear-gradient(to right, #FFA800 2%, #E8E8E8 2%); /* Apply yellow background gradient */
}

/* Adjust the FAQ sub-answer styles */
.faq-sub-answer {
    display: none;
    margin-left: 23px;
    background: linear-gradient(to right, #FFA800 2%, #E8E8E8 2%); /* Apply the same yellow background gradient */
}
.faq-sub-answer-text{
    margin-left: 23px;
}


.custom-icon {
    float: right;
    margin-top: 5px;
    margin-right: 5px;
    font-size: 18px;
    cursor: pointer;
}
/* Define the styles for the divider */
.divider {
    height: 1px; /* Adjust the height as needed */
    background-color: white; /* Set the background color of the divider */
    
}


.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  margin-left:50px;
}

/* The actual popup */
/* Popup container */
.popup .popuptext {
  visibility: hidden;
  width: 0px;
  height: 0px; 
  background-color: white;
  color: black;
  text-align: center;
  border-radius: 2px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  top: 57%; /* Change this to 'top' instead of 'bottom' */
  left: -715%;
  margin-left: -80px;
  /* border: 2px solid #065386; */
}



/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from { opacity: 0; } 
  to { opacity: 1; }
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

#encapsulation {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
#rotate-icon {
  transition: transform 0.3s ease; /* Add a smooth transition effect */
  cursor: pointer; /* Change the cursor to a pointer when hovering over the icon */
}
.rotate {
  transform: rotate(180deg); /* Adjust the degrees for the desired rotation */
}



</style>

<body>

    

<script>
    const icon = document.getElementById("rotate-icon");

icon.addEventListener("click", () => {
  // Toggle the rotation by adding or removing a CSS class
  if (icon.classList.contains("rotate")) {
    icon.classList.remove("rotate");
  } else {
    icon.classList.add("rotate");
  }
});

</script>




<nav>
    <div class="image-container">
        <img src="{{URL('images/DrassLogo1.png')}}" alt="">
        <br> 
        <img src="{{URL('images/DrassLogo2.png')}}" alt="">
    </div>
</nav>

<!-- <div class='body-container'> -->
    
<div class="container">
        <div class="row">
            <div class="col-md-10">
                <form class="form-inline w-100">
                    <div class="input-group w-100">
                        <input type="text" class="form-control w-100" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn custom-button" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
    <a href="{{ url('/AdvanceSearch') }}" class="btn custom-button btn-block">Advance Search</a>
</div>
        </div>
        <!-- Add a new row for the image container -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="custom-image-container">
                    <img src="{{URL('images/rectangle.jpg')}}" alt="Rectangular Image" class="custom-image">
                    <!-- Text inside the image container -->
                    <div class="text-in-image">
                        DRASS Taxonomy
                    </div>
                  
                    <div class="icon-in-image" >
                    <div class="graph-icon"><img src="{{URL('images/icon-white.png')}}" style="height:30px;width:30px;" ></div>
                    <!-- <i class="fa-solid fa-square-poll-vertical" ></i> -->
                    </div>
                    
                    <form class="form-inline second-search-bar">
                        <div class="input-group w-100">
                            <input type="text" class="form-control w-100" placeholder="Filter Taxanomy" style="border-radius: 0; width: 100%;"> <!-- Adjust the width here -->
                            <div class="input-group-append">
                                <button class="btn custom-button" type="submit">
                                    <i class="fas fa-search" ></i> <!-- Font Awesome Search Icon -->
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <!-- <div class="popup" onclick="myFunction()">Click me to toggle the popup!
 
</div> -->

<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-right lower-arrow"></i>TX01  Propulsion Systems

                    <div class="graph-icon custom-icon popup"  onclick="myFunction()"><img src="{{URL('images/icon-blue.png')}}" style="width:18px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                    <!-- </i> -->
                </div>
                
                
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i id="icon" class="fa-solid fa-angle-right" style="color:white;"></i>
                        TX01.1  Chemical Space Propulsion
                        
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                </div>

                
                <div class="faq-sub-answer">

                    <div class="faq-sub-answer-text">
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div class="divider"></div>
                        <div style="display:flex;" id="myClickableDiv">
                        
                            <i class="fa-solid fa-angle-right" style="margin-top:10px;color:white"></i><div >TX01.1.1 Integrated Systems and Ancillary Technologies
                            <div class="graph-icon custom-icon popup float-end"  style="align-items: end" onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:18px; margin-left:556px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                            </div>
                           
                         </div>
                         
                         
                        </div>
                                                
 
                        
                        <div style="display:flex;display:none;" id="myDIV">

                        
                        <div style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);" ><div  style="margin-left: 26px;font-size:12px;" >
                        <b>Example Technologies</b><br>
                        For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                        </div></div>
                        
                        </div>



                        <div class="divider"></div>
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div class="divider"></div>
                            <i class="fa-solid fa-angle-right" id="toggleButton" style="color:white;"></i> TX01.1.1 Integrated Systems and Ancillary Technologies
                        
                        <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:19px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>
<div class="divider"></div>



<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-right lower-arrow"></i>TX02 Flight Computing and Avionics

                    <div class="graph-icon custom-icon popup"  onclick="myFunction()"><img src="{{URL('images/icon-blue.png')}}" style="width:18px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                    <!-- </i> -->
                </div>
                
                
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-right rotate-icon"></i>
                        TX01.1  Chemical Space Propulsion
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                </div>

                
                <div class="faq-sub-answer">
                    <div class="faq-sub-answer-text">
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div style="display:flex;" id="myClickableDiv">
                            <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i><div >Chemical Space Propulsion 
                            <div class="graph-icon custom-icon popup float-end"  style="align-items: end" onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:18px; margin-left:749px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                            </div>
                           
                         </div>
                         
                         
                        </div>
                                                
 
                        
                        <div style="display:flex;display:none;" id="myDIV">
                        <div style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);" ><div  style="margin-left: 26px;" >
                        For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                        </div></div>
                        
                        </div>



                        <div class="divider"></div>
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                            <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space Propulsion
                        
                        <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>
<div class="divider"></div>





<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-right lower-arrow"></i>TX03 Aerospace Power and Energy Storage

                    <div class="graph-icon custom-icon popup"  onclick="myFunction()"><img src="{{URL('images/icon-blue.png')}}" style="width:18px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                    <!-- </i> -->
                </div>
                
                
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-right rotate-icon"></i>
                        TX01.1  Chemical Space Propulsion
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                </div>

                
                <div class="faq-sub-answer">
                    <div class="faq-sub-answer-text">
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div style="display:flex;" id="myClickableDiv">
                            <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i><div >Chemical Space Propulsion 
                            <div class="graph-icon custom-icon popup float-end"  style="align-items: end" onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:18px; margin-left:749px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                            </div>
                           
                         </div>
                         
                         
                        </div>
                                                
 
                        
                        <div style="display:flex;display:none;" id="myDIV">
                        <div style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);" ><div  style="margin-left: 26px;" >
                        For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                        </div></div>
                        
                        </div>



                        <div class="divider"></div>
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                            <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space Propulsion
                        
                        <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>
<div class="divider"></div>






<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-right lower-arrow"></i>TX04 Robotic Systems

                    <div class="graph-icon custom-icon popup"  onclick="myFunction()"><img src="{{URL('images/icon-blue.png')}}" style="width:18px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                    <!-- </i> -->
                </div>
                
                
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-right rotate-icon"></i>
                        TX01.1  Chemical Space Propulsion
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                </div>

                
                <div class="faq-sub-answer">
                    <div class="faq-sub-answer-text">
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div style="display:flex;" id="myClickableDiv">
                            <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i><div >Chemical Space Propulsion 
                            <div class="graph-icon custom-icon popup float-end"  style="align-items: end" onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:18px; margin-left:749px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                            </div>
                           
                         </div>
                         
                         
                        </div>
                                                
 
                        
                        <div style="display:flex;display:none;" id="myDIV">
                        <div style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);" ><div  style="margin-left: 26px;" >
                        For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                        </div></div>
                        
                        </div>



                        <div class="divider"></div>
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                            <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space Propulsion
                        
                        <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>
<div class="divider"></div>







<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-right lower-arrow"></i>TX05 Communications, Navigation, and Orbital Debris Tracking and Characterization Systems

                    <div class="graph-icon custom-icon popup"  onclick="myFunction()"><img src="{{URL('images/icon-blue.png')}}" style="width:18px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                    <!-- </i> -->
                </div>
                
                
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-right rotate-icon"></i>
                        TX01.1  Chemical Space Propulsion
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                </div>

                
                <div class="faq-sub-answer">
                    <div class="faq-sub-answer-text">
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div style="display:flex;" id="myClickableDiv">
                            <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i><div >Chemical Space Propulsion 
                            <div class="graph-icon custom-icon popup float-end"  style="align-items: end" onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:18px; margin-left:749px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                            </div>
                           
                         </div>
                         
                         
                        </div>
                                                
 
                        
                        <div style="display:flex;display:none;" id="myDIV">
                        <div style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);" ><div  style="margin-left: 26px;" >
                        For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                        </div></div>
                        
                        </div>



                        <div class="divider"></div>
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                            <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space Propulsion
                        
                        <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>
<div class="divider"></div>







<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-right lower-arrow"></i>TX06 Human Health, Life Support, and Habitation Systems

                    <div class="graph-icon custom-icon popup"  onclick="myFunction()"><img src="{{URL('images/icon-blue.png')}}" style="width:18px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                    <!-- </i> -->
                </div>
                
                
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-right rotate-icon"></i>
                        TX01.1  Chemical Space Propulsion
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                </div>

                
                <div class="faq-sub-answer">
                    <div class="faq-sub-answer-text">
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div style="display:flex;" id="myClickableDiv">
                            <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i><div >Chemical Space Propulsion 
                            <div class="graph-icon custom-icon popup float-end"  style="align-items: end" onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:18px; margin-left:749px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                            </div>
                           
                         </div>
                         
                         
                        </div>
                                                
 
                        
                        <div style="display:flex;display:none;" id="myDIV">
                        <div style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);" ><div  style="margin-left: 26px;" >
                        For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                        </div></div>
                        
                        </div>



                        <div class="divider"></div>
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                            <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space Propulsion
                        
                        <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>
<div class="divider"></div>







<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-right lower-arrow"></i>TX07 Exploration Destination Systems

                    <div class="graph-icon custom-icon popup"  onclick="myFunction()"><img src="{{URL('images/icon-blue.png')}}" style="width:18px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                    <!-- </i> -->
                </div>
                
                
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-right rotate-icon"></i>
                        TX01.1  Chemical Space Propulsion
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                </div>

                
                <div class="faq-sub-answer">
                    <div class="faq-sub-answer-text">
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div style="display:flex;" id="myClickableDiv">
                            <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i><div >Chemical Space Propulsion 
                            <div class="graph-icon custom-icon popup float-end"  style="align-items: end" onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:18px; margin-left:749px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                            </div>
                           
                         </div>
                         
                         
                        </div>
                                                
 
                        
                        <div style="display:flex;display:none;" id="myDIV">
                        <div style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);" ><div  style="margin-left: 26px;" >
                        For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                        </div></div>
                        
                        </div>



                        <div class="divider"></div>
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                            <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space Propulsion
                        
                        <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>
<div class="divider"></div>








<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-right lower-arrow"></i>TX08 Sensors and Instruments

                    <div class="graph-icon custom-icon popup"  onclick="myFunction()"><img src="{{URL('images/icon-blue.png')}}" style="width:18px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                    <!-- </i> -->
                </div>
                
                
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-right rotate-icon"></i>
                        TX01.1  Chemical Space Propulsion
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                </div>

                
                <div class="faq-sub-answer">
                    <div class="faq-sub-answer-text">
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div style="display:flex;" id="myClickableDiv">
                            <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i><div >Chemical Space Propulsion 
                            <div class="graph-icon custom-icon popup float-end"  style="align-items: end" onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:18px; margin-left:749px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                            </div>
                           
                         </div>
                         
                         
                        </div>
                                                
 
                        
                        <div style="display:flex;display:none;" id="myDIV">
                        <div style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);" ><div  style="margin-left: 26px;" >
                        For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                        </div></div>
                        
                        </div>



                        <div class="divider"></div>
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                            <i class="fa-solid fa-angle-right" id="toggleButton"></i> Chemical Space Propulsion
                        
                        <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>
<div class="divider"></div>






<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-right lower-arrow"></i>TX09 Entry, Descent, and Landing

                    <div class="graph-icon custom-icon popup"  onclick="myFunction()"><img src="{{URL('images/icon-blue.png')}}" style="width:18px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        
                    <!-- </i> -->
                </div>
                
                
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-right rotate-icon"></i>
                        TX01.1  Chemical Space Propulsion
                    </div>
                    <!-- <div class="divider"></div> -->
                    <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                </div>

                
                <div class="faq-sub-answer">
                    <div class="faq-sub-answer-text">
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                        <div style="display:flex;" id="myClickableDiv">
                            <i class="fa-solid fa-angle-right" style="margin-top:10px;"></i><div >Chemical Space Propulsion 
                            <div class="graph-icon custom-icon popup float-end"  style="align-items: end" onclick="myFunction()"><img src="{{URL('images/icon-black.png')}}" style="width:18px; margin-left:749px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                            </div>
                           
                         </div>
                         
                         
                        </div>
                                                
 
                        
                        <div style="display:flex;display:none;" id="myDIV">
                        <div style="margin-left: 0px;background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);" ><div  style="margin-left: 26px;" >
                        For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                        </div></div>
                        
                        </div>



                        <div class="divider"></div>
                        <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);cursor:pointer;">
                            <i class="fa-solid fa-angle-right" onclick="changeIcon()"id="icon"></i> Chemical Space Propulsion
                        
                        <div class="graph-icon custom-icon popup float-end"  onclick="myFunction()"><img src="{{URL('images/icon-yellow.png')}}" style="width:22px;" >
                    <!-- <i class="fa-solid fa-square-poll-vertical custom-icon popup" onclick="myFunction()"> -->
                        <span class="popuptext" id="myPopup">
                            <img src="{{URL('images/pop-up-graph.png')}}">
                        </span>
                        </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
</div>


















<div style="margin-top:100px"></div>

  <script>
//     function myFunctionChildSubanswer() {
//   var x = document.getElementById("myDIV");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//   } else {
//     x.style.display = "none";
//   }
// }

function changeIcon() {
    var icon = document.getElementById("icon").querySelector("i");
    
    if (icon.classList.contains("fa-angle-right")) {
        icon.classList.remove("fa-angle-right");
        icon.classList.add("fa-angle-down");
    } else if (icon.classList.contains("fa-angle-down")) {
        icon.classList.remove("fa-angle-down");
        icon.classList.add("fa-angle-right");
    }
}


    var clickableDiv = document.getElementById("myClickableDiv");

    clickableDiv.addEventListener("click", function() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    });
    // JavaScript function to toggle FAQ answers and the lower arrow
    function toggleAnswer(element) {
        const answer = element.nextElementSibling;
        const lowerArrow = element.querySelector('.lower-arrow');
        
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
            subAnswer.style.display = 'none';
             // Add the down arrow class
        } else {
            answer.style.display = 'block';
                  // Add the up arrow class
        }
    }




    function toggleSubAnswer(element) {
        const subAnswer = element.nextElementSibling;
        if (subAnswer.style.display === 'block') {
            subAnswer.style.display = 'none';
        } else {
            subAnswer.style.display = 'block';
        }
    }
    function openPopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'flex';
}

function closePopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'none';
}


const toggleButton = document.getElementById("toggleButton");
        const abcSection = document.getElementById("abcSection");

        // Add a click event listener to the button
        toggleButton.addEventListener("click", () => {
            // Toggle the display property of the encapsulated section
            if (abcSection.style.display === "none") {
                abcSection.style.display = "block";
            } else {
                abcSection.style.display = "none";
            }
        });


function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

</body>
</html>