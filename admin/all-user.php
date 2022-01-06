<body class="menubar-hoverable header-fixed ">

		<?php include ('../layouts/admin_header.php');
		
require_once('../ImageManipulator.php');
if(isset($_POST['delete'])){

$id = $_POST['id'];
$image = ($_POST['image']);

if (file_exists($image)){

unlink($image);
}

$statement=$db->prepare("delete from  customer  where id = :id");
$statement->bindParam(':id',$id);

if($statement->execute()){


header('Location: all-user?action=delete');
	
	} 
	
	
	}
	
if(isset($_POST['admin'])){

$id = $_POST['id'];

$admin = true;

$sql=$db->prepare("update customer   set is_admin=:is_admin  where id = '$id'");
$sql->bindParam(':is_admin',$admin,PDO::PARAM_STR, 15);
if($sql->execute()){


header('Location: all-user?action=admin');
	
	} 
	
	
	}
if(isset($_POST['removeadmin'])){

$id = $_POST['id'];

$admin = false;

$sql=$db->prepare("update customer   set is_admin=:is_admin  where id = '$id'");
$sql->bindParam(':is_admin',$admin,PDO::PARAM_STR, 15);
if($sql->execute()){


header('Location: all-user?action=disadmin');
	
	} 
	
	
	}	
		
		
		
        $all_user  = $db->query("SELECT count(*) as total  from  customer")->fetchColumn();
		$active_user  = $db->query("SELECT count(*) as total  from  customer where active ='Yes' ")->fetchColumn();
		$inactive_user  = $db->query("SELECT count(*) as total  from  customer where active !='Yes' ")->fetchColumn();
		

		?>
		<?php
		if (isset($_POST['avatar'])){

$id = ($_POST['id']);
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


$sql=$db->prepare("update customer   set image=:image  where id = '$id'");
$sql->bindParam(':image',$passport,PDO::PARAM_STR, 15);

if($sql->execute()){

header('location: all-user?action=avatar');
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
							<header class="text-color">All User's</header>
<br/>
								<div class="card">
								<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
									    <div class="panel panel-default">
                                        <div class="panel-body">
										                     <?php

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'delete'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>User Successfully Deleted</h2></div> ";
				}
				?>
											                     <?php

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'admin'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>User Successfully Added as admin</h2></div> ";
				}
				?>
											                     <?php

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'disadmin'){
					
					?>
					
					<div class="alert alert-success alert-dismissable w3-tiny">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php
					
					
					echo " <h2 class='w3-small'>User Successfully Remove as admin</h2></div> ";
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
													<th width="10%">Balance</th>
													<th>Account Number</th>
													<th>Account Type</th>
													<th>Status</th>
                                                    <th>Actions</th>
													 <th>Is Admin</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                              
                          <?php 


$sqla = "SELECT * from customer";
		
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
$is_admin = $row['is_admin'];	
	?>
                                                    <tr>
                                                        <td>  <?php  echo $name;?></td>
														  <td><img src="../<?php  echo $image;?>" style="width:60px;height:60px;"> </td>
                                                        <td><?php echo $email ; ?></td>
													
														<td><?php echo $currency; ?><?php 
														$number = $balance;

                                       // english notation (default)
                                        $english_format_number = number_format($number);
											
											
											
											echo $english_format_number; ?></td>
														<td><?php echo $account_no; ?></td>
														<td><?php echo $account; ?></td>
														<td><?php 
														if($active !=='Yes'){
															?>
														<a href="assign-account"><span class="btn btn-danger">	In Review </span> </a>
														<div class="clearfix" style="margin-bottom:2px!important"></div>               
            
															<a href="assign-account"><span class="btn btn-info">Click to Activate </span> </a>
															<?php
															
														}
														elseif($account_no == Null){
															?>
															<a href="assign-account"><span class="btn btn-danger">	In Review </span> </a>
															<div class="clearfix" style="margin-bottom:2px!important"></div>               
            
															<a href="assign-account"><span class="btn btn-info">Click to Activate </span> </a>
															<?php
															
														}
														else {
															
															?>
															<span class="btn btn-success">Activated</span>
															<?php
															
														}
														
													

													?></td>
                                                        <td>
                                                            <a href="user-edit<?php echo '?id='.$id; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
<div class="clearfix" style="margin-bottom:2px!important"></div>               
          <button   onclick="document.getElementById('avatar<?php echo $id; ?>').style.display='block'"  class="btn btn-success btn-xs"><i class="fa fa-user"></i> Change Avatar </a> </button>
									<div class="clearfix" style="margin-bottom:2px!important"></div> 
															 <button   onclick="document.getElementById('id01<?php echo $id; ?>').style.display='block'"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Remove </button>
									<div class="clearfix" style="margin-bottom:2px!important"></div> 
														 	 
														 <?php
														 if($is_admin == true){
															 
															 ?> 
														 <button   onclick="document.getElementById('removeadmin<?php echo $id; ?>').style.display='block'"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Remove Admin </button>
									
															 
															 <?php
														 }
														 else {
															 
															 ?>
															<button   onclick="document.getElementById('admin<?php echo $id; ?>').style.display='block'"  class="btn btn-warning btn-xs"><i class="fa fa-cogs"></i> Make Admin </button>
									
															 <?php
														 }
														 ?>
														 
												
											
                                                        </td>
														<td>
														 <?php
														 if($is_admin == true){
															 
															 ?> 
														 <span class="btn btn-success btn-xs"><i class="fa fa-check"></i> Yes </span>
									
															 
															 <?php
														 }
														 else {
															 
															 ?>
														
														 <span class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> No </span>
															 <?php
														 }
														 ?>
														
														
														</td>
                                                    </tr>
													
													
  <div id="id01<?php echo $id; ?>" class="w3-modal">
										<div class="w3-modal-content w3-padding">
										<div class="w3-container">
										<span onclick="document.getElementById('id01<?php echo $id; ?>').style.display='none'" class="w3-closebtn"> &times;</span>
									<form  action="" method="post">
										
<h3 class="w3-text-green">Delete User</h3>
<div class="w3-text-red w3-border w3-border-red w3-padding">Are you sure you want to do this? this is undone <i class="fa fa-ban  "></i></div>
										<br>
										<br>
<input type="hidden" name="id" value="<?php echo $id; ?>">		
<input type="hidden" name="image" value="../<?php echo $image; ?>">	
										<button class="btn btn-danger"><i class="fa fa-remove "></i> Close</button>
		<div class="w3-right w3-padding-16"> <button  name="delete" id="<?php echo $id; ?>" class="btn btn-success " ><i class="fa fa-check-circle-o "></i> Yes </button></div>
										</div>
										</div>
										</div>
									</form>	
									<!--- make admin--->
									 <div id="admin<?php echo $id; ?>" class="w3-modal">
										<div class="w3-modal-content w3-padding">
										<div class="w3-container">
										<span onclick="document.getElementById('admin<?php echo $id; ?>').style.display='none'" class="w3-closebtn"> &times;</span>
									<form  action="" method="post">
										
<h3 class="w3-text-green">Make User An Admin</h3>
<div class="w3-text-red w3-border w3-border-red w3-padding">Are you sure you want to do this <i class="fa fa-ban  "></i></div>
										<br>
										<br>
<input type="hidden" name="id" value="<?php echo $id; ?>">		
										<button class="btn btn-danger"><i class="fa fa-remove "></i> Close</button>
		<div class="w3-right w3-padding-16"> <button  name="admin" id="<?php echo $id; ?>" class="btn btn-success " ><i class="fa fa-check-circle-o "></i> Yes </button></div>
										</div>
										</div>
										</div>
									</form>	
									
									
									
									
									 <div id="removeadmin<?php echo $id; ?>" class="w3-modal">
										<div class="w3-modal-content w3-padding">
										<div class="w3-container">
										<span onclick="document.getElementById('removeadmin<?php echo $id; ?>').style.display='none'" class="w3-closebtn"> &times;</span>
									<form  action="" method="post">
										
<h3 class="w3-text-green">Remove Admin</h3>
<div class="w3-text-red w3-border w3-border-red w3-padding">Are you sure you want to do this <i class="fa fa-ban  "></i></div>
										<br>
										<br>
<input type="hidden" name="id" value="<?php echo $id; ?>">		
										<button class="btn btn-danger"><i class="fa fa-remove "></i> Close</button>
		<div class="w3-right w3-padding-16"> <button  name="removeadmin" id="<?php echo $id; ?>" class="btn btn-success " ><i class="fa fa-check-circle-o "></i> Yes </button></div>
										</div>
										</div>
										</div>
									</form>	
<!---Avatar change-->

												
  <div id="avatar<?php echo $id; ?>" class="w3-modal">
										<div class="w3-modal-content w3-padding">
										<div class="w3-container">
										<span onclick="document.getElementById('avatar<?php echo $id; ?>').style.display='none'" class="w3-closebtn"> &times;</span>
									<form  action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $id; ?>">	
								<input type="hidden" name="image_name_post" value="<?php echo $name; ?>">	
						<div class="col-md-12 text-center">
			<div class="form-group text-center" >
				<label>Current Photo</label>
				
				<div class="clearfix" style="margin-bottom:2px!important"></div> 
				<img src="../<?php echo $image; ?>" style="width:100px;height:100px;border-radius:50%;text-align:center!important" class=" text-center">
			</div>
		    </div>
						<div class="col-md-12">
			<div class="form-group">
				<label>Upload Photo</label>
				<input type="file" class="form-control" name="image"  required/>
			</div>
		    </div>
				<div class="clearfix" style="margin-bottom:2px!important"></div> 
										<button class="btn btn-danger"><i class="fa fa-remove "></i> Close</button>
		<div class="w3-right w3-padding-16"> <button  name="avatar" id="<?php echo $id; ?>" class="btn btn-success " ><i class="fa fa-check-circle-o "></i> Update </button></div>
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
