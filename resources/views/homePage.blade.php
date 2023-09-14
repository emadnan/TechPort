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
    margin-left: 20px;
    cursor: pointer;
    background: linear-gradient(to right, #FFA800 2%, #E8E8E8 2%); /* Apply yellow background gradient */
}

/* Adjust the FAQ sub-answer styles */
.faq-sub-answer {
    display: none;
    margin-left: 20px;
    background: linear-gradient(to right, #FFA800 2%, #E8E8E8 2%); /* Apply the same yellow background gradient */
}
.faq-sub-answer-text{
    margin-left: 50px;
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





          <!-- QA Section -->


<!-- QA Section -->

<div class="row mt-4">
    <div class="col-md-12">
        <div class="faq-section">
            <!-- FAQ Question and Answer -->
            <div class="faq-container">
                <div class="faq-question" onclick="toggleAnswer(this)">
                    <i class="fa-solid fa-angle-down lower-arrow"></i>How can I get started with this website?
                    <i class="fa-solid fa-arrow-right"></i> <!-- Add your right arrow icon here -->
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
                    <div>Sub-answer 1</div>
                    <div>Sub-answer 2</div>
                    </div>
                </div>
            </div>

            <!-- Add more FAQ items as needed -->
            
        </div>
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
            lowerArrow.classList.remove('fa-angle-up'); // Remove the up arrow class
            lowerArrow.classList.add('fa-angle-down');    // Add the down arrow class
        } else {
            answer.style.display = 'block';
            lowerArrow.classList.remove('fa-angle-down'); // Remove the down arrow class
            lowerArrow.classList.add('fa-angle-up');      // Add the up arrow class
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
</script>


</body>
</html>