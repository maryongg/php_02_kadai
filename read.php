<?php
//2.　データベース接続
try {
    $pdo = new PDO('mysql:dbname=kadai;charset=utf8;host=localhost','root','');//XAMMPはパスワードなし
} catch (PDOException $e) {
    exit('DB_ConnectError!!:'.$e->getMessage());//サーバーエラー時のテキスト
}

//２．データ登録SQL作成
$sql = "SELECT * FROM kadai_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values,JSON_UNESCAPED_UNICODE);



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>入力画面</title>
</head>
<body>
<div class="zentai">
<p>登録メンズ一覧</p>
<table>
    <tr>
        <th>登録日時</th>
        <th>名前</th>
        <th>年齢</th>
        <th>年収</th>
    </tr>
    <?php foreach($values as $v){ ?>
        <tr>
        <td><?=$v["indate"]?></td>
        <td><?=$v["name"]?></td>
        <td><?=$v["age"]?></td>
        <td><?=$v["income"]?></td>
        </tr>
    <?php } ?>
</table>




</div>
</body>
</html>