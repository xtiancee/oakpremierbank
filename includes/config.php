<?php

session_set_cookie_params(31556926); // 31556926 FOr 1year
// Current Session Timeout Value
// Change session timeout
ini_set('session.gc_maxlifetime', 31556926); // 1 Year
ini_set('session.gc_divisor',1);
ob_start();
session_start();


//database credentials
define('DBHOST','localhost');
define('DBUSER','nation');
define('DBPASS','nation');
define('DBNAME','oakpuapl_bank');

//application address
define('DIR','https://oakpremierbank.com/');
define('SITEEMAIL','info@oakpremierbank.com');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

?>
