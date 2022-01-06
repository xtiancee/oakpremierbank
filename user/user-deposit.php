<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/user_header.php') ?>

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
							
					<div class="row">

							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-12">
								<div class="">
									<div class="row">
										<div class="col-md-12">
											<div class="card-head">
												<header> Deposit History </header>
											</div><!--end .card-head -->
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
           <th>Date</th>
														<th>Name</th>
														<th>Amount</th>
														<th>Status</th>
            </tr>
			
        </thead>
	<?php
	 $sql="SELECT * FROM deposit WHERE user_id='$session_id'";
	 $count = $db->query("select * FROM deposit WHERE user_id='$session_id' ")->fetchColumn();	
								if ($count != '0'){
foreach($db->query($sql, PDO::FETCH_ASSOC) as $rws_trans) {
	
	
                
              				
$name = $rws_trans['name'];
$amount = $rws_trans['amount'];
$currency = $rws_trans['currency'];
$status = 'Completed';
$date_proccessing = $rws_trans['date'];
$parentTime = strtotime ($rws_trans['date']);
		$later = strtotime("+5 hours", $parentTime);
	
		?>	
									
								
        <tbody>
         	<tr>
														<td><?php echo date("F j, Y ", $later); ?></td>
														<td><?php echo $name ; ?></td>
														<td>
														<?php 
				if($rws_trans['currency'] =='₺')
				{
				echo '₺';
				}
elseif($rws_trans['currency'] =='$')
{
	echo '$';
	
	
}				
	elseif($rws_trans['currency'] =='£')	{
		
		echo '£';
	}			
		elseif($rws_trans['currency'] =='€')	
		{
			echo '€';
		}		
				
				
				; ?><?php echo $amount ; ?></td>
				
					<td><span class="btn btn-success btn-xs">	Completed </span> </td>			
				
				
				</tr>
					
					
				<?php } }else{ ?>
				No Activity Yet
							
                        <?php }  ?>
          </tbody>
       <tfoot>
            <tr>
             <th>Date</th>
														<th>Name</th>
														<th>Amount</th>
															<th>Status</th>
            </tr>
        </tfoot>
    </table>
									
										</div><!--end .table-responsive -->
									</div><!--end .card-body -->
								</div><!--end .card -->
										
											</div><!--end .col -->
										
									</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->


						</div><!--end .row -->
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

		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
		
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
		
	<script>
		$(document).ready(function() {
    $('#example').DataTable();
} );
		</script>
	</body>
</html>
