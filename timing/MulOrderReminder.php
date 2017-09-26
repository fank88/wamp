<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/14
 * Time: 14:10
 */
header('Content-type: text/html; charset=utf-8');
//不限制时间
ini_set('max_execution_time',0);
set_time_limit(0);
$curlHandle = curl_init('http://program.prouter.com/new.php/SendMsg/SendAllMsg/exeSend');
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER,0);
curl_exec($curlHandle);
curl_close($curlHandle);