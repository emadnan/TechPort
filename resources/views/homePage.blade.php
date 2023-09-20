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

    /* Nav bar ImageContainer Starts */
    .image-container {
        position: relative;
        left: 10%;
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
            width: 114%;
            height: auto;
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
            font-weight: bold;
            cursor: pointer;
            position: relative;
        }

        .faq-answer {
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

.fa-angle-down {
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
    margin-left: 30px;
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
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1;
    justify-content: center;
    align-items: center;
}

.popup-content {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}


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
    
<div class="container">
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
    <a href="{{ url('/AdvanceSearch') }}" class="btn custom-button btn-block">Advance Search</a>
</div>
        </div>
        <!-- Add a new row for the image container -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="custom-image-container">
                    <img src="{{URL('images/Rectangle.png')}}" alt="Rectangular Image" class="custom-image">
                    <!-- Text inside the image container -->
                    <div class="text-in-image">
                        DRASS Taxonomy
                    </div>
                  
                    <div class="icon-in-image">
                    <i class="fa-solid fa-square-poll-vertical"></i>
                    </div>
                    
                    <form class="form-inline second-search-bar">
                        <div class="input-group w-100">
                            <input type="text" class="form-control w-100" placeholder="Filter Taxanomy" style="border-radius: 0; width: 100%;"> <!-- Adjust the width here -->
                            <div class="input-group-append">
                                <button class="btn custom-button" type="submit">
                                    <i class="fas fa-search"></i> <!-- Font Awesome Search Icon -->
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>






<div class="row">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
    <i class="fa-solid fa-angle-down lower-arrow"></i>TX01  Propulsion Systems
    <i class="fa-solid fa-square-poll-vertical custom-icon"></i>
    
</div>
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    TX01.1  Chemical Space Propulsion
                </div>

                <div class="faq-sub-answer">
                    
                    <div class="faq-sub-answer-text">
                    <div><div class="solid-square"></div><i class="fa-solid fa-angle-down"></i>TX01.1  Chemical Space Propulsion</div>
                    <div style="background: linear-gradient(to right, #323E48 2%, #E8E8E8 2%);"><i class="fa-solid fa-angle-down"></i>TX01.1  Chemical Space Propulsion</div>
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
    <i class="fa-solid fa-angle-down lower-arrow"></i>TX02  Flight Computing and Avionics
    <i class="fa-solid fa-square-poll-vertical custom-icon"></i>
    
</div>
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    You can start by using the search bar to find what you're looking for.
                </div>

                <div class="faq-sub-answer">
                    
                    <div class="faq-sub-answer-text">
                    <div><div class="solid-square"></div><i class="fa-solid fa-angle-down"></i>Sub-answer 1</div>
                    <div><i class="fa-solid fa-angle-down"></i>Sub-answer 2</div>
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
    <i class="fa-solid fa-angle-down lower-arrow"></i>TX03  Aerospace Power and Energy Storage
    <i class="fa-solid fa-square-poll-vertical custom-icon"></i>
    
</div>
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    You can start by using the search bar to find what you're looking for.
                </div>

                <div class="faq-sub-answer">
                    
                    <div class="faq-sub-answer-text">
                    <div><div class="solid-square"></div><i class="fa-solid fa-angle-down"></i>Sub-answer 1</div>
                    <div><i class="fa-solid fa-angle-down"></i>Sub-answer 2</div>
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
    <i class="fa-solid fa-angle-down lower-arrow"></i>TX04  Robotic Systems
    <i class="fa-solid fa-square-poll-vertical custom-icon"></i>
    
</div>
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    You can start by using the search bar to find what you're looking for.
                </div>

                <div class="faq-sub-answer">
                    
                    <div class="faq-sub-answer-text">
                    <div><div class="solid-square"></div><i class="fa-solid fa-angle-down"></i>Sub-answer 1</div>
                    <div><i class="fa-solid fa-angle-down"></i>Sub-answer 2</div>
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
    <i class="fa-solid fa-angle-down lower-arrow"></i>TX05  Communications, Navigation, and Orbital Debris Tracking and Characterization Systems
    <i class="fa-solid fa-square-poll-vertical custom-icon"></i>
    
</div>
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    You can start by using the search bar to find what you're looking for.
                </div>

                <div class="faq-sub-answer">
                    
                    <div class="faq-sub-answer-text">
                    <div><div class="solid-square"></div><i class="fa-solid fa-angle-down"></i>Sub-answer 1</div>
                    <div><i class="fa-solid fa-angle-down"></i>Sub-answer 2</div>
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
    <i class="fa-solid fa-angle-down lower-arrow"></i>TX06  Human Health, Life Support, and Habitation Systems
    <i class="fa-solid fa-square-poll-vertical custom-icon"></i>
    
</div>
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    You can start by using the search bar to find what you're looking for.
                </div>

                <div class="faq-sub-answer">
                    
                    <div class="faq-sub-answer-text">
                    <div><div class="solid-square"></div><i class="fa-solid fa-angle-down"></i>Sub-answer 1</div>
                    <div><i class="fa-solid fa-angle-down"></i>Sub-answer 2</div>
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
    <i class="fa-solid fa-angle-down lower-arrow"></i>TX07  Exploration Destination Systems
    <i class="fa-solid fa-square-poll-vertical custom-icon"></i>
    
</div>
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    You can start by using the search bar to find what you're looking for.
                </div>

                <div class="faq-sub-answer">
                    
                    <div class="faq-sub-answer-text">
                    <div><div class="solid-square"></div><i class="fa-solid fa-angle-down"></i>Sub-answer 1</div>
                    <div><i class="fa-solid fa-angle-down"></i>Sub-answer 2</div>
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
    <i class="fa-solid fa-angle-down lower-arrow"></i>TX08  Sensors and Instruments
    <i class="fa-solid fa-square-poll-vertical custom-icon"></i>
    
</div>
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    You can start by using the search bar to find what you're looking for.
                </div>

                <div class="faq-sub-answer">
                    
                    <div class="faq-sub-answer-text">
                    <div><div class="solid-square"></div><i class="fa-solid fa-angle-down"></i>Sub-answer 1</div>
                    <div><i class="fa-solid fa-angle-down"></i>Sub-answer 2</div>
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
    <i class="fa-solid fa-angle-down lower-arrow"></i>TX09  Entry, Descent, and Landing
    <i class="fa-solid fa-square-poll-vertical custom-icon"></i>
    
</div>
                <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    <div class="expanded-color-container">
                        <div class="solid-square"></div>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    You can start by using the search bar to find what you're looking for.
                </div>

                <div class="faq-sub-answer">
                    
                    <div class="faq-sub-answer-text">
                    <div><div class="solid-square"></div><i class="fa-solid fa-angle-down"></i>Sub-answer 1</div>
                    <div><i class="fa-solid fa-angle-down"></i>Sub-answer 2</div>
                    </div>
                </div>
            </div>

            <!-- Add more FAQ items as needed -->
            
        </div>
    </div>
</div>
  
  <script>
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
</script>


</body>
</html>