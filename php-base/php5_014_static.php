<?php

class Car02
{
    private static $speed = 10;

    public function getSpeed()
    {
        return self::$speed;
    }

    //在这里定义一个静态方法，实现速度累加10
    public static function speedUp()
    {
        return self::$speed += 10;
    }


}

$car02 = new Car02();
Car02::speedUp();  //调用静态方法加速
echo $car02->getSpeed(); //调用共有方法输出当前的速度值

//静态方法中，$this伪变量不允许使用。
//可以使用self，parent，static在内部调用静态方法与属性。
class Car03
{
    private static $speed = 10;

    public static function getSpeed()
    {
        return self::$speed;
    }

    public static function speedUp()
    {
        return self::$speed += 10;
    }
}

class BigCar extends Car03
{
    public static function start()
    {
        parent::speedUp();
    }
}

BigCar::start();
echo BigCar::getSpeed();