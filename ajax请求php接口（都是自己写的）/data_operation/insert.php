<?php
    @header('Content-type: text/html;charset=UTF-8');
    //convert object to array  
    $db = new MySQLi("localhost","root","root","blog");
    //判断是否连接成功
    mysqli_connect_error()?die("连接失败"):"";
    $name = $_POST['name'];
    $sql = "insert into message values('','sss','')";
    $result = $db->query($sql);
    echo $name;
?>