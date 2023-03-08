<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="style.css">
    <title>TodoList</title>
</head>
<body>
    
<?php
if(isset($_POST["add"]))$addContent = $_POST["add"];

//sql接続
include('sql.php');

//追加
if(!empty($addContent)){
    $stmt = $pdo->prepare("INSERT INTO listtable(content) VALUE (:content)"); //SQL文の骨子を準備
    $stmt->bindvalue(":content", $addContent);
    $stmt->execute(); //SQL文を実行
}

//データ表示とフォーム
include('view.php');
?>

</body>
</html>