<?php
/**
 * description 10 minute
 */
header('Content-type: text/html; charset=utf-8');
//不限制时间
ini_set('max_execution_time',0);
set_time_limit(0);
$t1 = microtime(true);

//airpak sgAirpak 物流跟踪；
$url        = 'http://program.prouter.com/new.php/LazadaGenPostApi/chuku';
$tracking   = curl_get_contents($url);

$t2 = microtime(true);
echo '耗时'.round($t2-$t1,3).'秒';



function curl_get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);                    //设置访问的url地址
    curl_setopt($ch, CURLOPT_HEADER,0);                     //是否显示头部信息
    curl_setopt($ch, CURLOPT_TIMEOUT, 300);                 //设置超时
    // curl_setopt($ch, CURLOPT_REFERER,_REFERER_);         //设置 referer
//  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);              //跟踪301
//  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);            //返回结果
    $r = curl_exec($ch);
    curl_close($ch);
    return $r;
}


?>
