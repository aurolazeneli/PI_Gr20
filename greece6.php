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

  <i> <p style="text-align:center;font-size:xx-large;text-shadow:1px 1px red;">Diana Palace</p> </i>

<div class="container" style="align-content: center;">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/g6.1.PNG" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/g6.2.PNG" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/g6.3.PNG" style="width:100%;height:500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/g6.4.PNG" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/g6.5.PNG" style="width:100%;height:500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/g6.6.PNG" style="width:100%;height:500px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/g6.1.PNG" style="width:100%" onclick="currentSlide(1)" alt="Hotel">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/g6.2.PNG" style="width:100%" onclick="currentSlide(2)" alt="Swimming Pool">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/g6.3.PNG" style="width:100%" onclick="currentSlide(3)" alt="Restaraunt">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/g6.4.PNG" style="width:100%" onclick="currentSlide(4)" alt="Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/g6.5.PNG" style="width:100%" onclick="currentSlide(5)" alt="Room 2">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/g6.6.PNG" style="width:100%" onclick="currentSlide(6)" alt="Restaurant">
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
<p> 
  Surrounded by lush gardens and 3 km from Zakynthos ferry terminal, this relaxed hotel is a 5-minute walk from Argassi Beach
  
  Simple rooms offer free Wi-Fi and minifridges, plus balconies or patios. Upgraded rooms add TVs, modern decor and/or garden views. Family rooms have 1 or 2 bedrooms, and some provide kitchenettes and dining tables.
  
  A complimentary breakfast buffet is served in a polished restaurant. There's an open-air dining area, a snack bar and a lobby bar, plus a gym. Other amenities include an outdoor pool, a kids' pool, a poolside bar and sunloungers, plus a playground and 2 furnished terraces. Massages are available, as is parking</p>
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
       <li>Snack bar</li>
       <li>Loby bar</li>
       <li>Free Wi-Fi</li>
       <li>Parking</li>
     
     </ul>
   </td>
   <td>

     <ul>
       <li>Playground</li>
       <li>Gym</li>
       <li>Massages</li>
       
     </ul>
   </td>
   <td> 

     <ul>

     <li>Indoor pool</li>
     <li>Kids pool</li>
     <li>Sunloungers</li>
     <li></li>
     </ul>
   </td>
 </tr>
 </table>
 </p>
 <?php include'footer.php'?>
</body>
</html>