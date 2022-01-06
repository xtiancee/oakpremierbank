<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/admin_header.php');
	$get_id = $_GET['id'];
		
		
		
        $all_user  = $db->query("SELECT count(*) as total  from  customer")->fetchColumn();
		$active_user  = $db->query("SELECT count(*) as total  from  customer where active ='Yes' ")->fetchColumn();
		$inactive_user  = $db->query("SELECT count(*) as total  from  customer where active !='Yes' ")->fetchColumn();
		


		?>

<?php
if (isset($_POST['update'])){

$fname = ($_POST['fname']);
$lname = ($_POST['lname']);
$other_name = ($_POST['other_name']);
$email = ($_POST['email']);
$currency = ($_POST['currency']);
$account = ($_POST['account']);
$mobile = ($_POST['mobile']);
$gender = ($_POST['gender']);
$dob = ($_POST['dob']);
$address = ($_POST['address']);
$work = ($_POST['work']);
$marry = ($_POST['marry']);

$sql=$db->prepare("update customer   set fname=:fname ,lname=:lname,other_name=:other_name ,email=:email ,currency=:currency 
,account=:account,mobile=:mobile,gender=:gender, dob=:dob, address=:address, work=:work ,
 marry=:marry where id = '$get_id'");
$sql->bindParam(':fname',$fname,PDO::PARAM_STR, 15);
$sql->bindParam(':lname',$lname,PDO::PARAM_STR, 32);
$sql->bindParam(':other_name',$other_name,PDO::PARAM_STR, 32);
$sql->bindParam(':email',$email,PDO::PARAM_STR, 32);
$sql->bindParam(':currency',$currency,PDO::PARAM_STR, 32);
$sql->bindParam(':account',$account,PDO::PARAM_STR);
$sql->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$sql->bindParam(':gender',$gender,PDO::PARAM_STR);
$sql->bindParam(':dob',$dob,PDO::PARAM_STR);
$sql->bindParam(':address',$address,PDO::PARAM_STR);
$sql->bindParam(':work',$work,PDO::PARAM_STR);
$sql->bindParam(':marry',$marry,PDO::PARAM_STR);
if($sql->execute()){

header('location: all-user?action=edit');
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
							<header class="text-color">Edit User</header>
<br/>
								<div class="card">
								<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
									    <div class="panel panel-default">
                                        <div class="panel-body">
										                   
								 <?php 


$sqla = "SELECT * from customer where id = '$get_id'";
		
foreach($db->query($sqla, PDO::FETCH_ASSOC) as $row)

	
	?>
		  <form id="register" method="POST" >
       
        <div class="modal-body">
          <p>Please, Edit with care.</p>
		  <div class="container-fluid">
		  <div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>First Name</label>
				<input type="text" class="form-control" name="fname" value="<?php echo $row['fname'] ; ?>" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Surname</label>
				<input type="text" class="form-control" name="lname" value="<?php echo $row['lname'] ; ?>" required>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Other Names</label>
				<input type="text" class="form-control" name="other_name" value="<?php echo $row['other_name'] ; ?>" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" value="<?php echo $row['email'] ; ?>" required>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Account Currency</label>
				<select type="text" class="form-control" name="currency" required>
				<option class="form-control" value="<?php echo $row['currency'] ; ?>">
				
				<?php 
				if($row['currency'] =='₺')
				{
				echo 'Lira (TRY)';
				}
elseif($row['currency'] =='$')
{
	echo 'Dollar (US)';
	
	
}				
	elseif($row['currency'] =='£')	{
		
		echo 'Pounds';
	}			
		elseif($row['currency'] =='€')	
		{
			echo 'Euro';
		}		
				
				
				; ?>
				</option>
					<option class="form-control" value="₺">Lira (TRY)</option>
					<option class="form-control" value="$">Dollar (US)</option>
					<option class="form-control" value="£">Pounds</option>
					<option class="form-control" value="€">Euro</option>
				</select>
			</div>
			</div>
			
			<div class="col-md-6">
			<div class="form-group">
				<label>Account Type</label>
				<select type="text" class="form-control" name="account" required>
				
				<option class="form-control" value="<?php echo $row['account'] ; ?>"><?php echo $row['account'] ; ?></option>
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
				<input type="number" class="form-control" name="mobile" value="<?php echo $row['mobile'] ; ?>" required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Gender</label>
				<select type="text" class="form-control" name="gender" required>
				<option class="form-control" value="<?php echo $row['gender'] ; ?>"><?php echo $row['gender'] ; ?></option>
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
				<input type="text" class="form-control" name="dob" value="<?php echo $row['dob'] ; ?>"  required>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control" name="address" required><?php echo $row['address'] ; ?></textarea>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label>Occupation</label>
				<input type="text" class="form-control" name="work"  value="<?php echo $row['work'] ; ?>"  required/>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label>Marital Status</label>
				<select type="text" class="form-control" name="marry" required>
				<option class="form-control" value="<?php echo $row['marry'] ; ?>"><?php echo $row['marry'] ; ?></option>
					<option class="form-control" value="Single">Single</option>
					<option class="form-control" value="Married">Married</option>
					<option class="form-control" value="Widowed">Widowed</option>
					<option class="form-control" value="Divorced">Divorced</option>
				</select>
			</div>
		    </div>
		    </div>
			<div class="row">
			<div class="col-md-12">
			<div class="form-group">
				<label>Account No</label>
				<input type="text" class="form-control"  value="<?php echo $row['account_no'] ; ?>"  readonly>
			</div>
			</div>
			</div>
<div class="row">
			<div class="col-md-12">
			<div class="form-group">
				<label>Balance</label> 
				<input type="text" class="form-control"  value="<?php 
				$number = $row['balance'] ;

                                       // english notation (default)
                                        $english_format_number = number_format($number);
											
											
											
											echo $english_format_number; ?>
				"  readonly>
			</div>
			</div>
			</div>
        </div>
        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-success" name="update"><span id="textw"> SAVE </span>
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
