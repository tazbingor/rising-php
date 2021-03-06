<?php
//贪婪模式 在可匹配与可不匹配的时候，优先匹配
//下面的\d表示匹配数字
$p = '/\d+\-\d+/';
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0]; //结果为：010-12345678

//懒惰模式：在可匹配与可不匹配的时候，优先不匹配
$p = '/\d?\-\d?/';
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0];  //结果为：0-1

//明确所匹配的字符长度时,可以使用{}指定匹配字符数
$p = '/\d{3}\-\d{8}/';
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0]; //结果为：010-12345678

//请修改变量p的正则表达式，使他能够匹配str中的姓名
$p = '/(\w+\s\w+)/';
$str = "name:steven jobs";
preg_match($p, $str, $match);
echo $match[1]; //结果为：steven jobs