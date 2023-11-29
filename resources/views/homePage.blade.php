@include('bootStrap')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
            margin-right: 10px;
            margin-top: 10px;
            width: 24px;
        }
        .yellow-graph-image
        {
            margin-right: 7px; 
            margin-top: 6px;
            width: 31px;"
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
            right: 0%;
            background: white;
            width: 350px;
            margin-top: -44px;
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
            right: 0%;
            background: white;
            width: 200px;
            margin-top: -27px;
            font-size:9px;
        }
        .graph-pop .row{
            flex-wrap: nowrap;
        }
        .graph-pop button{
            font-size: 9px;
            margin-top: 0px;
            margin-bottom:7px;
        }
        .graph-pop h5{
            font-size: 9px;
            margin-top: -6px;
            margin-bottom:9px;
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
        right: 0%;
        background: white;
        width: 200px;
        margin-top: -27px;
        font-size:8px;
    }
    .graph-pop .row{
        flex-wrap: nowrap;
    }
    .graph-pop button{
        font-size: 10px;
        margin-top: 0px;
        margin-bottom:7px;
    }
    .graph-pop h5{
        font-size: 9px;
        margin-top: -6px;
        margin-bottom:9px;
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
          right: 0%;
          background: white;
          width: 200px;
          margin-top: -27px;
          font-size:8px;
      }
      .graph-pop .row{
          flex-wrap: nowrap;
      }
      .graph-pop button{
          font-size: 10px;
          margin-top: 0px;
          margin-bottom:7px;
      }
      .graph-pop h5{
          font-size: 9px;
          margin-top: -6px;
          margin-bottom:9px;
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


        <div class="faq-container w-100 m-0">


            <!-- parent tile -->
@foreach ($techs as $tech )
    
            <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX01 {{$tech-> techarea}}</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt="" class="float-right graph-image"
                            onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:1000; ">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX01</section>
                                    <section>{{$tech-> techarea}}
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-top:2px; padding-bottom:0px;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style =" margin-right: 2px; width: 40%; margon-bottom:1px;"
                                        onclick="hideimage(this)">
                                </div>
                            </div>
                            <section class="mx-2"
                                style="color:rgba(6, 83, 134, 1); font-weight:600;">Technology Maturity
                                (TRL)</section>


                            <div class="row m-0">
                               
                                <div class="col" >
                                    <div id="columnchart_values_{{$tech->id}}" ></div>
                                    {{-- <img style=" margin:30px" src="{{ asset('images/graph.png') }}"width="100%"> --}}
                                </div>
                            </div>
                            
                            <h5
                                style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px; font-size:14px;">
                                Projects linked to this taxonomy</h5>
                            <button class="btn"
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>
                <div class="faq-answer" style="display:none;">
                    @php
                        $sectorID = 0;
                    @endphp
                @foreach ($tech->techsectors as $techsector )
                @if ($techsector->id == $sectorID)
                    
                @else
                <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX01.1 {{$techsector-> techsector}}</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:999; ">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX01.1</section>
                                    <section>{{$techsector-> techsector}}
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-top:2px; padding-bottom:0px;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style=" margin-right: 2px; width: 40%; margon-bottom:1px;"
                                        onclick="hideimage(this)">
                                </div>
                            </div>
                            <section class="mx-2"
                                style="color:rgba(6, 83, 134, 1); font-weight:600; font-size:9px;">Technology Maturity
                                (TRL)</section>


                            <div class="row my-3">
                                <div class="col">
                                    <div id="columnchart_values_{{$tech->id}}{{$techsector->id}}" ></div>
                                    {{-- <img style=" margin:30px" src="{{ asset('images/graph.png') }}"
                                        class=" float-right my-0" width="100%"> --}}
                                </div>
                            </div>
                            <h5 style="text-align:center; ">Technology Readiness Level
                            </h5>
                            <h5
                                style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px;">
                                Projects linked to this taxonomy</h5>
                            <button class="btn"
                                style="margin-left:10px;color:white; background: #FFA800;"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>


                        </div>
                    </div>
                    <div class="faq-subanswer" style="position: relative; display:none;">
                        <div class="divider"></div>
@foreach ($techsector->techniches as $techniche)
                        <div name="subAnswer1" 
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span >
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX01.1.1 {{$techniche-> techniche}}</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:998;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX01.1.1</section>
                                            <section>{{$techniche-> techniche}}
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:3px; padding-bottom:0px;">
                                            <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                                style=" margin-right: 2px; width: 40%; margon-bottom:1px;"
                                                onclick="hideimage(this)">
                                        </div>
                                    </div>
                                    <section class="my-2 mx-2"
                                        style="color:rgba(6, 83, 134, 1); font-weight:600;">Technology
                                        Maturity
                                        (TRL)</section>


                                    <div class="row my-3">
                                        <div class="col-10">
                                    <div id="columnchart_values_{{$tech->id}}{{$techsector->id}}{{$techniche->id}}" ></div>
                                    {{-- <img style=" margin:30px" src="{{ asset('images/graph.png') }}"
                                                class=" float-right my-0" width="100%"> --}}
                                         </div>
                                    </div>
                                    <h5 style="text-align:center; ">Technology
                                        Readiness
                                        Level
                                    </h5>
                                    <h5
                                        style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px;">
                                        Projects linked to this taxonomy</h5>
                                    <button class="btn"
                                        style="margin-left:10px;color:white; background: #323E48;"><a
                                            style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                            Projects</a></button>



                                </div>

                            </div>
                        </div>
                        <div class="sub-answer-description" style="display: none;">
                            <div class="divider"></div>
                            <div style="margin-left:40px;font-weight:bold">Example Technologies</div>
                            <section style="padding-left:40px;padding-right:40px">
                                {{$techniche-> technichedescription}}
                            </section>
                        </div>
                    @endforeach
                    <div class="divider"></div>
                </div>
                @php
                $sectorID = $techsector->id;
            @endphp
            @endif
                    @endforeach
                </div>
                
            </div>
            <div class="divider"></div>
            

            @endforeach

        </div>
    </div>

    <div style="margin-top:200px"></div>

    <footer>
    @include('footer')
</footer>
                        {{-- <div nane="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX01.1.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:997;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX01.1.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:3px; padding-bottom:0px;">
                                            <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                                style=" margin-right: 2px; width: 40%; margon-bottom:1px;"
                                                onclick="hideimage(this)">
                                        </div>
                                    </div>
                                    <section class="my-2 mx-2"
                                        style="color:rgba(6, 83, 134, 1); font-weight:600;">Technology
                                        Maturity
                                        (TRL)</section>


                                    <div class="row my-3">
                                        <div class="col-2 " style="text-align: center;">

                                        </div>
                                        <div class="col-10">
                                            <img style=" margin:30px" src="{{ asset('images/graph.png') }}"
                                                class=" float-right my-0" width="100%">
                                        </div>
                                    </div>
                                    <h5 style="text-align:center; ">Technology
                                        Readiness
                                        Level
                                    </h5>
                                    <h5
                                        style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px;">
                                        Projects linked to this taxonomy</h5>
                                    <button class="btn"
                                        style="margin-left:10px;color:white; background: #323E48;"><a
                                            style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                            Projects</a></button>



                                </div>

                            </div>
                        </div>
                        <div id="sub-answer-description1" class="sub-answer-description" style="display: none;">
                            <div class="divider"></div>
                            <div style="margin-left:40px;font-weight:bold">Example Technologies</div>
                            <section style="padding-left:40px;padding-right:40px">
                                For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction
                                control
                                systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors,
                                abort
                                propulsion systems, propellant storage and transfer, nanocomposites, green propellants.
                                For
                                in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                            </section>
                        </div>


 --}}

                        <!-- <div class="divider"></div>  -->
                   

                    {{-- <div name="answer2" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i><span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX01.2 Electric Space
                                Propulsion</span>
                        </a>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:996;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX01.2</section>
                                    <section>Electric Space Propulsion
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0"
                                    style="color: white; padding-top:5px; padding-bottom:8px2">
                                   <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style=" margin-right: 2px; width: 40%; margon-bottom:1px;"
                                        onclick="hideimage(this)">
                                </div>
                            </div>
                            <section class="mx-2"
                                style="color:rgba(6, 83, 134, 1); font-weight:600; font-size:9px;">Technology Maturity
                                (TRL)</section>


                            <div class="row my-3">
                                <div class="col-2 " style="text-align: center;">

                                </div>
                                <div class="col-10">
                                    <img style=" margin:30px" src="{{ asset('images/graph.png') }}"
                                        class=" float-right my-0" width="100%">
                                </div>
                            </div>
                            <h5 style="text-align:center; ">Technology Readiness Level
                            </h5>
                            <h5
                                style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px;">
                                Projects linked to this taxonomy</h5>
                            <button class="btn"
                                style="margin-left:10px;color:white; background: #FFA800;"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>


                        </div>
                    </div>


                    <div class="faq-subanswer" style="position: relative; display:none;">
                        <div class="divider"></div>
                        <div name="subAnswer1"
                            style="margin-left:1px;">
                            <div>
                                <i id="icon-toggle-description1" onclick="toggleSubAnswersDescreption(this)"
                                    class="fa-solid fa-angle-right"></i> <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX01.2.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:995;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX01.2.1</section>
                                            <section>Flight Computing and
                                                Avionics
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:3px; padding-bottom:0px;">
                                            <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                                style=" margin-right: 2px; width: 40%; margon-bottom:1px;"
                                                onclick="hideimage(this)">
                                        </div>
                                    </div>
                                    <section class="my-2 mx-2"
                                        style="color:rgba(6, 83, 134, 1); font-weight:600;">Technology
                                        Maturity
                                        (TRL)</section>


                                    <div class="row my-3">
                                        <div class="col-2 " style="text-align: center;">

                                        </div>
                                        <div class="col-10">
                                            <img style=" margin:30px" src="{{ asset('images/graph.png') }}"
                                                class=" float-right my-0" width="100%">
                                        </div>
                                    </div>
                                    <h5 style="text-align:center; ">Technology
                                        Readiness
                                        Level
                                    </h5>
                                    <h5
                                        style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px;">
                                        Projects linked to this taxonomy</h5>
                                    <button class="btn"
                                        style="margin-left:10px;color:white; background: #323E48;"><a
                                            style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                            Projects</a></button>



                                </div>

                            </div>
                        </div>
                        <div id="sub-answer-description1" class="sub-answer-description" style="display: none;">
                            <div class="divider"></div>
                            <div style="margin-left:40px;font-weight:bold">Example Technologies</div>
                            <section style="padding-left:40px;padding-right:40px">
                                For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction
                                control
                                systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors,
                                abort
                                propulsion systems, propellant storage and transfer, nanocomposites, green propellants.
                                For
                                in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                            </section>
                        </div>


                        <div name="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i id="icon-toggle-description1" onclick="toggleSubAnswersDescreption(this)"
                                    class="fa-solid fa-angle-right"></i> <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX01.2.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:994;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX01.2.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:3px; padding-bottom:0px;">
                                            <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                                style=" margin-right: 2px; width: 40%; margon-bottom:1px;"
                                                onclick="hideimage(this)">
                                        </div>
                                    </div>
                                    <section class="my-2 mx-2"
                                        style="color:rgba(6, 83, 134, 1); font-weight:600;">Technology
                                        Maturity
                                        (TRL)</section>


                                    <div class="row my-3">
                                        <div class="col-2 " style="text-align: center;">

                                        </div>
                                        <div class="col-10">
                                            <img style=" margin:30px" src="{{ asset('images/graph.png') }}"
                                                class=" float-right my-0" width="100%">
                                        </div>
                                    </div>
                                    <h5 style="text-align:center; ">Technology
                                        Readiness
                                        Level
                                    </h5>
                                    <h5
                                        style="color: rgba(6, 83, 134, 1); font-weight:600; margin-left:10px;">
                                        Projects linked to this taxonomy</h5>
                                    <button class="btn"
                                        style="margin-left:10px;color:white; background: #323E48;"><a
                                            style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                            Projects</a></button>



                                </div>

                            </div>
                        </div>
                        <div class="sub-answer-description" style="display: none;">
                            <div class="divider"></div>
                            <div style="margin-left:40px;font-weight:bold">Example Technologies</div>
                            <section style="padding-left:40px;padding-right:40px">
                                For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction
                                control
                                systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors,
                                abort
                                propulsion systems, propellant storage and transfer, nanocomposites, green propellants.
                                For
                                in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).
                            </section>
                        </div>



                        <!-- <div class="divider"></div>  -->
                    </div> --}}








    <script>
        function toggleAnswers(element) {

            let x = element.parentElement;
            let y = x.parentElement;
            let answer = y.nextElementSibling;
            if (answer.style.display == 'none') {
                answer.style.display = 'block';
            } else {
                answer.style.display = 'none';

            }
            if (element.classList.contains('fa-angle-right')) {
                element.classList.remove('fa-angle-right');
                element.classList.add('fa-angle-down')
            } else {
                element.classList.remove('fa-angle-down');
                element.classList.add('fa-angle-right')
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
          $('.faq-question').filter(function(){
           $(this).toggle($(this).text().toLowerCase().indexOf(search)>-1);
           $('.divider').hide();
        });
  
  if ($('.faq-question:visible').length > 1) {
            $('.divider').show();
        } else {
            $('.divider').hide();
        }
          });


});
    </script>
