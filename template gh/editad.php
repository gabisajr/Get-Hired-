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

$sql = "SELECT * 
        FROM company
        WHERE ad_id = '$id'";


$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
         $aid = $row['ad_id'];
         $cname = $row['cname'];
         $sq = $row['skills_req'];
         $industry = $row['industry'];
         $pos = $row['positions'];
         $des = $row['description'];
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
                       <li><a href="index.php" class="button">Home</a></li>
                        <li><a href="postad.php" class="button special">Post AD as <b>Company</b></a></li>
                        <li><a href="signupoption.html" class="button special">Sign Up as <b>Job Hunter</b></a></li>
                        <li><a href="adminindex.php" class="button special"><b>ADMIN</b></a></li>
                    </ul>
                </nav>
            </header>
<!-- ad editing form -->
 <table class="alt table-wrapper">
<tbody>
    <tr>
        <td>
        <h4 align="center">Edit your advertisement</h4>
            <form method="post" method="post" action="editsubmitad.php?id=<?php echo $aid ?>">
                 <label for="cname"></label>
                    <input type="text" name="cname" placeholder="company name" style="margin-top: 75px" value="<?php echo $cname ?>" required> <br>
                    <label for="skills_req"></label>
                     <select name="skills_req">
                    <option value="noselection" <?php if ($sq == "noselection") print("NOTSelected"); ?>>Skills_Required</option>
                    <option value="progamming" <?php if ($sq == "programming") print("Selected"); ?>>Programming</option>
                    <option value="web developement" <?php if ($sq == "web developement") print("Selected"); ?>>Web Developement</option>
                    <option value="App developement" <?php if ($sq == "App developement") print("Selected"); ?>>App Developement</option>
                    <option value="dbms" <?php if ($sq == "dbms") print("Selected"); ?>>Database Management</option>
                    <option value="bigdata"<?php if ($sq == "bigdata") print("Selected"); ?>>Big Data Analysis</option>
                    <option value="communication"<?php if ($sq == "communication") print("Selected"); ?>>Communication</option>
                    <option value="digital marketing" <?php if ($sq == "digital marketing") print("Selected"); ?>>Digital Marketing</option>
                    <option value="pr building" <?php if ($sq == "pr building") print("Selected"); ?> >PR Building</option>
                    <option value="diagnosis of patient" <?php if ($sq == "diagnosis of patient") print("Selected"); ?>>Diagonis of pateint</option>
                    <option value="surgery" <?php if ($sq == "surgery") print("Selected"); ?>>surgery</option>
                    <option value="sutures and stiches" <?php if ($sq == "sutures and stiches") print("Selected"); ?>>sutures and stitches</option>
                    </select>
                    <br>
                    <label for="industry"></label>  
                    <input type="text" name="industry" placeholder="industry"  value="<?php echo $industry ?>"required> <br>
                    <label for="positions"></label>
                    <input type="number" name="positions" style="margin-bottom: 36px" placeholder="number of positions" value="<?php echo $pos ?>" required>
                    <label for="description"></label>
                    <textarea name="description" cols="30" rows="4" required><?php echo $des;?></textarea>
                     <br>
                    
                    <p class="p">By submitting this form you agree to Get Hired's Terms of Service.</p>
                    <input type="submit" name="submit" value="Post Ad!">


            </form>
    </td>       
    </tr>
</tbody>
</table>

            </body>
            </html> 