<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SAI KUMAR</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--enable mobile device-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="shortcut icon" href="../images/s.png" type="image/x-icon"/>
    <!--goolge fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <!--fontawesome css-->
    <link rel="stylesheet" href="support/font-awesome.min.css">
    <!--bootstrap css-->
    <link rel="stylesheet" href="support/bootstrap.min.css">
    <!--owl-carousel css-->
    <link rel="stylesheet" href="support/owl.carousel.min.css">
    <!--magnific-popup css-->
    <link rel="stylesheet" href="support/magnific-popup.css">
    <!--typed js-->
    <link rel="stylesheet" href="support/typed.css">
    <!--main css-->
    <link rel="stylesheet" href="support/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="support/responsive.css">
</head>
    <body>
    <!-- Start preloader -->
    <div class="preloader">
        <div class="status">
            <div class="status-mes"></div>
        </div>
    </div><!--End preloader-->
    
    <body>
    <!--Start header area-->
    <header class="site-header">
        <nav id="site-navigation" class="main-navigation navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index.html">
                                <img src="support/logo.png" class="bglogosticky" alt="site logo">
                                <img src="support/logo2.png" class="bglogo" alt="site logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10">   
                        <div class="collapse navbar-collapse" id="main-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">about</a></li>
                              
                              
                                <li><a href="#contact">Contact</a></li>
                                <?php
                                if( isset($_SESSION['username']) && isset($_SESSION['password']) ){
                                    if($_SESSION['username']=="abc" && $_SESSION['password']=="123"){
                                        ?>
                                        <li><a href="logout.php">Logout</a></li>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <li><a href="login.php">Login</a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </nav>
    </header><!--End header area-->
     <!-- Start welcome area-->
    <div class="mid-header-area" id="home">
        <div class="welcome-overlay"></div>
        <div class="mid-table">
            <div class="mid-table-cell">
                <div class="mid-content">
                    <div class="cd-headline clip">
                        <span></span>
                        <span class="cd-words-wrapper">
                        <b class="is-visible">hi, i'm designer.</b>
                         <b>My Name is SAI KUMAR</b>
                        <b> i live in Vizag.</b>
                        <b>bootstrap Beginner.</b>
                        </span>
                    </div>
                    <h3>awesome responsive bootstrap template</h3>
                </div>       
            </div>
        </div>
    </div><!--End welcome area-->
    <!--main js-->
    <script src="support/jquery-1.12.4.min.js"></script>
    <!--bootstrap js-->
    <script src="support/bootstrap.min.js"></script>
    <!--owl-carousel js-->
    <script src="support/owl.carousel.min.js"></script>
    <!--magnific popup js-->
    <script src="support/jquery.magnific-popup.min.js"></script>
    <!--mixitup js-->
    <script src="support/mixitup.min.js"></script>
    <!--script js-->
    <script src="support/typed.js"></script>
    <!--parallax js-->
    <script src="support/jquery.parallax-1.1.3.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
    <!--custom js-->
    <script src="support/custom.js"></script>
