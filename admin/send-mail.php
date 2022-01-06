<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/admin_header.php');
include('../classes/phpmailer/mail.php');
		
		
		
        $all_user  = $db->query("SELECT count(*) as total  from  customer")->fetchColumn();
		$active_user  = $db->query("SELECT count(*) as total  from  customer where active ='Yes' ")->fetchColumn();
		$inactive_user  = $db->query("SELECT count(*) as total  from  customer where active !='Yes' ")->fetchColumn();
		


		?>

<?php
if (isset($_POST['send'])){

$body = $_POST['body'];

$subject_send = $_POST['subject_send'];
   
$sql4 =  "SELECT email FROM  customer";
 
foreach($db->query($sql4, PDO::FETCH_ASSOC) as $row4) {
	$email5 = $row4['email'];
	 
		$to =  $email5;
				$subject = $_POST['subject_send'];
				
			$body = '
			<body style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
    <div class="mail-contents" style="padding: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin: auto; width: 99%;">
        <div class="container" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;">
            <div class="logo" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                <img src="https://oakpremierbank.com/assets/img/logo.png" alt="logo" width="100px" class="mb-5 mt-2" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin-bottom: 3rem; margin-top: 0.5rem;">
            </div>
            <article style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
         
                <p style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.2rem; margin-top: 1rem; margin-bottom: 1rem;">
                 '. $_POST['body']. ' 
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
			
	}

header('location: send-mail?action=email');
}
else
{
?>
<script>
//alert('ERROR  ');
//window.location. href='music-upload';
</script>
<?php
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
							<header class="text-color">Send Message to all user's (email)</header>
<br/>
								<div class="card">
								<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
									    <div class="panel panel-default">
                                        <div class="panel-body">
										      <?php

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'email'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>Message successfuly sent</h2></div> ";
				}
				?>               
								 <?php 


$sqla = "SELECT * from settings";
		
foreach($db->query($sqla, PDO::FETCH_ASSOC) as $row)

	
	?>
		  <form id="register" method="POST" >
       
        <div class="modal-body">
          <p>Send email message {{emails are pulled from cutomers data}}</p>
		  <div class="container-fluid">
		  <div class="row">
			<div class="col-md-12">
			<div class="form-group">
				<label>Subject</label>
				<input type="text" class="form-control" name="subject_send"  required>
			</div>
			</div>
			<div class="col-md-12">
			<div class="form-group">
				<label>Message</label>
				<textarea class="form-control" name="body"  required></textarea>
			</div>
		    </div>
        </div>
        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-success" name="send"><span id="textw"> Send Message </span>
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
