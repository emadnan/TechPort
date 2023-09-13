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
            width: 90%; /* Increase the width as needed */
            background: transparent; /* Make the background transparent */
            border: 1px solid white; /* Add a white border */
            border-radius: 6px; /* Make the borders round */
        }

        /* Style the input and button inside the second search bar */
        .second-search-bar input,
        .second-search-bar button {
            background: transparent; /* Make the background transparent */
            border: none; /* Remove borders */
            color: white !important; /* Set text color to white */
        }

        /* Style the placeholder (hint text) */
        .second-search-bar input::placeholder {
            color: white; /* Set hint text color to white */
            border-radius: 6px; /* Make the borders round */
        }

        .text-in-image {
            position: absolute;
            top: 18px;
            left: 10px;
            margin-left: 4%;
            color: white;
            font-size: 28px;
            /* font-weight: bold; */
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
            background: #f5f5f5;
            padding: 20px;
        }

        .faq-question {
            font-weight: bold;
            cursor: pointer; /* Add pointer cursor to questions */
        }

        .faq-answer {
            display: none; /* Hide answers by default */
            margin-left: 20px;
            cursor: pointer; /* Add left margin to indent sub-answers */
        }
        .faq-sub-answer {
            display: none; 
            margin-left: 20px; 
        }
        .expanded-color-container {
  position: relative;
  display: inline-block;
}

.solid-square {
  position: absolute;
  width: 40px; /* Adjust the size as needed */
  height: 40px; /* Adjust the size as needed */
  /* background-color: #FFFF00; Remove the single quotes around the color value */
  border-radius: 8px; /* Adjust the border radius as needed for a rounded square */
  display: flex;
  justify-content: center;
  align-items: center;
}

.fa-angle-down {
  color: black; /* Change the arrow color to black */
  font-size: 12px; /* Adjust the size as needed */
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
    </div>




    <!-- QA Section -->
<div class="body-container">


    <div class="row mt-4">
            <div class="col-md-12">
                <div class="faq-section">
                   
                    <!-- FAQ Question and Answer -->
                    <div class="faq-question" onclick="toggleAnswer(this)"><i class="fa-solid fa-angle-down"></i>How can I get started with this website?</div>
                    <div class="faq-answer" onclick="toggleSubAnswer(this)">
  <div class="expanded-color-container">
    <div class="solid-square"></div>
    <i class="fa-solid fa-angle-down"></i>
  </div>
  You can start by using the search bar to find what you're looking for.
</div>

                        <div class="faq-sub-answer">
                        <div>Sub-answer 1</div>
                        <div >Sub-answer 2</div>
                        </div>
                        
                    
                    
                    <div class="faq-question" onclick="toggleAnswer(this)"><i class="fa-solid fa-angle-down"></i>Is there a mobile app available?</div>
                    <div class="faq-answer" onclick="toggleSubAnswer(this)">
                    
                    <i class="fa-solid fa-angle-down"></i>
                       Yes, we have a mobile app available for both Android and iOS.</div>
                        <div class="faq-sub-answer"><div >Sub-answer 1</div>
                        <div >Sub-answer 2</div></div>
                        
                    
                    
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
    </div>
    <script>
        // JavaScript function to toggle FAQ answers
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
                
            } else {
                answer.style.display = 'block';
                
            }
        }
        function toggleSubAnswer(element){
            const subAnswer = element.nextElementSibling;
            if(subAnswer.style.display === 'block'){
                subAnswer.style.display = 'none';
                
            }  else{
                subAnswer.style.display = 'block';
            }
        }
    </script>

</body>
</html>