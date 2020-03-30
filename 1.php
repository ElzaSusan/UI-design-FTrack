<html>
<head><title>login</title></head>
<center><body background="bg.jpg">
<h3>Click here</h3>

<form action="l.php" method="post">
<table border="1" width="300" height="100">
<tr><td>Name:</td>
	<td><input type="text" name="name"></td>
</tr>
<tr><td>Password:</td>
	<td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="signup" value="signup"><td>
</tr>
</body>
</body></center>
</html>
<?php
mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db("registration") or die (mysqli_error());

if(isset($_POST['signup']))
{
	echo $name=$_POST['name'];
	echo $password=$_POST['password'];
	echo $emailid=$_POST['email'];
	
	$query="insert into user(name,password,email) values('','','')";
	if(mysql_query($query)){
		echo "<h2>Successfully Registered</h2>";
	}
}
?>