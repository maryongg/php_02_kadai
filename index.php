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
<p>出会ったお相手を登録！</p>

<form method="POST" action="insert.php" enctype="multipart/form-data">
お名前：<input type="text" name="name"><br>
年齢：<input type="text" name="age"><br>
年収：<select name="income">
    <option value="200">200万円未満</option>
    <option value="200-400">200万円~400万円</option>
    <option value="400-600">400万円~600万円</option>
    <option value="600-800">600万円~800万円</option>
    <option value="800-1000">800万円~1000万円</option>
    <option value="1000-1500">1000万円~1500万円</option>
    <option value="1500-2000">1500万円~2000万円</option>
    <option value="2000">2000万円以上</option>
</select>
<br>
<input type="submit" value="送信">
</form>

<a href="read.php">登録メンズ一覧！</a>

</div>
</body>
</html>