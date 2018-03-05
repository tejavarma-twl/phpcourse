<?php
session_start();
include("logincheck.php");
?>
<?php include("header.php"); ?>
<?php include("nav.php"); ?>
<h2>Welcome to my site <?php echo $_SESSION['username']; ?></h2>