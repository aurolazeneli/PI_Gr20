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

  <i> <p style="text-align:center;font-size:xx-large;text-shadow:1px 1px red;">Rove Dubai Marina</p> </i>

<div class="container" style="align-content: center;">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/d3.1.jpg" style="width:100%;height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/d3.2.jpg" style="width:100%;height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/d3.3.jpg" style="width:100%;height:500px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/d3.4.jpg" style="width:100%;height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/d3.5.jpg" style="width:100%;height:500px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/d3.6.jpg" style="width:100%;height:500px">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/d3.1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Hotel">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/d3.2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Reception">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/d3.3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Swimming Pool">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/d3.4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Waiting Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/d3.5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Restaurant">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/d3.6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Fitness Center">
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
<p>Located in one of Dubai’s most vibrant and spectacular neighborhoods, Rove Dubai Marina is the perfect destination for leisure travelers. Surrounded by stunning high-rise buildings as well as a wide variety of shopping and dining outlets including Dubai Marina Mall, the hotel is nearby the beach and barely a few minutes driving distance from The Palm. Downtown Dubai and The Dubai Mall are just 20 minutes away.Business hotspots including Dubai Media City, Dubai Internet City and Jebel Ali Freezone are also within close proximity.

    All guest rooms in the hotel are fitted with a flat-screen TV with cable channels. Rooms are complete with a modern bathroom including power rain showers and hairdryer; a sofa bed suitable for a child, desk and coffee/tea making facilities. There is a free ice machine on every room floor.</p>
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
       <li>Free Wifi</li>
       <li>Flat screen TV</li>
       <li>Private Parking</li>
       <li>Modern Bathroom</li>
       <li>Coffee Machine</li>
       <li>Free ice</li>
       
     </ul>
   </td>
   <td>

     <ul>
       <li>Swimming</li>
       <li>Cycling</li>
       <li>Fitness Center </li>
       
     </ul>
   </td>
   <td> 

     <ul>

     <li>Beach the Palm</li>
     <li>Swimming Pool</li>
     <li>Tanning Room</li>
     
     </ul>
   </td>
 </tr>
 </table>
 </p>
 <?php include'footer.php'?>
</body>
</html>