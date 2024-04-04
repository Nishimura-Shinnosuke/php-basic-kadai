<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way($array, $order) {
            
            
            if ($order == true) {
                echo '昇順にソートします。 <br>';
                sort($array);
                foreach ($array as $num) {
                echo $num . '<br>';
                }
            }
            else {
                echo '降順にソートします。 <br>';
                rsort($array);
                foreach($array as $num){
                    echo $num . '<br>';
                }
                
            }       
        }

        $nums = [15, 4, 8, 23, 10];
        sort_2way($nums, true);
        sort_2way($nums, false);

        ?>
    </p>
</body>

</html>