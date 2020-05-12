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
  background-color: rgba(0,0,0,0.8);
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
  <i> <p style="text-align:center;font-size:xx-large;text-shadow:1px 1px red;">Renaissance Downtown Hotel</p> </i>

<div class="container" style="align-content: center;">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/d6.1.jpg" style="width:100%;height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/d6.2.jpg" style="width:100%;height:600px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/d6.3.jpg" style="width:100%;height:500px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/d6.4.jpg" style="width:100%;height:550px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/d6.5.jpg" style="width:100%;height:600px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/d6.6.jpg" style="width:100%;height:600px">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/d6.1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Hotel">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/d6.2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Restaurant">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/d6.3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Bathroom">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/d6.4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Room View">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/d6.5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Room View">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/d6.6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Room">
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
    
<h2  style="text-shadow:1px 1px red"> <i> Details </i> <span><hr style="color:rgb(128, 128, 128);"></span></h2>
<p> Offering captivating views across the city skyline within walking distance of the vibrant Downtown area and Burj Khalifa, the newly opened Renaissance Downtown Hotel, Dubai sits directly on the Dubai Water Canal. It offers an indoor/outdoor swimming pool. The hotel features a strong portfolio of chef led dining experiences across 6 F&B outlets with multiple international cuisines and expert mixology.

    The hotel features 9 room types with 5 suite categories ranging between 60-305 sqm. Each has natural lighting from the floor-to-ceiling windows which showcase either a Burj Khalifa or Dubai Water Canal view. Every room contains an array of comforts including the latest in-room technology with touch panels for lighting, a walk-in closet, an in-room safe, a mini bar and a seating area with a 48 inch flat screen TV. The spacious bathrooms offer a freestanding tub and shower and complimentary luxury Amouage amenities.
    
    Iron Chef Masaharu Morimoto brings his famed eponymous concept to the U.A.E. with Morimoto Dubai. We invite you to savor as well the flavors of a southern French farmhouse at Bleu Blanc and full-flavored Italian with BASTA! The coffee shop Grounded serves coffee from local roasters Seven Fortunes and light bites from the hotel’s pastry chefs.</p>
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
       <li>Free WiFi</li>
       <li>Private Parking</li>
       <li>Natural Lighting</li>
       <li>Mini bar</li>
       <li>48 inch flat screen</li>
       
     </ul>
   </td>
   <td>

     <ul>
       <li>Fitness Center</li>
       <li>Swimming</li>
       <li>Jogga</li>
       
     </ul>
   </td>
   <td> 

     <ul>

     <li>Indoor Pool</li>
     <li>Outdoor Pool</li>
     <li>Close to the beach</li>
     <li></li>
     </ul>
   </td>
 </tr>
 </table>
 </p>
 <?php include'footer.php'?>
</body>
</html>