<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <title>トップページ</title> 
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <header>
      <div class="heading">
        <div class="heading-title">
          <h1>Erous Poet</h1>
          <div class="sub-title">~愛に触れると皆詩人になる~</div>
        </div>
      </div>
      <div class="navbar">
        <ul class="navbar-list">
          <li>使い方</li>
          <li>ようこそ〇〇様</li>
          <li>時刻:</li>
          <li>ログイン</li>
        </ul>
      </div>
    </header>
    <div class="contents">
      <!-- <トップ画像> -->
      <div class="top-content">
        <img src = "img/top.jpg" alt="Top画像" class = "top-image">
      </div>
      <!-- サイトからのお知らせ -->
      <div class="upper-content">
        <div class ="content-title">
          <h2>お知らせ</h2>
        </div> 
        <ul class="messages">
          <li class="message">
            <div class="message-date">2022/01/01</div>
            <div><b>青少年出会いアワード2021大賞</b></div>
          </li>
          <li class="message">
            <div class="message-date">2022/01/01</div>
            <div><b>オープン</b></div>
          </li>
        </ul>
      </div>

       <!-- <最新のチャットルーム> -->
      <div class="middle-content">
       <div class="content-title">
         <h2>最新のチャットルーム<h2>
           <ul class= room-lists>
             <li class="room"> 
              <div class="created-date">日付</div>
              <div><b>name</b></div>
             </li>
           </ul>
      </div>

      <!-- 最新のマッチング -->
      <div class="bottom-content">
        <div class="content-title">
          <h2>幸せのご報告<h2>
        </div>    
           <ul class= matching-lists>
             <li>
              <div class="matching">画像</div>
              <div><b>name</b></div>
             </li>
           </ul>
      </div>
    </div>
    <footer>
    </footer>
  </body>
</html>