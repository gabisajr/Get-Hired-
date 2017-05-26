<?php
session_start();
$id=$_SESSION['j_id'];  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>https://gethired.com</title>
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

    </head>

  <body>
     
    <!-- Header -->
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

    <!-- Main -->
      <section id="main" class="wrapper">
        <div class="container">
          <header class="major">
              </header>

    </div>
    </section>
<section>
<div>    
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
$id=$_GET['ad_id'];

$query = "SELECT `cname`, `skills_req`, `industry`, `positions`, `description`
        FROM `company`
        WHERE `ad_id`='$id'" ;
        $retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
// if(is_null($query))
// {
//   echo "SORRY NO JOBS AVAILABLE RIGHT NOW";
// }
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{ 
          $name = $row['cname'];
          $skills_req = $row['skills_req'];
          $industry = $row['industry'];
          $positions = $row['positions'];
         $description = $row['description']; 



         echo '<tr><td> <b> Company name: </b>'.$name.' </tr> </td>';
         echo '<tr><td> <b> Skills company requires: </b> '.$skills_req.'</tr> </td>';  
         echo '<tr><td> <b>industry: </b>'.$industry.' </tr> </td>';
         echo '<tr><td> <b> Number of positions we are hiring: </b>'.$positions.' </tr> </td>';
         echo '<tr><td> <b> Job description: </b>'.$description.' </td></tr>'; }
?>
</table>
</div>
</section>
</body>
</html>