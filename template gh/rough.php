<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
table.db-table 		{ border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
table.db-table th	{ background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table.db-table td	{ padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
	</style>
</head>
<body>

</body>
</html>
<?php
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
// $result = mysql_query('show tables ',$conn) or die('cannot show tables');
// while($freshie = mysql_fetch_row($result)) {

// 	$table = $freshie[0];
	
// 	echo '<h3>',$table,'</h3>';
	$sql="SELECT '*' from `freshie`";
	if(mysql_num_rows($sql)) {
		echo '<table cellpadding="0" cellspacing="0" class="db-table">';
		echo '<tr><th>J_ID</th><th>J_NAME</th><th>Username</th><th>email</th><th>password</th>dateofbirth</th><th>field</th><th>degree</th><th>skills</th><th>grad year</th><th>timestamp</th></tr>';
		while($row2 = mysql_fetch_row($sql)) {
			echo '<tr>';
			foreach($row2 as $key=>$value) {
				echo '<td>',$value,'</td>';
			}
			echo '</tr>';
		}
		echo '</table><br />';
	}

?>		