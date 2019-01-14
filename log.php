<?php
session_start();
if(isset($_SESSION['name']))
{
	header('Location:hello.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>VRIKSHAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<h1>LOGIN</h1>
	<form action="signup.php" method="post">
		<div class="tbox">
			<input type="text" placeholder="registered email" value="" name="a" required>
		</div>
	    <div class="tbox">
		    <input type="password" placeholder="refferal code" value="" name="b" required>
	    </div>
	    <input class="btn" type="submit" name="c" value="Submit">
	</form>
	<a class="b1" href="#">FORGOT PASSWORD</a>
	<a class="b2" href="https://campodeiform-staff.000webhostapp.com/sign_up.php">CREATE AN ACCOUNT</a>
</body>
</html>