<?php
/*PHP中提供了一个错误控制运算符“@”，
对于一些可能会在运行过程中出错的表达式时，
我们不希望出错的时候给客户显示错误信息，这样对用户不友好。
于是，可以将@放置在一个PHP表达式之前，该表达式可能产生的任何错误信息都被忽略掉；*/

$conn = @mysql_connect("localhost","username","password");
echo "出错了，错误原因是：".$php_errormsg;


