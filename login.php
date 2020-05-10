
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
	<?php
	
	 $emailErr=$passwordErr= "";
     $email=$password = "";
	 if ($_SERVER["REQUEST_METHOD"] == "POST")
	 {
	
	  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if(empty($_POST["password"])){
  $passwordErr = "Password is required";

	}
	else
	if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password )){
          $passwordErr ="Your password is strong.";
} else {
          $passwordErr = "Your password is not safe.";
}



	
	 }
	   function test_input($data) {
       $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
        return $data;
     }

	

	?>

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
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>

				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
				<input type="text" placeholder="Email" name="email">
				<span class="error"> <?php echo $emailErr;?></span>
				<input type="password" placeholder="Password" name="password">
					<span class="error"> <?php echo $passwordErr;?></span>
				<input id="butoni" type="submit" value="Login" name="login">
					<input  type="checkbox" name="remember" value="1"/>Remember me
					</form>
				<a href="">Forgot password?</a>
			</div>
			<div class="register-show">
				<h2>REGISTER</h2>
				<input type="text" placeholder="Email" name="email">
				<span class="error"> <?php echo $emailErr;?></span>
				<input type="password" placeholder="Password" name="password">
				<span class="error"> <?php echo $passwordErr;?></span>
				<input type="password" placeholder="Confirm Password">
				<input id="butoni1" type="submit" value="Register" >
			</div>
		</div>
	</div>

    </body>
</html>
