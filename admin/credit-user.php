<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/admin_header.php');

		
		include('../classes/phpmailer/mail.php');
		
        $all_user  = $db->query("SELECT count(*) as total  from  customer")->fetchColumn();
		$active_user  = $db->query("SELECT count(*) as total  from  customer where active ='Yes' ")->fetchColumn();
		$inactive_user  = $db->query("SELECT count(*) as total  from  customer where active !='Yes' ")->fetchColumn();
		


		?>

<?php
if (isset($_POST['update'])){

$account_no = ($_POST['account_no']);
$amount = ($_POST['amount']);
$currency = ($_POST['currency']);
$sql66 = "select * from customer where account_no = '$account_no'";
foreach($db->query($sql66, PDO::FETCH_ASSOC) as $rows)
$reciever_account = $rows['account_no'];
$user_balance = $rows['balance'];
$user_name = $rows['name'];
$user_email = $rows['email'];
$user_currency = $rows['currency'];
$user_id = $rows['id'];


	if ($reciever_account  !== $account_no) {
	   ?>
<script>
alert('Account  not found, please make sure you know the account you are crediting.');
//window.location. href='all-uploads';
</script>
<?php	
}
else {






if(empty($account_no)){

  ?>
<script>
alert('Account No can not be empty');
//window.location. href='all-uploads';
</script>
<?php	
	}
else {
if(empty($amount)){

  ?>
<script>
alert('Amount can not be empty');
//window.location. href='all-uploads';
</script>
<?php	
	}
else {
$fund = $user_balance+$amount;
$sql=$db->prepare("update customer   set balance=:balance where account_no ='$account_no'");
$sql->bindParam(':balance',$fund,PDO::PARAM_STR, 15);

$actions = 'Credit';
$db ->exec("insert into deposit (user_id,name,credit,amount,currency) 
values('$user_id','$user_name','$actions','$amount','$user_currency')");

		
		
if($sql->execute()){
 $time = $date_transfer;
			   $time3 = date("F j Y",strtotime($time));
        $time2 = date("g a",strtotime($time))	;
$dates= date("F j Y g:i A"); 

$accountnos= substr($account_no,0,4)."**";	
$amountformat =  $english_format_number = number_format($amount);
											echo $english_format_number;	
	//send email
	$total = $user_balance+$amount;
	$totalformat = $english_format_number_total = number_format($total);
											echo $english_format_number_total;
			$to = $user_email;
			$subject = "Credit  Confirmation";
			$body = '
			
			
<body style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
    <div class="mail-contents"
        style="padding: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin: auto; width: 99%;">
        <div class="container"
            style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;">
            <div class="article mb-5 mt-2"
                style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin-bottom: 3rem; margin-top: 0.5rem;">
                <div class="logo"
                    style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                    <img src="https://oakpremierbank.com/assets/img/logo.png" alt="logo" width="100px" class="mb-5 mt-2"
                        style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin-bottom: 3rem; margin-top: 0.5rem;">
                </div>

                <p class="color-primary"
                    style="padding: 0; margin: 0; box-sizing: border-box; color: #006666; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.2rem;">
                    Hello '.$user_name.', here is the summary of the latest transaction performed on your account.
                </p>
            </div>
            <div class="information"
                style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                <table class="table table-striped"
                    style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; border-collapse: collapse; width: 100%; margin-bottom: 1rem; background-color: transparent;"
                    width="100%" bgcolor="transparent">
                    <thead
                        style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        <h4 class="color-primary mb-2"
                            style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin-bottom: 0.5rem; color: #006666;">
                            Transaction Details</h4>
                    </thead>
                    <tbody
                        style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        <tr style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; background-color: rgba(0, 0, 0, 0.05);"
                            bgcolor="rgba(0, 0, 0, 0.05)">
                            <th class="color-primary-th text-left"
                                style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; color: hsl(180, 70%, 40%); text-align: left; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top" align="left">
                                Transaction type
                            </th>
                            <td style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top">
                                Credit
                            </td>
                        </tr>
                        <tr
                            style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            <th class="color-primary-th text-left"
                                style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; color: hsl(180, 70%, 40%); text-align: left; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top" align="left">
                                Account Number
                            </th>
                            <td style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top">
                               '.$accountnos.'
                            </td>
                        </tr>
                        <tr style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; background-color: rgba(0, 0, 0, 0.05);"
                            bgcolor="rgba(0, 0, 0, 0.05)">
                            <th class="color-primary-th text-left"
                                style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; color: hsl(180, 70%, 40%); text-align: left; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top" align="left">
                                Transaction Date
                            </th>
                            <td style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top">
                                '.date("l jS \of F Y h:i:s A").'
                            </td>
                        </tr>
                        <tr
                            style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            <th class="color-primary-th text-left"
                                style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; color: hsl(180, 70%, 40%); text-align: left; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top" align="left">
                                Amount
                            </th>
                            <td style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top">
                               '.$currency.''.$amountformat.'
                            </td>
                        </tr>
                        <tr style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; background-color: rgba(0, 0, 0, 0.05);"
                            bgcolor="rgba(0, 0, 0, 0.05)">
                            <th class="color-primary-th text-left"
                                style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; color: hsl(180, 70%, 40%); text-align: left; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top" align="left">
                                Balance
                            </th>
                            <td style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top">
                               '.$user_currency.''.$totalformat.'
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <footer
                style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                This is an auto generated email, please do not try to reply to this email. contact us at
                    contact@oakpremierbank.com
            </footer>
        </div>
    </div>
</body>
			
		
				';
		include('../mailsender.php');
	//echo $body;
header('location: credit-user?action=set');
}
else
{
?>
<script>
alert('ERROR  ');
//window.location. href='all-uploads';
</script>
<?php
}
}
}
}
}


?>
		
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
		
			<div id="content">
				<section>
					<div class="section-body">
						<div class="row">

							<!-- BEGIN ALERT - REVENUE -->
							<div class="col-md-12 col-sm-12">
							<header class="text-color">Easy way, You can Credit Users</header>
<br/>
								<div class="card">
								<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
									    <div class="panel panel-default">
                                        <div class="panel-body">
										      <?php

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'set'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>Credit  successfuly Sent</h2></div> ";
				}
				?>               
								 <?php 


