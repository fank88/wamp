<?php
/**
 * description 
 * @author perfei
 * 2013-6-26 UTF-8
 */
header('Content-type: text/html; charset=utf-8');
$rood = substr(__FILE__, 0,-21);
include_once $rood.'/Tool/HttpClient.class.php';
$web = 'http://program.prouter.com';   //个人物流系统
//perfei 发送短信
$smsInfo = HttpClient::quickPost($web.'/snsInfo/sendNewSms', array("mailNo"=>""));
// print_r($smsInfo);

// /**
//  * 整理全家的信息
//  * @author tyler
//  */
// $pageContents = HttpClient::quickPost('http://program.prouter.com/OrderList/SystemRemark', array("mailNo"=>""));
// // var_dump($pageContents);


?>