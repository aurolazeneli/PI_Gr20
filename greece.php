<!DOCTYPE html>
<html>
<head>
<title>Greece</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
 body{
    margin:90px;
    
  }
    
  .price {
  color: black;
  font-size: 18px;
  font-weight:150;
  font-style: oblique;
}
.mySlides {display:none;}
img { height:250px ;}
.row {
  display: flex;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}
.row2 {
  display: flex;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
  
}
.column {
  flex: 25%;
  padding: 0px;
}
.card {
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: left;
  font-family: arial;
  margin-bottom: 10px;
  margin-top: 10px;
  color:black;
  
  
}
.card button:hover {
  opacity: 0.7;
}
div.t {
  text-align: center;
}

a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: underline;
}
</style>
</head>

<body>
<?php include'header.php'?>
  <i><h1 style="text-align:center;text-emphasis-style: 122;
    text-shadow:1px 1px red;"> Greece Hotels</h1> </i>
<div class="content display-container">
  <img class="mySlides" src="images/g1.1.PNG" style="width:100%">
  <img class="mySlides" src="images/g2.1.PNG" style="width:100%">
  <img class="mySlides" src="images/g3.1.PNG" style="width:100%">
  <img class="mySlides" src="images/g4.1.PNG" style="width:100%">
  <img class="mySlides" src="images/g5.1.PNG" style="width:100%">
  <img class="mySlides" src="images/g6.1.PNG" style="width:100%">

</div>



<div class="row">
  
        <div class="column">
          <a href="greece1.html">
<div class="card">
    
        <img src="images/g1.1.PNG" alt="Greece Hotel" style="width:100%">
        <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Volcano Santorini</p1>
        <p class="price">$132</p>
        <p1>Popular with guest from US</p1>
    </div>
</a>
        </div>
        

        
        <div class="column">
          <a href="greece2.html">
      <div class="card" >
            <img src="images/g2.1.PNG" alt="Greece Hotel" style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Sunset Paros</p1>
            <p class="price">$680</p>
            <p1> High-end beach hotel</p1>
            
     </div>
     </a>
        </div>

        <div class="column">
          <a href="greece3.html">
        <div class="card" >
            <img src="images/g3.1.PNG" alt="Greece Hotel nr.3" style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Mykonos Princess</p1>
            <p class="price">$100</p>
            <p1>Offering a polished restaurant </p1>
            
     </div>
</a>
        </div>


    </div>
    <br>
    <br>
    <div class="row2">
            <div class="column">
              <a href="images/greece4.html">
           <div class="card">
            <img src="g4.1.PNG" alt="Greece Hotel" style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Royal Hotel</p1>
            <p class="price">$308</p>
            <p1>Elegant Rooms and suits </p1>
            
        </div>
        </a>
            </div>
    
            
            <div class="column">
              <a href="greece5.html">
          <div class="card" >
                <img src="images/g5.1.PNG" alt="Greece Hotel" style="width:100%">
                <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Avaton Luxory</p1>
                <p class="price">$200</p>
                <p1>Luxe suits with sea viws</p1>
                
         </div>
         </a>
            </div>
    
            <div class="column">
              <a href="greece6.html">
            <div class="card" >
                <img src="images/g6.1.PNG" alt="Greece Hotel" style="width:100%">
                <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Diana Palace </p1>
                <p class="price">$600</p>
                <p1>Down to earth hotel</p1>
                
         </div>
    </a>
            </div>
    
         
         </div>
         <?php include'footer.php'?>
         </body>
         </html>