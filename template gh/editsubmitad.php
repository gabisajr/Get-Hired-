<?php
	session_start();
	$id = $_GET['id'];

		$aid = $_POST['ad_id'];
         $cname = $_POST['cname'];
         $sq = $_POST['skills_req'];
         $industry = $_POST['industry'];
         $pos = $_POST['positions'];
         $des = $_POST['description'];

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
	
	$sql = "UPDATE `company` SET `cname`='$cname',`skills_req`='$sq',`industry`='$industry',`positions`='$pos',
	`description`='$des',`timestamp`= now() WHERE ad_id = '$id'";
	
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	}
	mysql_close($conn);
	header('location:successfullypostedad.php');
?>