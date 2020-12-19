<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8">
  <title>ログイン画面</title>
  <link rel = "stylesheet" href="css/login.css">
</head>
<body> 
  <div class="white_board">
    <div class = title>
      <img src="img/app_image.jpeg" alt=ErousPoet class="app-image">
    </div>
    <div class="login"> 
        </br>
        ログイン
        <form action='' method ="POST">
          ユーザー名<input type="text" name = "username" value=""></br>
          password<input type="password" name = "username" value=""></br>
          <input type = "submit" name = "login" value="ログイン"></br></br>
        </form>
        <p class="terms-of-service">
          18歳以上なので、 <a class= "terms-of-service__nav" href= terms_of_service.php >利用規約</a>および
          <a class="terms-of-service__nav" href= "privacy.php">プライバシーポリシー</a>に同意して
        </p>
        <a href = "sign_in.php">今すぐかんたん無料登録！</a>
        </br>
        </br>
        </br>
        <p class= "app-explanation">Erous Poetはchatから始める出会い</p>
        <div class="side-picture">
          <img src = "img/chat_sample.jpg" alt="side画像" class = "side-image">
          <p></p>
        </div>
    </div>   
 </div>
</body>
</html>
