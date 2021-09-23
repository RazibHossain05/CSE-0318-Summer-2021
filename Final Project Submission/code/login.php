<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="inner_full">
	<div id="header"><h2>Blood Bank Management System</h2></div>
	<div id="body">
		<br><br><br><br><br>
		<form action=""method="post">
		<table align="center">
			<tr>
				<td width="200px" height="70px"><b>Enter username</b></td>
				<td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username" style="width: 180px; height: 40px; border-radius: 10px;"></td>
			</tr>
			<tr>
				<td width="200px" height="70px"><b>Enter password</b></td>
				<td width="200px" height="70px"><input type="text" name="ps" placeholder="Enter password" style="width: 180px; height: 40px; border-radius: 10px;"></td>
			</tr>
			<tr>
				<td><input type="submit" name="sub" value="Login" style="width: 70px; height: 40px; border-radius: 5px;"></td>
			</tr>
		</table>
	</form>
	<?php
	if(isset($_POST['sub']))
	{
		echo $un=$_POST['un'];
		echo $ps=$_POST['ps'];
	}
	</div>
	<div id="footer" align="center"><h4>Copyright@myproject 2021</h4></div>
	
</div>
</body>
</html>