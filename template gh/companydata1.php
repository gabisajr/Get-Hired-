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
			<section>
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
					$sql = "SELECT * from company";

					
					$retval = mysql_query( $sql, $conn );
					if(! $retval )
					{
					  die('Could not get data: ' . mysql_error());
					}
					
					?>
					<table>
					   	<tr>
					   		<th>AD_ID</th>
					   		<th>Company Name</th>
					   		<th>Skills Required</th>
					   		<th>Industry</th>
					   		<th>Positions</th>
					   		<th>Descriptions</th>
					   		<th>TimeStamp</th>
					   	</tr>
					   	<?php
					   	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
						{
					   	?>
					   	<tr>
					   		<td><?php echo $row['ad_id'];?></td>
					   		<td><?php echo $row['cname'];?></td>
					   		<td><?php echo $row['skills_req'];?></td>
					   		<td><?php echo $row['industry'];?></td>
					   		<td><?php echo $row['positions'];?></td>
					   		<td><?php echo $row['description'];?></td>
					   		<td><?php echo $row['timestamp'];?></td>
					   	</tr>
					   	<?php
						}
						mysql_close($conn);
						?>
						<br><tr><td><a href="postad.php" class="button special" >Insert New Ad</a></td></tr>		
					</table>
			</section>
</body>
</html>