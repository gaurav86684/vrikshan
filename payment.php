<?php
session_start();
if(isset($_POST['submit']))
{
	$_SESSION['payee'] = $_POST['a'];
	echo "Welcome, ".$_SESSION['payee'];
	echo "<a href='https://www.instamojo.com/@abhishekgautam689/'><button>Proceed to pay</button></a>";
}




 ?>