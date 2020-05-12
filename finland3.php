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
  <i> <p style="text-align:center;font-size:xx-large;text-shadow:1px 1px red;">Hotel Lilla Roberts</p> </i>

<div class="container" style="align-content: center;">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/f3.1.jpg" style="width:100%;height:600px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/f3.2.jpg" style="width:100%;height:550px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/f3.3.jpg" style="width:100%;height:500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/f3.4.jpg" style="width:100%;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/f3.5.jpg" style="width:100%;height:500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/f3.6.jpg" style="width:100%;height:500px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/f3.1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Hotel">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/f3.2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Breakfast">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/f3.3.jpg" style="width:100%" onclick="currentSlide(3)" alt=" Double Room">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/f3.4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Bathroom">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/f3.5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Breakfast 2">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/f3.6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Restaurant">
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
<p>Featuring a quiet courtyard and views of the city, this Art Deco-themed boutique hotel offers elegantly-fitted rooms in central Helsinki. Guests can take a pause from the city and enjoy a meal in the hotel bistro restaurant Krog Roba or a drink made by the award winning barman. Free WiFi is included.

    Each stylish room at Hotel Lilla Roberts features a wireless Bluetooth-compatible sound system that can enhance your TV viewing pleasure as well as media from personal mobile devices. Additional features include air conditioning and a minibar.
    
    The hotel offers free use of bicycles, free 24 -hour gym and laundry services. Guests can enjoy the courtyard terrace in the summer. Restaurants and bar found in the neighbourhood are popular among locals.
    
    Helsinki Cathedral is 850 m from Hotel Lilla Roberts, while Observatory Hill Park is 270 m away. Helsinki Bus Terminal is 1 km away. The nearest airport is Vantaa Airport, 22 km from the property.</p>
    <p> <h2  style="text-shadow:1px 1px red"><i>Services </i></h2>
      <table style="width:100%">
       <tr>
         <th><i>General Facilities </i><span> <hr> </span> </th>
         <th><i> Activity/Sport</i> <span> <hr> </span></th> 
       </tr>
 <tr>
  <td> 
     
    <ul>
      <li>Minibar</li>
      <li>Free WiFi</li>
      <li>Air Conditioner</li>
      <li>Hair Dryer</li>
      <li>Laundry service</li>
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