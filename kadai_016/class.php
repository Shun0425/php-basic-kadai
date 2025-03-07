<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
    <?php
    // Foodクラスの定義
    class Food
    {
        private $name;
        private $price;

        public function __construct($name, $price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        public function show_price()
        {
            echo $this->price . '円';
        }
    }

    // Animalクラスの定義
    class Animal
    {
        private $name;
        private $height;
        private $weight;

        public function __construct($name, $height, $weight)
        {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function show_height()
        {
            echo $this->height . 'cm';
        }
    }

    // インスタンスの生成
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // インスタンスの内容を出力
    echo '<pre>';
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '</pre>';

    // メソッドの実行
    echo 'Foodクラスのshow_priceメソッド実行結果：';
    $food->show_price();
    echo '<br>';
    echo 'Animalクラスのshow_heightメソッド実行結果：';
    $animal->show_height();
    ?>
</body>

</html>