<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$stmt = $pdo->prepare("select * from login_mypage where mail = ? $$ password = ?");

$stmt->bindValue(1,$_POST["mail"]);
$stmt->bindValue(2,$_POST["password"]);

$stmt->execute();
$pdo = NULL;

while($row = $stmt->fetch()){
    echo $row['mail'];
    echo $row['password'];
}
?>