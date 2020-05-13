
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
			<p>If you not than register...</p>
			<a style="padding:5%;margin-right:30%;background-color:red;text-decoration:none" href="register.php"<input id="butoni1" type="submit" value="Register" >Register </a>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>
				
				<form method="post" action="validation2.php">
				<input type="text" placeholder="Username" name="username">
				
				<input type="password" placeholder="Password" name="password">
					
				<input style="background-color:red;" id="butoni" type="submit" value="Login" name="login">
					<input  type="checkbox" name="remember" value="1"/>Remember me
				<p>Not a user?<a href="register.php"><b>Register Here</b></a></p>	
				
				</form>
				<a href="">Forgot password?</a>
			</div>
		
		</div>
	</div>
	
    </body>

</html>
