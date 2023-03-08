<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$addContent = @$_POST["add"];

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


if(!empty($addContent)){
    $stmt = $pdo->prepare("INSERT INTO listtable(content) VALUE (:content)"); //SQL文の骨子を準備
    $stmt->bindvalue(":content", $addContent); //:titleをpost送信されたtitleの内容に置換
    $stmt->execute(); //SQL文を実行
}

//データ表示とフォーム
include('view.php');
?>

</body>
</html>