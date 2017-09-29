<?php
//循环嵌套
$totalMoney = 0;//总工资
$basicMoney = 300;//基本工资
$sex = "男";
$noHouse = TRUE; //是否有房
$houseMoney = 150;//住房补贴
$isPregnancy = TRUE; //是否怀孕
$pregnancyMoney = 100;//怀孕补贴
if ($sex == "男") {
    $totalMoney = $basicMoney + 0;// 男的没奖金
    if ($noHouse) {
        $totalMoney = $totalMoney + $houseMoney;
    }
} else if ($sex == "女") {
    $totalMoney = $basicMoney + 300;// 女的有奖金300元
    if ($isPregnancy) {
        $totalMoney = $totalMoney + $pregnancyMoney;
    }
}
echo $totalMoney;