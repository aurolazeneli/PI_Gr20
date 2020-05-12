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
  <i> <p style="text-align:center;font-size:xx-large;text-shadow:1px 1px red;">Ocelle Thermae</p> </i>

<div class="container" style="align-content: center;">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/i2.1.jpg" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/i2.2.jpg" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/i2.3.jpg" style="width:100%;height:500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/i2.4.jpg" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/i2.5.jpg" style="width:100%;height:500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/i2.6.jpg" style="width:100%;height:500px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/i2.1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Hotel">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/i2.2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Swimming pool">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/i2.3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/i2.4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Bathroom">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/i2.5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Beach">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/i2.6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Living room">
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
<p> Offering an indoor pool, an external thermal pool and a seasonal outdoor pool, Hotel Ocelle is in Sirmione. Located just 650 m from Sirmione castle, it includes a hot tub, garden, and bar. WiFi is free in public areas.

    You will find a 24-hour front desk at the property, and there is a free private beach too.
    
    The hotel is 650 m from Sirmione's historical centre. The Aquaria Thermal Spa is 1 km from the property, while Terme di Sirmione - Virgilio are 2.5 km from the property. The nearest airport is Verona Airport, 25 km from Hotel Ocelle..
    
    Colombare di Sirmione is a great choice for travellers interested in food, walking and old town exploring.</p>
    <p> <h2  style="text-shadow:1px 1px red"><i>Services </i></h2>
      <table style="width:100%">
       <tr>
         <th><i>General Facilities </i><span> <hr> </span> </th>
         <th><i> Activity/Sport</i> <span> <hr> </span></th> 
         <th><i>Pool/Beach</i> <span> <hr> </span></th>
       </tr>
 <tr>
   <td> 
     
     <ul>
       <li>Hot tube</li>
       <li>Garden</li>
       <li>Bar</li>
       <li>Free Wifi</li>
       <li>24h front desk</li>

     </ul>
   </td>
   <td>

     <ul>
       <li>Swimming</li>
       <li>Voleyball area</li>
      
     </ul>
   </td>
   <td> 

     <ul>

     <li>External thermal pool </li>
     <li>Seasonal outdoor pool</li>
     <li>Indoor pool</li>
     <li>Free private beach</li>
     </ul>
   </td>
 </tr>
 </table>
 </p>
 <?php include'footer.php'?>
</body>
</html>