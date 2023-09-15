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



body {
            background-color: #fff; /* Grey background color */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0; /* White background for FAQ container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
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
            font-size: 16px;
            background-color: #f5f5f5; /* Light grey background color for answers */
            padding: 10px;
            border-radius: 5px;
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
        <div class="faq-question" onclick="toggleAnswer(this)">Q1: What is Lorem Ipsum?</div>
        <div class="faq-answer" style="display: none;">A1: Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Q2: Why do we use it?</div>
        <div class="faq-answer" style="display: none;">A2: It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
    </div>
    <!-- Add more FAQ items as needed -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleAnswer(this)">Q3: Can I customize the FAQ section further?</div>
        <div class="faq-answer" style="display: none;">A3: Yes, you can customize the FAQ section to match your specific design and content requirements. Feel free to add, remove, or modify FAQ items as needed. You can also adjust the styles to align with your website's branding.</div>
    </div>
</div>


    </div>




  
  <script>
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