<style>
<?php include 'main.css'; ?>

</style>
<script type="text/javascript">
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
document.getElementById("main_header").style.top = "0";
} else{
document.getElementById("main_header").style.top = "-50px";
}
}
</script>

<?php
 echo "<div id=\"main_header\" style=\"width:100%; height:40px;   top:-50px !important;\" >
    <div class=\"navbar-nav\">
           <a  class=\"nav-item nav-link \" href=\"#\">Home </a>
           <a class=\"nav-item nav-link\" href=\"#\">Hotels</a>
           <a class=\"nav-item nav-link\" href=\"#\">Flights</a>
           <a class=\"nav-item nav-link \" href=\"#\">Gallery</a>
           <a class=\"nav-item nav-link\" href=\"#\">Contact</a>
           <i style=\"color:red; size:120%; margin-left:20%;\"class=\"fa fa-user-circle\"></i>
           <a href=\"#\" class=\"nav-item nav-link\"
           <h8 style=\"color:white; margin:0; padding:0\" >Login</h8></a>
      <!--  <a><i style=\"color:red; margin-left:20%;\" class=\"fa fa-user-circle-o\"></i></a>-->
       </div>

         </div>";
?>


<div class="navbar-nav">
       <a  class="nav-item nav-link " href="#">Home </a>
       <a class="nav-item nav-link" href="#">Hotels</a>
       <a class="nav-item nav-link" href="#">Flights</a>
       <a class="nav-item nav-link " href="#">Gallery</a>
       <a class="nav-item nav-link " href="#">Contact</a>
       <i style="color:red; size:120%; margin-left:20%;"class="fa fa-user-circle"></i>
       <a href="#" class="nav-item nav-link"
       <h8 style="color:white; margin:0; padding:0" >Login</h8></a>
  <!--  <a><i style="color:red; margin-left:20%;" class="fa fa-user-circle-o"></i></a>-->
   </div>
   
