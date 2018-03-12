<?php
session_start();
include("Navigationlogin.php");
  echo"<h1>ur logdin...</h1>"
if(isset($_POST['username'])&&isset($_POST['password']))
{""}
     else{
            header("Location:signout.php");
            
      
 }
  
?>
