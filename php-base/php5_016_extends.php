<?php
//继承是面向对象程序设计中常用的一个特性，汽车是一个比较大的类，我们也可以称之为基类，
//除此之外，汽车还分为卡车、轿车、东风、宝马等，因为这些子类具有很多相同的属性和方法，
//可以采用继承汽车类来共享这些属性与方法，实现代码的复用。
//覆盖speedUp方法，使速度累加50
class Mustang1969 {
    public $speed = 0;

    public function speedUp() {
        $this->speed += 10;
        return $this->speed;
    }
}
//定义继承于Mustang1969的Truck类
class Pickup extends Mustang1969{
    public function speedUp(){
        $this->speed=parent::speedUp()+50;
    }
}

$pickup = new Pickup();
$pickup->speedUp();
echo $pickup->speed;