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
            if ($order == TRUE) {
                sort($array);
            } else {
                rsort($array);
            }
            return $array;
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順にソート
        echo "昇順にソートします。" . "<br>";
        $nums = sort_2way($nums, TRUE);
        foreach ($nums as $num) {
            echo $num . "<br>";
        }

        // 降順にソート
        echo "<br>";
        echo "降順にソートします。" . "<br>";
        $nums = sort_2way($nums, FALSE);
        foreach ($nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>