$sqla = "SELECT * from settings";
		
foreach($db->query($sqla, PDO::FETCH_ASSOC) as $row)

	
	?>
		  <form id="register" method="POST" >
       
        <div class="modal-body">
          <p>Credit User By Entering User Account Number.</p>
		  <div class="container-fluid">
		  <div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Enter Account Number</label>
				<input type="text" class="form-control" name="account_no"  required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Enter Amount</label>
				<input type="text" class="form-control" name="amount"  required>
			</div>
			</div>
        </div>
		<div class="row">
			<div class="col-md-12">
			<div class="form-group">
				<label>Credit Account Currency</label>
				<select type="text" class="form-control" name="currency" required>
					<option class="form-control" value="₺">Lira (TRY)</option>
					<option class="form-control" value="$">Dollar (US)</option>
					<option class="form-control" value="£">Pounds</option>
					<option class="form-control" value="€">Euro</option>
				</select>
			</div>
			</div>
			</div>
        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-success" name="update"><span id="textw"> Send Money  </span>
		 <span id="imgw" style="display:none;"> <img src="assets/img/loading.gif" style="width:15px; height:15px"> </span></button>
		  
        </div>
	</form>
                                        </div>
                                    </div>
								</div><!--end .card -->
						</div></div>	</div><!--end .col -->
							<!-- END ALERT - REVENUE -->

							<!-- BEGIN ALERT - VISITS -->
							
							<!-- END ALERT - TIME ON SITE -->

						</div><!--end .row -->
						<div class="text-color">
					
					</div>
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

		<?php include ('side.php'); ?>
			<!-- END MENUBAR -->

			<!-- BEGIN OFFCANVAS RIGHT -->
			<!-- END OFFCANVAS RIGHT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="assets/js/libs/spin.js/spin.min.js"></script>
		<script src="assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="assets/js/libs/moment/moment.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="assets/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="assets/js/libs/flot/curvedLines.js"></script>
		<script src="assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
		<script src="assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="assets/js/libs/d3/d3.min.js"></script>
		<script src="assets/js/libs/d3/d3.v3.js"></script>
		<script src="assets/js/libs/rickshaw/rickshaw.min.js"></script>
		<script src="assets/js/core/source/App.js"></script>
		<script src="assets/js/core/source/AppNavigation.js"></script>
		<script src="assets/js/core/source/AppOffcanvas.js"></script>
		<script src="assets/js/core/source/AppCard.js"></script>
		<script src="assets/js/core/source/AppForm.js"></script>
		<script src="assets/js/core/source/AppNavSearch.js"></script>
		<script src="assets/js/core/source/AppVendor.js"></script>
		<script src="assets/js/core/demo/Demo.js"></script>
		<script src="assets/js/core/demo/DemoDashboard.js"></script>
		<!-- END JAVASCRIPT -->
<!-- Bootstrap Core JavaScript -->
		
<!-- jQuery -->
<script src="assets/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap.min.js"></script>
<script src="assets/js/bootstrap-tagsinput.js"></script>
<!-- Switchery -->

<script src="assets/admin/js/datatable.js" type="text/javascript"></script>
<script src="assets/admin/js/datatables.min.js" type="text/javascript"></script>
<script src="assets/admin/js/datatables.bootstrap.js" type="text/javascript"></script>
<script src="assets/admin/js/table-datatables-buttons.min.js" type="text/javascript"></script>


	</body>
</html>
