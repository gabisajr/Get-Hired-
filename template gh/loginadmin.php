<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

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

	$sql = "SELECT `admin_id`, `password`, `active` FROM `admin` WHERE username = '$username'";

	$retval = mysql_query( $sql, $conn );
	if(! $retval )
		{
		  die('Could not get data: ' . mysql_error());
		}
	
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
				$id = $row['id'];
				$password1 = $row['password'];
				$active = $row['active'];
				$_SESSION['username'] = $username;
			}

			if($password == $password1 && $active == '1')
	{
		
		$_SESSION['id'] = $id;
		$_SESSION['state'] = 'active';
		header("location:welcome.php");
	}
	
	else
	{
		header("location:admin_index.php");

	}

?>
					   	