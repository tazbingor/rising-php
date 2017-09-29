<?php
//A例子
$num = 2;
$sum = 10;
while ($num > 3) {
    $sum = $sum + 10;
}
echo "A例子的结果：" . $sum . "<br />";
//B例子
$num = 2;
$sum = 10;
do {
    $sum = $sum + 10;
} while ($num > 3);
echo "B例子的结果：" . $sum . "<br />";

//do while的优势
/*while和do...while可以根据具体情况选用。
假设有一种棋类游戏，首先掷骰子，若不为6，前进骰子的点数的步长；
若为6，前进骰子的点数的步长，并可以再掷一次。*/
$sum = 0;
$num = rand(1, 6); //获取1至6的随机数，模拟掷骰子
$sum = $sum + $num;//前进步长
while ($num == 6) {
    $num = rand(1, 6);//获取1至6的随机数，模拟掷骰子
    $sum = $sum + $num;//前进步长
};
echo "while例子执行完毕，前进：" . $sum . "<br />";
//do...while例子
$sum = 0;
do {
    $num = rand(1, 6);//获取1至6的随机数，模拟掷骰子
    $sum = $sum + $num;//前进步长
} while ($num == 6);
echo "do...while例子执行完毕，前进：" . $sum . "<br />";

//99乘法表
echo "<table width='600' border='1'>";
for ($j = 9; $j >= 1; $j--) {

    echo "<tr>";

    for ($i = 1; $i <= $j; $i++) {
        echo "<td>{$i}*{$j}=" . ($i * $j) . "</td>";
    }
    echo "</tr>";

}

echo "</table>";

