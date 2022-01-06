
<?php 
require('../includes/config.php');
include('../classes/phpmailer/mail.php');
include('../classes/user.php');
$user = new User($db);

require_once('../ImageManipulator.php');
//if form has been submitted process it
if($_POST){
	
$fname = $_POST['fname'];	
$lname = $_POST['lname'];	
$other_name = $_POST['other_name'];	
$email = $_POST['email'];	
$password = $_POST['password'];	
$account = $_POST['account'];	
$mobile = $_POST['mobile'];	
$gender = $_POST['gender'];		
$dob = $_POST['dob'];	
$address =  ($_POST['address']);
$work =  ($_POST['work']);
$marry =  ($_POST['marry']);
$currency =  ($_POST['currency']);
@$image=  ($_POST['image']);




if(empty($fname) || empty($lname) || empty($other_name) || empty($email) || empty($password) || empty($account) || empty($mobile) || empty($gender) ||
 empty($dob) || empty($address) || empty($work) || empty($marry) || empty($currency)){

    ?>
	
          <div class='alert alert-warning'style="text-align:center!important;padding:8px!important">
All  fields are required.. 
     
      
    </div>

<?php


}
else {
		$stmt = $db->prepare('SELECT mobile FROM customer WHERE mobile = :mobile');
		$stmt->execute(array(':mobile' => $_POST['mobile']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['mobile'])){
		?>

          <div class='card-content alert-warning' style="text-align:center!important;padding:8px!important">
       <?php echo $mobile ; ?> Already in use, choose another Phone Number
        </div>
     
		<?php
			
		}
else {
	

	if(strlen($_POST['password']) < 3){
		?>

          <div class='card-content white-text alert-warning' style="text-align:center!important;padding:8px!important">
      Password is too short
        </div>
     
      
		<?php
	}

	else {
	
	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	?>
		
          <div class='card-content white-text alert-warning' style="text-align:center!important;padding:8px!important">
       <?php echo $email ; ?> is not a valid email address,  Please enter enter a valid one
        </div>
     
     
		<?php
	 
	} else {
		$stmt = $db->prepare('SELECT email FROM customer WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			?>
	
          <div class='card-content white-text alert-warning'style="text-align:center!important;padding:8px!important">
       <?php echo $email ; ?> Already in use, choose another email
        </div>
     
       
		<?php
		}

	else {

	
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
	
          <div class='card-content white-text alert-warning' style="text-align:center!important;padding:8px!important">
       image allowed is png, jpg and jpeg.
        </div>
     
       
		<?php
   
}
else {
$nameimage = $_POST['lname'].' '.$_POST['fname'];
$extension =strtolower(substr(strrchr($newname1, '.'), 1));
$newfilename= $nameimage .'.'. $extension;

$newname= new_url($newfilename);
$tempfile = $_FILES['image']['tmp_name'];
$manipulator = new ImageManipulator($tempfile);
$newImage = $manipulator->resample(400, 400);
// saving file to uploads folder
$manipulator->save('../user/upload/' .$newname);




$passport = "user/upload/".$newname;
	//if no errors have been created carry on


		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = md5(uniqid(rand(),true));
	

            $name = $_POST['lname'].' '.$_POST['fname'];
			//insert into database with a prepared statement
			
$sql=$db->prepare("insert into customer (name,fname,lname,other_name,email,active,password,account,mobile,gender,dob,address,work,marry,currency,image) 
values(:name,:fname,:lname,:other_name,:email,:active,:password,:account,:mobile,:gender,:dob,:address,:work,:marry,:currency,:image)");
$sql->bindParam(':name',$name,PDO::PARAM_STR, 15);
$sql->bindParam(':fname',$fname,PDO::PARAM_STR, 75);
$sql->bindParam(':lname',$lname,PDO::PARAM_STR, 15);
$sql->bindParam(':other_name',$other_name,PDO::PARAM_STR, 15);
$sql->bindParam(':email',$email,PDO::PARAM_STR, 15);
$sql->bindParam(':active',$activasion,PDO::PARAM_STR, 15);
$sql->bindParam(':password',$hashedpassword,PDO::PARAM_STR);
$sql->bindParam(':account',$account,PDO::PARAM_STR);
$sql->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$sql->bindParam(':gender',$gender,PDO::PARAM_STR);
$sql->bindParam(':dob',$dob,PDO::PARAM_STR);
$sql->bindParam(':address',$address,PDO::PARAM_STR);
$sql->bindParam(':work',$work,PDO::PARAM_STR);
$sql->bindParam(':marry',$marry,PDO::PARAM_STR);
$sql->bindParam(':currency',$currency,PDO::PARAM_STR);
$sql->bindParam(':image',$passport,PDO::PARAM_STR);

if($sql->execute()){
			

			//send email
			$to = $_POST['email'];
			$subject = "Registration Confirmation";
			$body = '
			<body style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
    <div class="mail-contents" style="padding: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin: auto; width: 99%;">
        <div class="container" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;">
            <div class="logo" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                <img src="https://oakpremierbank.com/assets/img/logo.png" alt="logo" width="100px" class="mb-5 mt-2" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; margin-bottom: 3rem; margin-top: 0.5rem;">
            </div>
            <article style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                <h4 class="color-primary" style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; color: #006666;">
                    Account Registration Notification</h4>
                <p style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.2rem; margin-top: 1rem; margin-bottom: 1rem;">
                    Dear '.$name.',</p>
                <p style="padding: 0; margin: 0; box-sizing: border-box; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.2rem; margin-top: 1rem; margin-bottom: 1rem;">
                    You successfully submitted application for an account with us. We will review your application and respond within 24 hour.,
                   
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
		echo 1;
				?>
				
	
      
		<?php
	

	}

}
}
}
}
}
}
}

?>