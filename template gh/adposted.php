<?php
session_start();
$id=$_SESSION['id'];
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
						<li><a href="index.php" class="button">Home</a></li>
						<li><a href="postad.php" class="button special">Post AD as <b>Company</b></a></li>
						<li><a href="signupoption.html" class="button special">Sign Up as <b>Job Hunter</b></a></li>
						<li><a href="adminindex.php" class="button special"><b>ADMIN</b></a></li>

					</ul>
				</nav>
			</header>
			<div class="box" align="center">
			<?php
			if(!isset($_SESSION['state']))
			{
			?>
			<p>
				Thankyou for signing up to post your ad.<br>
				To view your ad.
			</p>
			<a href="viewad.php" class="button big">View add</a>
			<?php
			}
				else
					header('Location:companydata1.php');

			?>
				
			</div>
</body>
</html>