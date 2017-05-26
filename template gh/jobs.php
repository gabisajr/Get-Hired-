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

$sql = "SELECT `j_id`,`j_name`,`username`,`password`,`email`,`dob`,`field`,`degree`, `skills`, `gradyear`,`cgpa` 
        FROM freshie
        WHERE j_id = '$id'";


$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
         $id = $row['j_id'];
         // $name = $row['j_name'];
         // $username = $row['username'];
         // $password = $row['password'];
         // $email = $row['email'];
         // $dob = $row['dob'];
         // $field = $row['field'];
         // $degree = $row['degree'];
         $skill = $row['skills'];
         // $gradyear = $row['gradyear'];
         // $cgpa=$row['cgpa']; 
}
mysql_close($conn);
?>                                                                                        
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>https://www.gethired.com</title>
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

    <style> 
          .tb{
            font-size: 23px;
          }


    </style>
  </head>

  <body>
     
<header id="header">
        <h1><a href="index.php">Get Hired</a></h1>
        <nav id="nav">
          <ul>
            <li><a href="index.php">Home</a></li>
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


    </div>
    </section>
    
    <table>
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

$query1 = "SELECT `ad_id`, `cname`, `skills_req`, `industry`, `positions`, `description`
        FROM `company`
        WHERE  `company`.`skills_req`='$skill'" ;
        $retval = mysql_query( $query1, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
// if(is_null($query1))
//   {
//     echo "Sorry! there are no job Opportunities Available for you right now";
//   }
while($row1 = mysql_fetch_array($retval, MYSQL_ASSOC))
{
         $id= $row1['ad_id'];
         $name = $row1['cname'];
         $expertise = $row1['skills_req'];
         $industry = $row1['industry'];
         $positions = $row1['positions'];
         $description = $row1['description'];
    echo '<tr><td> <a href="description_ad.php?ad_id= ' . $id . '">  <b>'.$name.' </b> </a> <br> '.$description.' <br> <a href="taketest.php" class="button"> Take test </a> </td></tr>'; }
?>
</table>
</body>
</html>