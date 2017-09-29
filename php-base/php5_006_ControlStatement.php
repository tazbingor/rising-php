<?php
date_default_timezone_set('Asia/ShangHai');//设置时区
$today = date('m-d', time());//获取当天日期
$birthday = "02-14";//生日
$money = 238;//消费金额
$discount = 0.8;//八折优惠
if ($today == $birthday) {
    $money = $money * $discount;
} else {
    $money = $money * 1;
}

echo $money;
//switch
//抽奖
$num = rand(1,50);//获取1至50的随机数
$info = "";//提示信息
switch($num){
    case 1:
        $info = "恭喜你！中了一等奖！";
        break;
    case 2:
        $info = "恭喜你！中了二等奖！";
        break;
    case 3:
        $info = "恭喜你！中了三等奖！";
        break;
    default:
        $info = "很遗憾！你没有中奖！";
}
echo $info; //输出是否中奖