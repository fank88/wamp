<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14
 * Time: 19:36
 */
header('Content-type: text/html; charset=utf-8');
//不限制时间
ini_set('max_execution_time',0);
set_time_limit(0);

$url 		= 'http://test.program.prouter.com/new.php/DataMigration/Migrate/conMigration';
$tracking 	= curl_get_contents($url);
echo $tracking;
function curl_get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);            		//设置访问的url地址
    curl_setopt($ch, CURLOPT_HEADER,0);            			//是否显示头部信息
    curl_setopt($ch, CURLOPT_TIMEOUT, 300);           		//设置超时
    $r = curl_exec($ch);
    curl_close($ch);
    return $r;
}