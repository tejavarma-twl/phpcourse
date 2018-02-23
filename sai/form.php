<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="images/s.png" type="image/png" sizes="16x16">
<title>Form</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.pad-10 {
	padding: 10px;
}
.title {
	text-align: center;
	font-size: 24px;
}
input {
	width: 100%;
}
</style>
</head>
<body>
<div class="container" >
  <div class="title"> Please fill the below details</div>
  <form method="post" action="resume.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6"> 
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> First Name :</div>
          <div class="col-sm-7">
            <input type="text" name="fname" id="" placeholder="First Name" required>
          </div>
        </div>
        <!--comment--> 
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5">Last Name :</div>
          <div class="col-sm-7">
            <input type="text" name="lname" id="" placeholder="Last Name" required>
          </div>
        </div>
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Mobile no :</div>
          <div class="col-sm-7">
            <input type="number" name="mobile" id="" placeholder="Mobile no" required>
          </div>
        </div>
        <div class="row pad-10">
          <div class="col-sm-5"> Phone :</div>
          <div class="col-sm-7">
            <input type="number" name="phone" id="" placeholder="Phone"  required>
          </div>
        </div>
        
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Email :</div>
          <div class="col-sm-7">
            <input type="email" name="email" id="" placeholder="Email"  required>
          </div>
        </div>
        <!--comment--> 
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Address:</div>
          <div class="col-sm-7">
            <input type="text"  name="address" id="" placeholder="Address" required>
          </div>
        </div>
        <!--comment--> 
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> State:</div>
          <div class="col-sm-7">
            <input type="text" name="state" id="" placeholder="State" >
          </div>
        </div>
        <!--comment--> 
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Country:</div>
          <div class="col-sm-7">
            <input type="text" name="Country" id="" placeholder="Country" >
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> ZIP Code:</div>
          <div class="col-sm-7">
            <input type="number" name="zip" id="" placeholder="ZIP Code" >
          </div>
        </div>
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Qualification:</div>
          <div class="col-sm-7">
            <input type="text" name="Qualification" id="" placeholder="Qualification">
          </div>
        </div>
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> College:</div>
          <div class="col-sm-7">
            <input type="text" name="College" placeholder="College/University" id="">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5">college/university  Percentage:</div>
          <div class="col-sm-7">
            <input type="number" max="100" name="clzpercentage" id="" placeholder="College/University Percentage">
          </div>
        </div>
        <!--comment--> 
        
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> College/University Passedout:</div>
          <div class="col-sm-7">
            <input type="number" name="clzpassout" id="" placeholder="College/University Passedout">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5">10<sup>th</sup> School:</div>
          <div class="col-sm-7">
            <input type="text"  name="schoolname" id="" placeholder="School Name">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5">10<sup>th</sup> Board:</div>
          <div class="col-sm-7">
            <input type="text"name="schoolboard" id="" placeholder="SSC / ICIC / CBSC">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5">10<sup>th</sup> Percentage:</div>
          <div class="col-sm-7">
            <input type="number" max="100" name="schoolpercentage" id="" placeholder="10th Percentage">
          </div>
        </div>
        <!--comment--> 
        
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> 10<sup>th</sup> Passedout:</div>
          <div class="col-sm-7">
            <input type="number" name="schoolpassout" id="" placeholder="10th Passedout">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Ur Image :</div>
          <div class="col-sm-7">
            <input type="file" name="profile_pic" id="" placeholder="Profile Pic" required>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row pad-10">
          <div class="col-sm-5"> Skills:</div>
          <div class="col-sm-7">
            <input type="text" name="skills" id="" placeholder="Skills" >
          </div>
        </div>
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Intermediate /Diploma:</div>
          <div class="col-sm-7">
            <input type="text" name="Plus2" placeholder=" Inter/Diploma " id="">
          </div>
        </div>
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Intermediate College:</div>
          <div class="col-sm-7">
            <input type="text" name="Inter" placeholder=" Inter/Diploma College" id="">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Intermediate Passedout:</div>
          <div class="col-sm-7">
            <input type="number" name="Interpassdeout" placeholder=" Inter/Diploma passedout" id="">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Intermediate Percentage:</div>
          <div class="col-sm-7">
            <input type="text" name="Interpercentage" placeholder=" Inter/Diploma Percentege" id="">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Extra Qualification:</div>
          <div class="col-sm-7">
            <input type="text" name="extraqual" placeholder=" Extra Qualification" id="">
          </div>
        </div>
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Hobbies:</div>
          <div class="col-sm-7">
            <input type="text" name="hobbies1" placeholder=" Hobbies" id="">
          </div>
        </div>
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Hobbies:</div>
          <div class="col-sm-7">
            <input type="text" name="hobbies2" placeholder=" Hobbies" id="">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Hobbies:</div>
          <div class="col-sm-7">
            <input type="text" name="hobbies3" placeholder=" Hobbies" id="">
          </div>
        </div>
        <!--comment--> 
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-5"> Additional Knowledge :</div>
          <div class="col-sm-7">
            <input type="text" name="ak1" placeholder=" Additional Knowledge" id="" require>
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Additional Knowledge :</div>
          <div class="col-sm-7">
            <input type="text" name="ak2" placeholder=" Additional Knowledge" id="">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Additional Knowledge :</div>
          <div class="col-sm-7">
            <input type="text" name="ak3" placeholder=" Additional Knowledge" id="">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Acquired Skills :</div>
          <div class="col-sm-7">
            <input type="text" name="as1" placeholder=" Acquired Skills" id="" require>
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Acquired Skills :</div>
          <div class="col-sm-7">
            <input type="text" name="as2" placeholder=" Acquired Skills" id="">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5"> Acquired Skills :</div>
          <div class="col-sm-7">
            <input type="text" name="as3" placeholder=" Acquired Skills" id="">
          </div>
        </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-7">
            <input type="submit" value="Sumit Form">
          </div>
        </div>
      </div>
    </div>
    <!-- Password : <input type="password" name="password" id=""><br> -->
  </form>
