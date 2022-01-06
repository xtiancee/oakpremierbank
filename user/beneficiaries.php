<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/user_header.php') ?>

		
		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">

				<!-- BEGIN BLANK SECTION -->
				<section>
					<div class="section-header">
						
					</div><!--end .section-header -->
						<div class="section-body">
							<div class="col-md-12 col-sm-6">
								<div class="card">
									<div class="card-body">
    <form action="delete_beneficiary" method="POST">
  
<div class="table-responsive">
<table class="table no-margin">
                        
                        <th> </th>
                        <th>Name</th>
                        <th>Bank</th>
                        <th>Account No</th>
						 <th>Status</th>
                          	            <?php
$sqlben="SELECT * FROM beneficiary1 WHERE sender_id='$session_id' order by id DESC";
 foreach($db->query($sqlben , PDO::FETCH_ASSOC) as $rwsben2 ) {

                            
                            echo "<tr><td><input type='radio' class='form-control' style='font-size:5px!important' name='id' value=".$rwsben2['id'];
                            echo ' checked';
                            echo " /></td>";
                            echo "<td>".$rwsben2['reciever_name']."</td>";
                            echo "<td>".$rwsben2['bank']."</td>";
                            echo "<td>".$rwsben2['account_no']."</td>";
                             echo "<td>".$rwsben2['status']."</td>";
                            echo "</tr>";
                        } ?>
</table>
</div>
<br>
    <table align="center"><tr><td><input type="submit" name="submit_id" value="DELETE BENEFICIARY" class='btn btn-success'/></td></tr></table>
    </form>					</div><!--end .section-body -->
				</section>

				<!-- BEGIN BLANK SECTION -->
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<?php
			include 'side.php';  ?>			<!-- END MENUBAR -->

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

	</body>
</html>
