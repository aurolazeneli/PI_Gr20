<?php

function readRows(){
global $connection;


for ($i=1; $i <5; $i++) {
  $query = "SELECT * FROM images where id='$i'";
  $query1 = "SELECT * FROM hotel where hotelno='$i'";
  $result1 = mysqli_query($connection, $query1);
  if(!$result1){
     die('Query FAILED!');
}
     $result = mysqli_query($connection, $query);
      if(!$result){
         die('Query FAILED!');
  }
  //$row = mysqli_fetch_assoc($result);
  //$row1 = mysqli_fetch_assoc($result1);
  while ($row = mysqli_fetch_assoc($result) ) {

  echo "<div class=\"col\"><a href=\"#\">  <img src='images/".$row['image']."' alt=\"Snow\" style=\"width:100%; height:160px \"></a>";

while ($row1 =  $row1 = mysqli_fetch_assoc($result1)) {


  echo "<h6 style=\"font-size: 0.8rem; margin-top:5px\">".$row1['Name1']."</h6>";
  echo "<div class=\"inline\">";
  echo "<div  style=\"font-size: 0.7rem; margin:1px\">";
  echo " <p style=\"margin:1px; font-size: 0.6rem;\">".$row1['State']."/</p>";
  echo " <p style=\"margin:1px; font-size: 0.6rem;\">".$row1['City']."</p>";
  $rating = $row1['Rate'];
  for ($j=0; $j <$rating ; $j++) {
    echo "<i style=\"color:red;\" class=\"fa fa-star\"></i>";
  }
  echo "</div>";
  echo " <div class=\"v1\">";
  echo "<h6 style=\"font-size: 0.55rem; margin-bottom:1px; text-decoration-line: line-through;\">".$row1['Price']."<i class=\"fa fa-dollar\"></i></h6>";
    echo "<h6 style=\"font-size: 0.8rem; color:red; margin-bottom:1px\">".$row1['Price']."<i class=\"fa fa-dollar\" style=\"color:red\"></i></h6>";
    echo " </div> </div></div>";}}

}
}

function readRows1(){
global $connection;


for ($i=5; $i <9; $i++) {
  $query = "SELECT * FROM images where id='$i'";
  $query1 = "SELECT * FROM hotel where hotelno='$i'";
  $result1 = mysqli_query($connection, $query1);
  if(!$result1){
     die('Query FAILED!');
}
     $result = mysqli_query($connection, $query);
      if(!$result){
         die('Query FAILED!');
  }
  //$row = mysqli_fetch_assoc($result);
  //$row1 = mysqli_fetch_assoc($result1);
  while ($row = mysqli_fetch_assoc($result) ) {

  echo "<div class=\"col\"> <a href=\"#\"> <img src='images/".$row['image']."' alt=\"Snow\" style=\"width:100%; height:160px \"></a>";

while ($row1 =  $row1 = mysqli_fetch_assoc($result1)) {


  echo "<h6 style=\"font-size: 0.8rem; margin-top:5px\">".$row1['Name1']."</h6>";
  echo "<div class=\"inline\">";
  echo "<div  style=\"font-size: 0.7rem; margin:1px\">";
  echo " <p style=\"margin:1px; font-size: 0.6rem;\">".$row1['State']."/</p>";
  echo " <p style=\"margin:1px; font-size: 0.6rem;\">".$row1['City']."</p>";

  $rating = $row1['Rate'];
  for ($j=0; $j <$rating ; $j++) {
    echo "<i style=\"color:red;\" class=\"fa fa-star\"></i>";
  }
  echo "</div>";
  echo " <div class=\"v1\">";
  echo "<h6 style=\"font-size: 0.55rem; margin-bottom:1px; text-decoration-line: line-through;\">".$row1['Price']."<i class=\"fa fa-dollar\"></i></h6>";
    echo "<h6 style=\"font-size: 0.8rem; color:red; margin-bottom:1px\">".$row1['Price']."<i class=\"fa fa-dollar\" style=\"color:red\"></i></h6>";
    echo " </div> </div></div>";}}

}
}

function activities(){



}
 ?>
