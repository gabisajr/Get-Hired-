<?php
session_start();
$id = $_GET['id'];

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
                        <li><a href="#">Job opportunities</a></li>
                      <?php
                      if(!isset($_GET['id']))
                      {

                      ?>
                        <li><a href="signupoption.html" class="button special">Sign Up as <b> Job Hunter</b></a></li>
                      <?php
                        }
                      ?>
                    </ul>
                </nav>
            </header>
<!-- freshie registering form -->
 <table class="alt table-wrapper">
<tbody>
    <tr>
        <td>
        <h4 align="center">Update your Freshie Job Hunter form</h4>
            <form method="post" method="post" action="editsubmit.php?id=<?php echo $id ?>">
                <label for="fullname"></label>
                    <input type="text" name="fullname" placeholder="Full name" style="margin-top: 75px" value="<?php echo $name ?>" required> <br>
                    <label for="username"></label>
                    <input type="text" name="username" placeholder="Username" value="<?php echo $username ?>" required> <br>
                    <label for="email"></label> 
                    <input type="email" name="email" placeholder="email" value="<?php echo $email ?>"  required> <br>
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Password" value="<?php echo $password ?>"  required> <br>
                    <label for="DOB" ></label>
                    <input type="date" name="date" value="<?php echo $dob ?>" required> <br>
                    <label for="field"></label> 
                    <select name="field">
                    <option value="noselection" <?php if ($field == "noselection") print("NOTSelected"); ?>>Field</option>
                    <option value="cs&it" <?php if ($field == "cs&it") print("Selected"); ?> >CS&IT</option>
                    <option value="marketing" <?php if ($field == "marketing") print("Selected"); ?>>Marketing</option>
                    <option value="medical" <?php if ($field == "medical") print("Selected"); ?>>Medical</option>
                    </select>
                    <br>
                    
                    <label for="degree"></label><select name="degree">
                    <option value="noselection" <?php if ($degree == "noselection") print("NOTSelected"); ?>>Degree</option>
                    <option value="bs in computer science" <?php if ($degree == "bs in computer science") print("Selected"); ?>>BS in Computer Science</option>
                    <option value="be in engineering" <?php if ($degree == "be in engineering") print("Selected"); ?> >Bachelors in engineering</option>
                    <option value="bba" <?php if ($degree == "bba") print("Selected"); ?>>Bachelors in business administration</option>
                    <option value="bs media studies" <?php if ($degree == "bs media studies") print("Selected"); ?>>BS Media Studies</option>
                    <option value="mbbs" <?php if ($degree == "mbbs") print("Selected"); ?>>MBBS</option>
                    </select>
                    <br>
                    <!-- <label for="skills"></label>
                     <input type="checkbox" name="skill1" value="prog">Programming -->
                     <!-- <input type="checkbox" name="skill3" value="ad"/>App Developement
                     <input type="checkbox" name="skill4" value="dbms"/>Database Management
                     <input type="checkbox" name="skill5" value="bigdata"/>BigData Analysis
                     <input type="checkbox" name="skill6" value="comm"/>Communication Skills
                     <input type="checkbox" name="skill7" value="dm"/>Digital Marketing
                     <input type="checkbox" name="skill8" value="pr"/>PR Building
                     <input type="checkbox" name="skill9" value="diag"/>Diagnosis of Patient                 
                     <input type="checkbox" name="skill10" value="surg"/>Surgery
                     <input type="checkbox" name="skill11" value="ss"/>Sutures and stitches
                     <input type="checkbox" name="skill12" value="diag"/>App Developement                 
   -->
                    <label for="skills" ></label> <select name="skills">
                    <option value="noselection" <?php if ($skill == "noselection") print("NOTSelected"); ?>>Skills</option>
                    <option value="progamming" <?php if ($skill == "programming") print("Selected"); ?>>Programming</option>
                    <option value="web developement" <?php if ($skill == "web developement") print("Selected"); ?>>Web Developement</option>
                    <option value="App developement" <?php if ($skill == "App developement") print("Selected"); ?>>App Developement</option>
                    <option value="dbms" <?php if ($skill == "dbms") print("Selected"); ?>>Database Management</option>
                    <option value="bigdata" <?php if ($skill == "bigdata") print("Selected"); ?>>Big Data Analysis</option>
                    <option value="communication" <?php if ($skill == "communication") print("Selected"); ?>>Communication</option>
                    <option value="digital marketing" <?php if ($skill == "digital marketing") print("Selected"); ?>>Digital Marketing</option>
                    <option value="pr building" <?php if ($skill == "pr building") print("Selected"); ?>>PR Building</option>
                    <option value="diagnosis of patient" <?php if ($skill == "diagnosis of pateint") print("Selected"); ?>>Diagonis of pateint</option>
                    <option value="surgery" <?php if ($skill == "surgery") print("Selected"); ?>>surgery</option>
                    <option value="sutures and stiches" <?php if ($skill == "sutures and stiches") print("Selected"); ?>>sutures and stitches</option>
                    </select>
                    <br>
                  <label for="gradyear"></label>
                    <input type="year" name="gradyear" placeholder="Gradyear" value="<?php echo $gradyear ?>" required><br>
                     <label for="cgpa"></label>
                    <input type="number" step="0.01" min="2" max="4" name="cgpa" placeholder="cgpa"  value="<?php echo $cgpa ?>"required><br>
                    <br><input type="submit" name="submit" value="UPDATE FORM">

            </form>
    </td>       
    </tr>
</tbody>
</table>

            </body>
            </html> 