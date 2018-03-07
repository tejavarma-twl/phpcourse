<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="images/s.png" type="image/png" sizes="16x16">
<title>FORMS USING ARRAYS</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
.pad-10 {
	padding: 10px 0px;
}
</style>
</head>

<body>
<h1 class="popover-title" style="text-align:center;"> Please fill the below details to see the output </h1>
<div class="container">
  <form method="post"  enctype="multipart/form-data" >
    <div class="row">
    <div class="col-sm-6"> 
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">First Name </div>
        <div class="col-sm-7">
          <input type="text" name="fname" id="" placeholder="First Name" >
        </div>
      </div>
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">Last Name </div>
        <div class="col-sm-7">
          <input type="text" name="lname" id="" placeholder="Last Name" >
        </div>
      </div>
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">Mobile No</div>
        <div class="col-sm-7">
          <input type="number"  name="mobile" id="" placeholder="Mobile No" >
        </div>
      </div>
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">Email</div>
        <div class="col-sm-7">
          <input type="email"  name="email" id="" placeholder="Email">
        </div>
      </div>
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">Address</div>
        <div class="col-sm-7">
          <input type="text" name="address" id="" placeholder="Address">
        </div>
      </div>
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">Zip Code</div>
        <div class="col-sm-7">
          <input type="number"  name="zipcode" id="" placeholder="Zipcode" >
        </div>
      </div>
      <!--comment--> 
    </div>
    <div class="col-sm-6"> 
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">College Name </div>
        <div class="col-sm-7">
          <input type="text" name="clzname" id="" placeholder="college Name">
        </div>
      </div>
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">Qualification</div>
        <div class="col-sm-7">
          <input type="text" name="qualification" id="" placeholder="Qualification">
        </div>
      </div>
      <!--comment--> 
      
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">Percentage</div>
        <div class="col-sm-7">
          <input type="number"  name="Percentage" id="" placeholder="Percentage">
        </div>
      </div>
      
      <!--comment-->
      <div class="row pad-10">
        <div class="col-sm-5">Gender</div>
        <div class="col-sm-7">
          <input type="radio" name="gender" value="male">
          Male
          <input type="radio" name="gender" value="female">
          Female
          <input type="radio" name="gender" value="other">
          Other 
          </div>
          </div>
        <!--comment-->
        
        <div class="row pad-10">
          <div class="col-sm-5">Ur Image</div>
          <div class="col-sm-7">
            <input type="file"  name="pic" id="" >
          </div>
        </div>
        <!--comment-->
        <div class="row pad-10">
          <div class="col-sm-7">
            <input type="submit" value="submit" >
          </div>
        </div>
        <!--comment--> 
      </div>
    </div>
  </form>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
 $fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$clzname = $_POST['clzname'];
$qualification = $_POST['qualification'];
$Percentage = $_POST['Percentage'];
$gender =$_POST['gender'];

$pic = $_POST['./uploads/sample2.jpg'];

move_uploaded_file($_FILES['pic']['tmp_name'],"./uploads/sample2.jpg");




if($Percentage > 100){
		$grade= "How can person get more then 100%";
	}
elseif($Percentage >= 80){
		$grade= "Distinction";
	}
elseif($Percentage >= 60){
		$grade= "First Class";
	}
else{
		$grade="";
	}



$resume = array(
	'First name'=> $fname,
	'Last name'=> $lname,
	'Mobile No'=>$mobile,
	'Email' => $email,
	'Address'=> $address,
	'Zip Code' => $zipcode,
	'College Name' => $clzname,
	'Qualification' => $qualification,
	'Percentage' => $Percentage,
	'Grade' => $grade,
	'Gender'=> $gender,
	'Pic'=> $pic
	);
		
	echo "<pre>";	
	
print_r($resume);
?>