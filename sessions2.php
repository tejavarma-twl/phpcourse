<?php
session_start();
if(isset($_SESSION['username'])&&$_SESSION['username']!=""){
?>
<a href="logout.php">Logout</a>
<h2>Welcome to my site <?php echo $_SESSION['username']; ?></h2>
<?php
}
else{
    header("Location:sessions.php");
}
?>
