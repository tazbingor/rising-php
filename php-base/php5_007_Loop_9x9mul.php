<?php
//9X9乘法表
echo "<table width='600' border='1'>";

for ($j = 1; $j <= 9; $j++) {

    echo "<tr>";

    for ($z = 0; $z < 9 - $j; $z++) {
        echo "<td> </td>";
    }
    for ($i = $j; $i >= 1; $i--) {
        echo "<td>{$i}*{$j}=" . ($i * $j) . "</td>";
    }

    echo "</tr>";

}
echo "</table>";