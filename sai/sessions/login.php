<?php
ob_start();
session_start();
include("header.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
if( isset($_SESSION['username']) && isset($_SESSION['password']) ){
  if($_SESSION['username']=="abc" && $_SESSION['password']=="123"){
    header("Location:index.php");
    exit;
  }else{
    echo "Please enter correct userid and password";
  }
}

?>
<div class="contact-form">
  <form action="" method="POST" enctype="multipart/form-data">
  
    <div class="single col-md-3">
    Username
    </div>
     <div class="single col-md-3">
      <input type="text"  name="username" class="controler" placeholder="User name" required>
    </div>
     <div class="single col-md-3">
    Password
    </div>
    <div class="single col-md-3">
      <input type="password" name="password" class="controler" placeholder="Password" required>
    </div>
    <div class="form-submit">
      <input type="submit"  value="submit">
    </div>
  </form>
</div>

</body>
</html>
<?php
function storelogin($details){
    if(isset($details['username'])&&isset($details['password'])){
        $username = $details['username'];
        $password = $details['password'];
        if($username!=""&&$password!=""){
            $_SESSION['username'] = $username;   
            $_SESSION['password'] = $password;   
            header("Location:index.php");
        }
    }
}
storelogin($_POST);
?>