<?php
ob_start();
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
if(isset($_SESSION['username'])&&$_SESSION['username']!=""){
    header("Location:sessions2.php");
}
?>
    <?php include("header.php"); ?>
    <?php include("nav.php"); ?>
    <form method="post" enctype="multipart/form-data">
        Username : <input type="text" name="username" id="" required><br>
        Password : <input type="password" name="password" id=""><br>
        <input type="submit" value="sumitform">
    </form>
    <img src="uploads/cheetah_snapshot.jpg" alt="" width="200">
</body>
</html>
<?php

function storelogin($details){
    if(isset($details['username'])&&isset($details['password'])){
        $username = $details['username'];
        $password = $details['password'];
        if($username!=""&&$password!=""){
            $_SESSION['username'] = $username;   
            header("Location:sessions2.php");
        }
    }
}

storelogin($_POST);

?>