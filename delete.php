<?php
$id = $_GET['id'];

//sql接続
include('sql.php');
echo $id;

$stmt = $pdo->prepare("DELETE FROM listtable WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

?>