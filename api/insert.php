<?php
//處理新增資料的請求
$dsn = "mysql:host=localhost;charset=utf8;dbname=student";
$pdo  =new PDO($dsn,'root','');
$sql = "insert into students (`classroom`,`seat_num`,`name`,`birthday`) values ('{$_POST["classroom"]}','{$_POST["seat_num"]}','{$_POST["name"]}','{$_POST["birthday"]}')";
$res = $pdo->exec($sql);
?>