<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=student";
$pdo  =new PDO($dsn,'root','');
$id = $_GET['id'];
$sql = "select * from students where id = $id";
$student = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);  
print(json_encode($student));