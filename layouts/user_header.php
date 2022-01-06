<?php
require_once('../includes/config.php');
//include the user class, pass in the database connection
include('../classes/user.php');
$user = new User($db);

if(!$user->is_logged_in()){ header('Location: ../login/internet-banking'); } 
$session_id = 	$_SESSION['id']; 
$sql = "select * from customer where id = '$session_id'";
foreach($db->query($sql, PDO::FETCH_ASSOC) as $rws)
                 $balance= $rws['balance'];
				 $name= $rws['name'];
				  
 
if (!empty($_SERVER['HTTP_CLIENT_IP'])){

$ip=$_SERVER['HTTP_CLIENT_IP'];

//Is it a proxy address

}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];

}else{

$ip=$_SERVER['REMOTE_ADDR'];

}

 
                
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Open Graph Information -->
    <meta property="og:title" content="Oak Premier Bank">
    <meta property="og:description" content="Oak Premier Bank is a wealth management banking institution in Istanbul, Turkey.">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="Reserve">
    <meta property="og:url" content="www.Uniontrustreserve.com">
    <meta property="og:image" content="assets/img/logo.png" />
    <!-- CSS links -->
   <!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/libs/morris/morris.core.css?1420463396" />
		<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />

    <!-- Font Family and Favicon-->
	<style>
	.text-color{
		color:#fff!important
	}
	
	</style>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700,800%7CPoppins:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/logo.png"><!-- Title -->
    <title>Oak Premier Bank Inc | Welcome <?php echo $name; ?></title>



</head>
<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="../user">
									<span class="text-lg text-bold "style="color:#006666!important">Oak Premier Bank</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="../<?php echo $rws['image'] ?>" alt="<?php echo $rws['name'] ?>" />
								<span class="profile-info">
								
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<?php
								if($rws['is_admin'] == true) {
									?>
								<li><a href="../admin/management"><i class="fa fa-fw fa-cogs text-danger"></i> Management</a></li>
									<?php
								}
								?>
								<li><a href="logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->