<?php
session_start();
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
					 <?php
					 if(!isset($_SESSION['state']))
                    {

                    ?>
                    <ul>

                       <li><a href="index.php" class="button">Home</a></li>
                        <li><a href="postad.php" class="button special">Post AD as <b>Company</b></a></li>
                        <li><a href="signupoption.html" class="button special">Sign Up as <b>Job Hunter</b></a></li>
                        <li><a href="adminindex.php" class="button special"><b>ADMIN</b></a></li>
                    </ul>
                    <?php
                }
                ?>
				</nav>
			</header>
<!-- freshie registering form -->
 <table class="alt table-wrapper">
<tbody>
	<tr>
		<td>
		<h4 align="center">Post Ad for hiring graduates!</h4>
    		<form method="post" action="postingad.php">
    			 <label for="cname"></label>
                    <input type="text" name="cname" placeholder="company name" style="margin-top: 75px" required> <br>
                    <label for="skills_req"></label>
                     <select name="skills_req">
					<option value="noselection">Skills_Required</option>
					<option value="progamming">Programming</option>
					<option value="web developement">Web Developement</option>
					<option value="App developement">App Developement</option>
					<option value="dbms">Database Management</option>
					<option value="bigdata">Big Data Analysis</option>
					<option value="communication">Communication</option>
					<option value="digital marketing">Digital Marketing</option>
					<option value="pr building">PR Building</option>
					<option value="diagnosis of patient">Diagonis of pateint</option>
					<option value="surgery">surgery</option>
					<option value="sutures and stiches">sutures and stitches</option>
					</select>
                    <br>
                    <label for="industry"></label>	
                    <input type="text" name="industry" placeholder="industry"  required> <br>
                    <label for="positions"></label>
                    <input type="number" name="positions" style="margin-bottom: 36px" placeholder="number of positions" required>
                    <label for="description"></label>
                    <textarea name="description" cols="30" rows="4" required> Enter job description here</textarea>
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