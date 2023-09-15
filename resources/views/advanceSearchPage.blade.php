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

       
        .divider {
    width: 100%;
    height: 1px; 
    background-color: white;
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
            max-width: 600px;
            margin: 0 auto;
            font-size: 16px;
        }

        .qa-question {
            
            cursor: pointer;
        }

        .qa-answer {
            display: none;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .qa-question.active {
            background-color: #ddd;
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
                  
                    <div class="icon-in-image">
                    <i class="fa-solid fa-square-poll-vertical"></i>
                    </div>
                </div>
            </div>
        </div>





          <!-- QA Section -->


<!-- QA Section -->
<div class="faq-container">
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Sort Order</div>
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
  <div class="faq-question" onclick="toggleAnswer(this)">Words and Phrases</div>
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
        <div class="faq-question" onclick="toggleAnswer(this)">Status</div>
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
        <div class="faq-question" onclick="toggleAnswer(this)">Active Date</div>
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
        <div class="faq-question" onclick="toggleAnswer(this)">Technology Area</div>
        <div class="faq-answer" style="display: none;"> <div class="qa-container">
        <div class="qa-question">
            <h3 class="question">What is HTML?</h3>
            <div class="qa-answer">
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
        <div class="faq-question" onclick="toggleAnswer(this)">Q3: Can I customize the FAQ section further?</div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Q3: Can I customize the FAQ section further?</div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Q3: Can I customize the FAQ section further?</div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Q3: Can I customize the FAQ section further?</div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Q3: Can I customize the FAQ section further?</div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Q3: Can I customize the FAQ section further?</div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Q3: Can I customize the FAQ section further?</div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>

    <div class="divider"></div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Q3: Can I customize the FAQ section further?</div>
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
</script>


</body>
</html>