<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8">
  <title>新規登録画面</title>
</head>
<body>
  <?php
    print("<h2>ようこそ{$_POST['username']} さん</h2>");
    print("現在の時刻は".date("Y年m月d日 H時i分s秒"));
  ?>
  <h1>新規登録画面</h1>
  <form action='' method ="POST">
    ユーザー名<input type="text" name = "username" value=""></br>
    password<input type="password" name = "username" value=""></br>
    <input type = "submit" name = "signin" value="登録">
  </form>
  <a href = "index.php">戻る</a>
</body>
</html>