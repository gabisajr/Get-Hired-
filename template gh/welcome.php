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
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Get Hired</a></h1>
				<nav id="nav">
					<ul>
						<?php
						if(!isset($_SESSION['state']))
						{
						?>
						<li><a href="adminindex.php">Home</a></li>
						<?php
						 }
            else
                {

						?>
						 <li><a href="welcome.php">Home</a></li>
        <?php
                }
        ?>

						<li><a href="viewusers.php">View Users</a></li>			
						<li><a href="companydata.php">Company Data</a></li>
						<?php
        if (!isset($_SESSION['state']))
        {
        ?>
        <li><a href="admin_login.php">Login</a></li>
        <?php
            }
            else
                {
        ?>
                <li><a href="admin_logout.php">Logout</a></li>
        <?php
                }
        ?>
						<li><a href=""><b style="color:white;">ADMIN</b></a></li>
					
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>WELCOME</h2>
				<p>You have successfully logged in as an <b style="color:white;">ADMIN</b></p>
				<ul class="actions"><!-- 
					<li>
					<a href="login.php" class="button big">Login</a>
					</li>
					<li>
						<a href="#">Logout</a></td>
					</li> -->

				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>You can view Data easily</h2>
						<p></p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color1 fa-user"></i>
								<h3>Information about Users</h3>
								<p></p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color9 fa-building"></i>
								<h3>View Company Data</h3>
								<p></p>
							</section>
						</div>
						<!-- <div class="4u$ 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color6 fa-user"></i>
								<h3>Medical</h3>
								<p>This caters all the med related fields</p>-->	
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>About Get Hired</h2>
						<p>This is a compelete forum where joh hunters are shown the opportunities waiting for them. Job hunters have to register before signing in to become the part of this massive organisation</p>
					</header>
					<section class="profiles">
					<p>
						<h3><b>Meet our CEOS</b></h3>
					</p>
						<div class="row">
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/capture1.gif" alt="" style="margin:75px" />
								<h4></h4>
								<p></p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<img src="images/capture.gif" alt="" style="margin:75px" />
								<h4></h4>
								<p></p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/capture2.gif" alt="" style="margin:75px" />
								<h4></h4>
								<p></p>
							</section>
						</div>
					</section>
					<footer>
						<p><h4><b>Contact Us</b>	</h4></p>
						<ul class="actions">
							<li>
								<p>Send us email at gethired@gmail.com</p>
								<a href="https://gmail.com" class="button big">Send Email</a>
							</li>
						</ul>
					</footer>
				</div>
			</section>


	</body>
</html>