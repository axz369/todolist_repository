<?php
// DB接続設定
$dsn = 'mysql:dbname=php_todolist;host=localhost';
$user = 'root';
$password = 'V58GcUuR';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
 
//接続状況の確認
if (mysqli_connect_errno()) {
    echo "データベース接続失敗" . PHP_EOL;
    echo "errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "error: " . mysqli_connect_error() . PHP_EOL;
    exit();
}
?>