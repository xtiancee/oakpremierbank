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
							<div class="col-md-12 col-sm-12">
							<header class="text-color">Edit User</header>
<br/>
								<div class="card">
								<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
									    <div class="panel panel-default">
                                        <div class="panel-body">
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


$sqla = "SELECT * from customer";
		
foreach($db->query($sqla, PDO::FETCH_ASSOC) as $row)

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
		  <form id="register" method="POST" enctype="multipart/form-data">
       
        <div class="modal-body">
          <p>Please, Edit with care.</p>
		  <div class="container-fluid">
		  <div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>First Name</label>
				<input type="text" class="form-control" name="fname" placeholder="eg. Wilson" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Surname</label>
				<input type="text" class="form-control" name="lname" placeholder="eg. Doe" required>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Other Names</label>
				<input type="text" class="form-control" name="other_name" placeholder="eg. Jon" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="eg. jon@example.com" required>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" min-length="8" name="password" placeholder="eg. minimum of 8 characters" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Account Type</label>
				<select type="text" class="form-control" name="account" required>
					<option class="form-control" value="Savings">Savings</option>
					<option class="form-control" value="Current">Current</option>
					<option class="form-control" value="Checking">Checking</option>
				</select>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Phone</label>
				<input type="number" class="form-control" name="mobile" placeholder="eg. +1 917 663 6666" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Gender</label>
				<select type="text" class="form-control" name="gender" required>
					<option class="form-control" value="Male">Male</option>
					<option class="form-control" value="Female">Female</option>
					<option class="form-control" value="Widowed">Other</option>
				</select>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Date of Birth</label>
				<input type="text" class="form-control" name="dob" placeholder="eg. 20/05/1981" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control" name="address" placeholder="eg. 2334 Bronxville, NY, United States of America" required></textarea>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Occupation</label>
				<input type="text" class="form-control" name="work" placeholder="eg. Teacher"  required/>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Marital Status</label>
				<select type="text" class="form-control" name="marry" required>
					<option class="form-control" value="Single">Single</option>
					<option class="form-control" value="Married">Married</option>
					<option class="form-control" value="Widowed">Widowed</option>
					<option class="form-control" value="Divorced">Divorced</option>
				</select>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Account Currency</label>
				<select type="text" class="form-control" name="currency" required>
					<option class="form-control" value="₺">Lira (TRY)</option>
					<option class="form-control" value="$">Dollar (US)</option>
					<option class="form-control" value="£">Pounds</option>
					<option class="form-control" value="€">Euro</option>
				</select>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Upload Photo(Passport)</label>
				<input type="file" class="form-control" name="image"  required/>
			</div>
		    </div>
		    </div>


        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-inverse" data-dismiss="modal">Close</button>
		  
          <button type="submit" class="btn btn-success" name="sign-up"><span id="textw"> Apply </span>
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
