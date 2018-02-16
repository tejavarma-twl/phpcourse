<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Username : <input type="text" name="username" id="" required><br>
        Password : <input type="password" name="password" id=""><br>
        <input type="submit" value="sumitform">
    </form>
</body>
</html>

<?php
// print "<pre>";
// print_r($_POST);

$username = $_POST['username'];
$password = $_POST['password'];
if($username!=""&&$password=="111"){
    echo "<h2>Welcome $username! your password is $password!</h2>";
}
// print "</pre>";
?>