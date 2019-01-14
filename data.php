<?php
if(isset($_POST['submit']))
{
$name = $_POST['a'];
$age = $_POST['c'];
$phoneno = $_POST['d'];
$email = $_POST['e'];
$rcode = $_POST['f'];
$crcode = $_POST['g'];
if($rcode!=$crcode)
{
	echo "Sorry! Codes do not match<br><a href='register.php'>Click Here To Go Back!</a>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("plant");
	$query = "SELECT * FROM tree WHERE rcode = '$rcode'";
	$res = mysql_query($query);
	if(mysql_num_rows($res)!=0)
	{
		echo "Sorry! Invalid Refferal Code<br><a href='register.php'>Click Here To Go Back!</a>";
	}
	else
	{
		session_start();
		$query1 = "INSERT INTO tree(name,age,phno,email,rcode) VALUES ('$name','$age','$phoneno','$email','$rcode')";
		mysql_query($query1);
		echo "<script>alert('Congratulations your account has been registered successfully');</script>";
        $_SESSION['signup']  = $name; 
        $_SESSION['email'] = $email;
        $_SESSION['phno'] = $phoneno;
		header('Location:log.php');
	}
}
}
 ?>