<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/admin_header.php');
		

include('../classes/phpmailer/mail.php');

		?>
		<?php
		$sqlasetting = "SELECT * from settings";
		
foreach($db->query($sqlasetting, PDO::FETCH_ASSOC) as $rowsetting)

		if (isset($_POST['account'])){

$id = ($_POST['id']);
$account_no = ($_POST['account_no']);
$name = ($_POST['name']);
$email = ($_POST['email']);
if(strlen($_POST['account_no']) != $rowsetting['bank_digit']){
?>
<script>
alert('Invalid Digit Number, Number Must Be "<?php echo $rowsetting['bank_digit'] ?>" Digits');
//window.location. href='all-uploads';
</script>
<?php
	
}
else {
	
	
$sql5 = $db->prepare("SELECT * from customer where account_no = :account_no");
$sql5->execute(array(':account_no' => $account_no));
$row = $sql5->fetch(PDO::FETCH_ASSOC);
	if ($row > 0) {
	  
?>
<script>
alert('Sorry this account number " <?php echo $account_no ?> "  already taken ');
//window.location. href='all-uploads';
</script>
<?php
}
	else {
		if(!is_numeric($account_no)){
			
		?>
<script>
alert('Sorry account number must be a number type');
//window.location. href='all-uploads';
</script>
<?php	
		}
		else {
			$act = 'Yes';
$sql=$db->prepare("update customer   set account_no=:account_no ,active=:active where id = '$id'");
$sql->bindParam(':account_no',$account_no,PDO::PARAM_STR, 15);
$sql->bindParam(':active',$act,PDO::PARAM_STR, 15);

if($sql->execute()){
	
	
			//send email
			$to = $_POST['email'];
			$subject = "Account Number  Confirmation";
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
                    Hello '.$name.', here is your Account Number.
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
                            Account Details</h4>
                    </thead>
                    <tbody
                        style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        <tr style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; background-color: rgba(0, 0, 0, 0.05);"
                            bgcolor="rgba(0, 0, 0, 0.05)">
                            <th class="color-primary-th text-left"
                                style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; color: hsl(180, 70%, 40%); text-align: left; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top" align="left">
                              Name
                            </th>
                            <td style="margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; padding: 0.75rem; vertical-align: top; border-top: 1px solid #dee2e6;"
                                valign="top">
                                '.$name.'
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
                              '.$account_no.'
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
				 <p style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.2rem; margin-top: 1rem; margin-bottom: 1rem;">
            Please <a href="login/internet-banking" class="color-primary" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; text-decoration: none; color: #006666;">Click
                        here to login to your account</a>.
                </p>
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
		
	
	

header('location: assign-account?action=assign');
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
							<header class="text-color">Assign Account Number to User's</header>
<br/>
								<div class="card">
								<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
									    <div class="panel panel-default">
                                        <div class="panel-body">
										                     <?php

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'assign'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>Account Number Successfully Assigned</h2></div> ";
				}
				?>
					  <?php

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'edit'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>User Successfully Edited</h2></div> ";
				}
				?>			

 <?php

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'avatar'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>User Avatar Successfully Updated</h2></div> ";
				}
				?>								
                                               <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
													 <th width="20%">Image</th>
                                                    <th width="20%">email</th>
								
													<th>Account Number</th>
													<th>Account Type</th>
													<th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                              
                          <?php 


$sqla = "SELECT * from customer ";
		
foreach($db->query($sqla, PDO::FETCH_ASSOC) as $row){

$id = $row['id'];
		$name = $row['name'];
 $email = ($row['email']);
$balance = $row['balance'];
$account_no = $row['account_no'];
$account = $row['account'];
$active = $row['active'];
$currency = $row['currency'];
$image = $row['image'];
	
	?>
                                                    <tr>
                                                        <td>  <?php  echo $name;?></td>
														  <td><img src="../<?php  echo $image;?>" style="width:60px;height:60px;"> </td>
                                                        <td><?php echo $email ; ?></td>
													
														
														<td><?php echo $account_no; ?></td>
														<td><?php echo $account; ?></td>
														<td><?php 
														if($active !=='Yes'){
															?>
														<a href="assign-account"><span class="btn btn-danger">	In Review </span> </a>
														<div class="clearfix" style="margin-bottom:2px!important"></div>               
            
															<?php
															
														}
														elseif($account_no == Null){
															?>
															<a href="assign-account"><span class="btn btn-danger">	In Review </span> </a>
															<div class="clearfix" style="margin-bottom:2px!important"></div>               
            
															
															<?php
															
														}
														
														else {
															
															?>
															<span class="btn btn-success">Activated</span>
															<?php
															
														}
														
													

													?></td>
                                                        <td>
      <button   onclick="document.getElementById('account<?php echo $id; ?>').style.display='block'"  class="btn btn-info btn-xs"><i class="fa fa-bank"></i> Activate Now </a> </button>
									<div class="clearfix" style="margin-bottom:2px!important"></div> 
													
                                                        </td>
                                                    </tr>
													
													

<!---Avatar change-->

												
  <div id="account<?php echo $id; ?>" class="w3-modal">
										<div class="w3-modal-content w3-padding">
										<div class="w3-container">
										<span onclick="document.getElementById('account<?php echo $id; ?>').style.display='none'" class="w3-closebtn"> &times;</span>
									<form  action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $id; ?>">	
						 <div class="modal-body">
          <p>Please, Assign Unqiue Digit number to user.</p>
		  <div class="container-fluid">
		  <div class="row">
			<div class="col-md-12">
			<div class="form-group">
				<label>Enter Account Number</label>
				<input type="text" class="form-control" name="account_no"  required>
				
				<input type="hidden" class="form-control" name="name"  value="<?php echo $name; ?>" required>
				
				<input type="hidden" class="form-control" name="email"  value="<?php echo $email; ?>" required>
			</div>
			</div>
			
		   
						</div>
				<div class="clearfix" style="margin-bottom:2px!important"></div> 
										<button class="btn btn-danger"><i class="fa fa-remove "></i> Close</button>
		<div class="w3-right w3-padding-16"> <button  name="account" id="<?php echo $id; ?>" class="btn btn-success " ><i class="fa fa-check-circle-o "></i> Save </button></div>
										</div>
										</div>
										</div>
									</form>	


                                               <?php } ?>
                                                </tbody>
                                            </table>
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
