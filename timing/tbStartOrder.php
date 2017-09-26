<?php
/**
 * 间隔：1小时
 */
file_get_contents('http://program.prouter.com/index.php/Stat/ScheduleTask/tbStatOrder');

// 出库报表
file_get_contents('http://program.prouter.com/index.php/Timing/exWarehouse');

//TBA 出库报表
file_get_contents('http://program.prouter.com/new.php/Financing/Stat/transformchuku');
?>s