<?php
/**
 * Created by PhpStorm.
 * User: tazbingo
 * Date: 2017/10/1
 * Time: 19:51
 */
//判断改变量p的正则表达式，使他能够匹配BBC
$p = '/bbc/i';
$str = "BBC是英国的一个电视台";
if (preg_match($p, $str)) {
    echo '匹配成功';
}