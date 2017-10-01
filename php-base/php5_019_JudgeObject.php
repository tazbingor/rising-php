<?php
/**
 * Created by PhpStorm.
 * User: tazbingo
 * Date: 2017/10/1
 * Time: 19:39
 */
//对象比较，当同一个类的两个实例的所有属性都相等时，可以使用比较运算符==进行判断，
//当需要判断两个变量是否为同一个对象的引用时，可以使用全等运算符===进行判断。
class Obj01 {
}
$a = new Obj01();
$b = new Obj01();
if ($a == $b) echo '==';   //true
//正确规范
if ($a === $b) echo '==='; //false