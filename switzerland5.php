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
<i> <p style="text-align:center;font-size:xx-large;text-shadow:1px 1px red;">Grand Hotel des Bains</p> </i>

<div class="container" style="align-content: center;">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/s5.1.jpg" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/s5.2.jpg" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/s5.3.jpg" style="width:100%;height:550px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/s5.4.jpg" style="width:100%;height:550px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/s5.5.jpg" style="width:100%;height:500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/s5.6.PNG" style="width:100%;height:600px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/s5.1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Hotel">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/s5.2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Bathroom">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/s5.3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/s5.4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Living Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/s5.5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Room">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/s5.6.PNG" style="width:100%" onclick="currentSlide(6)" alt="Around the Hotel">
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
<p> Offering panoramic views of the Dents du Midi Mountains, the Grand Hôtel des Bains Superior offers free access to the Spa Centre of Lavey-les-Bains, which has the warmest thermal water in Switzerland. All rooms come with free Wi-Fi and free private parking is available. The Spa Centre is directly connected to the Grand Hotel.

  The elegant rooms at Grand Hotel des Bains feature cable TV, a safe, and a bathroom with bathrobes and hairdryer. Some rooms also overlook the park.
  
  All facilities, including the indoor and outdoor pools, can be used free of charge throughout the day. A wide range of health beauty treatments is available as well.
  
  The "La Table des Bains" restaurant overlooks the pool and offers you starters and desserts in buffet style, as well as fish and grilled dishes prepared in the show kitchen. Restaurant Chalet des Bains features traditional Swiss specialities like raclettes and fondues, as well as grilled dishes and pizzas from the wood-fired oven. A terrace in the shade of trees invites you to dine outside in summer. A wide range of cocktails and other drinks can be enjoyed in the bar.</p>
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
       <li>Private Parking</li>
       <li>Free Wi-Fi</li>
       <li>Cable TV</li>
       <li>Hairdryer</li>
       <li>Laundry Services</li>
       <li>Beauty Treatments</li>
       <li></li>
       <li></li>
     </ul>
   </td>
   <td>

     <ul>
       <li>Tracks for running</li>
       <li>Jogga space</li>
       <li>Fitness Center</li>
       
     </ul>
   </td>
   <td> 

     <ul>

     <li>Indoor Pools</li>
     <li>Outdoor Pools</li>
     <li>Spa Center</li>
     
     </ul>
   </td>
 </tr>
 </table>
 </p>
 <?php include'footer.php'?>
</body>
</html>