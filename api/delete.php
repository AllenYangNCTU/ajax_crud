<?php
//處理刪除資料的請求
$dsn = "mysql:host=localhost;charset=utf8;dbname=student";
$pdo  =new PDO($dsn,'root','');
$sql = "delete from students where id = {$_POST['id']}";
$res = $pdo->exec($sql);

?>