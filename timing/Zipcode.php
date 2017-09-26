
<?php

header('Content-type: text/html; charset=utf-8');

include_once $_SERVER["DOCUMENT_ROOT"].'/Tool/HttpClient.class.php';

$web = 'http://program.prouter.com';   //个人物流系统
$smsInfo = HttpClient::quickPost($web.'/Timing/checkZipcode', array("mailNo"=>""));

exit;

?>