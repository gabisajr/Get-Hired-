<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>http://gethired.org.com</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<!-- <link rel="stylesheet" href="css/signup.css" /> -->
		</noscript>

	</head>
	<body>


<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Get Hired</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="profileedit1.php">Profile</a></li>
						<li><a href="#">Job opportunities</a></li>
						<li><a href="signupoption.html" class="button special">Sign Up as <b> Job Hunter</b></a></li>
					</ul>
				</nav>
			</header>
			<div class="box" align="center">
			<?php
			if(isset($_SESSION['j_id']))
			{
			?>
			<p>
				You have Edited your profile successfully<br>
				<a href="profileedit1.php" class="button">Visit update profile</a>
			</p>
			<?php
		}
		elseif (isset($_SESSION['state'])) 
		{
			?>
			<p>
				The data was edited by the admin.<br>
				<a href="viewusers1.php" class="button">View User Data</a>
			</p>
			<?php
			}
			?>


			</div>

</body>
</html>