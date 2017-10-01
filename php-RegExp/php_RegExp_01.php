<?php
/**
 * Created by PhpStorm.
 * User: tazbingo
 * Date: 2017/10/1
 * Time: 19:51
 */
//判断苹果是否存在。
$p = '/表达式/';

$str = "我喜欢吃/苹果/";
if (preg_match($p, $str)) {
    echo '匹配成功';
}