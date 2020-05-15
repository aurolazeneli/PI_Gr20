<!DOCTYPE html>
<html>
<head>
<title>Dubai</title>
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
<?php include'includes/head.php'?>
<i><h1 style="text-align:center;text-emphasis-style: 122;
text-shadow:1px 1px red;"> Dubai Hotels</h1> </i>
<div class="content display-container">
  <img class="mySlides" src="images/d1.1.jpg" style="width:100%">
  <img class="mySlides" src="images/d2.1.jpg" style="width:100%">
  <img class="mySlides" src="images/d3.1.jpg" style="width:100%">
  <img class="mySlides" src="images/d4.1.jpg" style="width:100%">
  <img class="mySlides" src="images/d5.1.jpg" style="width:100%">
  <img class="mySlides" src="images/d6.1.jpg" style="width:100%">

</div>

<br>

<div class="row">
  
      <div class="column">
         <a href="1.php">
       <div class="card">
        <img src="images/d1.1.jpg" alt=" Hotel" style="width:100%">
        <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Maisan Hotel</p1>
        <p class="price">ALL 5,201</p>
        <p>Restaurant,free wifi ,fitness</p>
    </div>
</a>
        </div>
        

        
        <div class="column">
          <a href="2.php">
      <div class="card" >
            <img src="images/d2.1.jpg" alt="Hotel" style="width:100%">
            <p1 style="font-size:19px;
            text-shadow:1px 1px red;">Holiday INN</p1>
            <p class="price"> ALL 6,025</p>
            <p2>Connected to the Dubai Festival </p2>
            
     </div>
     </a>
        </div>

        <div class="column">
          <a href="3.php">
        <div class="card" >
            <img src="images/d3.1.jpg" alt="Hotel " style="width:100%">
            <p1 style="font-size:19px;
            text-shadow:1px 1px red;">Rove Dubai Marina</p1>
            <p class="price">ALL 3,313</p>
            <p2>Dubai’s mostspectacular neighborhood</p2>
            
     </div>
</a>
        </div>


    </div>
    <br>
    <br>
    <div class="row2">
            <div class="column">
              <a href="4.php">
           <div class="card">
            <img src="images/d4.1.jpg" alt="Hotel" style="width:100%">
            <p1 style="font-size:19px;
            text-shadow:1px 1px red;">Al Bandar Rotana</p1>
            <p class="price">ALL 5,868</p>
            <p2>Ultra Model Hotel</p2>
            
        </div>
        </a>
            </div>
    
            
            <div class="column">
              <a href="5.php">
          <div class="card" >
                <img src="images/d5.1.jpg" alt=" Hotel" style="width:100%">
                <p1 style="font-size:19px;
                text-shadow:1px 1px red;">Hampton By Hilton </p1>
                <p class="price">ALL 7,060</p>
                <p2>Located right in the heart of the hustle</p2>
                
         </div>
         </a>
            </div>
    
            <div class="column">
              <a href="6.php">
            <div class="card" >
                <img src="images/d6.1.jpg" alt=" Hotel" style="width:100%">
                <p1 style="font-size:19px;
                text-shadow:1px 1px red";>Renaissance Hotel</p1>
                <p class="price">ALL 6,000</p>
                <p2>Views across the city skyline </p2>
                
         </div>
    </a>
            </div>
    
         
         </div>
         <br>
         <br>
         <?php include'includes/footer.php'?>
         </body>
         </html>
