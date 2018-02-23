<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
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
        <input type="file" name="profile_pic" id=""><br>
        <input type="submit" value="sumitform">
    </form>
    <img src="uploads/cheetah_snapshot.jpg" alt="" width="200">
</body>
</html>
<?php
$uploads_dir = './uploads';
if(isset($_POST['username'])&&isset($_POST['password'])){

    echo "<pre>";
    print_r($_FILES);

    echo $filename = "sample.jpg";
    echo "<br>";
    echo $_FILES['profile_pic']['type'];
    echo "<br>";
    echo $_FILES['profile_pic']['tmp_name'];
    echo "<br>";
    echo $_FILES['profile_pic']['size'];
    echo "<br>";

    echo move_uploaded_file($_FILES['profile_pic']['tmp_name'],"$uploads_dir/$filename");
    // echo move_uploaded_file($_FILES['profile_pic']['tmp_name'],"uploads/".$filename);
    // echo move_uploaded_file($_FILES['profile_pic']['tmp_name'],"$uploads_dir/sample.jpg");

    // if(move_uploaded_file($_FILES['profile_pic']['tmp_name'].$_FILES['profile_pic']['name'],"$uploads_dir/$filename")){
    //     echo "uploaded";
    // }else{
    //     echo "upload failed";
    // }
    echo "<br>";
    echo $username = $_POST['username'];
    echo "<br>";
    echo $password = $_POST['password'];
    echo "<br>";
    if($username!=""&&$password=="111"){
        // echo "<h2>Welcome $username! your password is $password!</h2>";
    }

    


    echo "</pre>";

}

?>