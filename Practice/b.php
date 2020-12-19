<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name = "viewport">
</head>
  <body>
    <table border="1">
  <?php
    for ($i=1; $i < 10; $i++){
      echo '<tr>';
      for ($j=1; $j <10; $j++){
        $i = (int)$i;
        $j = (int)$j;
        $x = $i * $j ;
        echo("<td>{$x}</td>");
      }
      echo '</tr>';
    }
  ?>
  </table>
  </body>
</html>

