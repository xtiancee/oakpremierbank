<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/admin_header.php');
        $all_user  = $db->query("SELECT count(*) as total  from  customer")->fetchColumn();
		$active_user  = $db->query("SELECT count(*) as total  from  customer where active ='Yes' ")->fetchColumn();
		$inactive_user  = $db->query("SELECT count(*) as total  from  customer where active !='Yes' ")->fetchColumn();
		


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
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-info text-lg"></strong>
											<strong class="text-xl">
											<a href="all-user">
											<?php 
											$number = $all_user;

                                       // english notation (default)
                                        $english_format_number = number_format($number);
											
											
											
											echo $english_format_number;
											;?></strong><br/>
											<span class="opacity-50">Total Registered User's</span>
											</a>
											<div class="stick-bottom-right">
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - REVENUE -->

							<!-- BEGIN ALERT - VISITS -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-info text-lg"></strong>
											<strong class="text-xl"><a href="active-user">
											<?php 
											$number = $active_user;

                                       // english notation (default)
                                        $english_format_number = number_format($number);
											
											
											
											echo $english_format_number;
											;?></strong><br/>
											<span class="opacity-50">Active User's</span>
											</a>
											<div class="stick-bottom-right">
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - VISITS -->

							<!-- BEGIN ALERT - BOUNCE RATES -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-info text-lg"></strong>
											<strong class="text-xl"><a href="inactive-user">
											<?php 
											$number = $inactive_user;

                                       // english notation (default)
                                        $english_format_number = number_format($number);
											
											
											
											echo $english_format_number;
											;?></strong><br/>
											<span class="opacity-50">Inactive User's</span>
											</a>
											<div class="stick-bottom-right">
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - BOUNCE RATES -->

							<!-- BEGIN ALERT - TIME ON SITE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-info text-lg"></strong>
											<strong class="text-xl">$<?php 
											
                                     $sqlc = "SELECT SUM(balance) AS count  FROM customer ";
                                  foreach($db->query($sqlc, PDO::FETCH_ASSOC) as $rwsc) {
				                       $total = $rwsc['count'];
								  }
								$number = $total;

                                       // english notation (default)
                                        $english_format_number = number_format($number);
											
											
											
											echo $english_format_number;
										
											?></strong><br/>
											<span class="opacity-50">Total Money In Bank</span>
											<div class="stick-bottom-right">
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - TIME ON SITE -->

						</div><!--end .row -->
					<div class="text-color">
					
					</div></div><!--end .section-body -->
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

	</body>
</html>
