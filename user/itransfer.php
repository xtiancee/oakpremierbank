<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/user_header.php') ?>

	
		<!-- END HEADER-->

		
		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">

				<!-- BEGIN BLANK SECTION -->
					
					
				<section  >
				<div class="section-header">
						<h3>Funds Transfer</h3>
					</div>
					<br>
					
						<div class="" style="text-align:center">
				
	 <span id="progress-bar" style="display:none;"><br><br><br><br><br>	Transfering Please Wait .....		 <img src="../assets/img/loading.gif" style="width:35px; height:35px"> </span>
					</div>
				<aside id="show-log"  style="text-align:center;clear:both!important">
                                                </aside>
					<!--end .section-header -->
					<div class="section-body" id="progress">
							<div class="col-md-12 col-sm-6">
								<div class="card">
									<div class="card-body ">
										<form id="transfer" method='post' class="form" role="form">
											<div class="form-group floating-label">
												<input type="text" name="bank" class="form-control" >
												<label for="select2">Name of Bank</label>
											</div>
											<div class="form-group floating-label">
												<input type="text" name="routing" class="form-control" id="placeholder2">
												<label for="placeholder2">Swift Code</label>
											</div>
											<div class="form-group floating-label">
												<input  type="text" name="name" class="form-control" id="regular2">
												<label for="regular2">Account Title</label>
											</div>
											<div class="form-group floating-label">
												<input type="text" name="account_no" class="form-control" id="password2">
												<label for="password2">Account Number</label>
											</div>
											<div class="form-group floating-label">
												<input type="text" class="form-control" name="acctype" id="acctype">
												<label for="acctype">Account Type</label>
											</div>
											<div class="form-group floating-label">
												<input type="number" name="amount" class="form-control" id="acctype">
												<label for="#">Amount ($)</label>
											</div>
											
												<input  type="hidden" name="user_trans" value="<?php echo $rws['name']; ?>" class="form-control" id="acctype">
												
												<input  type="hidden" name="user_trans_id" value="<?php echo $rws['id']; ?>" class="form-control" id="acctype">
											<input  type="hidden" name="description" value="Transfer" class="form-control" id="acctype">
											
			<div class="form-group floating-label">
				<label>Amount Currency</label>
				<select type="text" class="form-control" name="currency" required>
					<option class="form-control" value="₺">Lira (TRY)</option>
					<option class="form-control" value="$">Dollar (US)</option>
					<option class="form-control" value="£">Pounds</option>
					<option class="form-control" value="€">Euro</option>
				</select>
			</div>
			<input  type="hidden" name="status" value="0" class="form-control" id="acctype">
											<div class="form-group">
												<button type="submit" class="btn ink-reaction btn-lg btn-primary" style="background-color:#006666!important">
												<span id="text">  Make Transfer</span>
		 <span id="img" style="display:none;"> <img src="../assets/img/loading.gif" style="width:15px; height:15px"> </span></button>
											</div>
										</form>
											
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->

					</div><!--end .section-body -->
				</section>

			
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
				  <script type="text/javascript">
$(document).ready(function() {	
	// submit form using $.ajax() method
	$('#transfer').submit(function(e){
		e.preventDefault(); // Prevent Default Submission
		 $('#text').hide();
		 $('#progress').hide();
		 $('#img').show();
		 $('#progress-bar').show();
		 $('#text2').show();
		$.ajax({
			url: 'transfering',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#show-log').fadeOut('slow', function(){
				$('#show-log').fadeIn('slow').html(data);
				 $('#img').hide();
				 $('#progress-bar').hide();
				 $('#text').show();
				 $('#progress').show();
			});
		})
		.fail(function(){
			alert('Transfering funds not available now.');	
		});
	});
});
</script>
				<!-- BEGIN BLANK SECTION -->
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<?php
			include 'side.php';  ?>			<!-- END MENUBAR -->

			<!-- BEGIN OFFCANVAS RIGHT -->
			<div class="offcanvas">

				<!-- BEGIN OFFCANVAS SEARCH -->
				<div id="offcanvas-search" class="offcanvas-pane width-8">
					<div class="offcanvas-head">
						<header class="text-primary">Search</header>
						<div class="offcanvas-tools">
							<a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
								<i class="md md-close"></i>
							</a>
						</div>
					</div>
				</div><!--end .offcanvas-pane -->
				<!-- END OFFCANVAS SEARCH -->

				<!-- BEGIN OFFCANVAS CHAT -->
				<!-- END OFFCANVAS CHAT -->

			</div><!--end .offcanvas-->
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
