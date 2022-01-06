<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
    	parent::__construct();

    	$this->_db = $db;
    }

	private function get_user_hash($account_no){

		try {
			$stmt = $this->_db->prepare('SELECT password, account_no, id FROM customer WHERE account_no = :account_no AND active="Yes" ');
			$stmt->execute(array('account_no' => $account_no));

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}

	public function login($account_no,$password){

		$row = $this->get_user_hash($account_no);

		if($this->password_verify($password,$row['password']) == 1){

		    $_SESSION['loggedin'] = true;
		    $_SESSION['account_no'] = $row['account_no'];
		    $_SESSION['id'] = $row['id'];
			return true;
		}
	}

	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}

}


?>
