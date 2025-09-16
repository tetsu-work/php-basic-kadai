<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
        // 配列を用意
        $numbers = [15, 23, 4, 18, 10];

        // sort_2way関数
        function sort_2way($array, $order) {
            if ($order === TRUE) {
                // 昇順
                sort($array);
                echo "昇順にソートします。<br>";
            } else {
                // 降順
                rsort($array);
                echo "降順にソートします。<br>";
            }

            // foreachで出力
            foreach ($array as $num) {
                echo $num . "<br>";
            }
            echo "<br>";
        }

        // 関数を2回呼び出す
        sort_2way($numbers, TRUE);   // 昇順
        sort_2way($numbers, FALSE);  // 降順
        ?>
    </p>
</body>

</html>