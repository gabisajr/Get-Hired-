<?php

$name=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['date'];
$field=$_POST['field'];
$degree=$_POST['degree'];
$skills=$_POST['skills'];
$gradyear=$_POST['gradyear'];
$cgpa=$_POST['cgpa'];

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

$sql = "INSERT INTO `freshie`(`j_name`,`username`, `email`,`password`,`dob`,`field`, `degree`,`skills`,`gradyear`,`cgpa`,`timestamp`) VALUES ('$name', '$username','$email','$password','$dob','$field','$degree','$skills','$gradyear','$cgpa', now())";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
echo"1 row added\n";
mysql_close($conn);
header('Location:successsignup.php');//you have successfully signed up login now
?>