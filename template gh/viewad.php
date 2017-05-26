<?php
session_start();
$id1=$_SESSION['id'];
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
						<li><a href="index.php" class="button">Home</a></li>
						<li><a href="postad.php" class="button special">Post AD as <b>Company</b></a></li>
						<li><a href="signupoption.html" class="button special">Sign Up as <b>Job Hunter</b></a></li>
						<li><a href="adminindex.php" class="button special"><b>ADMIN</b></a></li>		
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Advertisement Details</h2>
						<p></p>
					</header>
					
<?php					
$dbhost='localhost';
$dbuser='root';
$dbpass= '';
$conn= mysql_connect($dbhost,$dbuser,$dbpass);

if(!$conn)
{
	die('Could not connect:'.mysql_error());
}
mysql_select_db('get_hired');
					$sql = "SELECT * from company where ad_id='$id1'";

					
					$retval = mysql_query( $sql, $conn );
					if(! $retval )
					{
					  die('Could not get data: ' . mysql_error());
					}
					
					?>
						<?php
					   	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
						{
					   	?>
					<table>
	<tr>
		<td></td>
		<td>Advertisement Details</td>
	</tr>
	<tr><td>
		<tr>
			<th>Name:</th>
			<td><?php echo $row['cname'];?></td>
		</tr>
		<tr>
			<th>Skills Requirement:</th>
			<td><?php echo $row['skills_req'];?></td>
		</tr>
		<tr>
			<th>Industry:</th>
			<td><?php echo $row['industry'];?></td>
		</tr>
		<tr>
			<th>No of positions vacant:</th>
			<td><?php echo $row['positions'];?></td>
		</tr>
		<tr>
			<th>Description about the position:</th>
			<td><?php echo $row['description'];?></td>
		</tr>
		<tr>
			<th><br><a href="editad.php?id=<?php echo $row['ad_id']?>" class="button special">Edit</a></th>
			<th><br><a href="successfullypostedad.php?id=<?php echo $row['ad_id']?>" class="button special">Post Ad</a></th>
		</tr>
		</tr>
					
					      	<?php
						}
						mysql_close($conn);
						?>		
					
	</table>