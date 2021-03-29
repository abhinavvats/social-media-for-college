<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Musica - Music Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <style>
        body{
            background: black;
        }
        </style>
    <!-- ##### Preloader ##### -->
    <!-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

    <?php


if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
  $loggedin=true;
  
}
else{

  $loggedin=false;
}

echo'
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between " id="musicaNav">

                        <!-- Nav brand -->
                        <a href="./index.html" class=""><img src="img/gitalog.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                 
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="upload.php">Upload</a></li>
                                    ';
                                    ?>
                                    <?php
                          if($loggedin){
                                 echo'
                                    
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="signup.php">Sign up</a></li>
                                    ';}


                                    if(!$loggedin){
                                        echo'

                                    <li><a href="logout.php">Logout</a></li>
                                </ul>';}
                                ?>

                                <!-- Social Button
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div> -->

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   
