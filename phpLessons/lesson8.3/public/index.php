<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 54</title>
</head>

<body>
    <?php
    // 8.3 Наследование и перегрузка методов

    // основной класс
    class Animal
    {
        // защищенная переменная
        protected $legs = 4;
        // спецификатор доступа protected говорит, что оно недоступно извне класса, но при этом доступен при наследовании

        // спецификатор доступа private не дает доступ к унаследованию

        public function info()
        {
            echo "У меня {$this->legs} лапы.";
        }
    }
    $obj = new Animal();
    $obj->info();
    // У меня 4 лапы.
    echo "<br>";
    echo "***<br>";


    // унаследованный класс (ключевое слово extends)
    class Dog extends Animal
    {
        // считаем, как будто $legs и info() скопировались (унаследовались) из родительского класса Animal
        // protected $legs = 4;
        // public function info()
        // {
        //     echo "У меня {$this->legs} лапы.";
        // }

        public $name = "Собака";

        // перегрузка(переопределение) метода info():
        public function info()
        {
            echo "Я {$this->name}, У меня {$this->legs} лапы.";
        }

        public function voice()
        {
            echo "{$this->name} издает звук гав-гав.";
        }
        // обращение к родительскому методу info()
        public function parentInfo()
        {
            parent::info();
        }
    }

    $dog = new Dog();
    $dog->info();
    // Я Собака, У меня 4 лапы. (сработал перегруженный метод info(), находящийся в классе Dog)

    echo "<br>";

    $dog->voice();
    // Собака издает звук гав-гав.
    echo "<br>";

    $dog->parentInfo();
    // У меня 4 лапы.(сработал родительский метод info(), расположенный в первоначальном классе Animal)

    echo "<br>";
    echo "***<br>";

    class Cat extends Animal
    {
        public $name = "Кошка";
        public function voice()
        {
            echo "{$this->name} издает звук мяу.";
        }
    }

    $cat = new Cat();
    $cat->voice();
    // Кошка издает звук мяу.

    ?>
</body>

</html>