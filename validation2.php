<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
function readRows(){
global $connection;
$query = "SELECT * FROM registration"; 
   $result = mysqli_query($connection, $query);
    if(!$result){
       die('Query FAILED!');
}
         while($row = mysqli_fetch_assoc($result)){
            
            print_r($row);

              }
}
	 $myusername="bleona" ;
	 $mypassword = "12345";
	 if(isset($_POST['login'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == $myusername and $password == $mypassword){
	$remember = $_POST['remember'];
	if(isset($_POST['remember'])){
	setcookie('username', $username, time()+60*60*7);
	setcookie('password', $password, time()+60*60*7);
	
	}
	session_start();
	$_SESSION['username'] = $username;

	header("location:index.php");
	}else{
	
	  echo "Email or Password is invalid.<br>click here to
	 <a href='login.php'> try again </a>
	         ";
	}
	
	} else{
	
	        header("location:login.php");
	}





?>