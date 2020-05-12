<!DOCTYPE html>
<html>
<head>
<title>Italy</title>
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
    text-shadow:1px 1px red;"> Italy Hotels</h1> </i>
<div class="content display-container">
  <img class="mySlides" src="images/i1.1.jpg" style="width:100%">
  <img class="mySlides" src="images/i2.1.jpg" style="width:100%">
  <img class="mySlides" src="images/i3.1.jpg" style="width:100%">
  <img class="mySlides" src="images/i4.1.jpg" style="width:100%">
  <img class="mySlides" src="images/i5.1.jpg" style="width:100%">
  <img class="mySlides" src="images/i6.1.jpg" style="width:100%">

</div>



<div class="row">
  
        <div class="column">
          <a href="italy1.php">
<div class="card">
    
        <img src="images/i1.1.jpg" alt=" Hotel" style="width:100%">
        <p1 style="font-size:19px;
        text-shadow:1px 1px red;">B&B Hotel Treviso</p1>
        <p class="price">ALL 8,201</p>
        <p1>3-star property in Treviso</p1>
    </div>
</a>
        </div>
        

        
        <div class="column">
          <a href="italy2.php">
      <div class="card" >
            <img src="images/i2.1.jpg" alt="Hotel" style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Ocelle Thermae </p1>
            <p class="price"> ALL 4,025</p>
            <p1> Located 650 m from Sirmione </p1>
            
     </div>
     </a>
        </div>

        <div class="column">
          <a href="italy3.php">
        <div class="card" >
            <img src="images/i3.1.jpg" alt="Hotel " style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Hotel The Cube</p1>
            <p class="price">ALL 6,333</p>
            <p1>4-star hotel in Fidenza</p1>
            
     </div>
</a>
        </div>


    </div>
    <br>
    <br>
    <div class="row2">
            <div class="column">
              <a href="italy4.php">
           <div class="card">
            <img src="images/i4.1.jpg" alt="Hotel" style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Hotel Mozart</p1>
            <p class="price">ALL 8,008</p>
            <p1>100 m from Milan</p1>
            
        </div>
        </a>
            </div>
    
            
            <div class="column">
              <a href="italy5.php">
          <div class="card" >
                <img src="images/i5.1.jpg" alt=" Hotel" style="width:100%">
                <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Best Western </p1>
                <p class="price">ALL 4,060</p>
                <p1> 4-star hotel </p1>
                
         </div>
         </a>
            </div>
    
            <div class="column">
              <a href="italy6.php">
            <div class="card" >
                <img src="images/i6.1.jpg" alt=" Hotel" style="width:100%">
                <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Hotel Abbazia</p1>
                <p class="price">ALL 5,600</p>
                <p1>Set in a restored monastery</p1>
                
         </div>
    </a>
            </div>
    
         
         </div>
         <?php include'footer.php'?>
         </body>
         </html>