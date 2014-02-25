<?php
	session_start(); 
	$con = mysql_connect("localhost","root","");
	
	$select = mysql_select_db("dbwg",$con);
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$query = "INSERT INTO 'warmgreet'.'user'('name','email') VALUE ('".$name."','".$email."')";
	$sql = $my_sql_query($query);
	if($sql)
	{
		header("location:index.php");	
	}		
	
?>
