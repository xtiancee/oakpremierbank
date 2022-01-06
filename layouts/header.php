<?php
require_once('includes/config.php');
//include the user class, pass in the database connection
include('classes/user.php');
$user = new User($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Open Graph Information -->
    <meta property="og:title" content="Oak Premier Bank">
    <meta property="og:description" content="Oak Premier Bank is a wealth management banking institution Worldwide.">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="Reserve">
    <meta property="og:url" content="www.Uniontrustreserve.com">
    <meta property="og:image" content="assets/img/logo.png" />
    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/blue.css">
    <!-- Font Family and Favicon-->
	
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700,800%7CPoppins:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/logo.png">
    <!-- Title -->
    <title>Oak Premier Bank Inc | Welcome</title>

</head>

<body>
    <!-- Preloader -->
    <div id="loader">
        <div class="laoder-frame">
            <img class="svg-loader" src="assets/img/assets/coming-soon.gif" alt="circle-loader">
        </div>
    </div>
    <div class="homepage">
        <nav class="navbar navbar-head navbar-fixed-top" style="">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <a class="navbar-brand logo-white" href="index"><img src="assets/img/logo.png" style="width:50px;height:50px" alt="logo-white"></a>
                    <a class="navbar-brand logo-dark" href="index"><img src="assets/img/logo.png" style="width:50px;height:50px" alt="site logo"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="local-scroll" href="index#home">HOME</a></li>
                        <li><a class="local-scroll" href="index#about">ABOUT</a></li>
                        <li><a class="local-scroll" href="index#banking">BANKING</a></li>
						<li><a class="local-scroll" href="index#investing">INVESTING</a></li>
						<li><a class="local-scroll" href="index#services">TRADING</a></li>
                        <li><a class="local-scroll" href="index#contact-field">CONTACT</a></li>
                         <li><a class="local-scroll" href="terms_of_contract">TERMS OF CONTRACT</a></li>
						 <!--<li><a class="local-scroll" href="https://bitcoin-usa.oakpremierbank.com/">ESCROW</a></li>-->
						 <?php
		   if(!$user->is_logged_in()){ 
		   ?>
		     <li><a  data-toggle="modal" href="#apply"><i class="fa fa-registered"></i> Register </a></li>
		   
                        <li><a href="login/internet-banking" ><i class="fa fa-lock"></i> Login<b></b></a>
		   <?php
		   }
		   
		   ?>
		    <?php
		   if($user->is_logged_in()){ 
		   $session_id = 	$_SESSION['id']; 
$sql = "select * from customer where id = '$session_id'";
foreach($db->query($sql, PDO::FETCH_ASSOC) as $rws)
                 $balance= $rws['balance'];
				 $name= $rws['name'];
		   ?>
		 		  
                        <li><a href="user" ><i class="fa fa-user"></i> <?php echo $rws['name']; ?><b></b></a>
		   <?php
		   }
		   
		   ?>

                        </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>