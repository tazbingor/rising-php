<?php
/*PHP中数据类型的内存消耗*/
echo $m1 = memory_get_usage(); //222760
echo "<br />";
$var_string = "123";
echo $m2 = memory_get_usage() - $m1; //328
echo "<br />";
$n = 123;
echo $m3 = memory_get_usage() - $m1 - $m2; //256
echo "<br />";
$f = 123.00;
echo $m4 = memory_get_usage() - $m1 - $m2 - $m3; // 272
echo "<br />";
$var_array = array("123");
echo $m5 = memory_get_usage() - $m1 - $m2 - $m3 - $m4; //600