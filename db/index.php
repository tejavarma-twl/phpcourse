<?php
ob_start();
$link = mysqli_connect("127.0.0.1", "root", "admin", "phpcourse"); 
define ('SITE_ROOT', realpath(dirname(__FILE__)));
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$students = [];
// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
if(isset($_POST['name'])&&isset($_POST['city'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    if(isset($_POST['insert'])){
        if(mysqli_query($link,"insert into `sample` (`id`,`name`,`city`) values(NULL, '$name' , '$city')")){
            $uploads_dir = './uploads';
            $userid = mysqli_insert_id($link);
            $ext = end(explode(".",$_FILES['profile']['name']));
            $imagename = "./uploads/".$userid.".".$ext;
            move_uploaded_file($_FILES['profile']['tmp_name'],$imagename);


            $phone = $_POST['phone'];
            $address = $_POST['address'];

            mysqli_query($link,"insert into `contact` (`id`,`contact_no`,`contact_address`,`user_id`) values(NULL, '$phone' , '$address', '$userid')");

            if(mysqli_query($link,"UPDATE `sample` SET `profile`='$imagename' WHERE `id`='$userid'")){
                header("Location:index.php?status=success");
                exit;
            }
        }
    }else{
        $upid = $_POST['id'];
        if(isset($_FILES['profile']['name'])&&$_FILES['profile']['name']!=''){
            $uploads_dir = './uploads';
            $ext = end(explode(".",$_FILES['profile']['name']));
            $imagename = "./uploads/".$upid.".".$ext;
            move_uploaded_file($_FILES['profile']['tmp_name'],$imagename);

            if(mysqli_query($link,"UPDATE `sample` SET `name`='$name', `city`='$city', `profile`= '$imagename' WHERE `id`='$upid'")){
                header("Location:index.php?status=upsuccess");
                exit;
            }
        }else{
            if(mysqli_query($link,"UPDATE `sample` SET `name`='$name', `city`='$city' WHERE `id`='$upid'")){
                // echo "success";
                header("Location:index.php?status=upsuccess");
                exit;
            }
        }
    }
}


if(isset($_GET['id'])){
    if($_GET['operation']=="delete"){
        if(mysqli_query($link,"DELETE FROM `sample` WHERE `id`=".$_GET['id']."")){
            header("Location:index.php?status=delsuccess");
        } 
    }
}


if ($result = mysqli_query($link, "select * from sample")) {
    // printf("Select returned %d rows.\n", mysqli_num_rows($result));
    // $row = mysqli_fetch_array($result, MYSQLI_NUM);
    while($row = mysqli_fetch_assoc($result)){
        //print_r($row);
        //$students
        array_push($students,$row);
        // echo "the students are ".$row['name']." from ".$row['city'];
        //echo "<br>";
    }
    //print_r($students);
    /* free result set */
    mysqli_free_result($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
    if(isset($_GET['id'])){
        if($_GET['operation']=="edit"){
            if($result2 = mysqli_query($link, "select * from sample where `id`=".$_GET['id'])) {
                $data = mysqli_fetch_assoc($result2);
            ?>
            <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $data['name'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">City</label>
                <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $data['city']; ?>">
                <input type="hidden" class="form-control" placeholder="City" name="id" value="<?php echo $data['id']; ?>">
            </div>
            <div class="form-group">
                <img src="<?php echo $data['profile']; ?>" alt="" height="100">
                <label for="profile picture">Profile Picture</label>
                <input type="file" class="form-control" name="profile">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Submit</button>
        </form>
            <?php
            }
        }
    }else{
        ?>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">City</label>
                <input type="text" class="form-control" placeholder="City" name="city">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" class="form-control" placeholder="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" placeholder="address" name="address">
            </div>
            <div class="form-group">
                <label for="profile picture">Profile Picture</label>
                <input type="file" class="form-control" name="profile">
            </div>
            <button type="submit" class="btn btn-primary" name="insert">Submit</button>
        </form>
        <?php
    }
?>
    <div class="my-5"</div>
    <?php
    if(isset($_GET['status'])){
        if($_GET['status']=="success"){
            ?>
            <div class="alert alert-success" role="alert">
                Row inserted Successfully!
            </div>
            <a href="index.php">Go Back</a>
            <?php
        }
        if($_GET['status']=="delsuccess"){
            ?>
            <div class="alert alert-danger" role="alert">
                Deleted Successfully!
            </div>
            <a href="index.php">Go Back</a>
            <?php
        }
        if($_GET['status']=="upsuccess"){
            ?>
            <div class="alert alert-danger" role="alert">
                Updated Successfully!
            </div>
            <a href="index.php">Go Back</a>
            <?php
        }
    }
    ?>
    <div class="my-5"</div>
    <table class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">City</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">image</th>
        <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $i=1;
        foreach($students as $student){
            $tempId = $student['id'];
            $getContact = mysqli_query($link,"select * from `contact` where `user_id`=$tempId");
            $contactDetails = mysqli_fetch_assoc($getContact);
            // print_r($contactDetails);
            ?>
            <tr>
                <th scope="row"><?php echo $i; //$student['id']; ?></th>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['city']; ?></td>
                <td><?php echo $contactDetails['contact_no']; ?></td>
                <td><?php echo $contactDetails['contact_address']; ?></td>
                <td><img src="<?php echo $student['profile']; ?>" alt="" height="100"></td>
                <td>
                    <a class="btn btn-danger" href="index.php?id=<?php echo $student['id']; ?>&operation=delete">Delete</a>
                    <a class="btn btn-danger" href="index.php?id=<?php echo $student['id']; ?>&operation=edit">Edit</a>
                </td>
            </tr>
            <?php
            $i++;
        }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>
<?php
mysqli_close($link);
?>