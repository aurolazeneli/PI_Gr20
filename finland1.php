<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial;
  margin: 80px;
  margin-top:30px;
  
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
  
}

.container {
  position: relative;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color:rgb(219, 25, 25);
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 16.66%;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>
<?php include'header.php'?>
  <i> <p style="text-align:center;font-size:xx-large;text-shadow:1px 1px red;">Forenom Aparthotel Oulu</p> </i>

<div class="container" style="align-content: center;">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/f1.1.jpg" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/f1.2.jpg" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/f1.3.jpg" style="width:100%;height:600px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/f1.4.jpg" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/f1.5.jpg" style="width:100%;height:500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/f1.6.jpg" style="width:100%;height:500px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/f1.1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Hotel">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/f1.2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Bedroom">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/f1.3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Hotel Location">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/f1.4.jpg" style="width:100%" onclick="currentSlide(4)" alt=" Kitchen">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/f1.5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Working Space">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/f1.6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Room">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
<h2  style="text-shadow:1px 1px red"> <i> Details </i> <span><hr style="color:rgb(128, 128, 128);"></span>
</h2>

<p style="width:80%;">Located in the centre of Oulu, Forenom Aparthotel Oulu Uusikatu is a modern, self-catering accommodation just a 6-minute walk from Oulu Railway Station. Free WiFi is available.

    A coffee machine, microwave and small refrigerator are featured in each apartment, along with a flat-screen TV. Some also feature a kitchenette with a stovetop. All apartments have a private bathroom with a hairdryer and free toiletries.
    
    A shared kitchen and a laundry room are available for guests. Private parking with limited spaces is available on site.
    
    Forenom Aparthotel Oulu Uusikatu is 400 m away from the pedestrian shopping area Rotuaari. The nearest airport is Oulu Airport, a 20-minute drive away from this property.</p>
    <p> <h2  style="text-shadow:1px 1px red"><i>Services </i></h2>
      <table style="width:100%">
       <tr>
         <th><i>General Facilities </i><span> <hr> </span> </th>
         <th><i> Activity/Sport</i> <span> <hr> </span></th> 
       </tr>
 <tr>
   <td> 
     
     <ul>
       <li>Laundry Room</li>
       <li>Free WiFi</li>
       <li>Flat screen TV</li>
       <li>free toiletries</li>
       <li>laundry room</li>
       <li>Private parking</li>
       
     </ul>
   </td>
   <td>

     <ul>
       <li>Walking</li>
       <li>Cycling</li>
       <li>Fitness Center</li>
       
     </ul>
   </td>
  
 </tr>
 </table>
 </p>
 <?php include'footer.php'?>
</body>
</html>