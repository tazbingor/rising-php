<?php
//魔术方法
//PHP中的重载指的是动态的创建属性与方法，是通过魔术方法来实现的。
//属性的重载通过__set，__get，__isset，__unset来分别实现对不存在属性的赋值、读取、判断属性是否设置、销毁属性。
class FastCar
{
    public $speed = 10;

    private $ary = array();

    //属性重载
    //当为无权操作的属性赋值时,
    //或不存在的属性赋值时,
    //__set()自动调用
    //且自动传2个参数 属性 属性值
    public function __set($key, $val)
    {
        $this->ary[$key] = $val;
    }

    //__get魔术方法会自动调用,
    //并且自动传参,参数值是属性名.
    public function __get($key)
    {
        if (isset($this->ary[$key])) {
            return $this->ary[$key];
        }
        return null;
    }

    //isset() 判断对象不可见的属性时(protected/private/不存在的属性)
    //会引发 __isset()来执行
    public function __isset($key)
    {
        if (isset($this->ary[$key])) {
            return true;
        }

        return false;
    }
    // 在对类中属性或者非类中属性使用unset()方法的时候如果没有或者非公有属性，则自动执行__unset()
    public function __unset($key)
    {
        unset($this->ary[$key]);
    }

    //方法重载实现speedDown方法
    public function __call($name, $args)
    {
        if ($name == 'speedDown') {
            $this->speed -= 10;
        }
    }
}

$car = new FastCar();
$car->speedDown(); //调用不存在的speedDown方法
echo $car->speed;
