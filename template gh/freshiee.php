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
					
						<li><a href="signupoption.html" class="button special">Sign Up as <b> Job Hunter</b></a></li>
					</ul>
				</nav>
			</header>
<!-- freshie registering form -->
 <table class="alt table-wrapper">
<tbody>
	<tr>
		<td>
		<h4 align="center">Sign Up below as an Freshie Job Hunter</h4>
    		<form method="post" action="freshieesignedup.php">
    			<label for="fullname"></label>
                    <input type="text" name="fullname" placeholder="Full name" style="margin-top: 75px" required> <br>
                    <label for="username"></label>
                    <input type="text" name="username" placeholder="Username" required> <br>
                    <label for="email"></label>	
                    <input type="email" name="email" placeholder="email"  required> <br>
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Password"  required> <br>
                    <label for="DOB" ></label>
                    <input type="date" name="date" required> <br>
                   	<label for="field"></label> 
                    <select name="field">
                    <option value="noselection">Field</option>
					<option value="cs&it">CS&IT</option>
					<option value="marketing">Marketing</option>
					<option value="medical">Medical</option>
					</select>
					<br>
                    
                    <label for="degree"></label><select name="degree">
					<option value="noselection">Degree</option>
					<option value="bs in computer science">BS in Computer Science</option>
					<option value="be in engineering">Bachelors in engineering</option>
					<option value="bba">Bachelors in business administration</option>
					<option value="bs media studies">BS Media Studies</option>
					<option value="mbbs">MBBS</option></select>
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
					<option value="noselection">Skills</option>
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
				  <label for="gradyear"></label>
                    <input type="year" name="gradyear" placeholder="Gradyear" required> <br>
                    <label for="cgpa"></label>
                    <input type="number" step="0.01" min="2" max="4" name="cgpa" placeholder="cgpa" required><br>
                    <p class="p">By submitting this form you agree to Get Hired's Terms of Service.</p>
                    <input type="submit" name="submit" value="Join Get Hired!">

    		</form>
    </td>		
    </tr>
</tbody>
</table>

			</body>
			</html>	