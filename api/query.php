<?php
//處理查詢資料的請求
$class_name = $_GET['class_name'];
$dsn = "mysql:host=localhost;charset=utf8;dbname=student";
$pdo  =new PDO($dsn,'root','');

$sql = "SELECT * FROM students WHERE classroom = $class_name";
$row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print(json_encode($row));







