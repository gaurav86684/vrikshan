<?php 
if(isset($_POST['submit']))
{
	$name = $_POST['a'];
	$pss = $_POST['b'];
	mysql_connect("localhost","root","");
	mysql_select_db('plant');
	$query = "SELECT * FROM admin WHERE username='$name' && password='$pss'";
	$res = mysql_query($query);
	if(mysql_num_rows($res)==0)
	{
		echo "Sorry! Username or Password Incorrect<br><a href='admin.php'>Click Here To Go Back!</a>";
	}
	else
	{
		ob_start();
		ob_clean();
		echo "<form method='POST' action='done.php' enctype='multipart/form-data'>";
		echo "Refferal Code:&nbsp;&nbsp;&nbsp;<input type='text' name='c'><br><br>";
		echo "Plant Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='d' ><br><br>";
		echo "Plant Height:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name='e' ><br><br>";
		echo "Plant Location:&nbsp;&nbsp;&nbsp;<input type='text' name='f' ><br><br><br><br>";
		echo "Plant pic:<input type='file' name='g' ><br><br>";
		echo "<input type='submit' name='submit' value='submit'>";
		echo "</form>";
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>VRIKSHN</title>
</head>
<body>
	<center>
		<h1>ADMIN LOGIN</h1>
     <form method="POST" action="admin.php">
     	Username:<input type="text" name="a" REQUIRED><br><br>
        Password:<input type="password" name="b" REQUIRED><br><br>
        <input type="submit" value="SUBMIT" name="submit">
     </form>
    </center>
</body>
</html>
