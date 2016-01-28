<?php

	session_start();
	include("dbconnect.php");
	// check to see if user is logging out

	// if login form has been submitted, check if username and password match
	if(isset($_POST['login']))
	{
		$login_sql="SELECT * FROM username WHERE user='".$_POST['username']."' AND password='".$_POST['password']."'";
		if($login_query=mysqli_query($dbconnect , $login_sql)) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['admin']=$login_rs['user'];
		}
	}
	
	
	if(isset($_SESSION['admin'])) {
		include("dashboard.php");
	} else {
		include("index.html");
	}
	
?>