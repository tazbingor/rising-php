<?php
//增强for
$students = array(
    '2010' => '令狐冲',
    '2011' => '林平之',
    '2012' => '曲洋',
    '2013' => '任盈盈',
    '2014' => '向问天',
    '2015' => '任我行',
    '2016' => '冲虚',
    '2017' => '方正',
    '2018' => '岳不群',
    '2019' => '宁中则',
);//10个学生的学号和姓名，用数组存储

//使用循环结构遍历数组,获取学号和姓名
foreach ($students as $key => $v) {
    echo $key . ":" . $v;//输出（打印）学号：姓名
    echo "<br />";
}