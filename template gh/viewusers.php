<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>https://gethired.org.com</title>
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
	<body>

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

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h3>To view the user data click on the button below</h3>
						<p><a  href="viewusers1.php" class="button special">View User Data</a></p>

						<h3>To view active users click on the button below</h3>
						<p><a  href="activeusers.php" class="button special">Active Users</a></p>

						<h3>To view deactive users data click on the button below</h3>
						<p><a  href="deactiveusers.php" class="button special">Deactive Users</a></p>
					</header>
				</div>
			</section>		
</body>
</html>