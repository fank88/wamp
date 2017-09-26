<?php
/**
 *lazada 出库报表
 * description 1 hour
 */
header('Content-type: text/html; charset=utf-8');
//不限制时间
ini_set('max_execution_time',0);
set_time_limit(0);
echo '<br><br> transformchuku  <br><br>';


$url 		= 'http://program.prouter.com/new.php/Financing/Stat/transformchuku';
//$url 		= 'http://www.hyy.com/~candy/program.prouter.com/html/new.php/Financing/Stat/transformchuku';

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
