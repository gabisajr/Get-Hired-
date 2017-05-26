<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>http://gethired.org.com</title>
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
			<!-- <link rel="stylesheet" href="css/signup.css" /> -->
		</noscript>

	</head>
	<body>


<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Get Hired</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="signupoption.html" class="button special">Sign Up as <b> Job Hunter</b></a></li>
					</ul>
				</nav>
			</header>
<!-- experienced registering form -->
 <table class="alt table-wrapper">
 
<tbody>
	<tr>
		<td>
		<h4 align="center">Sign Up below as an Experienced Job Hunter</h4>
    		<form method="post" action="experiencedsignedup.php">
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
                    <!-- <label for="field"></label>
                    <input type="text" name="field" placeholder="field" required><br>
                    <label for="degree"></label>
                    <input type="text" name="degree" placeholder="degree" required><br> -->
                    <!-- <label for="skills"></label>
                    <textarea cols="30" rows="4" name="skills" placeholder="Enter skills"></textarea> -->
                    <label for="field"></label> 
                    <select name="field">
                    <option value="noselection">Field</option>
					<option value="csit">CS&IT</option>
					<option value="mkt">Marketing</option>
					<option value="medical">Medical</option>
					</select>
					<br>
                    
                    <label for="degree"></label><select>
					<option value="noselection">Degree</option>
					<option value="bscs">BS in Computer Science</option>
					<option value="be">Bachelors in engineering</option>
					<option value="bba">Bachelors in business administration</option>
					<option value="bs">BS Media Studies</option>
					<option value="mbbs">MBBS</option></select>
					<br>
                    <label for="skills" ></label> <select name="skills">
					<option value="noselection">Skills</option>
					<option value="prog">Programming</option>
					<option value="wd">Web Developement</option>
					<option value="ad">App Developement</option>
					<option value="dbms">Database Management</option>
					<option value="bigdata">Big Data Analysis</option>
					<option value="comm">Communication</option>
					<option value="dm">Digital Marketing</option>
					<option value="pr">PR Building</option>
					<option value="diag">Diagonis of pateint</option>
					<option value="surg">surgery</option>
					<option value="ss">sutures and stitches</option>
					</select>
					<br>
                    <label for="precompany"></label>
                    <input type="text" name="pcompany" placeholder="worked before at" required> <br>
                    <label for="j_position"></label>
                    <input type="text" name="jposition"  placeholder="previous job designation" required> <br>
                    <label for="workduration"></label>
                    <input type="number" name="time" placeholder="Duration you worked for the company in months" required><br><br>
                   	<p class="p">By submitting this form you agree to Get Hired's Terms of Service.</p>
                    <input type="submit" name="submit" value="Join Get Hired!">

    		</form>
    </td>		
    </tr>
</tbody>
</table>

			</body>
			</html>	