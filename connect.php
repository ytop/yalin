<?php
$host="localhost";
$db_user="u320137374_yalin";
$db_pass="88t1374A";
$db_name="u320137374_yalin";

$link=mysqli_connect($host,$db_user,$db_pass);//连接数据库主机
mysqli_select_db($link,$db_name);//选择数据库
mysqli_query($link,"SET names UTF8");//设置数据库编码格式

header("Content-Type: text/html; charset=utf-8");//设置头部样式
?>
