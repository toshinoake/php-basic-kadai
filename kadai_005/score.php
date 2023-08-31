<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta chareset="UTF-8">
    <title>PHP基礎編_課題5</title>
  </head>

  <body>
    <p>
      <?php
        //変数
        $score1 = '80';
        $score2 = '60';
        $score3 = '55';
        $score4 = '40';
        $score5 = '100';
        $score6 = '25';
        $score7 = '80';
        $score8 = '95';
        $score9 = '30';
        $score10 = '60';

        //合計と平均点の算出
        echo ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10) / 10;
      
      ?>
    </p>
  </body>

</html>
