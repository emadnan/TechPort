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
            padding: 20px;
            background-color: #E8E8E8; /* White background for FAQ container */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            /* border-radius: 5px; */
        }

        .faq-item {
            margin-bottom: 20px;
        }

        .faq-question {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
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
       

        
        .faq-toggle-icon {
    cursor: pointer;
    font-size: 18px; /* Adjust the font size as needed */
    transition: transform 0.3s ease; /* Add a smooth transition effect */
}

.faq-toggle-icon.rotate {
    transform: rotate(90deg); /* Rotate the icon when the answer is expanded */
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
                   
                    <div class="text-in-image">
                        Advance Search
                    </div>
                  <!--  -->
                </div>
            </div>
        </div>





          <!-- QA Section -->


<!-- QA Section -->
<div class="faq-container">
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Sort Order<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;"><div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: white; border: 1px solid grey; color: black;font-size: 14px;">
    Relevance
</a> 

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: white !important;">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
    </div>
</div></div>
    </div>
    <div class="divider"></div>
    <div class="faq-item">
  <div class="faq-question" onclick="toggleAnswer(this)">Words and Phrases<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
  <div class="faq-answer" style="display: none;">
    <div class="row">
      <div class="col-4"> <!-- Each radio button takes 4 columns (1/3 of the row) -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
          Items containing all search terms
          </label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
          Items containing any of the terms
          </label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
          <label class="form-check-label" for="flexRadioDefault3">
          Items containing the exact phrase
          </label>
        </div>
      </div>
    </div>
    <div class="input-group rounded" style="margin-top:10px;">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  
</div>
  </div>
</div>


    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Status<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">
        <div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Active
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
        <label class="form-check-label" for="flexCheckChecked2">
        Canceled
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
        <label class="form-check-label" for="flexCheckChecked3">
        Completed
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Planned
        </label>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
    

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Active Date<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;"> 
        <div class="row">
      <div class="col-2"> <!-- Each radio button takes 4 columns (1/3 of the row) -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
          Active after
          </label>
        </div>
      </div>
      <div class="col-2">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
          Active before
          </label>
        </div>
      </div>
      <div class="col-2">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
          <label class="form-check-label" for="flexRadioDefault3">
          Active between
          </label>
        </div>
      </div></div>
      <div class="container">
    <div class="row" style="margin-top: 10px;">
      
            <p>Start Month</p>
            <div class="btn-group">
          

<div class="form-group col-md-12">
                
                <select class="form-control" id="month-select">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
        </div>
        <div class="btn-group" style="margin-left: 10px;">
           <p>Start year</p>
           <div class="form-group" style="margin-left: 10px;">
           <select class="form-control" id="year-select">
               <option value="2023">2023</option>
               <option value="2022">2022</option>
               <option value="2021">2021</option>
               <!-- Add more years as needed -->
           </select>
       </div>
           </div>
            </div>
     

      
            
         
        
    </div>
</div>

    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Technology Area<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">
         <div class="qa-container">
         <div class="qa-question">
         
         <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
</div>
    <h3 class="question" style="margin-left: 15px;">What is HTML?</h3>
    <div class="qa-answer" onclick="toggleQASubAnswer(this)">
        HTML stands for HyperText Markup Language. It is the standard markup language for creating web pages.
    </div>
   
</div>

        <div class="qa-question">
            <h3 class="question">What is CSS?</h3>
            <div class="qa-answer">
                CSS stands for Cascading Style Sheets. It is used for styling the presentation of web pages written in HTML.
            </div>
        </div>

        <div class="qa-question">
            <h3 class="question">How can I learn web development?</h3>
            <div class="qa-answer">
                You can learn web development through online courses, tutorials, and by practicing your coding skills.
            </div>
        </div>
    </div></div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Locations<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">

        <!-- ///////////Multiple check box Starts -->
        <div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
        <label class="form-check-label" for="flexCheckChecked2">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
        <label class="form-check-label" for="flexCheckChecked3">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
        <label class="form-check-label" for="flexCheckChecked2">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
        <label class="form-check-label" for="flexCheckChecked3">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
        <label class="form-check-label" for="flexCheckChecked2">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
        <label class="form-check-label" for="flexCheckChecked3">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
        <label class="form-check-label" for="flexCheckChecked2">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
        <label class="form-check-label" for="flexCheckChecked3">
        Houstan, Texas
        </label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<!-- /////////Multiple Check Box Ends Here -->

</div>
    </div>
    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Technology Maturity<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">
        <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Start TRL
        </label>
      </div>
    </div>
    <br>
    <div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Min: <input type="text" id="name" name="name" value="10" style="width: 50px; border-radius: 5px;">
        </label>
      </div>
    </div> 
    <div class="col-md-8">
    <div class="slidecontainer">
        <input type="range" min="1" max="100" value="10" style="width: 100%;" id="myRange">
    </div>
    <!-- <p>Value: <span id="sliderValue">10</span></p> -->
    
</div>
    <div class="col-md-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Max: <input type="text" id="name" name="name" value="10" style="width: 50px; border-radius: 5px;">
        </label>
      </div>
    </div>
  </div>
</div>
<br>
<div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Current TRL
        </label>
      </div>
    </div>
    <div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Min: <input type="text" id="name" name="name" value="10" style="width: 50px; border-radius: 5px;">
        </label>
      </div>
    </div> 
    <div class="col-md-8">
    <div class="slidecontainer">
        <input type="range" min="1" max="100" value="10" style="width: 100%;" id="myRange">
    </div>
    <!-- <p>Value: <span id="sliderValue">10</span></p> -->
    
</div>
    <div class="col-md-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Max: <input type="text" id="name" name="name" value="10" style="width: 50px; border-radius: 5px;">
        </label>
      </div>
    </div>
  </div>
</div>




<br>
<div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Current TRL
        </label>
      </div>
    </div>




<div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Min: <input type="text" id="name" name="name" value="10" style="width: 50px; border-radius: 5px;">
        </label>
      </div>
    </div> 
    <div class="col-md-8">
    <div class="slidecontainer">
        <input type="range" min="1" max="100" value="10" style="width: 100%;" id="myRange">
    </div>
    <!-- <p>Value: <span id="sliderValue">10</span></p> -->
    
</div>
    <div class="col-md-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Max: <input type="text" id="name" name="name" value="10" style="width: 50px; border-radius: 5px;">
        </label>
      </div>
    </div>
  </div>
</div>
    </div>
    </div>

    

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Target Destinations<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">
        <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    
  </div>
</div>
    </div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Legal Entities<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">
        <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
    
    
    </div>
    </div>




    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Mission Type<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">
        <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
    </div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Centers and Facilities<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">
        <div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1" style="color: #065386;">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4" style="color: #065386;">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="grey-divider"></div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
        <label class="form-check-label" for="flexCheckChecked1">
        Houstan, Texas
        </label>
      </div>
    </div>
   
    
    <div class="col-md-6">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
        <label class="form-check-label" for="flexCheckChecked4">
        Houstan, Texas
        </label>
      </div>
    </div>
  </div>
</div>
    
    </div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Supporting Organizations<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">
        <div class="row">
      <div class="col-4"> <!-- Each radio button takes 4 columns (1/3 of the row) -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
          Filter by organization type
          </label>
        </div>
      </div>
      <div class="col-4">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
          Filter by organization name
          </label>
        </div>
      </div>
      </div>

      <br>
      <div class="rows">
      <button type="button" class="btn btn-secondary">Secondary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
      </div>
    </div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Programs<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Mission Directorates and Offices<i class="fas fa-chevron-right" style="float: right;margin-top:15px;"></i></div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>
    <div class="divider"></div>
<!-- Add more FAQ items as needed -->
<div class="faq-item">
    <div class="faq-question" onclick="toggleAnswer(this)">TechPort ID <i onclick="myFunction(this)" class="fas fa-chevron-right faq-toggle-icon"  style="float: right;margin-top:15px;" id="icon"></i></div>
    <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
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