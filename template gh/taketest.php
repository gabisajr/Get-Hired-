<?php
session_start();
$id=$_SESSION['j_id'];  
?>
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
         $name = $row['j_name'];
         $username = $row['username'];
         $password = $row['password'];
         $email = $row['email'];
         $dob = $row['dob'];
         $field = $row['field'];
         $degree = $row['degree'];
         $skill = $row['skills'];
         $gradyear = $row['gradyear'];
         $cgpa=$row['cgpa']; 
}
mysql_close($conn);
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>http://gethired.org.com</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
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
      <?php
      if($cgpa>='3.01')
      {
      ?>
      <section>
          <div class="box" align="center">
              <p>You are eligible for the test. An email has been sent to your email address from the company for the interview call.<br>
              Thankyou for visiting our website. Stay tuned for more opportunities coming your way.
              <br>
              Best of luck for your interview.

              </p>
          </div>
      
      <?php
  }
  else
  {
      ?>
      <div class="box" align="center">
        <p> You are not eligible for this test. Improve your cgpa.</p>
  </div>
  <?php

  }
?>
</section>

</body>
</html>