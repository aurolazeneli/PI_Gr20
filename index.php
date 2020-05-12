<?php include "MySQL/db.php";?>
<?php include "functions.php";?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script type="text/javascript"  defer src="main.js">

    </script>
    <title>Travel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery-3.4.1.min.js"></script>
  </head>
  <body>

<header id="head" class="head" style="height=500px">

<nav>

    <form class="form-inline" action="index.php" method="post">

     <i class="fa fa-search" style="color:white" aria-hidden="true"></i>
     <input type="search" name="search" placeholder="Search..." id="mysearch" style="width:200px; border: 0;
    background: none;
    -webkit-appearance: none; color: white" value="">
    <span style="margin-left:70%"> <i class="fa fa-facebook" style="color:white" aria-hidden="true"></i>
     <i class="fa fa-instagram" style="color:white" aria-hidden="true"></i>
     <i class="fa fa-youtube-play" style="color:white" aria-hidden="true"></i>
   <i class="fa fa-twitter" style="color:white" aria-hidden="true"></i></span>
    </form>
    <hr color="white" style=" margin-left:-7%;height:0.001px; width:90%">

<?php include "includes/header.php" ?>

     <div style="margin-top:30%" class="form-php">
       <form  action="search.php" method="post">
  <div class="form-row align-items-center">
  <div class="form-group col-md-4" style="margin-bottom:2px !important;">
      <label class="sr-only" for="inlineFormInputName">Where</label>
       <select id="inputState" name="location" class="form-control">
         <option selected>Where</option>
         <option>Prishtina</option>
          <option>London</option>
           <option>Rome</option>
            <option>Paris</option>
             <option>Istanbul</option>
       </select>

    </div>
    <div class="col-md-2 my-1">

        <input type="date" style="width: 130px !important; " name="start_date" class="form-control" id="inlineFormInputName" placeholder="d">
    </div>
    <div class="col-md-2 my-1">

      <input type="date" style="width: 130px !important; " name="end_date" class="form-control" id="inlineFormInputName" placeholder="d">
    </div>

    <div class="col-auto my-1">
      <button type="submit" style="background-color:red; outline:none !important;" name="submit" class="btn btn-primary">Search</button>
    </div>
  </div>
</form>

     </div>
</nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
    <?php for ($i=0; $i <4 ; $i++) {
      echo "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"$i\"></li>";
    } ?>  </ol>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/finland.png" class="d-block w-100" alt="finland">
    </div>
<?php $photos = array("images/greece1.jpg","images/maldiv.jpg","images/swiss.png" );
       for ($i=0; $i <3; $i++) {
        echo "<div class=\"carousel-item\">
          <img src=\"$photos[$i]\" class=\"d-block w-100\" alt=\"finland\">
        </div>";
       } ?>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>

<section class="qualities">
  <div class="row">
  <div class="col">  <i class="fa fa-check-circle" style="font-size:48px;color:#2eb857"></i>
    <h5>Easy booking</h5>
    <p>You can easily manage many update processes, such as date change, room and bed preference setting, or guest information change.</p></div>
  <div class="col">
   <i class="fa fa-info-circle" style="font-size:48px;color:#40b3d6"></i>
    <h5>Last Minute Deals</h5>
    <p>Looking for a hotel for tonight? You can stay at the best price by following our last minute discounts instead of getting lost among hundreds of options.</p></div>
    <div class="col"><div class="fo"  style="background-color:#ebcd0c" >  <i class="fa fa-comments" aria-hidden="true" style="color:white; margin-top:10px; font-size: 1.3rem;" ></i></div>
      <h5>7/24 Support</h5>
      <p>By using our Call Center and online support channels, you can ask us 24/7 questions and get service on any subject you want.</p></div></div>
</section>

<section style="margin-bottom:50px">
  <h5 style="text-align:center">SPECIAL OFFERS</h5>
  <div  class="row">
   <?php  readRows(); ?>

</div>
<div style="margin-top:4%" class="row">

 <?php  readRows1(); ?>
</div>

</section>

<section style="margin-top: 40px" class="tips">
  <h5 style="text-align:center; style="margin-bottom: 10px" ">FEATURED TIPS</h5>
  <table class="table table-borderless">
    <tbody>
      <tr>
        <td> <img src="images/maldiv.jpg" alt="Snow" style="width:100%"></td>
        <td> <img src="images/maldiv.jpg" alt="Snow" style="width:100%"></td>
        <td> <img src="images/maldiv.jpg" alt="Snow" style="width:100%"></td>
      </tr>
      <tr>
         <td></td>
        <td><img src="images/maldiv.jpg" alt="Snow" style="width:100%"></td>
        <td><img src="images/maldiv.jpg" alt="Snow" style="width:100%"></td>
          <td> <img src="images/maldiv.jpg" alt="Snow" style="width:100%"></td>
      </tr>
      <tr>  <td colspan="2"><img src="images/maldiv.jpg" alt="Snow" style="width:100%"></td>
        <th scope="row"><img src="images/maldiv.jpg" alt="Snow" style="width:100%"></th>
          <td> <img src="images/maldiv.jpg" alt="Snow" style="width:100%"></td>
      </tr>
    </tbody>
  </table>
</section>

<hr style="margin-top:40px">

<section style=" margin-top:50px; margin-bottom: 60px">
  <h3 style="color:#120f57; text-align: center">Don't let our campaigns escape!</h3>
  <p  style="color:#120f57; text-align: center; width:80%; margin:0 auto">Don't decide without having to look at our easy booking campaigns that we have updated for you. With your early bookings you can plan your holiday at very affordable rates and your time and money will be in your pocket!</p>

  <div class="row2" style="width: 95%;margin-left: 2%; margin-top:50px;">
    <?php $photos1 = array("images/historical.png","images/adventure.png","images/economic.png","images/family.png","images/modern.png","images/festival.png" );
           for ($i=0; $i <6; $i++) {
            echo "  <div class=\"column4\" style= \"background-image:url('$photos1[$i]')  \">

              </div>";
           } ?>
</div>
</section>
<?php include "includes/footer.php" ?>
