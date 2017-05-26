<?php
session_start();
$username= $_POST['username'];
$password=$_POST['password'];

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

$sql= "SELECT `j_id`,`username`,`password`,`active` FROM `freshie` WHERE username='$username'";

$retval = mysql_query($sql,$conn);
if(!$retval)
{
	die("could not get data:" . mysql_error());

}	

while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$id= $row['j_id'];
				$username1=$row['username'];
				$password1 = $row['password'];
				$active = $row['active'];
				$_SESSION['username'] = $username;
			}

if($password == $password1 && $username==$username1)
	{
		$_SESSION['j_id']=$id;
		echo "successfully logged in";
		header("location:profileedit1.php");	
	}
	else
	{
		echo "login again";
		header("location:index.php");
	}

?>