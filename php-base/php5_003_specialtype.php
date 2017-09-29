<?php
//特殊类型 resource 资源
//首先采用“fopen”函数打开文件，得到返回值的就是资源类型。
$file_handle = fopen("/data/webroot/resource/php/f.txt", "r");
if ($file_handle) {
    //接着采用while循环（后面语言结构语句中的循环结构会详细介绍）一行行地读取文件，然后输出每行的文字
    while (!feof($file_handle)) { //判断是否到最后一行
        $line = fgets($file_handle); //读取一行文本
        echo $line; //输出一行文本
        echo "<br />"; //换行
    }
}
fclose($file_handle);//关闭文件

//特殊类型 NULL 空类型
/*以下三种情况变量会被认为NULL
1.变量没有赋值
2.赋值为NULL
3.或者被unset()*/
//error_reporting(0); //禁止显示PHP警告提示
//$var;
//print var_dump($var);//NULL
//$var1 = null;
//print var_dump($var1);//NULL
//$var2 = null;
//print var_dump($var2);//NULL
//$var3 = "节日快乐！";
//unset($var3);
//print var_dump($var3);//NULL
//echo "<br />";

/*常量 define*/
//$p = "PII";
//define('PI',3.14);
//define($p,3.14);
//echo PI."<br />";
//echo PII."<br />";
//计算面积
define("PI", 3.14);
$r = 3;
echo "PI为:" . PI . "<br />";
echo "面积为:" . (PI * $r * $r) . "<br />";
echo "周长为:" . (2 * PI * $r) . "<br />";

/*系统常量*/
/*（1）__FILE__ :php程序文件名。它可以帮助我们获取当前文件在服务器的物理位置。
（2）__LINE__ :PHP程序文件行数。它可以告诉我们，当前代码在第几行。
（3）PHP_VERSION:当前解析器的版本号。它可以告诉我们当前PHP解析器的版本号，我们可以提前知道我们的PHP代码是否可被该PHP解析器解析。
（4）PHP_OS：执行当前PHP版本的操作系统名称。它可以告诉我们服务器所用的操作系统名称，我们可以根据该操作系统优化我们的代码。*/
echo "__FILE__:" . __FILE__ . "<br />";
echo "__LINE__:" . __LINE__ . "<br />";
echo "PHP_VERSION:" . PHP_VERSION . "<br />";
echo "PHP_OS:" . PHP_OS . "<br />";
/*注意:
php5.3版本后可以使用const直接定义常量*/
//const PI = 3.14;
//echo "PI为:" . PI . "<br />";
/*与此同时, define('PI',3.14)或者const PI=3.14
且值只能是标量,即可以是 整型 浮点型  布尔型 null 字符串等。
在定义后，无论在那定义，都可以直接调用，没有作用域。定义后不可以再赋值一直存在内存中，不能被销毁。
所以常量的值不能是 数组, 对象 , 资源*/
$p = "";
//定义圆周率的两种取值
define("PI1", 3.14);
define("PI2", 3.142);
//定义值的精度
$height = "中";
//根据精度返回常量名，将常量变成了一个可变的常量
if ($height == "中") {
    $p = "PI1";
} else if ($height == "低") {
    $p = "PI2";
}
$r = 1;
$area = constant($p) * $r * $r;
echo $area . "<br />";

/*判断常量是否被定义*/
//define("PI1", 3.14);
//$p = "PI1";
//$is1 = defined($p);
//$is2 = defined("PI2");
//var_dump($is1);//bool(true)
//var_dump($is2);//bool(false)