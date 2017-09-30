<?php
$arr = array("苹果");
echo count($arr);
//使用=>符号分割键值对
print_r($arr);//Array([0] => 苹果)

//PHP数组之for循环访问索引数组里的值
$fruit = array('苹果', '香蕉', '菠萝');
for ($index = 0; $index < 3; $index++) {
    echo '<br>数组第' . $index . '值是：' . $fruit[$index];
}

//PHP数组之foreach循环访问索引数组里的值
$fruit = array('苹果', '香蕉', '菠萝');
foreach ($fruit as $key => $value) {
    echo '<br>第' . $key . '值是：' . $value;
}

//创建一个关联数组，关联数组的键“orange”，值是“橘子”
$arr = array(
    "orange" => "橘子"
//    'orange' => '橘子'

);
print_r($arr);

//请创建一个数组变量arr,并尝试创建一个关联数组，键是apple，值是苹果
$arr = array();
$arr['apple'] = '苹果';
if (isset($arr)) {
    print_r($arr);
}

//从数组变量$arr中，读取键为apple的值
$arr = array('apple' => "苹果", 'banana' => "香蕉", 'pineapple' => "菠萝");
$arr0 = $arr['apple'];
if (isset($arr0)) {
    print_r($arr0);
}

//foreach遍历数组
$fruit = array('apple' => "苹果", 'banana' => "香蕉", 'pineapple' => "菠萝");
foreach ($fruit as $key => $value) {
    echo '<br>键是：' . $key . '，对应的值是：' . $value;
}
