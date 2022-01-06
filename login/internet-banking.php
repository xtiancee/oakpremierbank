<?php
require_once('../includes/config.php');
//include the user class, pass in the database connection
include('../classes/user.php');
$user = new User($db);
if( $user->is_logged_in() ){ header('Location: ../user'); }
?>
<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Oak Premier Bank | Login</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="../assets/css/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/themify-icons.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../assets/css/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/style.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/js/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="inverse-mode" style="background-image: url(../assets/img/backgrounds/bg-dark2.jpg); background-size:cover; background-attachment:fixed;">
	<!-- BEGIN #page-container -->
	<div id="page-container">
		<!-- BEGIN login -->
        <div class="login"><img src="../assets/img/logo.png" height="60" width="150" style="padding: 10px 10px; ">
		<b style="font-size:2.0em; color:#fff;"></b>
			<!-- BEGIN login-cover -->
			<div class="login-cover"></div>
			<!-- END login-cover -->
			<!-- BEGIN login-content -->
			<div class="login-content">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 				<!-- BEGIN login-brand -->
												<aside id="show-log">
                                                </aside>
			
				<div class="login-brand">
					<a href="#"><span class=" fa fa-lock logo"></i></span> Internet Banking</a>
				</div>
				<!-- END login-brand -->
				<!-- BEGIN login-desc -->
				<div class="login-desc">
					Log in securely into your account
				</div>
		<form id="login" method="POST">
					<div class="form-group">
						<label class="control-label">Account No</label>
						<input type="text" name="account_no" class="form-control" placeholder="Enter your account no" autofocus />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter password" value="" />
					</div>


					<button type="submit" name="login" class="btn btn-success" style="background-color:#006666!important"><span id="text"> Sign In </span>
		 <span id="img" style="display:none;"> <img src="../assets/img/loading.gif" style="width:15px; height:15px"> </span> </button>
				</form>
				
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
				  <script type="text/javascript">
$(document).ready(function() {	
	// submit form using $.ajax() method
	$('#login').submit(function(e){
		e.preventDefault(); // Prevent Default Submission
		 $('#text').hide();
		 $('#img').show();
		 $('#text2').show();
		$.ajax({
			url: '../auth/login',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#show-log').fadeOut('slow', function(){
				$('#show-log').fadeIn('slow').html(data);
				 $('#img').hide();
				 $('#text').show();
			});
		})
		.fail(function(){
			alert('Logging in not Available, please contact Bank.');	
		});
	});
});
</script>
				<!-- END login-form --><br><br><br><br><br><br><br><br><br><br><br>
				<footer class="">
		&copy; <script>document.write(new Date().getFullYear())</script> Oak Premier Bank. All Rights Reserved.

		</footer>
			</div>
			<!-- END login-content -->
        </div>
        <!-- END login -->

		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="ti-arrow-up"></i></a>
		<!-- END btn-scroll-top -->

	</div>
	<!-- END #page-container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/js/jquery-1.9.1.min.js"></script>
	<script src="../assets/js/jquery-migrate-1.1.0.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.slimscroll.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>

</body>
</html>
