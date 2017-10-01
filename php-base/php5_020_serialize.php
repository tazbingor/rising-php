<?php
/**
* Created by PhpStorm.
 * User: tazbingo
* Date: 2017/10/1
* Time: 19:39
*/
//对象序列化
//可以通过serialize方法将对象序列化为字符串，用于存储或者传递数据，
//然后在需要的时候通过unserialize将字符串反序列化成对象进行使用。
class Student {
    public $name = 'student';
}
$a = new Student();
$str = serialize($a); //对象序列化成字符串
echo $str.'<br>';
$b = unserialize($str); //反序列化为对象
var_dump($b);