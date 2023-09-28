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
            width: calc(100% - 140px);
             /* Adjust the width based on your design */
        }

        .custom-image {
            width: 114.5%;
            height: 148px;
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
            top: 50px;
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
            background: linear-gradient(to right, #065386 4%, #E8E8E8 2%); /* White background for FAQ container */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            /* border-radius: 5px; */
        }

        .faq-item {
            margin-bottom: 10px;
        }

        .faq-question {
           
            font-size: 18px;
            /* margin-bottom: 10px; */
            margin-left:15px;
            padding-top:6px;
        }
        .faq-answer {
           padding: 10px;
            font-size: 16px;
            /* margin-bottom: 10px; */
            background: #FCFCFC;
        }

       
        .divider {
    width: 100%;
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
       

  

.square {
  height: 50px;
  width: 50px;
  background-color: #555;
}
.toggle-arrow {
            cursor: pointer;
            display: inline-block;
        }

        .toggle-arrow i {
            transition: transform 0.3s ease-in-out;
            animation: none; /* Disable the initial animation */
        }

        .toggle-arrow.collapsed i {
            transform: rotate(0deg);
        }

        .toggle-arrow:not(.collapsed) i {
            animation: rotateArrow 0.3s forwards;
        }

        @keyframes rotateArrow {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(90deg);
            }
        }

        .faq-question .fa-chevron-right {
    transition: transform 0.2s ease-in-out;
    transform: rotate(0deg);
}

.faq-question .fa-chevron-right.collapsed {
    transform: rotate(90deg);
}
.custom-icon-arrow{
    float: right;
    margin-top:10px;
    margin-right:15px;
    color:#065386;
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
                    <img src="{{URL('images/rectangle.jpg')}}" alt="Rectangular Image" class="custom-image">
                   
                    <div class="text-in-image">
                        Locations
                    </div>
                  <!--  -->
                </div>
            </div>
        </div>





          <!-- QA Section -->


<!-- QA Section -->

<div class="faq-container">


    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)"> <span class="float-left-text" style="float: left; margin-right: 10px;color: white; margin-left: 0;">1</span><span class="faq-question">Houston, Texas</span><i class="fas fa-chevron-right custom-icon-arrow"></i></div>
       
    </div>
</div>

<div class="divider"></div>

<div class="faq-container">


    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)"> <span class="float-left-text" style="float: left;color: white; margin-right: 10px; margin-left: 0;">2</span><span class="faq-question">Houston, Texas</span><i class="fas fa-chevron-right custom-icon-arrow"></i></div>
     
    </div>
</div>

<div class="divider"></div>

<div class="faq-container">


    <div class="faq-item">
        <div class="faq-question" > <span class="float-left-text" style="float: left;color: white; margin-right: 10px; margin-left: 0;">3</span><span class="faq-question">Houston, Texas</span><i class="fas fa-chevron-right custom-icon-arrow"></i></div>
      
    </div>
</div>

<div class="divider"></div>

<div class="faq-container">


    <div class="faq-item">
        <div class="faq-question" > <span class="float-left-text" style="float: left;color: white; margin-right: 10px; margin-left: 0;">4</span><span class="faq-question">Houston, Texas</span><i class="fas fa-chevron-right custom-icon-arrow"></i></div>
       
    </div>
</div>

<div class="divider"></div>

<div class="faq-container">


    <div class="faq-item">
        <div class="faq-question" > <span class="float-left-text" style="float: left;color: white; margin-right: 10px; margin-left: 0;">5</span><span class="faq-question">Houston, Texas</span><i class="fas fa-chevron-right custom-icon-arrow"></i></div>
      
    </div>
</div>

<div class="divider"></div>

<div class="faq-container">


    <div class="faq-item">
        <div class="faq-question" > <span class="float-left-text" style="float: left;color: white; margin-right: 10px; margin-left: 0;">6</span><span class="faq-question">Houston, Texas</span><i class="fas fa-chevron-right custom-icon-arrow"></i></div>
      
    </div>
</div>

<div class="divider"></div>

<div class="faq-container">


    <div class="faq-item">
        <div class="faq-question"> <span class="float-left-text" style="float: left;color: white; margin-right: 10px; margin-left: 0;">7</span><span class="faq-question">Houston, Texas</span><i class="fas fa-chevron-right custom-icon-arrow"></i></div>
      
    </div>
</div>

<div class="divider"></div>

<div class="faq-container">


    <div class="faq-item">
        <div class="faq-question" > <span class="float-left-text" style="float: left;color: white; margin-right: 10px; margin-left: 0;">8</span><span class="faq-question">Houston, Texas</span><i class="fas fa-chevron-right custom-icon-arrow"></i></div>
       
    </div>
</div>

<div class="divider"></div>

<div class="faq-container">


    <div class="faq-item">
        <div class="faq-question"> <span class="float-left-text" style="float: left;color: white; margin-right: 10px; margin-left: 0;">9</span><span class="faq-question">Houston, Texas</span><i class="fas fa-chevron-right custom-icon-arrow" ></i></div>
       
    </div>
</div>






</div>


    </div>




  <div style="margin-top:200px"></div>

<footer>
@include('footer')
</footer>

</body>
</html>