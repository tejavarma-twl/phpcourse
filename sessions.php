<?php
ob_start();
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
if(isset($_SESSION['username'])&&$_SESSION['username']!=""){
    header("Location:sessions2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Username : <input type="text" name="username" id="" required><br>
        Password : <input type="password" name="password" id=""><br>
        <input type="submit" value="sumitform">
    </form>
    <img src="uploads/cheetah_snapshot.jpg" alt="" width="200">
</body>
</html>
<?php
$uploads_dir = './uploads';
if(isset($_POST['username'])&&isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username!=""&&$password!=""){
        $_SESSION['username'] = $username;   
        header("Location:sessions2.php");
    }
}
?>