<?php 


include("menu.php"); 

login($_POST);
 
  ?>

<br>
<div class="container">
  <form method="post" enctype="multipart/form-data">
    <div class="row">
      <div  class="col-xs-12 col-sm-4">Username :
        <input type="text" name="username" id="" required>
      </div>
      <div  class="col-xs-12 col-sm-4">Password :
        <input type="password" name="password" id="" required >
        <br>
      </div>
      <div  class="col-xs-12 col-sm-4">
        <input type="submit" value="Submit">
      </div>
    </div>
  </form>
</div>
