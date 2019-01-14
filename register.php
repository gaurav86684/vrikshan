<!DOCTYPE html>
<html>
<head>
	<title>VRIKSHN</title>
	<style type="text/css">
		#a {
			position: absolute;
			top: 60px;
			left: 70px;
			font-family: "Comic Sans MS", cursive,sans-serif;
		}
		#b {
			position: absolute;
			top: 140px;
			left: 60px;
		}
	</style>
</head>
<body bgcolor="#00CED1">
 <h1 id="a">INDIVIDUAL REGISTERATION</h1>
 <div id="b">
 	<form method="POST" action="data.php">
 		<table border="0" cellpadding="50px">
 			<tr>
 				<b><td style="font-size: 20px">Name:</td></b>
 				<td><input type="text" name="a" size="30" style="font-size: 15px" REQUIRED></td>
 			</tr>
 			<tr>
 				<b><td style="font-size: 20px">Gender:</td></b>
 				<td>
 					<span style="font-size: 20px;">Male</span><input type="radio" name="b" value="Male" REQUIRED> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Female<input type="radio" name="b" value="Female" REQUIRED> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Transgender<input type="radio" name="b" value="Transgender" REQUIRED> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 				</td>
 			</tr>
 			<tr>
 				<b><td style="font-size: 20px;">Age:</td></b>
 				<td><input type="number" name="c" size="30" style="font-size: 15px" REQUIRED></td>
 			</tr>
 			<tr>
 				<b><td style="font-size: 20px;">Phone Number:</td></b>
 				<small style="position: absolute; top: 470px; left: 50px;">Along With Country Code</small>
 				<td><input type="number" name="d" size="30" style="font-size: 15px" REQUIRED></td>
 			</tr>
 			<tr>
 				<b><td style="font-size: 20px;">Email:</td></b>
 				<td><input type="email" name="e" size="30" style="font-size: 15px" REQUIRED></td>
 			</tr>
 			<tr>
 				<b><td style="font-size: 20px;">Refferal Code:</td></b>
 				<td><input type="password" name="f" size="30" style="font-size: 15px" REQUIRED></td>
 			</tr>
 			<tr>
 				<b><td style="font-size: 20px;">Confirm Refferal Code:</td></b>
 				<td><input type="password" name="g" size="30" style="font-size: 15px" REQUIRED></td>
 			</tr>
 			<td colspan="2"><center style="font-size: 40px;"><input type="submit" name="submit" value="SUBMIT"></center></td>
 		</table>
 	</form>
 </div>
</body>
</html>