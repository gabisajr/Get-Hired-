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
                    <ul>
                       <li><a href="index.php" class="button">Home</a></li>
                        <li><a href="postad.php" class="button special">Post AD as <b>Company</b></a></li>
                        <li><a href="signupoption.html" class="button special">Sign Up as <b>Job Hunter</b></a></li>
                        <li><a href="adminindex.php" class="button special"><b>ADMIN</b></a></li>
                    </ul>
                </nav>
            </header>
            <div class="box" align="center">
            
            <p>
                Your ad is successfully posted<br>
                <a href="postad.php" class="button">Post another Ad</a>
            </p>
            </div>
</body>
</html>