<?php
	session_start();
	$id = $_GET['id'];

	$name=$_POST['fullname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$dob=$_POST['date'];
	$field=$_POST['field'];
	$degree=$_POST['degree'];
	$skills=$_POST['skills'];
	$gradyear=$_POST['gradyear'];
	$cgpa=$_POST['cgpa'];

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
echo"connection successfully";

mysql_select_db('get_hired');
	
	$sql = "UPDATE `freshie` SET `j_name`='$name',`username`='$username',`email`='$email',`dob`='$dob',
	`field`='$field',`degree`='$degree',`skills`='$skills',`gradyear`='$gradyear',`cgpa`='$cgpa',`timestamp`= now() WHERE j_id = '$id'";
	
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	}
	mysql_close($conn);

	header('location:editsuccessful.php');
?>