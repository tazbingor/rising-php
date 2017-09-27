<?php
/*PHP中数据类型的内存消耗*/
//echo $m1 = memory_get_usage(); //222760
//echo "<br />";
//$var_string = "123";
//echo $m2 = memory_get_usage() - $m1; //328
//echo "<br />";
//$n = 123;
//echo $m3 = memory_get_usage() - $m1 - $m2; //256
//echo "<br />";
//$f = 123.00;
//echo $m4 = memory_get_usage() - $m1 - $m2 - $m3; // 272
//echo "<br />";
//$var_array = array("123");
//echo $m5 = memory_get_usage() - $m1 - $m2 - $m3 - $m4; //600

//boolean
$flag = true;
echo $flag; //1
echo var_dump($flag); //bool(true)
$flag = false;
echo $flag;//不输出
echo var_dump($flag); //bool(false)
$intA = 1;
$intB = 2;
echo var_dump($intA == $intB);//bool(false)
echo "<br />";

//integer整型
$data_int1 = 123;
echo $data_int1;//123
echo "<br />";
$data_int2 = -123;
echo $data_int2;//-123
echo "<br />";
$data_int3 = 0123;
echo $data_int3;//83
echo "<br />";
$data_int4 = 0x123;
echo $data_int4;//291
echo "<br />";

/*浮点*/
$num_float1 = 1.234;
echo $num_float1;//1.234
echo "<br />";
$num_float2 = 1.2e3;
echo $num_float2;//1200
echo "<br />";
$num_float3 = 7.0E-3;
echo $num_float3;//0.007
echo "<br />";

/*string 字符串*/

//若字符串中要输出带有双引号的字符串
$str_string1 = '甲问："你的独孤九剑在哪学的?"';
echo $str_string1;
echo "<br />";

//或者使用反斜杠符号
$str_string2 = "乙应道:\"tazbingo由风清扬真传,并自悟提升至至高境界!\"";
echo $str_string2;
echo "<br />";

//若有其中有美元符号需要完整显示咋办?
//用单引号包着双引号,用双引号包着单引号
$string1 = "'rich$$$$$'";
echo $string1;
echo "<br />";
$string2 = "'rich$$$$$'";
echo $string2;
echo "<br />";

//若出现段落可以使用Heredoc结构形式
$strHeredoc = <<< HERE
白日依山尽,黄河入海流
欲穷千里目,更上一层楼
HERE;
print $strHeredoc;
print "<br />";
//或者用Newdoc结构形式
$strNewdoc = <<< 'EOT'
白日依山尽,黄河入海流
欲穷千里目,更上一层楼
EOT;
print $strNewdoc;
print "<br />";