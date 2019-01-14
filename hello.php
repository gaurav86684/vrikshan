<!DOCTYPE html>
<html>
<head>
	<title>VRIKSHAN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="magnific-popup.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
  	.primary-color
  	{
  		color: 	#EBC79E;
  	}
  	.navbar-brand
  	{
  		color: #00BFFF;
  		font-size: 30px;
  		transition: all 1s ease;
  	}
  	.navbar-brand:hover
  	{
  		color: blue;
  	}
  	.navbar
  	{
  		background: #c9c1ac;
  		padding: 20px 20px;
  		transition: all 1s ease;
  	}
  	.user-name {
        font-size: 30px;
  	}
  	.margin-top
  	{
  		margin-top: 20px;
  		font-size: 60px;
  	}
  	.nav-link
    {
      color: #00BFFF;
      text-decoration: none;
      transition: all 2s ease;
      font-size: 23px;
    }
    .nav-link:hover
    {
      color: blue;
    }

    .toggler-btn
    {
      border: 2px solid #d3325f;
      padding: 5px;
      transition: all 2s ease;
    }

    .bar
    {
      width: 30px;
      height: 3px;
      margin: 5px;
      background: #d3325f ;
      transition: all 0.5s ease;
    }

    .change .bar1
    {
      transform: rotate(-45deg) translate(-5px,6px);
    }
     .change .bar2
    {
      opacity: 0;
    }
     .change .bar3
    {
      transform: rotate(45deg) translate(-5px,-8px);
    }
    .bgcolor
    {
    	background: #CCCCCC;
    }
  </style>
  <script type="text/javascript">
  	$(document).ready(function(){
       $('.navbar-toggler').click(function(){
    
    $('.navbar-toggler').toggleClass('change');



  })




  	});
  </script>
</head>
<body style="font-family: 'Mr Dafoe', cursive; background-image: url(white.jpg);">
	<!--navbar-->
	<nav class="navbar navbar-expand-lg" style="z-index: 9999;">
		<a href="#" class="navbar-brand  text-uppercase">USER LOGIN</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
			<div class="toggler-btn">
				<div class="bar bar1"></div>
				<div class="bar bar2"></div>
				<div class="bar bar3"></div>



			</div>



		</button>
		<!--for small screens-->
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a href="#" class="nav-link text-capitalize">HOME</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link text-capitalize">ABOUT US</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link text-capitalize">PROFILE</a>
				</li>
				<li class="nav-item">
					<a href="http://localhost/startup/del.php" class="nav-link text-capitalize">LOGOUT</a>
				</li>
			</ul>



         <a  href="http://localhost/startup/admin.php" class=" text-capitalize justify-content-between" style="font-size: 10px; color:  #c9c1ac">ADMIN LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;
         <p class="user-name text-capitalize"><?php session_start(); echo "Welcome, ".$_SESSION['name']; ?></p>



		</div>


	</nav>
	<!--navbar ends-->

	<div class="container text-center mx-auto ">
		<h1 class="margin-top">VIRAKSHAN &nbsp;&nbsp;&nbsp;ENTERPRIZES</h1>
	</div>
	<section  class="py-5">
		<div id="slider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container">
						<div class="row">
                            <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3"> 
							 <blockquote class="blockquote bgcolor">
								<p style="font-size: 25px;"> "I felt my lungs inflate with the onrush of scenery air, mountains, trees, people. I thought, 'This is what it is to be happy.'"</p>
								<footer style="font-size: 25px;">Sylvia Plath</footer>
							 </blockquote>
							</div>
						</div>

					</div>



				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="row">
						  <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
							<blockquote class="blockquote bgcolor">
								<p style="font-size: 25px;">"Heaven is under our feet as well as over our head"</p>
								<footer style="font-size: 25px;">Henry David</footer>
							</blockquote>
						  </div>
						</div>

					</div>



				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="row">
                            <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3"> 
							  <blockquote class="blockquote bgcolor">
								<p style="font-size: 25px;">"Nature is not a place to visit , it is home"</p>
								<footer style="font-size: 25px;">Gary Snyder</footer>
							  </blockquote>
							</div>
						</div>

					</div>



				</div>

			</div>
			<a href="#slider" class="carousel-control-prev" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" style="color: blue;" ></span>
			</a>
			<a href="#slider" class="carousel-control-next" role="button" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>





		</div>
	</section>




	<section id="info" class="py-5">
      <div class="container">
        <div class="row" style="font-size: 30px;">
        	<div class="col">
     	 <?php 
		
            session_start();
		
			echo "<table style='font-size=80px;' cellpadding='8px'>";
			echo "<tr>";
			echo "<td>Name:</td><td>".$_SESSION['name']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Refferal Code:</td><td>".$_SESSION['rcode']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Plant Type:</td><td>".$_SESSION['ptype']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Plant Height:</td><td>".$_SESSION['pheight']."ft</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Plant Location:</td><td>".$_SESSION['ploc']."</td>";
			echo "</tr>";
			echo "</table>";
			echo "<br><br>";
		
?>

        </div>
        <div class="col">
        	<?php 
        	$x = $_SESSION['rcode'];
              mysql_connect("localhost","root","");
              mysql_select_db("plant");
              $query = "SELECT * FROM images WHERE rcode='$x'";
              $res = mysql_query($query);
              //if(mysql_num_rows($res)==0)

              $data = mysql_fetch_array($res);
              echo "<img src='images/".$data['image']."' style='height:250px; width:250px;'>";
              

        	?>



        </div>
      </div>
    </section>
</body>
</html>