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

<?php foreach($pdo->query('select * from listtable')as $row) : ?>
    <tr class="tableItem">
        <td><?php echo $row['id']; ?></td>
        <td><?php echo nl2br($row['content']); ?></td>
        <td>
            <input type= "text" name= "del" value= "<?php echo $row[0]; ?>">
            <button type="submit">削除する</button>
        </td>
    </tr>
<?php endforeach ?>
</table>

<form action="" method="post" class="form">
    <textarea placeholder="新規メモ" name="add" cols="60" rows="3"></textarea>
    <button type="submit">追加</button>
</form>

</body>
</html>