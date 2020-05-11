<!DOCTYPE html>
<html ></html>
<head>
	<meta charset="UTF-utf-8">
	<meta name="viewport"  content="wid=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatibile" content="ie=edge">
	<title></title>
    <link rel="stylesheet" type="text/css" href="emailus.css"/>
 


</head>
<body>


<div class="container" >

	<div class="wrapper">
		<div class="info" >
			<h3>Contact information</h3>
			<ul>
				<li>Prishtine</li>
				<li>044345345</li>
				<li>travelagency@gmail.com</li>
			</ul>
					
           

		</div>
		<div class="contact">
			<h3>Email Us</h3>
			<style media="screen">
					


						input {

							border-bottom:  3px solid #ccc !important;
							outline: none !important;
						}
						</style>
						   <?php include("emailus1.php"); ?>
				<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<p>
					 <label ></label>
                 <input type="text" name="name" placeholder="Enter your name`" autocomplete="on" class="in">
                 <span class="error"><? echo $name_error;?></span>
		
				</p>
				 <p>
					<label ></label>
				<input type="text" name="surname" placeholder="Enter your surname" autocomplete="on" class="in">
				<span class="error"><? echo $surname_error;?></span> </p>
         
				
				<p>
				 <label> </label>
			 <input type="email" name="email" placeholder="Enter your email address" autocomplete="on" class="in"> 
			 <span class="class"><? echo $email_error;?></span></p>
      
	     	
			 <p> 
				 <label ></label>
			
			 <input type="text" name="phone" placeholder="Enter your phone number" class="in"> 
			 <span class="class"><? echo $phone_error;?></span></p>
            
			 <p  class="full">
				 <label>Message</label>
	
				 <textarea name="message" rows="5" ></textarea> </p>
				 <p  class="full">
			  <button type="button" name="button">Submit</button> </p>
				</form>

		</div>

    </div>

</html>