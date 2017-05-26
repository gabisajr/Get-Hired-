<?php
session_start();
$id=$_SESSION['j_id'];	
$dbhost='localhost';
$dbuser='root';
$dbpass= '';
$conn= mysql_connect($dbhost,$dbuser,$dbpass);

if(!$conn)
{
	die('Could not connect:'.mysql_error());
}



mysql_select_db('get_hired');		

$sql = "UPDATE `freshie` 
SET `active`='1' WHERE j_id = '$id'";
$retval = mysql_query($sql,$conn);
if(!$retval)
{
	die("could not get data:" . mysql_error());

}	
mysql_close($conn);
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
				<h1><a href="userhomeindex.php">Get Hired</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="userhomeindex.php">Home</a></li>
						<li><a href="profileedit1.php">Profile</a></li>
						<li><a href="jobs.php">Job Oppurtunities</a></li>
						<?php
        if (!isset($id))
        {
        ?>
        
						<li><a href="login.php" class="button special">Login</a></li>
						<?php
            }
            else
                {
        ?>
                <li><a href="logout.php" class="button special">Logout</a></li>
        <?php
                }
        ?>
        
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Job Profile</h2>
						<p></p>
					</header>

<form>
<fieldset>
		<legend>Upload Your Picture</legend>
		<label for="chooseimg">Your image:</label> <input type="file" name="file" id="chooseimg" autofocus required>
		<label for="preview">Image Preview:</label><a href="#" class="image fit"><img id="preview" required></a>
	</fieldset>
	</form>
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

					$sql="SELECT `j_id`,`j_name`, `email`, `dob`, `field`, `degree`, 
					`skills`, `gradyear`,`cgpa` FROM `freshie` WHERE  j_id='$id' AND active='1'";

					
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
		<td>Profile Details</td>
	</tr>
	<tr><td>
		<tr>
			<th>Name:</th>
			<td><?php echo $row['j_name'];?></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><?php echo $row['email'];?></td>
		</tr>
		<tr>
			<th>Date Of Birth:</th>
			<td><?php echo $row['dob'];?></td>
		</tr>
		<tr>
			<th>Field:</th>
			<td><?php echo $row['field'];?></td>
		</tr>
		<tr>
			<th>Degree:</th>
			<td><?php echo $row['degree'];?></td>
		</tr>
		<tr>
			<th>SKills:</th>
			<td><?php echo $row['skills'];?></td>
		</tr>
		<tr>
			<th>Gradyear:</th>
			<td><?php echo $row['gradyear'];?></td>
		</tr>
		<tr>
			<th>cgpa:</th>
			<td><?php echo $row['cgpa'];?></td>
		</tr>
		</td>
		<tr>
			<th><br><a href="edit.php?id=<?php echo $row['j_id']?>" class="button special">Edit</a></th>
		</tr>
		</tr>
					
					      	<?php
						}
						mysql_close($conn);
						?>		
					
	</table>
	
				</div>
			</section>
<script src="https://www.cse.ust.hk/~rossiter/dating_web_site.js"></script>
	</body>
</html>
