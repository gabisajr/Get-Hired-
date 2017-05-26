<?php

$name=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['date'];
$field=$_POST['field'];
$degree=$_POST['degree'];
$skills=$_POST['skills'];
$pcomp=$_POST['pcompany'];
$jposition=$_POST['jposition'];
$time=$_POST['time'];
// connecting with mysql database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo"connection successfully";

mysql_select_db('get_hired');

$sql = "INSERT INTO `experienced`(`j_name`,`username`, `email`,`password`,`dob`,`field`, `degree`,`skills`,`pcompany`,`j_position`,`time`,`timestamp`) VALUES ('$name', '$username','$email','$password','$dob','$field','$degree','$skills','$pcomp','$jposition','$time', now())";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
echo"1 row added\n";
mysql_close($conn);
header('Location:successsignup.php');//You have successfully signed up, login now
?>