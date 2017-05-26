<?php 
session_start();
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

$name=$_POST['cname'];
$skills_req=$_POST['skills_req'];
$industry=$_POST['industry'];
$positions=$_POST['positions'];
$description=$_POST['description']; 

$query = "INSERT INTO company(cname, skills_req, industry,  positions, description,`timestamp`) VALUES ('$name','$skills_req','$industry','$positions','$description',now())";

$retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
$_SESSION['id']=mysql_insert_id();
echo $id;
echo "Entered data successfully\n";
 header('Location:adposted.php'); 
?>