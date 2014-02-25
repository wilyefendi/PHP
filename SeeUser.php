<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start(); 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WarmGreet</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<center>
	<table width="1000px" border="1">
		<tr height="50px">
			<td colspan="2"><center><p style="font-size:24px;"> ADMIN PAGE of WarmGreet</p></center></td>
		</tr>
		<tr height="50px">
			<td width="500px"><center><a href="SeeUser.php">See All User</a></center></td>
			<td width="500px"><center><a href="AddAdmin.php">Add Admin</a></center></td>
		</tr>
		
	</table>
	</center>
		<center><table border="1">
			<tr>
			<td>User id</td>
			<td>Name</td>
			<td>Email</td>
			<td>Password</td>
			</tr>
			<?php
				$con = mysql_connect("localhost","root","");
				$select = mysql_select_db("dbwg",$con);
				$query = "SELECT * FROM user";
				$result = mysql_query ($query,$con);
				$total = mysql_num_rows($result);
				while($row = mysql_fetch_array($result))
				{
			?>	
				<tr>
				<td width="125px"> <?php echo $row['Userid']; ?> </td>
				<td width="125px"> <?php echo $row['Name']; ?> </td>
				<td width="125px"> <?php echo $row['Email']; ?> </td>
				<td width="125px"> <?php echo $row['Password']; ?></td>
				</tr>
			<?php
				}
			?>
			<tr>
				<td colspan="4">Total User : <?php echo $total; ?> </td>
			</tr>
		</table></center>
</body>
</html>