</body>

<script type="text/javascript">
var allTrls = @json($allTrls);

    google.charts.load("45", {packages:['corechart']});
    google.charts.setOnLoadCallback(function () {
    var allTrls = @json($allTrls); // Assuming $trls is an array of trl models

    // Create an array to store data for the chart
    var chartData = [['TRL Level', 'Number of Projects' , { role: "style" }]];

    // Iterate through each TRL model
    for (var i = 0; i < allTrls.length; i++) {
        var trl = allTrls[i];

        // Count the number of projects for the current TRL level
        var numberOfProjects = trl.projects.length;

        // Add data to the chart array
        chartData.push([trl.trllevel.toString(), numberOfProjects , "#065386"]);
    }

    // Create a DataTable from the chart data
    var data = google.visualization.arrayToDataTable(chartData);

    // Draw the chart
    drawChart(data);
});
    function drawChart(data) {
    //   var data = google.visualization.arrayToDataTable([
    //     ["Level", "Projects", { role: "style" } ],
    //     ["1", 8.94, "#ff691c"],
    //     ["2", 10.49, "#ff691c"],
    //     ["3", 19.30, "#ff691c"],
    //     ["4", 21.45, "#008fd4"],
    //     ["5", 30.45, "#008fd4"],
    //     ["6", 21.45, "#008fd4"],
    //     ["7", 50.45, "#0058a2"],
    //     ["8", 21.45, "#0058a2"],
    //     ["9", 40.45, "#0058a2"],
    //   ]);

    //   var view = new google.visualization.DataView(data);
    //   view.setColumns([0, 1,
    //                    { calc: "stringify",
    //                      sourceColumn: 1,
    //                      type: "string",
    //                      role: "annotation" },
    //                    2]);

      var options = {
        chartArea: { width: '80%' , left:50 , right:20},
        width: 330,
        height: 233,
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
                        }
               },
      };
      var techs = @json($techs);
      techs.forEach(function(tech){
        var container = document.getElementById("columnchart_values_"+tech.id);
          var chart = new google.visualization.ColumnChart(container);
          chart.draw(data, options);
    })
  }
  </script>
  <script type="text/javascript">
    var allTrls = @json($allTrls);
    
        google.charts.load("45", {packages:['corechart']});
        google.charts.setOnLoadCallback(function () {
        var allTrls = @json($allTrls); // Assuming $trls is an array of trl models
    
        // Create an array to store data for the chart
        var chartData = [['TRL Level', 'Number of Projects' , { role: "style" }]];
    
        // Iterate through each TRL model
        for (var i = 0; i < allTrls.length; i++) {
            var trl = allTrls[i];
    
            // Count the number of projects for the current TRL level
            var numberOfProjects = trl.projects.length;
    
            // Add data to the chart array
            chartData.push([trl.trllevel.toString(), numberOfProjects , "#065386"]);
        }
    
        // Create a DataTable from the chart data
        var data = google.visualization.arrayToDataTable(chartData);
    
        // Draw the chart
        drawChart(data);
    });
        function drawChart(data) {
        //   var data = google.visualization.arrayToDataTable([
        //     ["Level", "Projects", { role: "style" } ],
        //     ["1", 8.94, "#ff691c"],
        //     ["2", 10.49, "#ff691c"],
        //     ["3", 19.30, "#ff691c"],
        //     ["4", 21.45, "#008fd4"],
        //     ["5", 30.45, "#008fd4"],
        //     ["6", 21.45, "#008fd4"],
        //     ["7", 50.45, "#0058a2"],
        //     ["8", 21.45, "#0058a2"],
        //     ["9", 40.45, "#0058a2"],
        //   ]);
    
        //   var view = new google.visualization.DataView(data);
        //   view.setColumns([0, 1,
        //                    { calc: "stringify",
        //                      sourceColumn: 1,
        //                      type: "string",
        //                      role: "annotation" },
        //                    2]);
    
          var options = {
            chartArea: { width: '80%' , left:50 , right:20},
            width: 330,
            height: 233,
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
                            }
                   },
          };
          var techs = @json($techs);
          techs.forEach(function(tech){
            var container = document.getElementById("columnchart_values_"+tech.id);
              var chart = new google.visualization.ColumnChart(container);
              chart.draw(data, options);
        })
      }
      </script>
      <script type="text/javascript">
        var allTrls = @json($allTrls);
        
            google.charts.load("45", {packages:['corechart']});
            google.charts.setOnLoadCallback(function () {
            var allTrls = @json($allTrls); // Assuming $trls is an array of trl models
        
            // Create an array to store data for the chart
            var chartData = [['TRL Level', 'Number of Projects' , { role: "style" }]];
        
            // Iterate through each TRL model
            for (var i = 0; i < allTrls.length; i++) {
                var trl = allTrls[i];
        
                // Count the number of projects for the current TRL level
                var numberOfProjects = trl.projects.length;
        
                // Add data to the chart array
                chartData.push([trl.trllevel.toString(), numberOfProjects , "#065386"]);
            }
        
            // Create a DataTable from the chart data
            var data = google.visualization.arrayToDataTable(chartData);
        
            // Draw the chart
            drawChart(data);
        });
            function drawChart(data) {
            //   var data = google.visualization.arrayToDataTable([
            //     ["Level", "Projects", { role: "style" } ],
            //     ["1", 8.94, "#ff691c"],
            //     ["2", 10.49, "#ff691c"],
            //     ["3", 19.30, "#ff691c"],
            //     ["4", 21.45, "#008fd4"],
            //     ["5", 30.45, "#008fd4"],
            //     ["6", 21.45, "#008fd4"],
            //     ["7", 50.45, "#0058a2"],
            //     ["8", 21.45, "#0058a2"],
            //     ["9", 40.45, "#0058a2"],
            //   ]);
        
            //   var view = new google.visualization.DataView(data);
            //   view.setColumns([0, 1,
            //                    { calc: "stringify",
            //                      sourceColumn: 1,
            //                      type: "string",
            //                      role: "annotation" },
            //                    2]);
        
              var options = {
                chartArea: { width: '80%' , left:50 , right:20},
                width: 330,
                height: 233,
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
                                }
                       },
              };
              var techs = @json($techs);
              techs.forEach(function(tech){
                var container = document.getElementById("columnchart_values_"+tech.id);
                  var chart = new google.visualization.ColumnChart(container);
                  chart.draw(data, options);
            })
          }
          </script>
</html>
