<?php
	session_start(); 
	$con = mysql_connect("localhost","root","");
	
	$select = mysql_select_db("dbwg",$con);
	
	$email=$_POST['email'];
	$pass= $_POST['password'];
	$password = md5($pass);
	
	$query = "SELECT * FROM user WHERE Email='".$email."'";
	$result = mysql_query($query,$con);
	$found = mysql_num_rows($result);
	
	while($row = mysql_fetch_array($result))
	{
		if(strcmp($password,$row['Password'])!=0)
		{
			$temp=1;
		}
	}
	
	
	if($found == 0)
	{
		$_SESSION["err"]="Email is not exist";
		header('location:Sign-in.php');	
	}
	else if($temp==1)
	{
		$_SESSION["err"]="".$password."";
		header('location:Sign-in.php');	
	}
	else
	{
		header('location:ACCOUNT.php');	
	}
?>
