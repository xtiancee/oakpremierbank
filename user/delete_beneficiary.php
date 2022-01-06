<?php
require_once('../includes/config.php');
//include the user class, pass in the database connection
include('../classes/user.php');
$user = new User($db);
 $session_id = 	$_SESSION['id']; 

if(isset($_REQUEST['submit_id']))
{

$id=$_REQUEST["id"];
$statement=$db->prepare("delete from  beneficiary1  where id = :id");
$statement->bindParam(':id',$id);
if($statement->execute()){
echo '<script>alert("Beneficiary Deleted successfully. ");';
                    echo 'window.location= "beneficiaries";</script>';
                    
}

}
?>