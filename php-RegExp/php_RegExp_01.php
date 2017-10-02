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

//如果模式中包含较多的分割字符，建议更换其他的字符作为分隔符，
//也可以采用preg_quote进行转义。
$p = 'http://';
$p = '/'.preg_quote($p, '/').'/';
echo $p;