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

        // ソート処理を関数化
        function print_sorted($array, $order) {
            if ($order === "asc") {
                sort($array);  // 昇順
                echo "昇順にソートします。<br>";
            } elseif ($order === "desc") {
                rsort($array); // 降順
                echo "降順にソートします。<br>";
            }

            // foreachで配列の中身を出力
            foreach ($array as $num) {
                echo $num . "<br>";
            }
            echo "<br>";
        }

        // 関数を2回呼び出し
        print_sorted($numbers, "asc");   // 昇順
        print_sorted($numbers, "desc");  // 降順
        ?>
    </p>
</body>

</html>