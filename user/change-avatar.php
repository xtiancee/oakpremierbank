<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/user_header.php') ?>
<?php
require_once('../ImageManipulator.php');
		if (isset($_POST['avatar'])){

$image_name_post = ($_POST['image_name_post']);

	
function new_url($segment) {

$segment = preg_replace('/[^A-Za-z0-9\.]/',' ', $segment);
$segment = preg_replace('/\s+/',' ',$segment);
$segment = trim($segment);
return str_replace(' ', '-', $segment);
}



$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name = addslashes($_FILES['image']['name']);
$image_size = getimagesize($_FILES['image']['tmp_name']);



$newname1= $_FILES['image']['name'];
$allowed = array('png','jpg','jpeg','JPG','JPEG','PNG');
$ext = pathinfo($newname1, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed)) 
{

		?>
<script>
alert('  image allowed is png, jpg and jpeg. ');
//window.location. href='all-uploads';
</script>
<?php
   
}
else {
$extension =strtolower(substr(strrchr($newname1, '.'), 1));
$newfilename= $image_name_post .'.'. $extension;

$newname= new_url($newfilename);
$tempfile = $_FILES['image']['tmp_name'];
$manipulator = new ImageManipulator($tempfile);
$newImage = $manipulator->resample(400, 400);
// saving file to uploads folder
$manipulator->save('../user/upload/' .$newname);




$passport = "user/upload/".$newname;


$sql=$db->prepare("update customer   set image=:image  where id = '$session_id'");
$sql->bindParam(':image',$passport,PDO::PARAM_STR, 15);

if($sql->execute()){

header('location: change-avatar?action=avatar');
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



		?>
		<!-- END HEADER-->

		
		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

		<div id="content">
				<section>
					<div class="section-body">
						<div class="row">

							<!-- BEGIN ALERT - REVENUE -->
							<div class="col-md-12 col-sm-12">
							<header class="text-color">Change Avatar</header>
<br/>
								<div class="card">
								<div class="card-body no-padding">
										<div class="alert alert-callout alert-warning no-margin">
									    <div class="panel panel-default">
                                        <div class="panel-body">
										<?php

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'avatar'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>Avatar  successfuly Changed</h2></div> ";
				}
				?>                                  
								 <?php 


$sqla = "SELECT * from customer where id = '$session_id'";
		
foreach($db->query($sqla, PDO::FETCH_ASSOC) as $row)

	
	?>
		 <form  action="" method="post" enctype="multipart/form-data">	
								<input type="hidden" name="image_name_post" value="<?php echo $row['name']; ?>">	
						<div class="col-md-12 text-center">
			<div class="form-group text-center" >
				<label>Current Photo</label>
				
				<div class="clearfix" style="margin-bottom:2px!important"></div> 
				<img src="../<?php echo $row['image']; ?>" style="width:100px;height:100px;border-radius:50%;text-align:center!important" class=" text-center">
			</div>
		    </div>
						<div class="col-md-12">
			<div class="form-group">
				<label>Upload Photo</label>
				<input type="file" class="form-control" name="image"  required/>
			</div>
		    </div>
						
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-success" name="avatar"><span id="textw"> Update </span>
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
