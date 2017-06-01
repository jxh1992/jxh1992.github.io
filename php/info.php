<?php
// 链接数据库
// $con = mysql_connect("localhost","root","123456");
// if (!con) {
// 	die('can not connect'.mysql_error());
// }else {
// 	echo "connect sucessfully!";
// }
// mysql_select_db('mysql');

// $result = mysql_query("select * from db");

// echo $result;

$name = $_GET["name"];
$password = $_GET["password"];
echo "the name:".$name." and the password:".$password;
?>