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
					$sql = "SELECT * from freshie";

					
					$retval = mysql_query( $sql, $conn );
					if(! $retval )
					{
					  die('Could not get data: ' . mysql_error());
					}
					
					?>
					<table>
					   	<tr>
					   		<th>J_ID</th>
					   		<th>J_Name</th>
					   		<th>Username</th>
					   		<th>Email</th>
					   		<th>Password</th>
					   		<th>Date OF Birth</th>
					   		<th>Field</th>
					   		<th>Degree</th>
					   		<th>Skills</th>
					   		<th>Graaduation year</th>
					   		<th>CGPA</th>
					   		<th>Time Stamp</th>
					   		<th>Active</th>
					   		<th>Edit</th>
					   		<th>Delete</th>
					   	</tr>
					   	<?php
					   	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
						{
					   	?>
					   	<tr>
					   		<td><?php echo $row['j_id'];?></td>
					   		<td><?php echo $row['j_name'];?></td>
					   		<td><?php echo $row['username'];?></td>
					   		<td><?php echo $row['email'];?></td>
					   		<td><?php echo $row['password'];?></td>
					   		<td><?php echo $row['dob'];?></td>
					   		<td><?php echo $row['field'];?></td>
					   		<td><?php echo $row['degree'];?></td>
					   		<td><?php echo $row['skills'];?></td>
					   		<td><?php echo $row['gradyear'];?></td>
					   		<td><?php echo $row['cgpa'];?></td>
					   		<td><?php echo $row['timestamp'];?></td>
					   		<td><?php echo $row['active'];?></td>
					   		<td><a href="edit.php?id=<?php echo $row['j_id']?>">Edit</a></td>
					   		<td><a href="delete.php?id=<?php echo $row['j_id']?>">Delete</a></td>

					   	</tr>
					   	<?php
						}
						mysql_close($conn);
						?>		
					</table>
			</section>
</body>
</html>