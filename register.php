<?php  include 'server.php'; ?>
<!DOCTYPE html>
    <html>
<head>
    <title>
     Login
    </title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="login.css"/>
	<script type="text/javascript" src="login.js">
	  </script>


<!------ Include the above in your HEAD tag ---------->

</head>
<body>

	
    <div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>If you do than Login...</p>
				<a style="padding:5%;margin-right:30%;background-color:red;text-decoration:none" href="login.php"<input id="butoni1" type="submit" value="Login" >Login </a>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			
			<div style="height:100% !important" class="login-show">
			<h2  margin-top:-10%">REGISTER</h2>
				<form method="post" action="register.php" >
					<?php include 'welcome.php'; ?>
				
					<input style="padding:1%" type="text" placeholder="Username" name="username">
					<input style="padding:1%"  type="text" placeholder="Email" name="email">
			
				<input style="padding:1%"  type="password" placeholder="Password" name="password">
				
				<input style="padding:1%"  type="password" placeholder="Confirm Password" name="cpassword">
			
				<input style="background-color:red;"  id="butoni" type="submit" value="Register" name="reg_user">
					<p>Have a user?<a href="login.php"><b>Login Here</b></a></p>
					</form>
				
			</div>
			
		</div>
	</div>

    </body>
</html>
