<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/11
 * Time: 9:58
 *lazada 退货报表
 * description 1 day
 */
header('Content-type: text/html; charset=utf-8');
//不限制时间
ini_set('max_execution_time',0);
set_time_limit(0);
echo '<br><br> transformdata  <br><br>';

$url 		= 'http://program.prouter.com/new.php/Financing/Stat/transformdata';
//$url 		= 'http://www.hyy.com/~candy/program.prouter.com/html/new.php/Financing/Stat/transformdata';

$content 	= get_contents($url);
echo $content;

function get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);            		//设置访问的url地址
    curl_setopt($ch, CURLOPT_HEADER,0);            			//是否显示头部信息
    curl_setopt($ch, CURLOPT_TIMEOUT, 300);           		// 设置cURL允许执行的最长秒数。

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        	//返回结果
    $r = curl_exec($ch);
    var_dump($r);
    curl_close($ch);
    return $r;
}
?>