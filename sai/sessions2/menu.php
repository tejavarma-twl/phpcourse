<?php 




include("header.php"); ?>
<?php include("config.php"); 

login($_POST);

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container"><a class="navbar-brand" href="index.php"><img src="logo.png" width="150" height="30" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        					<?php
		if(isset($_SESSION['username']) && isset($_SESSION['password']) )
		{
			if($_SESSION['username']!="" && $_SESSION['password']!="")
			{
			     
								?>
        <li class="nav-item"><a class="nav-link" href="logout.php">Log Out1</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Log In1</a></li>
        						<?php
			}	
			
			else
		{
						?>
        <li class="nav-item"><a class="nav-link" href="login.php">Log In2</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Log Out2</a></li>
       							 <?php
		}
			
			
		}	
		else
		{
									?>
        <li class="nav-item"><a class="nav-link" href="login.php">Log In3</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Log Out3</a></li>
        							<?php
		}
									?>
                                    
                                    
                                    
                                    
                                    
        							<?php
        if(isset($_SESSION['username']) && isset($_SESSION['password']) )
		{
			if($_SESSION['username']=="" && $_SESSION['password']=="")
			{
			 						?>
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
       								 <?php
				
			}	
		}	
       								 ?>
        
        <!-- <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>-->
      </ul>
    </div>
  </div>
  <div class="clearfix"></div>
</nav>
<div class="clearfix"></div>
