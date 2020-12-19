<!DOCTYPE html>
<html lang="ja">
  <meta charset="UTF-8">
  <title>a</title>
  <body>
    <?php
      $pref = array('茨城' => '水戸', '栃木' => '宇都宮', '千葉' => '千葉');

      $p = '茨城';
      print("{$p}の県庁所在地は{$pref[$p]}です<br/>");

      print("<br />");

      print('配列に登録されている県庁所在地は<br/>');
      foreach($pref as $p){
        print("{$p}です<br/>");
      }
    ?>
  </body>
</html>