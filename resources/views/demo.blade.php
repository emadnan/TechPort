<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Popup container - can be anything you want */
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
  width: auto; /* Adjust the width as needed */
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
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
</head>
<body style="text-align:center">


<div class="popup" onclick="myFunction('myPopup1')">Click me to toggle the popup!
  <img src="{{ URL('images/pop-up-graph.png') }}" alt="" class="popuptext" id="myPopup1">
</div>


<script>
// When the user clicks on div, open the popup
function myFunction(popupId) {
  var popup = document.getElementById(popupId);
  popup.classList.toggle("show");
}
</script>

</body>
</html>
