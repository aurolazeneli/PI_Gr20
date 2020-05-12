<!DOCTYPE html>
<html>
<head manifest="demo_html.appcache">
<head lang="en">
<link rel="stylesheet" type="text/css" href="index.css">
<meta charset="utf-8">
<style>
.gallery {
    margin: 100px 15px 100px 130px;
    border: 1px solid #ccc;
    float:left;
    width: 350px;
}

.gallery:hover {
    border: 50px #767;
}

.gallery img {
    width: 100%;
    height: auto;
}

.desc {
    padding: 15px;
    text-align: center;
}
</style>

</head>
<body>
<?php include ('header.php'); ?>
<div style="margin-left:60px; margin-right:60px;">
<div class="gallery" >
  <a target="_blank" href="kuiz1.html">
      <img src="images/quiz.png"
		alt="Kuiz nga letërsia shqiptare."
		 width="600" height="400" >
                  <div class="desc">Kuiz nga letërsia shqiptare</div>
  </a>
</div>
<div class="gallery">
  <a target="_blank" href="kuiz2.html">
      <img src="images/quiz.png"
		alt="Kuiz nga letërsia botërore."
		 width="600" height="400" >
                  <div class="desc">Kuiz nga letërsia botërore</div>
  </a>
</div>
<div class="gallery" >
  <a target="_blank" href="quiz.html">
      <img src="images/quiz.png"
		alt="Sa i njihni veprat e autoreve shqiptare?"
		 width="600" height="400" >
                  <div class="desc">Autori - Vepra</div>
  </a>
</div>
</div>
<?php include ('footer.php'); ?>

</body>
</html>
