<?php
/*& 引用赋值*/
/*引用赋值，意味着两个变量都指向同一个数据。
它将使两个变量共享一块内存，如果这个内存存储的数据变了，那么两个变量的值都会发生变化。*/
$a = "北冥神功！";
$b = $a;
$c = &$a;
$a = "吸星大法!";
echo $b . "<br />";
echo $c . "<br />";

$a = "八荒六合唯我独尊功";
echo $c . "<br />";
//其实是引向了同一块儿内存空间


///*比较运算符*/
//$a = 1;
//$b = "1";
//var_dump($a == $b); // bool(true)
//echo "<br />";
//var_dump($a === $b);//bool(false)
//echo "<br />";
//var_dump($a != $b); // bool(false)
//echo "<br />";
//var_dump($a <> $b); // bool(false)
//echo "<br />";
//var_dump($a !== $b); //bool(true)
//echo "<br />";
//var_dump($a < $b); // bool(false)
//echo "<br />";
//
//$c = 5;
//var_dump($a < $c); // bool(false)
//echo "<br />";
//var_dump($a > $c); // bool(false)
//echo "<br />";
//var_dump($a <= $c); // bool(true)
//echo "<br />";
//var_dump($a >= $c); // bool(true)
//echo "<br />";
//var_dump($a >= $b); // bool(true)
//echo "<br />";

//三元运算符
//$a = 78;//成绩
//$b = $a >=60?"及格":"不及格";
//echo $b;
//
//$a = TRUE; //A同意
//$b = TRUE; //B同意
//$c = FALSE; //C反对
//$d = FALSE; //D反对
////咱顺便复习下三元运算符
//echo ($a and $b) ? "通过" : "不通过"; //不通过
//echo "<br />";
//echo ($a or $c) ? "通过" : "不通过"; //不通过$tip = $a.",欢迎您在慕课网学习PHP！
//echo "<br />";
//echo ($a xor $c xor $d) ? "通过" : "不通过"; //不通过
//echo "<br />";
//echo !$c ? "通过" : "不通过"; //通过
//echo "<br />";
//echo $a && $d ? "通过" : "不通过"; //不通过
//echo "<br />";
//echo $b || $c || $d ? "通过" : "不通过"; // 通过

//字符串链接运算符
$a = "张先生";
$tip = $a.",你好";

$b = "东边日出西边雨";
$b .= ",道是无晴却有晴";

$c = "东边日出西边雨";
$c = $c.",道是无晴却有晴";

echo  $tip."<br />";
echo  $b."<br />";
echo  $c."<br />";

