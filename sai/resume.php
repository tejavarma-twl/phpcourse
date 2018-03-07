<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];


$email = $_POST['email'];
$address = $_POST['address'];
$mobile= $_POST['mobile'];
$phone=$_POST['phone'];
$state = $_POST['state'];
$Country = $_POST['Country'];
$zip = $_POST['zip'];

$College = $_POST['College'];
$Qualification = $_POST['Qualification'];
$clzpassout = $_POST['clzpassout'];
$clzpercentage = $_POST['clzpercentage'];




$Interpercentage = $_POST['Interpercentage'];
$Interpassdeout = $_POST['Interpassdeout'];
$Inter = $_POST['Inter'];
$Plus2 = $_POST['Plus2'];

 $schoolname = $_POST['schoolname'];
$schoolpercentage = $_POST['schoolpercentage'];
$schoolboard = $_POST['schoolboard'];
$schoolpassout = $_POST['schoolpassout'];

$profile_pic= $_POST['profile_pic'];
 $filename = "sample.jpg";

$ak1 = $_POST['ak1'];
$ak2 = $_POST['ak2'];
$ak3 = $_POST['ak3'];

$as1 = $_POST['as1'];
$as2 = $_POST['as2'];
$as3 = $_POST['as3'];

$hobbies1 = $_POST['hobbies1'];
$hobbies2 = $_POST['hobbies2'];
$hobbies3 = $_POST['hobbies3'];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="images/s.png" type="image/png" sizes="16x16">
<title>Updates Resume</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
.name {
	color: #4D6335;
	text-transform: uppercase;
	padding: 20px;
	font-size: 40px;
	font-weight: bold;
}
.line {
	border-bottom: 4px solid #4D6335 !important;
	border-top: 4px solid #4D6335 !important;
	box-sizing: border-box;
}
.line-bottom {
	border-bottom: 4px solid #4D6335 !important;
	box-sizing: border-box;
}
.pad-0 {
	padding: 0px;
}
.red-title {
	color: #4D6335;
	font-size: 30px;
}
.separator {
	padding: 10px 0px;
}
</style>
</head>

<body>
<!--<h1 style="text-transform:uppercase;text-align:center;">resume</h1>-->
<div class="container line" style="    margin-top: 50px;">
  <div class="row">
    <div class="col-sm-6">
      <div class="name" >
        <?php
        echo "<div>$fname $lname</div>";
    	?>
      </div>
    </div>
    <div class="col-sm-6" style="padding: 15px 0px;">
      <div class="row">
        <div class="col-sm-3 pad-0" > ADDRESS </div>
        <div class="col-sm-1 pad-0" > :</div>
        <div class="col-sm-8 pad-0"  >
          <?php
        echo "<span>$address  $state $Country $zip</span>";
    	?>
        </div>
      </div>
      <!--   1-->
      <div class="row">
        <div class="col-sm-3 pad-0" > MOBILE </div>
        <div class="col-sm-1 pad-0" > :</div>
        <div class="col-sm-8 pad-0"  >
          <?php
        echo "<div>$mobile</div>";
    	?>
        </div>
      </div>
      <!--2-->
      <div class="row">
        <div class="col-sm-3 pad-0" > PHONE </div>
        <div class="col-sm-1 pad-0" > :</div>
        <div class="col-sm-8 pad-0"  >
          <?php
        echo "<div>$phone</div>";
    	?>
        </div>
      </div>
      <!--3-->
      <div class="row">
        <div class="col-sm-3 pad-0" > EMAIL </div>
        <div class="col-sm-1 pad-0" > :</div>
        <div class="col-sm-8 pad-0"  >
          <?php
        echo "<div>$email</div>";
    	?>
        </div>
      </div>
      <!--4--> 
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <div class="red-title"> Summary </div>
    </div>
    <div class="col-sm-10 line-bottom">
      <div style="padding:15px 0px;"> I am a talented and ambitious individual with a strong aptitude in accounts with an excellent grip over Microsoft Excel. I am keen to start to start my professional career. I am eager to have further training in the field of accounts while working as assistant to an experienced emmployeer in a fast moving working environment </div>
    </div>
  </div>
  <!--comment-->
  
  <div class="row">
    <div class="col-sm-2">
      <div class="red-title"> Academic Qualification </div>
    </div>
    <div class="col-sm-10 line-bottom">
      <div class="row">
        <div class="col-sm-8 ">
          <div style="padding:15px 0px;">
            <div class="row separator">
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$College</div>";
    	?>
              </div>
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$clzpassout</div>";
    	?>
              </div>
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$Qualification</div>";
    	?>
              </div>
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$clzpercentage %</div>";
    	?>
              </div>
            </div>
            <div class="row separator">
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$Inter</div>";
    	?>
              </div>
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$Interpassdeout</div>";
    	?>
              </div>
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$Plus2</div>";
    	?>
              </div>
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$Interpercentage %</div>";
    	?>
              </div>
            </div>
            <div class="row separator">
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$schoolname</div>";
    	?>
              </div>
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$schoolpassout</div>";
    	?>
              </div>
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$schoolboard</div>";
    	?>
              </div>
              <div class="col-sm-6 "  >
                <?php
        echo "<div>$schoolpercentage %</div>";
    	?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <?php
        echo ' <img src="uploads/sample.jpg"> ';
    	?>
        </div>
      </div>
    </div>
  </div>
  
  <!--comment-->
  
  <div class="row">
    <div class="col-sm-2">
      <div class="red-title"> Additional Knowledge </div>
    </div>
    <div class="col-sm-10 line-bottom">
      <div style="padding:15px;">
        <div class="row">
          <div class="col-sm-4">
            <?php
        echo "<div>$ak1 </div>";
    	?>
          </div>
          <div class="col-sm-4">
            <?php
        echo "<div>$ak2</div>";
    	?>
          </div>
          <div class="col-sm-4">
            <?php
        echo "<div>$ak3</div>";
    	?>
          </div>
        </div>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
    </div>
  </div>
  
  <!--comment-->
  
  <div class="row">
    <div class="col-sm-2">
      <div class="red-title"> Acquired Skills </div>
    </div>
    <div class="col-sm-10 line-bottom">
      <div style="padding:15px ;">
        <div class="row">
          <div class="col-sm-4">
            <?php
        echo "<div>$as1 </div>";
    	?>
          </div>
          <div class="col-sm-4">
            <?php
        echo "<div>$as2</div>";
    	?>
          </div>
          <div class="col-sm-4">
            <?php
        echo "<div>$as3</div>";
    	?>
          </div>
        </div>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
    </div>
  </div>
  
  <!--comment-->
  <div class="row">
    <div class="col-sm-2">
      <div class="red-title"> Hobbies and Interests </div>
    </div>
    <div class="col-sm-10 line-bottom">
      <div style="padding:15px ">
        <div class="row">
          <div class="col-sm-4">
            <?php
        echo "<div>$hobbies1 </div>";
    	?>
          </div>
          <div class="col-sm-4">
            <?php
        echo "<div>$hobbies2</div>";
    	?>
          </div>
          <div class="col-sm-4">
            <?php
        echo "<div>$hobbies3</div>";
    	?>
          </div>
        </div>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
    </div>
  </div>
  
  <!--comment--> 
  
</div>
<script src="js/bootstrap.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
print_r($_POST);
print_r($_FILES);
$fname = $_POST['fname'];
?>
