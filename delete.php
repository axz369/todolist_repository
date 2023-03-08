<?php
$id = $_GET['id'];

//sql接続
include('sql.php');

$stmt = $pdo->prepare("DELETE FROM listtable WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

//リダイレクト、データ表示
header('Location: index.php');

?>