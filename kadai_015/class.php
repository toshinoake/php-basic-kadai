<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編_課題15</title>
  </head>

  <body>
    <p>
      <?php
      //クラス定義Food
      class Food {
        //プロパティを定義
        private $name;
        private $price;

        //コンストラクタを定義
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
        
        //メソッドを定義
        public function show_price() {
          echo $this->price . '<br>';
        }
      }

      //インスタンス化
      $food = new Food('potato', 250);

      //インスタンス$foodの各プロパティを出力
      print_r($food);
      echo '<br>';
      
      //クラス定義Animal
      class Animal {
        //プロパティを定義
        private $name;
        private $height;
        private $weight;

        //コンストラクタを定義
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        //メソッドを定義
        public function show_height() {
          echo $this->height . '<br>';
        }
      }

      //インスタンス化
      $animal = new Animal('dog', 60, 5000);

      //インスタンス$foodの各プロパティを出力
      print_r($animal);
      echo '<br>';

      //メソッドにアクセスして実行food
      $food->show_price();
      //メソッドにアクセスして実行animal
      $animal->show_height();

      
      ?>
    </p>
  </body>
</html>
