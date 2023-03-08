<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">

//データ表示
<?php foreach($pdo->query('select * from listtable')as $row) : ?>
    <tr class="tableItem">
        <td><?php echo $row['id']; ?></td>
        <td><?php echo nl2br($row['content']); ?></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>">削除</a></td>
    </tr>
<?php endforeach ?>
</table>

<form action="" method="post" class="form">
    <textarea placeholder="新規メモ" name="add" cols="60" rows="3"></textarea>
    <button type="submit">追加</button>
</form>

</body>
</html>