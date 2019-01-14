<?php 
if(isset($_POST['submit']))
{
	$rcode3 = $_POST['c'];
	$ptype = $_POST['d'];
	$ph = $_POST['e'];
	$ploc = $_POST['f'];
	if($_FILES['g']['tmp_name']==FALSE)
	{
		echo "Please Select an image<br><a href='admin.php'>Click Here to go back</a>";
	}
	else
	{
		$target = "images/".basename($_FILES['g']['name']);
		mysql_connect("localhost","root","");
		mysql_select_db("plant");
			$image = $_FILES['g']['name'];
		$query2 = "SELECT * FROM images WHERE rcode='$rcode3'";
		$result = mysql_query($query2);
		if(mysql_num_rows($result)!=0)
		{
			$query3 = "UPDATE images SET image='$image' WHERE rcode='$rcode3'";
            if($result2 = mysql_query($query3))
            	echo "File updated success";
            else
            	echo "Sorrry!";
		}
		else
		{
		$query = "INSERT INTO images(rcode,image) VALUES('$rcode3','$image')";
		$res = mysql_query($query);
		//move to target
		if(move_uploaded_file($_FILES['g']['tmp_name'], $target))
		{
			echo "File uploaded successfully";
			echo "<a href='admin.php'>Click here to go back</a>";
		}
		else {
			echo "There was a problem!";
		}
      }
	}
}



?>