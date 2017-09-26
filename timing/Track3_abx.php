<?php
/**
 * description 10 minute 
 */
header('Content-type: text/html; charset=utf-8');
//不限制时间
ini_set('max_execution_time',0);
set_time_limit(0);


//PROUTER DEX 物流跟踪；
//$url 		= 'http://program.prouter.com/TrackingFactory/dexTracking';
$url 		= 'http://program.prouter.com/TrackingFactory/AbxTracking?fromdays=15&todays=8&limit=abx2';
$tracking 	= curl_get_contents($url);

echo $tracking;
echo '<br><br> TrackingFactory/adxTracking <br><br>';

function curl_get_contents($url)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);            		//设置访问的url地址
	curl_setopt($ch, CURLOPT_HEADER,0);            			//是否显示头部信息
	curl_setopt($ch, CURLOPT_TIMEOUT, 300);           		//设置超时
	// curl_setopt($ch, CURLOPT_REFERER,_REFERER_);        	//设置 referer
//	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);      		//跟踪301
//	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        	//返回结果
	$r = curl_exec($ch);
	curl_close($ch);
	return $r;
}


?>