<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['j_id']);

session_destroy();

header("Location:login.php");
exit;
?>