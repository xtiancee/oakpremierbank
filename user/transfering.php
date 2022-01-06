<?php 
require_once('../includes/config.php');
//include the user class, pass in the database connection
include('../classes/user.php');
$user = new User($db);
$session_id = 	$_SESSION['id']; 
$sql = "select * from customer where id = '$session_id'";
foreach($db->query($sql, PDO::FETCH_ASSOC) as $rws)
                 $balance= $rws['balance'];
				 $name= $rws['name'];
				 	 $namer= $rws['name'];
				 $email= $rws['email'];
				 $transaction_no= $rws['transaction_no'];
//counter number_format
		//$countsql = "select * from customer where id = '$session_id'";
          //foreach($dbo->query($countsql , PDO::FETCH_ASSOC) as $rowcountsql )
		  
		  


		 	include('../classes/phpmailer/mail.php');
				 
if( $_POST ){
$bank = $_POST['bank'];
$routing = $_POST['routing'];
$name = $_POST['name'];
$account_no = $_POST['account_no'];
$acctype = $_POST['acctype'];
$amount = $_POST['amount'];
$user_trans = $_POST['user_trans'];
$user_trans_id = $_POST['user_trans_id'];
$status = $_POST['status'];
$description = $_POST['description'];
$currency = $_POST['currency'];
if(empty($bank) || empty($routing) || empty($name) || empty($account_no) || empty($acctype) || empty($amount) || empty($currency)){

    ?>
	
          <div class='alert alert-warning'>
 You did not fill out the required fields.. 
     
      
    </div>

<?php


}
else {
if($amount > $rws['balance']) {

 ?>
 <div class='alert alert-warning'>
oops! not enough fund... 
     
      
    </div>


<?php

}
else {
	$sqlasetting = "SELECT * from settings";
		
foreach($db->query($sqlasetting, PDO::FETCH_ASSOC) as $rowsetting)
if($transaction_no > $rowsetting['number_transfer']){
?>
 <div class='alert alert-warning'>
Access Denied (Contact Us)
      
    </div>


<?php
	
	
}
else {
	
	
	
		if(!is_numeric($account_no)){
		?>
 <div class='alert alert-warning'>
Sorry account number must be a number type
      
    </div>


<?php
		
		}
		else {


$sql=$db->prepare("insert into transaction (bank,routing,name,account_no,acctype,amount,user_trans,user_trans_id,status,description,currency) 
values(:bank,:routing,:name,:account_no,:acctype,:amount,:user_trans,:user_trans_id,:status,:description,:currency)");
$sql->bindParam(':bank',$bank,PDO::PARAM_STR, 15);
$sql->bindParam(':routing',$routing,PDO::PARAM_STR, 75);
$sql->bindParam(':name',$name,PDO::PARAM_STR, 15);
$sql->bindParam(':account_no',$account_no,PDO::PARAM_STR, 15);
$sql->bindParam(':acctype',$acctype,PDO::PARAM_STR, 15);
$sql->bindParam(':amount',$amount,PDO::PARAM_STR, 15);
$sql->bindParam(':user_trans',$user_trans,PDO::PARAM_STR);
$sql->bindParam(':user_trans_id',$user_trans_id,PDO::PARAM_STR);
$sql->bindParam(':status',$status,PDO::PARAM_STR);
$sql->bindParam(':description',$description,PDO::PARAM_STR);
$sql->bindParam(':currency',$currency,PDO::PARAM_STR);
$trans = $transaction_no+1;
	$db ->exec("UPDATE customer SET transaction_no = $trans where id = '$session_id'");
$bal = $balance-$amount;
$db->exec("UPDATE customer SET balance=$bal WHERE id='$session_id' ");	


if($sql->execute()){
				
			
			$to =  $email;
				$subject = 'Transfer Notification';
				
			$body = '
			<body style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
    <div class="mail-contents" style="padding: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin: auto; width: 99%;">
        <div class="container" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;">
            <div class="logo" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                <img src="https://oakpremierbank.com/assets/img/logo.png" alt="logo" width="100px" class="mb-5 mt-2" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin-bottom: 3rem; margin-top: 0.5rem;">
            </div>
            <article style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                <h4 class="color-primary" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; color: #006666;">
                    Transfer Notification</h4>
                <p style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.2rem; margin-top: 1rem; margin-bottom: 1rem;">
                        Hi '.$namer.',</p>
                <p style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.2rem; margin-top: 1rem; margin-bottom: 1rem;">
                  Your Transfer is pending , it will be completed in 2 to 3 working days    
                </p>
                <p style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.2rem; margin-top: 1rem; margin-bottom: 1rem;">
                    Thank you for banking with Oak Premier Bank.
                </p>
				<h5>
					This information contained and transmitted by this E-mail is proprietary to Oak Premier Bank and/or its customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privilege, confidential or exempt from a disclosure under applicable law. If this is a forwarded message,the content of this E-mail may not have been sent with the authority of the bank Oak Premier Bank shall not be liable for any mails sent without due authorization or through unauthorized access. If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited. If you have received this communication in error please delete this mail and notify us immediately at info@uniontrustreserve.com
		</h5>
                <p style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.2rem; margin-top: 1rem; margin-bottom: 1rem;">
                    This is an auto generated email, please do not try to reply to this email. contact us at
                    contact@oakpremierbank.com
                </p>
            </article>
        </div>
    </div>
</body>

			
			';
			include('../mailsender.php');
			
			
	?>
 <div class='alert alert-success'>
Transfer was succesfull.. please wait
     
      
    </div>

<script>

setTimeout(' window.location.href = "../user"; ',3000);
	</script>
<?php
			
	}			
	}
}	
}
}
}


 ?>