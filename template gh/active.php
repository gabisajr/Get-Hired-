<?php
$id = $_GET['j_id'];
$dbhost='localhost';
$dbuser='root';
$dbpass= '';
$conn= mysql_connect($dbhost,$dbuser,$dbpass);

if(!$conn)
{
	die('Could not connect:'.mysql_error());
}

echo "connection successfully";

mysql_select_db('get_hired');		

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "UPDATE `freshie` 
SET `active`='1' WHERE id = '$id'";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
mysql_close($conn);

header('Location:loginuser.php')
?>