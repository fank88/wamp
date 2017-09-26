<?php
/**
 * description 
 * @author perfei
 * 2013-6-26 UTF-8
 */
header('Content-type: text/html; charset=utf-8');
$rood = substr(__FILE__, 0,-23);
include_once $rood.'/Tool/HttpClient.class.php';
$web = 'http://program.prouter.com';   //个人物流系统
//不限制时间
ini_set('max_execution_time',0);
set_time_limit(0);


//签收
$rs = HttpClient::quickPost('http://api.prouter.com/Taobao/Timing/qs');		//包裹
print_r($rs);
//入库
$rs = HttpClient::quickPost('http://api.prouter.com/Taobao/Timing/rkcg');		//包裹
print_r($rs);
// 入库异常
HttpClient::quickPost('http://api.prouter.com/Taobao/Timing/rksb');		//包裹


//漏掉的入库包裹
echo '处理漏包';
HttpClient::quickPost('http://program.prouter.com/Timing/otherProduct');	
// HttpClient::quickPost('http://api.prouter.com/Taobao/Timing/ck', array("mailNo"=>""));

//
// HttpClient::quickPost('http://api.prouter.com/Taobao/Timing/qs', array("mailNo"=>""));		//包裹

//订单审核的一些计划任务
//
//新的物流跟踪；
HttpClient::quickPost('http://api.prouter.com/Taobao/Timing/wlzz');

HttpClient::quickPost($web.'/Timing/Order', array("mailNo"=>""));  		//订单
echo '处理订单';
//出库
HttpClient::quickPost('http://api.prouter.com/Taobao/Timing/ck');		//出库成功

?>