<?php
class Mustang {
    private $speed = 0;

    public function getSpeed() {
        return $this->speed;
    }

    protected function speedUp() {
        $this->speed += 10;
    }

    //增加start方法，使他能够调用受保护的方法speedUp实现加速10
    public function start(){
        $this->speedUp();
    }


}
$car = new Mustang();
$car->start();
echo $car->getSpeed();