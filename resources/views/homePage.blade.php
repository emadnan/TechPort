@include('bootStrap')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            width: 300px;
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
                <form class="form-inline second-search-bar">
                    <div class="input-group w-100">
                        <input type="text" class="form-control w-100" placeholder="Filter Taxanomy"
                            style="border-radius: 0; width: 100%;  background-color: rgba(0, 0, 0, 0); ">
                        <!-- Adjust the width here -->

                        <button class="btn" type="submit" style="background-color: rgba(0, 0, 0, 0) !important;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        {{-- end --}}


        <div class="faq-container w-100 m-0">


            <!-- parent tile -->

            <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX01 Propulsion Systems</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt="" class="float-right graph-image"
                            onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:1000;">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX01</section>
                                    <section>Propulsion Systems
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
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>

                <div class="faq-answer" style="display:none;">
                    <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX01.1 Chemical Space
                                Propulsion</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:999;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX01.1</section>
                                    <section>Flight Computing and Avionics
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
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span >
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX01.1.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:998;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX01.1.1</section>
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


                        <div nane="subAnswer2"
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




                        <!-- <div class="divider"></div>  -->
                    </div>

                    <div class="divider"></div>

                    <div name="answer2" class="arrow-icon" style="position:relative;">
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
                    </div>






                </div>
            </div>

            <div class="divider"></div>

            <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX02 Flight Computing and
                                Avionics</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt=""
                            class="float-right graph-image" onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:993;">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX02</section>
                                    <section>Flight Computing and Avionics
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
                                style="color:rgba(6, 83, 134, 1); font-weight:600;">Technology Maturity
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
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>

                <div class="faq-answer" style="display:none;">
                    <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX02.1 Chemical Space
                                Propulsion</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image"
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:992;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX02.1</section>
                                    <section>Chemical Space Propulsion
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
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX02.1.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:991;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX02.1.1</section>
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
                                    <h5 style=" margin-top:5px; font-size:11px; text-align:center; ">Technology
                                        Readiness Level
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


                        <div nane="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX02.1.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:990;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX02.1.2</section>
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




                        <!-- <div class="divider"></div>  -->
                    </div>

                    <div class="divider"></div>

                    <div name="answer2" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i><span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX02.2 Electric Space
                                Propulsion</span>
                        </a>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:989;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX02.2</section>
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
                                        TX02.2.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:988;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX02.2.1</section>
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
                                    class="fa-solid fa-angle-right"></i> <span >
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX02.2.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:987;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX02.2.2</section>
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

                    </div>






                </div>
            </div>
            <div class="divider"></div>

            <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX03 Aerospace Power and
                                Energy Storage</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt=""
                            class="float-right graph-image" onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:986;">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX03</section>
                                    <section>Aerospace Power and Energy
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
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>

                <div class="faq-answer" style="display:none;">
                    <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX03.1 Chemical Space
                                Propulsion</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image"
                            onclick="showimage(this)">
                        <div class="  graph-pop" style="display: none;  z-index:985;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX03.1</section>
                                    <section>Chemical Space Propulsion
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
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX03.1.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:984;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX03.1.1</section>
                                            <section>Integrated Systems
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
                                    <h5 style=" margin-top:5px; font-size:11px; text-align:center; ">Technology
                                        Readiness Level
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


                        <div nane="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX03.1.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:983;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX03.1.2</section>
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




                        <!-- <div class="divider"></div>  -->
                    </div>

                    <div class="divider"></div>

                    <div name="answer2" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i><span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX03.2 Electric Space
                                Propulsion</span>
                        </a>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:982;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX03.2</section>
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
                                        TX03.2.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:981;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX03.2.1</section>
                                            <section>Integrated Systems
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
                                        TX03.2.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:980;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX03.2.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:5px; padding-bottom:8px;">
                                            <img src="{{ asset('images/icon-white.png') }}"alt=""
                                                class="float-rightg
                                                style=" margin-right: 5px; width: 40%; margon-bottom:1px;"
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

                    </div>






                </div>
            </div>
            <div class="divider"></div>

            <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX04 Robotic Systems</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt=""
                            class="float-right graph-image" onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:979;">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX04</section>
                                    <section>Robotic Systems
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
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>

                <div class="faq-answer" style="display:none;">
                    <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX04.1 Chemical Space
                                Propulsion</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:978;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX04.1</section>
                                    <section>Chemical Space Propulsion
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
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX04.1.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:977;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX04.1.1</section>
                                            <section>Integrated Systems
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
                                    <h5 style=" margin-top:5px; font-size:11px; text-align:center; ">Technology
                                        Readiness Level
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


                        <div nane="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX04.1.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:976;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX04.1.2</section>
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




                        <!-- <div class="divider"></div>  -->
                    </div>

                    <div class="divider"></div>

                    <div name="answer2" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i><span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX04.2 Electric Space
                                Propulsion</span>
                        </a>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:975;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX04.2</section>
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
                                    class="fa-solid fa-angle-right"></i> <span >
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX04.2.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:974;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX04.2.1</section>
                                            <section>Integrated Systems
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
                                        TX04.2.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:973;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX04.2.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:5px; padding-bottom:8px;">
                                            <img src="{{ asset('images/icon-white.png') }}"alt=""
                                                class="float-rightg
                                                style=" margin-right: 5px; width: 40%; margon-bottom:1px;"
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

                    </div>






                </div>
            </div>
            <div class="divider"></div>


            <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX05 Communications, Navigation, and Orbital Debris Tracking and Characterization</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt=""
                            class="float-right graph-image" onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:972;">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX05</section>
                                    <section>Communications, Navigation
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
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>

                <div class="faq-answer" style="display:none;">
                    <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX05.1 Chemical Space
                                Propulsion</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image"
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:971;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX05.1</section>
                                    <section>Chemical Space Propulsion
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
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX05.1.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:970;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX05.1.1</section>
                                            <section>Integrated Systems
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
                                    <h5 style=" margin-top:5px; font-size:11px; text-align:center; ">Technology
                                        Readiness Level
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


                        <div nane="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX05.1.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:969;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX05.1.2</section>
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




                        <!-- <div class="divider"></div>  -->
                    </div>

                    <div class="divider"></div>

                    <div name="answer2" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i><span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX05.2 Electric Space
                                Propulsion</span>
                        </a>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image"
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:968;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX05.2</section>
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
                                        TX05.2.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:967;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX05.2.1</section>
                                            <section>Integrated Systems
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
                                        TX05.2.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:966;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX05.2.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:5px; padding-bottom:8px;">
                                            <img src="{{ asset('images/icon-white.png') }}"alt=""
                                                class="float-rightg
                                                style=" margin-right: 5px; width: 40%; margon-bottom:1px;"
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

                    </div>






                </div>
            </div>
            <div class="divider"></div>

            <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX06 Human Health, Life Support, and Habitation Systems</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt=""
                            class="float-right graph-image" onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:965;">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX06</section>
                                    <section>Human Health, Life Support
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
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>

                <div class="faq-answer" style="display:none;">
                    <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX06.1 Chemical Space
                                Propulsion</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:964;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX06.1</section>
                                    <section>Chemical Space Propulsion
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
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX06.1.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:963;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX06.1.1</section>
                                            <section>Integrated Systems
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
                                    <h5 style=" margin-top:5px; font-size:11px; text-align:center; ">Technology
                                        Readiness Level
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


                        <div nane="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX06.1.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:962;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX06.1.2</section>
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




                        <!-- <div class="divider"></div>  -->
                    </div>

                    <div class="divider"></div>

                    <div name="answer2" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i><span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX06.2 Electric Space
                                Propulsion</span>
                        </a>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image"
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:961;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX06.2</section>
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
                                        TX06.2.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:960;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX06.2.1</section>
                                            <section>Integrated Systems
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
                                        TX06.2.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:959;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX06.2.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:5px; padding-bottom:8px;">
                                            <img src="{{ asset('images/icon-white.png') }}"alt=""
                                                class="float-rightg
                                                style=" margin-right: 5px; width: 40%; margon-bottom:1px;"
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

                    </div>






                </div>
            </div>
            <div class="divider"></div>

            <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX07 Exploration Destination Systems</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt="" class="float-right graph-image"
                            onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:958;">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX07</section>
                                    <section>Exploration Destination
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-top:2px; padding-bottom:0px;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style=" margin-right: 3px; width: 40%; margon-bottom:1px;"
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
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>

                <div class="faq-answer" style="display:none;">
                    <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX07.1 Chemical Space
                                Propulsion</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image"
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:957;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX07.1</section>
                                    <section>Flight Computing and Avionics
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-top:2px; padding-bottom:0px;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style=" margin-right: 3px; width: 40%; margon-bottom:1px;"
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
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX07.1.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:956;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX07.1.1</section>
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


                        <div nane="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX07.1.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:955;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX07.1.2</section>
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




                        <!-- <div class="divider"></div>  -->
                    </div>

                    <div class="divider"></div>

                    <div name="answer2" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i><span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX07.2 Electric Space
                                Propulsion</span>
                        </a>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image"
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:954;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX07.2</section>
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
                                        TX07.2.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:953;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX07.2.1</section>
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
                                        TX07.2.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:952;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX07.2.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:53x; padding-bottom:80x;">
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
                    </div>






                </div>
            </div>

            <div class="divider"></div>

              <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX08 Sensors and Instruments</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt="" class="float-right graph-image"
                            onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:951;">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX08</section>
                                    <section>Sensors and Instruments
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-top:2px; padding-bottom:p0x;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style=" margin-right: 3px; width: 40%; margon-bottom:1px;"
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
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>

                <div class="faq-answer" style="display:none;">
                    <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX08.1 Chemical Space
                                Propulsion</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:950;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX08.1</section>
                                    <section>Flight Computing and Avionics
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-top:2px; padding-bottom:p0x;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style=" margin-right: 3px; width: 40%; margon-bottom:1px;"
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
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX08.1.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:949;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX08.1.1</section>
                                            <section>Flight Computing and
                                                Avionics
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:53x; padding-bottom:80x;">
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


                        <div nane="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX08.1.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:948;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX08.1.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:53x; padding-bottom:80x;">
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




                        <!-- <div class="divider"></div>  -->
                    </div>

                    <div class="divider"></div>

                    <div name="answer2" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i><span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX08.2 Electric Space
                                Propulsion</span>
                        </a>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:947;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX08.2</section>
                                    <section>Electric Space Propulsion
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0"
                                    style="color: white; padding-top:5px; padding-bottom:8px;2>
               0                   <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
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
                                        TX08.2.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:946;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX08.2.1</section>
                                            <section>Flight Computing and
                                                Avionics
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:53x; padding-bottom:80x;">
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
                                        TX08.2.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:945;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX08.2.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:53x; padding-bottom:80x;">
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
                    </div>






                </div>
            </div>

            <div class="divider"></div>
         
             <div class="faq-item">

                <div class="faq-question">
                    <div class="arrow-icon" style="position: relative;">
                        <i onclick="toggleAnswers(this)" class="fa-solid fa-angle-right"></i> <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX09 Entry, Descent, and Landing</span>
                        </a>

                        <img src="{{ asset('images/icon-blue.png') }}" alt="" class="float-right graph-image"
                            onclick="showimage(this)">

                        <div class="graph-pop" style="display: none;  z-index:944;">
                            <div class="row m-0" style=" width:100%; background: rgba(6, 83, 134, 1);">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX09</section>
                                    <section> Entry, Descent, and Landing
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-top:2px; padding-bottom:p0x;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style=" margin-right: 3px; width: 40%; margon-bottom:1px;"
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
                                style="margin-left:10px; color:white; background: rgba(6, 83, 134, 1);"><a
                                    style="color:white;" href="{{ url('/search-results') }}">Find Linked
                                    Projects</a></button>



                        </div>
                    </div>
                </div>

                <div class="faq-answer" style="display:none;">
                    <div class="divider"></div>
                    <div name="answer1" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i>
                        <span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX09.1 Chemical Space
                                Propulsion</a></span>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:943;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX09.1</section>
                                    <section>Flight Computing and Avionics
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0" style="color: white; padding-top:2px; padding-bottom:p0x;">
                                    <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
                                        style=" margin-right: 3px; width: 40%; margon-bottom:1px;"
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
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span >
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX09.1.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:942;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX09.1.1</section>
                                            <section>Flight Computing and
                                                Avionics
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:53x; padding-bottom:80x;">
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


                        <div nane="subAnswer2"
                            style="margin-left:1px;">
                            <div>
                                <i onclick="toggleSubAnswersDescreption(this)" class="fa-solid fa-angle-right"></i>
                                <span>
                                    <a href="{{ url('/search-results') }}" style="color:#000000">
                                        TX09.1.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:941;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX09.1.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:53x; padding-bottom:80x;">
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




                        <!-- <div class="divider"></div>  -->
                    </div>

                    <div class="divider"></div>

                    <div name="answer2" class="arrow-icon" style="position:relative;">
                        <i onclick="toggleSubAnswers(this)" class="fa-solid fa-angle-right"></i><span>
                            <a href="{{ url('/search-results') }}" style="color:#000000">TX09.2 Electric Space
                                Propulsion</span>
                        </a>
                        <img src="{{ asset('images/icon-yellow.png') }}" alt="" class="float-right yellow-graph-image "
                            onclick="showimage(this)">

                        <div class="  graph-pop" style="display: none;  z-index:940;">
                            <div class="row m-0" style=" width:100%; background: #FFA800">
                                <div class="col-md-9 px-2" style="color: white;">
                                    <section>TX09.2</section>
                                    <section>Electric Space Propulsion
                                    </section>
                                </div>
                                <div class="col-3 m-0 px-0"
                                    style="color: white; padding-top:5px; padding-bottom:8px;2>
               0                   <img src="{{ asset('images/icon-white.png') }}"alt="" class="float-right"
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
                                        TX09.2.1 Integrated Systems and Ancillary Technologies</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:939;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX09.2.1</section>
                                            <section>Flight Computing and
                                                Avionics
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:53x; padding-bottom:80x;">
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
                                        TX09.2.2 Earth Storable</span>
                                </a>
                                <img src="{{ asset('images/icon-black.png') }}" alt=""
                                    class=" float-right graph-image" onclick="showimage(this)">

                                <div class="graph-pop" style="display: none;  z-index:938;">
                                    <div class="row m-0" style=" width:100%; background: #323E48">
                                        <div class="col-md-9 px-2" style="color: white;">
                                            <section>TX09.2.2</section>
                                            <section>Earth Storable
                                            </section>
                                        </div>
                                        <div class="col-3 m-0 px-0"
                                            style="color: white; padding-top:53x; padding-bottom:80x;">
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
                    </div>






                </div>
            </div>

            <div class="divider"></div>
            

        </div>
    </div>


   




    <div style="margin-top:200px"></div>

    
    <footer>
    @include('footer')
</footer>


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
    </script>
</body>

</html>
