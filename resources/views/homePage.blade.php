@include('bootStrap')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{-- <link rel="stylesheet" type="text/css" href="https://techport.nasa.gov/styles/project-viewer.css?v=3.12.1/styles/project-viewer.css?v=3.12.1" /> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

<title>TechPort</title>

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

        .btn_primary:hover {
            color: white;
        }


      

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
            width: auto;
            /* Adjust the width as needed */
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
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
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
            width: 116.4%;
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
            font-size: 30px;


        }

        .icon-in-image {
            position: absolute;
            top: 23px;
            right: 10px;
            margin-right: 3.5%;
            color: white;
            font-size: 1.7em;


        }
        .graph-icon img  {
            height: 40px;
            width: 40px;
        }

        .graph-image {
            width: 24px;
            margin: 5px;
        }
        .yellow-graph-image
        {
            margin: 2px;
            width: 31px;
        }


        .faq-container {
            max-width: 100%;
            margin: 0 auto;
            /* padding-left: 10px; */
            padding-top: 0px;
            background: linear-gradient(to right, #065386 3.5%, #E8E8E8 2%);
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* border-radius: 5px; */
        }

        .faq-item {
            /* margin-bottom: 20px; */
        }

        .faq-question {

            cursor: pointer;
            font-size: 18px;


        }
        .form-control{

            height: 35px;
            font-size: 20px;
        }
        .graph-pop {
            border: 1px solid rgba(6, 83, 134, 1);
            position: absolute;
            right: -1px;
            background: white;
            width:250px;
            margin-top: -3px;
            font-size: 14px;
        }
        .graph-pop button{
            font-size: 12px;
            margin-bottom:23px;
        }
        .graph-pop h5{
            font-size: 12px;
            margin-top:5px;
            margin-bottom: 1rem;
        }
        @media screen and (min-width:1440px) {
            .faq-answer {
                margin-left: 40px;

                /* padding: 10px; */
                /* background-color: #f9f9f9; */
                /* border-left: 20px solid #007bff; */
                background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 18px;

            }

            .faq-subanswer {

                padding-left: 0px;
                margin-left: 38px;
                background: linear-gradient(to right, #323E48 3.5%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 18px;


            }
            .faq-question span{
            margin-left:0px;
            padding-left: 14px;
          }
          .faq-subanswer span{
            margin-left:0px;
           padding-left: 14px;
        }
        .faq-answer span{
           padding-left: 14px;
        }

            .fa-angle-right {
                color: white;
                padding-left: 10px;
                padding-bottom:5px;
                padding-top:5px;
                font-size: 24px;
                margin-bottom: 0px;
                margin-top: 0px;
            }

            .fa-angle-down {
                color: white;
                padding-left:5px;
                font-size: 24px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .custom-image {

                width: 114.4%;

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

        }

        @media screen and (max-width:1440px) {
            .faq-answer {
                margin-left: 40px;
                /* padding: 10px; */
                /* background-color: #f9f9f9; */
                /* border-left: 20px solid #007bff; */
                background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 18px;

            }

            .faq-subanswer {

                padding-left: 0px;
                margin-left: 38px;
                background: linear-gradient(to right, #323E48 3.5%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 18px;


            }
            .faq-question span{
            margin-left:0px;
            padding-left: 14px;
          }
          .faq-subanswer span{
            margin-left:0px;
           padding-left: 14px;
        }
        .faq-answer span{
           padding-left: 14px;
        }

            .fa-angle-right {
                color: white;
                padding-left: 10px;
                font-size: 24px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .fa-angle-down {
                color: white;
                padding-left: 8px;
                font-size: 24px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .custom-image {

                width: 114.4%;

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

        }

        @media screen and (min-width:1025px) and (max-width:1200px) {
           
            .faq-container {
            max-width: 100%;
            margin: 0 auto;
            /* padding-left: 10px; */
            padding-top: 0px;
            background: linear-gradient(to right, #065386 3.8%, #E8E8E8 2%);
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* border-radius: 5px; */
        }

           
            .faq-answer {
                margin-left: 36px;

                /* padding: 10px; */
                /* background-color: #f9f9f9; */
                /* border-left: 20px solid #007bff; */
                background: linear-gradient(to right, #FFA800 3.8%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 18px;

            }

            .faq-subanswer {

                padding-left: 0px;
                margin-left: 35px;
                background: linear-gradient(to right, #323E48 3.8%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 18px;


            }
            .faq-question span{
            margin-left:0px;
            padding-left: 9px;
          }
          .faq-subanswer span{
            margin-left:0px;
           padding-left: 9px;
        }
        .faq-answer span{
           padding-left: 9px;
        }

            .fa-angle-right {
                color: white;
                padding-left: 9px;
                font-size: 24px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .fa-angle-down {
                color: white;
                padding-left: 5px;
                font-size: 24px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .custom-image {

                width: 117.7%;

            }

        }



        @media (max-width:1024px) {
            .faq-answer {
                margin-left: 34px;

                /* padding: 10px; */
                /* background-color: #f9f9f9; */
                /* border-left: 20px solid #007bff; */
                background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 18px;

            }

            .faq-subanswer {

                padding-left: 0px;
                margin-left: 32px;
                /* background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%); */
                cursor: pointer;
                font-size: 18px;


            }
            .faq-question span{
            margin-left:0px;
            padding-left: 7px;
          }
          .faq-subanswer span{
            margin-left:0px;
           padding-left: 7px;
        }
        .faq-answer span{
           padding-left: 7px;
        }

            .fa-angle-right {
                color: white;
                padding-left: 8px;
                font-size: 24px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .fa-angle-down {
                color: white;
                padding-left: 6px;
                font-size: 24px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .custom-image {

                width: 117.8%;
            }

        }

        @media (max-width:991px) {
           
            .faq-container {
            max-width: 100%;
            margin: 0 auto;
            /* padding-left: 10px; */
            padding-top: 0px;
            background: linear-gradient(to right, #065386 4%, #E8E8E8 2%);
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* border-radius: 5px; */
        }
          .faq-question {

            cursor: pointer;
            font-size: 15px;
          }
            .faq-answer {
                margin-left: 29px;

                /* padding: 10px; */
                /* background-color: #f9f9f9; */
                /* border-left: 20px solid #007bff; */
                background: linear-gradient(to right, #FFA800 4%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 15px;

            }

            .faq-subanswer {

                padding-left: 0px;
                margin-left: 27px;
                background: linear-gradient(to right, #323E48 4%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 15px;


            }

            .faq-question span{
            margin-left:0px;
            padding-left: 7px;
          }
          .faq-subanswer span{
            margin-left:0px;
           padding-left: 7px;
        }
        .faq-answer span{
           padding-left: 7px;
        }

            .fa-angle-right {
                color: white;
                padding-left: 6px;
                font-size: 20px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .fa-angle-down {
                color: white;
                padding-left: 5px;
                font-size: 20px;
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .custom-image {

                width: 125.6%;
            }

            .custom-button {
            font-size: 0.9rem;
        }

        .text-in-image {
            position: absolute;
            top: 12px;
            left: 10px;
            margin-left: 4%;
            color: white;
            font-size: 17px;


        }

        .icon-in-image {
            position: absolute;
            top: 9px;
            right: 10px;
            margin-right: 3.5%;
            color: white;
            font-size: 1.7em;


        }
        .graph-icon img  {
            height: 30px;
            width: 30px;
        }

        }


        @media (max-width:767px) {
          
            .custom-button {
            font-size: 0.7rem;
        }
            .faq-container {
            max-width: 100%;
            margin: 0 auto;
            /* padding-left: 10px; */
            padding-top: 0px;
            background: linear-gradient(to right, #065386 4%, #E8E8E8 2%);
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* border-radius: 5px; */
        }
          .faq-question {

            cursor: pointer;
            font-size: 11px;
          }
          .faq-question span{
            margin-left:0px;
            padding-left: 7px;
          }
          .faq-subanswer span{
            margin-left:0px;
           padding-left: 7px;
        }
        .faq-answer span{
           padding-left: 7px;
        }
           
            .faq-answer {
                margin-left: 21px;

                /* padding: 10px; */
                /* background-color: #f9f9f9; */
                /* border-left: 20px solid #007bff; */
                background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%);
                cursor: pointer;
                font-size: 11px;

            }
            .yellow-graph-image
        {
            margin-right: 3px; 
            margin-top: 2px;
            width: 21px;
        }
        .graph-pop {
            border: 1px solid rgba(6, 83, 134, 1);
            position: absolute;
            right: -1px;
            background: white;
            width:250px;
            margin-top: -3px;
            font-size: 14px;
        }
        .graph-pop button{
            font-size: 12px;
            margin-bottom:23px;
        }
        .graph-pop h5{
            font-size: 12px;
            margin-top:5px;
            margin-bottom: 1rem;
        }
      .graph-pop .row{
          flex-wrap: nowrap;
      }
            .faq-subanswer {

                padding-left: 0px;
                margin-left: 18px;
                /* background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%); */
                cursor: pointer;
                font-size: 11px;


            }

            .fa-angle-right {
                color: white;
                padding-left: 5px;
                font-size: 17px;
                margin-bottom: 5px;
                margin-top: 5px;
            }

            .fa-angle-down {
                color: white;
                padding-left: 2px;
                font-size: 17px;
                margin-bottom: 5px;
                margin-top: 5px;
            }
            .graph-image{
                margin-top: 5px;
                margin-right:5px;
                width: 17px;
            }

            .custom-image {

                width: 138%;
            }

            .text-in-image {
            position: absolute;
            top: 12px;
            left: 10px;
            margin-left: 4%;
            color: white;
            font-size: 13px;
        }

        .icon-in-image {
            position: absolute;
            top: 9px;
            right: 10px;
            margin-right: 3.5%;
            color: white;
            font-size: 1.7em;


        }
     
        .graph-icon img  {
            height: 30px;
            width: 30px;
        }
          .form-control{

            height: 25px;
            font-size: 18px;
        }
        .second-search-bar {
            position: absolute;
            margin-top: -4%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            /* background: transparent; */
            border: 1px solid white;
            border-radius: 6px;
            height: 25px;
        }
        
        .column_chart{
           overflow: auto;

        }

        }

        @media (max-width:574px) {
          
          .search-local {
              padding-left: 0;
              column-gap: 0.25rem;
          }

          .search-local button {
              width: 10rem;
          }

          .search-local button .search-icon {
              display: block;
              margin-inline: auto;
              color: var(--white);
              font-size: 3rem;
              pointer-events: none;
          }

          input[type="text"]::placeholder {
              font-size: 10px;

          }
      /* button a {
      display: block;
} */

        .custom-button {
        font-size: 0.7rem;
    }
        .faq-container {
        max-width: 100%;
        margin: 0 auto;
        /* padding-left: 10px; */
        padding-top: 0px;
        background: linear-gradient(to right, #065386 19px, #E8E8E8 2%);
        cursor: pointer;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        /* border-radius: 5px; */
    }
      .faq-question {

        cursor: pointer;
        font-size: 9px;
      }
      .faq-question span{
        margin-left:0px;
        padding-left: 5px;
      }
      .faq-subanswer span{
        margin-left:0px;
       padding-left: 7px;
    }
    .faq-answer span{
       padding-left: 7px;
    }
       
        .faq-answer {
            margin-left: 20px;

            /* padding: 10px; */
            /* background-color: #f9f9f9; */
            /* border-left: 20px solid #007bff; */
            background: linear-gradient(to right, #FFA800 19px, #E8E8E8 2%);
            cursor: pointer;
            font-size: 9px;

        }
        .yellow-graph-image
    {
        margin-right: 3px; 
        margin-top: 2px;
        width: 21px;
    }
    .graph-pop {
            border: 1px solid rgba(6, 83, 134, 1);
            position: absolute;
            right: -1px;
            background: white;
            width:250px;
            margin-top: -3px;
            font-size: 14px;
        }
        .graph-pop button{
            font-size: 12px;
            margin-bottom:23px;
        }
        .graph-pop h5{
            font-size: 12px;
            margin-top:5px;
            margin-bottom: 1rem;
        }
      .graph-pop .row{
          flex-wrap: nowrap;
      }

        .faq-subanswer {

            padding-left: 0px;
            margin-left: 20px;
            background: linear-gradient(to right, #323E48 19px, #E8E8E8 2%);
            cursor: pointer;
            font-size: 9px;


        }

        .fa-angle-right {
            color: white;
            padding-left: 5px;
            font-size: 12px;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        .fa-angle-down {
            color: white;
            padding-left: 4px;
            font-size: 12px;
            margin-bottom: 5px;
            margin-top: 5px;
        }
        .graph-image{
            margin-top: 5px;
            margin-right:5px;
            width: 17px;
        }

        .custom-image {

            width: 134.6%;
        }

        .custom-image-container {
    width: 74.3%;
}
        .text-in-image {
        position: absolute;
        top: 5px;
        left: 10px;
        margin-left: 4%;
        color: white;
        font-size: 12px;
    }

    .icon-in-image {
        position: absolute;
        top: 1px;
        right: 10px;
        margin-right: 3.5%;
        color: white;
        font-size: 1.7em;


    }
 
    .graph-icon img  {
        height: 25px;
        width: 25px;
    }
      .form-control{

        height: 25px;
        font-size: 18px;
    }
    .second-search-bar {
        position: absolute;
        margin-top: -4%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        /* background: transparent; */
        border: 1px solid white;
        border-radius: 6px;
        height: 25px;
    }

    }

        @media (max-width:425px) {
          
            .search-local {
                padding-left: 0;
                column-gap: 0.25rem;
            }

            .search-local button {
                width: 10rem;
            }

            .search-local button .search-icon {
                display: block;
                margin-inline: auto;
                color: var(--white);
                font-size: 3rem;
                pointer-events: none;
            }

            input[type="text"]::placeholder {
                font-size: 10px;

            }
        /* button a {
        display: block;
} */

          .custom-button {
          font-size: 0.7rem;
      }

      .custom-image-container {
    width: 64.6%;
}
          .faq-container {
          max-width: 100%;
          margin: 0 auto;
          /* padding-left: 10px; */
          padding-top: 0px;
          background: linear-gradient(to right, #065386 16px, #E8E8E8 2%);
          cursor: pointer;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
          /* border-radius: 5px; */
      }
        .faq-question {

          cursor: pointer;
          font-size: 9px;
        }
        .faq-question span{
          margin-left:0px;
          padding-left: 5px;
        }
        .faq-subanswer span{
          margin-left:0px;
         padding-left: 7px;
      }
      .faq-answer span{
         padding-left: 7px;
      }
         
          .faq-answer {
              margin-left: 17px;

              /* padding: 10px; */
              /* background-color: #f9f9f9; */
              /* border-left: 20px solid #007bff; */
              background: linear-gradient(to right, #FFA800 16px, #E8E8E8 2%);
              cursor: pointer;
              font-size: 9px;

          }
          .yellow-graph-image
      {
          margin-right: 3px; 
          margin-top: 2px;
          width: 21px;
      }
      .graph-pop {
            border: 1px solid rgba(6, 83, 134, 1);
            position: absolute;
            right: -1px;
            background: white;
            width:250px;
            margin-top: -3px;
            font-size: 14px;
        }
        .graph-pop button{
            font-size: 12px;
            margin-bottom:23px;
        }
        .graph-pop h5{
            font-size: 12px;
            margin-top:5px;
            margin-bottom: 1rem;
        }
      .graph-pop .row{
          flex-wrap: nowrap;
      }
          .faq-subanswer {

              padding-left: 0px;
              margin-left: 17px;
              background: linear-gradient(to right, #323E48 16px, #E8E8E8 2%);
              cursor: pointer;
              font-size: 9px;


          }

          .fa-angle-right {
              color: white;
              padding-left: 3px;
              font-size: 12px;
              margin-bottom: 5px;
              margin-top: 5px;
          }

          .fa-angle-down {
              color: white;
              padding-left: 2px;
              font-size: 12px;
              margin-bottom: 5px;
              margin-top: 5px;
          }
          .graph-image{
              margin-top: 5px;
              margin-right:5px;
              width: 17px;
          }

          .custom-image {

              width: 154.8%;
          }

          .text-in-image {
          position: absolute;
          top: 5px;
          left: 10px;
          margin-left: 4%;
          color: white;
          font-size: 12px;
      }

      .icon-in-image {
          position: absolute;
          top: 1px;
          right: 10px;
          margin-right: 3.5%;
          color: white;
          font-size: 1.7em;


      }
   
      .graph-icon img  {
          height: 25px;
          width: 25px;
      }
        .form-control{

          height: 25px;
          font-size: 18px;
      }
      .second-search-bar {
          position: absolute;
          margin-top: -4%;
          left: 50%;
          transform: translate(-50%, -50%);
          width: 90%;
          /* background: transparent; */
          border: 1px solid white;
          border-radius: 6px;
          height: 25px;
      }

      }



        /* .faq-answer {
            margin-left: 3.65%;
            display: none; */
        /* padding: 10px; */
        /* background-color: #f9f9f9; */
        /* border-left: 20px solid #007bff; */
        /* background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%);
            cursor: pointer;
            font-size: 18px;
            }  */

        .faq-answer.active {
            display: block;
        }

        /* #sub-answer-description.active {
            display: block;
        } */

        .sub-answer-description {
            margin-left: 1px;
            display: none;
            
            
        }

        /*
        .faq-subanswer {
            display: none;
            padding-left: 3.3%;
            margin-left: 3.65%;
            background: linear-gradient(to right, #FFA800 3.5%, #E8E8E8 2%);
            cursor: pointer;
            font-size: 18px;
            
            

        } */

        .faq-subanswer.active {
            display: block;
        }

        /*
         .fa-angle-right {
            color: white;
            padding-left: 10px;
            font-size: 24px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .fa-angle-down {
            color: white;
            padding-left: 8px;
            font-size: 24px;
            margin-bottom: 10px;
            margin-top: 10px;
        } */


        .divider {
            width: 100%;
            height: 1px;
            background-color: white;
        }
        .breadCrumbs {
        list-style: none;
        margin-top: -11px;
        margin-bottom: 0px;
    
    }

    .breadCrumbs-items {
        display: inline;
        font-size: 13px;
        font-weight: 600;
        color: #065386;
       
    }
    .breadCrumbs-items a{
        font-weight: 600;
        color: #065386;
    }
    .breadCrumbs-items a:hover{
        text-decoration: none;
        
    }

    .highlight {
    background-color: yellow;
    font-weight: bold;
}

#noRecordMsg{
    padding-left: 40%;
    font-weight: bolder;
    font-size: larger;
    padding-top: 20px;
    padding-bottom: 20px;
}

 
    </style>
</head>


<body>

    <div class="container" style="width: 100%">
        @include('header')

        <ul class="breadCrumbs px-0">
            <li class="breadCrumbs-items"><a href="{{url('/')}}">Home</a></li>
            <li class="breadCrumbs-items">></li>
        </ul>


        {{-- section of Drass Taxonomy with background image --}}
        <div class="row mt-1">
            <div class="col-md-12">
                <div class="custom-image-container w-80">
                    <img src="{{ asset('images/rectangle.jpg') }}" alt="Rectangular Image" class="custom-image">
                    <!-- Text inside the image container -->
                    <div class="text-in-image">
                        <b>DRASS Taxonomy</b>
                    </div>
                    <div class="icon-in-image">
                        <div class="graph-icon"><img src="{{ asset('images/icon-white.png') }}"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Row for second search bar --}}
        <div class="row">
            <div class="col-md-12">
                {{-- <form class="form-inline second-search-bar"> --}}
                    <div class="input-group  second-search-bar ">
                        <input type="text" id="filterTax" class="form-control w-100" placeholder="Filter Taxanomy"
                            style="border-radius: 0; width: 100%;  background-color: rgba(0, 0, 0, 0); ">
                        <!-- Adjust the width here -->

                        {{-- <button class="btn" type="submit" style="background-color: rgba(0, 0, 0, 0) !important;">
                            <i class="fas fa-search"></i>
                        </button> --}}
                    </div>
                {{-- </form> --}}
            </div>
        </div>
        {{-- end --}}


        <!-- <div class="faq-container w-100 m-0"> -->
        <div class="container border">
            <div id="noRecordMsg" style="display:none;">
                <p>No Records To Show</p>
            </div>

@foreach ($techs as $tech)
    <div class="row border-top tech_area ">
        <div onclick="toggleAnswers(this)"  style = 'width:30px; background-color: #065386 ;'>
             <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class="col p-0">
            <div style="display:flex; justify-content: space-between; align-items: center;">
                <div class="pl-2 area_text">{{$tech-> techarea}}</div> 
                <div>
                    <img src="{{ asset('images/icon-blue.png') }}" alt="" class="float-right graph-image" onclick="showimage(this)">
                    <div class=" graph-pop" style="display: none;  z-index:{{1000 - $loop->index}}; ">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>{{$tech-> techarea}}
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-top:2px; padding-bottom:0px;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style =" margin-right: 2px; width: 50%; margon-bottom:1px;"
                                        onclick="hideimage(this)">
                                </div>
                            </div>
                            <section class="mx-2"
                                style="color:rgba(6, 83, 134, 1); font-weight:600;">Technology Maturity
                                (TRL)</section>


                            <div class="row m-0">
                               
                                <div class="col" >
                                    <div id="columnchart_area_{{$tech->id}}" ></div>
                                    {{-- <img style=" margin:30px" src="{{ asset('images/graph.png') }}"width="100%"> --}}
                                </div>
                            </div>
                            
                            <h5 style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px; font-size:12px;">
                                Projects linked to this taxonomy</h5>
                            <button class="btn"
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ route('searchProjectsByTechArea', ['id' => $tech->id]) }}">Find Linked
                                    Projects</a></button>
                    </div>
                </div>
            </div>
            <div class="container" style="display:none;">
            @php
                $sectorID = [];
            @endphp
            @foreach ($tech->techsectors as $techsector )
            @if ( in_array( $techsector->id, $sectorID))
            @else
            <div class="row border-top tech_sector">
                <div onclick="toggleAnswers(this)" style = 'width:30px; background-color: #FFA800 ;'>
                    <i  class="fa-solid fa-angle-right"></i>
                </div>
                <div class="col p-0">
                    <div style="display:flex;  justify-content: space-between; align-items: center;">
                        <div class="pl-2 sector_text">{{$techsector-> techsector}}</div> 
                        <div>
                            <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right  yellow-graph-image" onclick="showimage(this)">
                            <div class="  graph-pop" style="display: none;  z-index:{{999 - $loop->index}}; ">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>{{$techsector->techsector}}
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-bottom:0px;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style=" margin-right: 2px; width: 50%; margon-bottom:1px;"
                                        onclick="hideimage(this)">
                                </div>
                            </div>
                            <section class="mx-2"
                                style="color:rgba(6, 83, 134, 1); font-weight:600;">Technology Maturity
                                (TRL)</section>


                            <div class="row my-0">
                                <div class="col">
                                    <div id="columnchart_sector_{{$techsector->id}}" ></div>
                                    {{-- <img style=" margin:30px" src="{{ asset('images/graph.png') }}"
                                        class=" float-right my-0" width="100%"> --}}
                                </div>
                            </div>
                            <h5
                                style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px;">
                                Projects linked to this taxonomy</h5>
                            <button class="btn"
                                style="margin-left:10px;color:white; background: #FFA800;"><a
                                    style="color:white;" href="{{ route('searchProjectsByTechSector', ['id' => $techsector->id]) }}">Find Linked
                                    Projects</a></button>
                        </div>
                        </div>
                    </div>
                    <div class="container" style="display:none">
                    @foreach ($techsector->techniches as $techniche)
                    <div class="row border-top tech_niche">
                        <div onclick="toggleAnswers(this)" style = 'width:30px ; background: #323E48'>
                            <i  class="fa-solid fa-angle-right"></i>
                       </div>
                        <div class="col p-0">
                            <div style="display:flex;  justify-content: space-between;  align-items: center;">
                                <div class="pl-2 niche_text">{{$techniche-> techniche}}</div> 
                                <div>
                                    <img src="{{ asset('images/icon-black.png') }}" alt="" class="float-right graph-image" onclick="showimage(this)">
                                    <div class="graph-pop" style="display: none;  z-index:{{998 - $loop->index}};">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>{{$techniche-> techniche}}
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:3px; padding-bottom:0px;">
                                            <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                                style=" margin-right: 2px; width: 50%; margon-bottom:1px;"
                                                onclick="hideimage(this)">
                                        </div>
                                    </div>
                                    <section class="my-2 mx-2"
                                        style="color:rgba(6, 83, 134, 1); font-weight:600;">Technology
                                        Maturity
                                        (TRL)</section>


                                    <div class="row my-">
                                        <div class="col-10">
                                    <div id="columnchart_niche_{{$techniche->id}}" ></div>
                                    {{-- <img style=" margin:30px" src="{{ asset('images/graph.png') }}"
                                                class=" float-right my-0" width="100%"> --}}
                                         </div>
                                    </div>
                                    <h5
                                        style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px;">
                                        Projects linked to this taxonomy</h5>
                                    <button class="btn"
                                        style="margin-left:10px;color:white; background: #323E48;"><a
                                            style="color:white;" href="{{ route('searchProjectsByTechNiche', ['id' => $techniche->id]) }}">Find Linked
                                            Projects</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="container" style="display:none">
                                <div class="border-top niche_description" style="font-weight:bold">Description</div>
                                <section>
                                    {{$techniche->technichedescription}}
                                </section>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
            @php
                array_push($sectorID, $techsector->id)
            @endphp
            @endif
            @endforeach
            </div>
        </div>
    </div>
@endforeach
</div>
</div>

    <div style="margin-top:300px"></div>

    <footer>
    @include('footer')
</footer>
 
<script>
        function toggleAnswers(element) {

            let x = element.nextElementSibling;
            let y = x.firstElementChild ;
            let answer = y.nextElementSibling;
            if (answer.style.display == 'none') {
                answer.style.display = 'block';
            } else {
                answer.style.display = 'none';

            }
            let arrow = element.firstElementChild;
            if (arrow.classList.contains('fa-angle-right')) {
                arrow.classList.remove('fa-angle-right');
                arrow.classList.add('fa-angle-down')
            } else {
                arrow.classList.remove('fa-angle-down');
                arrow.classList.add('fa-angle-right')
            }
        }

        function toggleSubAnswers(element) {
            let x = element.parentElement;
            let subAnswer = x.nextElementSibling;
            if (subAnswer.style.display == 'none') {
                subAnswer.style.display = 'block';
            } else {
                subAnswer.style.display = 'none';
            }

            if (element.classList.contains('fa-angle-right')) {
                element.classList.remove('fa-angle-right');
                element.classList.add('fa-angle-down')
            } else {
                element.classList.remove('fa-angle-down');
                element.classList.add('fa-angle-right')
            }
        }

        function toggleSubAnswersDescreption(element) {
            let x = element.parentElement;
            let y = x.parentElement;
            let subDesc = y.nextElementSibling;
            if (subDesc.style.display == 'none') {
                subDesc.style.display = 'block';
            } else {
                subDesc.style.display = 'none';
            }

            if (element.classList.contains('fa-angle-right')) {
                element.classList.remove('fa-angle-right');
                element.classList.add('fa-angle-down')
            } else {
                element.classList.remove('fa-angle-down');
                element.classList.add('fa-angle-right')
            }
        }

        function showimage(element) {
            let show = element.nextElementSibling;
            if (show.style.display == 'none') {
                show.style.display = 'block';
            } else {
                show.style.display = 'none';
            }
        }

        function hideimage(element) {
            let x = element.parentElement;
            let z = x.parentElement;
            let hide = z.parentElement;
            if (hide.style.display == 'none') {
                hide.style.display = 'block';
            } else {
                hide.style.display = 'none';
            }
        }

    $(document).ready(function(){
      $('#filterTax').on('keyup' , function(){
        //   event.preventDefault();
          var search = $(this).val().toLowerCase();
          $('.tech_area').each(function(){
            var area_text = $(this).find('.area_text');
            var original_text = area_text.text();
            var text = area_text.text().toLowerCase();
            var sector_text = $(this).find('.sector_text');
            var sectorText = sector_text.text().toLowerCase();
            var niche_text = $(this).find('.niche_text');
            var nicheText = niche_text.text().toLowerCase();
            var highlightedText = original_text.replace(new RegExp(search, 'gi'), function(match) {
                return '<span class="highlight">' + match + '</span>';
            });
            area_text.html(highlightedText);
            $(this).toggle(text.indexOf(search) > -1 || sectorText.indexOf(search) > -1 || nicheText.indexOf(search) > -1);
        });

        $('.tech_sector').each(function(){
            var sector_text = $(this).find('.sector_text');
            var original_sector_text = sector_text.text();
            var sectorText = sector_text.text().toLowerCase();
            var highlightedText = original_sector_text.replace(new RegExp(search, 'gi'), function(match) {
                return '<span class="highlight">' + match + '</span>';
            });
            sector_text.html(highlightedText);
            $(this).parent().show();
        });

        $('.tech_niche').each(function(){
            var niche_text = $(this).find('.niche_text');
            var original_niche_text = niche_text.text();
            var nicheText = niche_text.text().toLowerCase();
            var highlightedText = original_niche_text.replace(new RegExp(search, 'gi'), function(match) {
                return '<span class="highlight">' + match + '</span>';
            });
            niche_text.html(highlightedText);
            $(this).parent().show();
            $('.niche_description').parent().show();
        });
  
  if ($('.tech_area:visible').length > 1) {
            $('.divider').show();
            $('#noRecordMsg').hide();

        } else if($('.tech_area:visible').length < 1) {
            $('#noRecordMsg').show();
            $('.divider').hide();
        }
        else {
            $('.divider').hide();
            $('#noRecordMsg').hide();
        }
          });


});
    </script>
</body>

<script type="text/javascript">
var allTrls = @json($allTrls);
var techs = @json($techs);

    google.charts.load("45", {packages:['corechart']});
    google.charts.setOnLoadCallback( async function () {
    var allTrls = @json($allTrls);
    var techs = @json($techs);
    // console.log(techs);
     
    function getProjectsData(tech , trl)
    {
        const projects = tech.projects;
        const trlID = trl.id;
        var jsonData = {
            'trlID' : trlID,
            'projects' : projects
        };

        return new Promise(function ( resolve , reject )
        {
            $.ajax({
                    contentType: 'application/json; charset=utf-8',
                    type: 'POST',
                    url: "{{url('/getProjectsLengthByTechAreaID')}}",
                    dataType: 'json',
                    data: JSON.stringify(jsonData),
                    success: function(response)
                    {
                        resolve([response.trl.trllevel.toString() , response.numberOfProjects , "#065386"])
                    },
            error: function (error) {
                reject(error);
            }

         });
      });
    }

    for (let i = 0; i < techs.length; i++) {
        const tech = techs[i];
        // const projects = tech.projects;
        // console.log(tech);
        
        var chartData = [['TRL Level', 'Number of Projects', { role: "style" }]];
        await Promise.all(allTrls.map( async function (trl){
            try {
            var data = await getProjectsData(tech, trl);
            chartData.push(data);
        } catch (error) {
            console.error("Error fetching data:", error);
        }
        }));
        chartData.sort(function (a, b) {
        // Skip sorting if the first element is a header
        if (typeof a[0] === 'string' && a[0].toLowerCase() === 'trl level') return -1;
        if (typeof b[0] === 'string' && b[0].toLowerCase() === 'trl level') return 1;
        return a[0].localeCompare(b[0]);
    });


       drawChart(google.visualization.arrayToDataTable(chartData), tech.id);
    }

    function drawChart(data ,techId) {
//   console.log('Draw Chart');
  var options = {
    chartArea: { width: '70%' , left:50 , right:20},
    width: 220,
    height: 150,
    bar: {groupWidth: "60%"},
    legend: { position: "none" },
    hAxis: {
    title: 'Technology Readiness Level',
    titleTextStyle: {
    color: '#0058a2',  // Text color
    fontSize: 12,    // Font size
    bold:true,    
    italic:false,   
                    }
           },
    vAxis: {
    title: 'Number of Projects',
    titleTextStyle: {
    color: '#0058a2',  // Text color
    fontSize: 10,    // Font size
    bold:true,
    italic:false,    
    },
    minValue: 4,                    
    viewWindow:{min:0}, /*this also makes 0 = min value*/         
    format: '0', 
           },
  };
    var container = document.getElementById("columnchart_area_"+techId);
    // console.log(container);
      var chart = new google.visualization.ColumnChart(container);

    //   var colors = ['#FF691C', '#008FD4', '#0058A2']; // Add more colors as needed
    // var colorIndex = 0;

    // google.visualization.events.addListener(chart, 'ready', function () {
    //     // Change bar colors after every third bar
    //     var bars = container.getElementsByTagName('rect');
    //     for (var i = 0; i < bars.length; i++) {
    //         if (i % 3 === 0) {
    //             colorIndex = (colorIndex + 1) % colors.length;
    //             bars[i].setAttribute('fill', colors[colorIndex]);
    //         }
    //     }
    // });
      chart.draw(data, options);
}
    // }
   
});

  

  </script>

<script type="text/javascript">
    var allTrls = @json($allTrls);
    var sectors = @json($sectors);
    
        google.charts.load("45", {packages:['corechart']});
        google.charts.setOnLoadCallback( async function () {
        var allTrls = @json($allTrls);
        var sectors = @json($sectors);
        // console.log(sectors);
    
        function getProjectsData(sector , trl)
        {
            const projects = sector.projects;
    
            var jsonData = {
                'trlID' : trl.id,
                'projects' : projects
            };
    
            return new Promise(function ( resolve , reject )
            {
                $.ajax({
                        contentType: 'application/json; charset=utf-8',
                        type: 'POST',
                        url: "{{url('/getProjectsLengthByTechSectorID')}}",
                        dataType: 'json',
                        data: JSON.stringify(jsonData),
                        success: function(response)
                        {
                            resolve([response.trl.trllevel.toString() , response.numberOfProjects , "#065386"])
                        },
                error: function (error) {
                    reject(error);
                }
    
             });
          });
        }
    
        for (let i = 0; i < sectors.length; i++) {
            const sector = sectors[i];
            // const projects = tech.projects;
            // console.log(sector);
            
            var chartData = [['TRL Level', 'Number of Projects', { role: "style" }]];
            await Promise.all(allTrls.map( async function (trl){
                try {
                var data = await getProjectsData(sector, trl);
                chartData.push(data);
            } catch (error) {
                console.error("Error fetching data:", error);
            }
            }));

            chartData.sort(function (a, b) {
        // Skip sorting if the first element is a header
        if (typeof a[0] === 'string' && a[0].toLowerCase() === 'trl level') return -1;
        if (typeof b[0] === 'string' && b[0].toLowerCase() === 'trl level') return 1;
        return a[0].localeCompare(b[0]);
    });
    
           drawChart(google.visualization.arrayToDataTable(chartData), sector.id);
        }
    
        function drawChart(data ,sectorId) {
    //   console.log('Draw Chart');
    var options = {
        chartArea: { width: '70%' , left:50 , right:20},
    width: 220,
    height: 150,
    bar: {groupWidth: "60%"},
    legend: { position: "none" },
    hAxis: {
    title: 'Technology Readiness Level',
    titleTextStyle: {
    color: '#0058a2',  // Text color
    fontSize: 12,    // Font size
    bold:true,    
    italic:false,   
                    }
           },
    vAxis: {
    title: 'Number of Projects',
    titleTextStyle: {
    color: '#0058a2',  // Text color
    fontSize: 12,    // Font size
    bold:true,
    italic:false,    
    },
    minValue: 4,                    
    viewWindow:{min:0}, /*this also makes 0 = min value*/         
    format: '0', 
           },
  };
        var container = document.getElementById("columnchart_sector_"+sectorId);
        // console.log(container);
          var chart = new google.visualization.ColumnChart(container);
          chart.draw(data, options);
    }
        // }
       
    });
    
      
    
      </script>

<script type="text/javascript">
         var allTrls = @json($allTrls);
        var niches = @json($niches);
        google.charts.load("45", {packages:['corechart']});
        google.charts.setOnLoadCallback( async function (trl) {

        // console.log(niches);
    
        function getProjectsData(niche , trl)
        {
            const projects = niche.projects;
    
            var jsonData = {
                'trlID' : trl.id,
                'projects' : projects
            };
    
            return new Promise(function ( resolve , reject )
            {
                $.ajax({
                        contentType: 'application/json; charset=utf-8',
                        type: 'POST',
                        url: "{{url('/getProjectsLengthByTechNicheID')}}",
                        dataType: 'json',
                        data: JSON.stringify(jsonData),
                        success: function(response)
                        {
                            resolve([response.trl.trllevel.toString() , response.numberOfProjects , "#065386"])
                        },
                error: function (error) {
                    reject(error);
                }
    
             });
          });
        }
    
        for (let i = 0; i < niches.length; i++) {
            const niche = niches[i];
            // const projects = tech.projects;
            // console.log(niche);
            
            var chartData = [['TRL Level', 'Number of Projects', { role: "style" }]];
            await Promise.all(allTrls.map( async function (trl){
                try {
                var data = await getProjectsData(niche, trl);
                chartData.push(data);
            } catch (error) {
                console.error("Error fetching data:", error);
            }
            }));

            chartData.sort(function (a, b) {
        // Skip sorting if the first element is a header
        if (typeof a[0] === 'string' && a[0].toLowerCase() === 'trl level') return -1;
        if (typeof b[0] === 'string' && b[0].toLowerCase() === 'trl level') return 1;
        return a[0].localeCompare(b[0]);
    });
    
           drawChart(google.visualization.arrayToDataTable(chartData), niche.id);
        }
    
        function drawChart(data ,nicheId) {
            var options = {
    chartArea: { width: '70%' , left:50 , right:20},
    width: 220,
    height: 150,
    bar: {groupWidth: "60%"},
    legend: { position: "none" },
    hAxis: {
    title: 'Technology Readiness Level',
    titleTextStyle: {
    color: '#0058a2',  // Text color
    fontSize: 12,    // Font size
    bold:true,    
    italic:false,   
                    }
           },
    vAxis: {
    title: 'Number of Projects',
    titleTextStyle: {
    color: '#0058a2',  // Text color
    fontSize: 12,    // Font size
    bold:true,
    italic:false,    
    },
    minValue: 4,                    
    viewWindow:{min:0}, /*this also makes 0 = min value*/         
    format: '0', 
           },
  };
        if(document.getElementById("columnchart_niche_"+nicheId))
        {
        var container = document.getElementById("columnchart_niche_"+nicheId);
        // console.log(container);
          var chart = new google.visualization.ColumnChart(container);
          chart.draw(data, options);
        }
    }
        // }
       
    });
      </script>
</html>
