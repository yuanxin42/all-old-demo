<?php

@header('Content-type: text/html;charset=UTF-8');
//convert object to array  
$db = new MySQLi("localhost","root","root","blog");
//判断是否连接成功
mysqli_connect_error()?die("连接失败"):"";
$sql = "select * from message";
$sql2 = "insert into message values('55','sss','')";
$result = $db->query($sql);
foreach($result as $v){
    $res[] = $v;
}
?>