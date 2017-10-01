<?php
//对象克隆
//在一些特殊情况下，可以通过关键字clone来复制一个对象，
//这时__clone方法会被调用，通过这个魔术方法来设置属性的值。
class People {
    public $name = 'tazbingo';

    public function __clone() {
        $obj = new People();
        $obj->name = $this->name;
    }
}
$a = new People();
$a->name = '张三';
$b = clone $a;
var_dump($b->name);