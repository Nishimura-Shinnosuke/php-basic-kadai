<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>5章課題</title>
 </head>
 
 <body>
     <p>
         <?php
         // 変数に値を代入する
         $score1 = 80;
         $score2 = 60;
         $score3 = 55;
         $score4 = 40;
         $score5 = 100;
         $score6 = 25;
         $score7 = 80;
         $score8 = 95;
         $score9 = 30;
         $score10 = 60;
 
         // 合計点を算出する
         $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
         // 平均点を算出する
         $average = $total / 10;

         // 合計点と平均点を出力する
         echo $total;
         echo '<br>';
         echo $average;
         ?>
     </p>
 </body>
 
 </html>