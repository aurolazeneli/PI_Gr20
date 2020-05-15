<!DOCTYPE html>
<html>
<head>
<title>Switzerland</title>
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
<?php include'include/head.php'?>
  <i><h1 style="text-align:center;text-emphasis-style: 122;
    text-shadow:1px 1px red;"> Switzerland Hotels</h1> </i>
<div class="content display-container">
  <img class="mySlides" src="images/s1.1.jpg" style="width:100%">
  <img class="mySlides" src="images/s2.1.jpg" style="width:100%">
  <img class="mySlides" src="images/s3.1.jpg" style="width:100%">
  <img class="mySlides" src="images/s4.1.jpg" style="width:100%">
  <img class="mySlides" src="images/s5.1.jpg" style="width:100%">
  <img class="mySlides" src="images/s6.1.jpg" style="width:100%">

</div>



<div class="row">
  
        <div class="column">
          <a href="31.php">
<div class="card">
    
        <img src="images/s1.1.jpg" alt=" Hotel" style="width:100%">
        <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Holiday Inn </p1>
        <p class="price">ALL 5,031</p>
        <p1>Free shuttle service </p1>
    </div>
</a>
        </div>
        

        
        <div class="column">
          <a href="322.php">
      <div class="card" >
            <img src="images/s2.1.jpg" alt="Hotel" style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Walhalla Guest</p1>
            <p class="price"> ALL 5,425</p>
            <p1> Situated on Bulevardi</p1>
            
     </div>
     </a>
        </div>

        <div class="column">
          <a href="33.php">
        <div class="card" >
            <img src="images/s3.1.jpg" alt="Hotel " style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">TouchBed Gallen</p1>
            <p class="price">ALL 8,313</p>
            <p1> 400 m from city centre</p1>
            
     </div>
</a>
        </div>


    </div>
    <br>
    <br>
    <div class="row2">
            <div class="column">
              <a href="34.php">
           <div class="card">
            <img src="images/s4.1.jpg" alt="Hotel" style="width:100%">
            <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Millennium</p1>
            <p class="price">ALL 10,108</p>
            <p1>300 m from Sunegga</p1>
            
        </div>
        </a>
            </div>
    
            
            <div class="column">
              <a href="35.php">
          <div class="card" >
                <img src="images/s5.5.jpg" alt=" Hotel" style="width:100%">
                <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Grand des Bains</p1>
                <p class="price">ALL 6,860</p>
                <p1> Panoramic views</p1>
                
         </div>
         </a>
            </div>
    
            <div class="column">
              <a href="36.php">
            <div class="card" >
                <img src="images/s6.1.jpg" alt=" Hotel" style="width:100%">
                <p1 style="font-size:19px;
        text-shadow:1px 1px red;">Radisson Blu </p1>
                <p class="price">ALL 8,550</p>
                <p1> 2-minute from airport </p1>
                
         </div>
    </a>
            </div>
    
         
         </div>
         <?php include'include/footer.php'?>
         </body>
         </html>
