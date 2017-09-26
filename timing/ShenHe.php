<?php
/**
 * description 30 minute 
 * @author perfei
 * 2015-2-15 UTF-8
 */
header('Content-type: text/html; charset=utf-8');
//不限制时间
ini_set('max_execution_time',0);
set_time_limit(0);
// 白名单审核
$url='http://program.prouter.com/index.php/Timing/auditWhiteList';
$html = curl_get_contents($url);
echo $html;

function curl_get_contents($url)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);            //设置访问的url地址
	//curl_setopt($ch,CURLOPT_HEADER,1);            //是否显示头部信息
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);           //设置超时
	// curl_setopt($ch, CURLOPT_USERAGENT, _USERAGENT_);   //用户访问代理 User-Agent
	// curl_setopt($ch, CURLOPT_REFERER,_REFERER_);        //设置 referer
	//curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);      //跟踪301
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        //返回结果
	$r = curl_exec($ch);
	curl_close($ch);
	return $r;
}


?>