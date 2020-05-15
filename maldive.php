<!DOCTYPE html>
<html>
<head>
<title>Maldives</title>
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
<?php include'include/header.php'?>
  <i><h1 style="text-align:center;text-emphasis-style: 122;
    text-shadow:1px 1px red;"> Maldive Hotels</h1> </i>
<div class="content display-container">
  <img class="mySlides" src="images/m1.1.jpg" style="width:100%">
  <img class="mySlides" src="images/m2.1.jpg" style="width:100%">
  <img class="mySlides" src="images/m3.1.jpg" style="width:100%">
  <img class="mySlides" src="images/m4.1.jpg" style="width:100%">
  <img class="mySlides" src="images/m5.1.jpg" style="width:100%">
  <img class="mySlides" src="images/m6.1.jpg" style="width:100%">

</div>



<div class="row">
  
        <div class="column">
          <a href="25.php">
<div class="card">
    
        <img src="images/m1.1.jpg" alt=" Hotel" style="width:100%">
        <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Water Breeze </p1>
        <p class="price">ALL 9,201</p>
        <p1>Located in South Male Atoll</p1>
    </div>
</a>
        </div>
        

        
        <div class="column">
          <a href="26.php">
      <div class="card" >
            <img src="images/m2.1.jpg" alt="Hotel" style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Wave Sound </p1>
            <p class="price"> ALL 9,025</p>
            <p1> Located in Maldives Islands</p1>
            
     </div>
     </a>
        </div>

        <div class="column">
          <a href="27.php">
        <div class="card" >
            <img src="images/m3.1.jpg" alt="Hotel " style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Arena Beach </p1>
            <p class="price">ALL 10,323</p>
            <p1>Positioned in South Male Atoll</p1>
            
     </div>
</a>
        </div>


    </div>
    <br>
    <br>
    <div class="row2">
            <div class="column">
              <a href="28.php">
           <div class="card">
            <img src="images/m4.1.jpg" alt="Hotel" style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Fihalhohi Island</p1>
            <p class="price">ALL 10,108</p>
            <p1>Situated on the South Western </p1>
            
        </div>
        </a>
            </div>
    
            
            <div class="column">
              <a href="29.php">
          <div class="card" >
                <img src="images/m5.1.jpg" alt=" Hotel" style="width:100%">
                <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Velana Blu </p1>
                <p class="price">ALL 9,060</p>
                <p1>Situated in South Male Atoll</p1>
                
         </div>
         </a>
            </div>
    
            <div class="column">
              <a href="30.php">
            <div class="card" >
                <img src="images/m6.1.jpg" alt=" Hotel" style="width:100%">
                <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Kaani Beach Hotel </p1>
                <p class="price">ALL 9,500</p>
                <p1>Well positioned in South Male Atoll</p1>
                
         </div>
    </a>
            </div>
    
         
         </div>
         
        <?php include'include/footer.php'?>
         </body>
         </html>
