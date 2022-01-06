<?php
require_once('../includes/config.php');

//include the user class, pass in the database connection
include('../classes/user.php');
include('../classes/phpmailer/mail.php');
$user = new User($db);
if( $_POST ){
	$account_no = $_POST['account_no'];
	$password = $_POST['password'];
	if($user->login($account_no,$password)){ 
		$_SESSION['account_no'] = $account_no; 
		?>
 <div class='alert alert-success' style='margin-top:-30px;!important'>
     
          <div class='card-content black-text'>
   Logging in successful please wait..
        </div>
     
       
    </div>
	<script>

setTimeout(' window.location.href = "../user"; ',3000);
	</script>
	
<?php

		exit;
	} 
	
	
	
	else {
	?>
<div class='card red darken-1' style='font-size:38!important'>
     
          <div class='alert alert-warning'>
<span style='text-align:center!important;color:#000'> Can't log you in </span>
 <br/>
<span style='text-align:center!important;color:#000'><h4> Why </h4></span>
 <br/>
1. Check your Account Number
<br/>
2. Password 
<br/>
3. Your account number have not been issued to you.
        </div>
     
      
    </div>
<?php
	}
}//end if submit
//define page title
?>