</div>
<script src="js/bootstrap.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
$uploads_dir = './uploads';
// if(isset($_POST['username'])&&isset($_POST['password'])){
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



//     echo $fname = $_POST['fname'];
// 	 echo $lname = $_POST['lname'];

// echo $email = $_POST['email'];
// 	 echo $address = $_POST['address'];
//   echo $state = $_POST['state'];
//   echo $zip = $_POST['zip'];

//   echo $Country = $_POST['Country'];


// 	 echo $mobile= $_POST['mobile'];


// 	 echo $College = $_POST['College'];
// 	 echo $Qualification = $_POST['Qualification'];
//    echo $clzpassout = $_POST['clzpassout'];

//    echo $Interpassdeout = $_POST['Interpassdeout'];

//    echo $clzpercentage = $_POST['clzpercentage'];

//    echo $Interpercentage = $_POST['Interpercentage'];

//    echo $schoolname = $_POST['schoolname'];
//    echo $schoolpercentage = $_POST['schoolpercentage'];
//    echo $schoolboard = $_POST['schoolboard'];
//    echo $schoolpassout = $_POST['schoolpassout'];


// 	 echo $hobbies1 = $_POST['hobbies1'];
// 	 echo $hobbies2 = $_POST['hobbies2'];
// 	 echo $hobbies3 = $_POST['hobbies3'];

// 	 echo $ak1 = $_POST['ak1'];
// 	 echo $ak2 = $_POST['ak2'];
// 	 echo $ak3 = $_POST['ak3'];


// 	 echo $as1 = $_POST['as1'];
// 	 echo $as2 = $_POST['as2'];
// 	 echo $as3 = $_POST['as3'];


// 	 echo $profile_pic= $_POST['profile_pic'];


// 	 echo $skills = $_POST['skills'];

// 	 echo $Plus2 = $_POST['Plus2'];

// 	 echo $Inter = $_POST['Inter'];

// 	 echo $extraqual = $_POST['extraqual'];

	
//     // echo $password = $_POST['password'];

   

// // }
?>