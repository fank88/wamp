<?php

// 淘宝日报
file_get_contents('http://program.prouter.com/Stat/ScheduleTask/tbDailyStat');

// 入库延迟统计
file_get_contents('http://program.prouter.com/WarehousingDelay/stat');
// 入库延迟处理
file_get_contents('http://program.prouter.com/WarehousingDelay/process');
?>