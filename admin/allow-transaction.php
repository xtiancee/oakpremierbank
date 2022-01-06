<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/admin_header.php');
		
require_once('../ImageManipulator.php');


		?>
		<?php
		if (isset($_POST['account'])){

$id = ($_POST['id']);


$no = '0';
$sql=$db->prepare("update customer   set transaction_no=:transaction_no  where id = '$id'");
$sql->bindParam(':transaction_no',$no,PDO::PARAM_STR, 15);

if($sql->execute()){

header('location: allow-transaction?action=trans');
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
				if(isset($_GET['action']) && $_GET['action'] == 'trans'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>User Successfully Enabled</h2></div> ";
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
													<th>Transaction Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                              
                          <?php 


$sqla = "SELECT * from customer where  active ='Yes' ";
		
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
	
	
$sqlasetting = "SELECT * from settings";
		
foreach($db->query($sqlasetting, PDO::FETCH_ASSOC) as $rowsetting)

	
	
	
	?>
                                                    <tr>
                                                        <td>  <?php  echo $name;?></td>
														  <td><img src="../<?php  echo $image;?>" style="width:60px;height:60px;"> </td>
                                                        <td><?php echo $email ; ?></td>
													
														
														<td><?php echo $account_no; ?></td>
														<td><?php echo $account; ?></td>
														<td><?php 
														if($row['transaction_no'] > $rowsetting['number_transfer']){
															?>
														<span class="btn btn-danger">Transaction Disabled </span> 
														<div class="clearfix" style="margin-bottom:2px!important"></div>               
            
															<?php
															
														}
														else{
															?>
															
															<span class="btn btn-success">Transaction Active</span>
															
															<?php
															
														}
														
														
														
													

													?></td>
                                                        <td>
													<?php 
														if($row['transaction_no'] > $rowsetting['number_transfer']){
															?>
														  <button   onclick="document.getElementById('account<?php echo $id; ?>').style.display='block'"  class="btn btn-info btn-xs"><i class="fa fa-bank"></i> Enable Now </a> </button>
									
									
		
															<?php
															
														}
														else{
															?>
															
															<span class="btn btn-success">Already Active</span>
															
															<?php
															
														}
														
														
														
													

													?>	
														
														
    							
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
          <h3 class="w3-text-green">Enable User Transaction</h3>
<div class="w3-text-red w3-border w3-border-red w3-padding">Are you sure you want to do this? this is undone <i class="fa fa-ban  "></i></div>

		   
						</div>
				<div class="clearfix" style="margin-bottom:2px!important"></div> 
										<button class="btn btn-danger"><i class="fa fa-remove "></i> Close</button>
		<div class="w3-right w3-padding-16"> <button  name="account" id="<?php echo $id; ?>" class="btn btn-success " ><i class="fa fa-check-circle-o "></i> Yes </button></div>
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
