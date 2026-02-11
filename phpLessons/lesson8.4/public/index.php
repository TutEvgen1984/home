<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 55</title>
</head>

<body>
    <?php
    // 8.4 abstract и final классы и методы

    // сделаем класс абстрактным и используется только для наследования
    // теперь мы не можем создавать объекты этого класса, но наследовать от него можно
    // если перед классом вместо abstract написать final, то класс не будет иметь наследников. final запрещает наследование. abstract и final противоречат друг другу, поэтому либо abstract либо final
    abstract class Animal
    {
        protected $legs = 4;

        // final запрещает переопределять. это говорит о том что этот метод теперь только в родительском классе, и его нельзя переопределять
        final public function info()
        {
            echo "У меня {$this->legs} лапы.";
        }

        // создадим абстрактный метод
        // этот метод можно создать только если класс тоже абстрактный
        abstract public function color();
        // при этом нужно чтобы фигурных скобок не было, то есть этот метод на данный момент не определён. определять его нужно в дочерних классах
    }

    // создание экземпляра класса приведёт к появлению ошибки
    // $animal = new GlobalAnimal;
    // Fatal error

    // дочерний класс
    class Dog extends Animal
    {
        //  переопределение (перегрузка) абстрактного метода
        public function color()
        {
            echo 'red';
        }
        public $name = "Собака";

        // так как в родительском классе метод info() имеет final, то при попытке переопределить, появится:
        // Fatal error: Cannot override final method Animal::info()
        // поэтому метод закомментирован
        // public function info()
        // {
        //     echo "Я {$this->name}, У меня {$this->legs} лапы.";
        // }

        public function voice()
        {
            echo "{$this->name} издает звук гав-гав.";
        }

        public function parentInfo()
        {
            parent::info();
        }
    }

    class Cat extends Animal
    {
        //  переопределение (перегрузка) абстрактного метода
        public function color()
        {
            echo 'black';
        }

        public $name = "Кошка";

        public function voice()
        {
            echo "{$this->name} издает звук мяу.";
        }
    }

    $dog = new Dog();
    $cat = new Cat();

    // оператор instanceof проверяет принадлежность объектов к каким-то классам

    if ($cat instanceof Animal) {
        echo 'cat является экземпляром класса Animal<br>';
    }
    if ($cat instanceof Dog) {
        echo 'cat является экземпляром класса Dog<br>';
    }
    if ($cat instanceof Cat) {
        echo 'cat является экземпляром класса Cat<br>';
    }
    // cat является экземпляром класса Animal
    // cat является экземпляром класса Cat

    echo "<br>";

    if ($dog instanceof Animal) {
        echo 'dog является экземпляром класса Animal<br>';
    }
    if ($dog instanceof Dog) {
        echo 'dog является экземпляром класса Dog<br>';
    }
    if ($dog instanceof Cat) {
        echo 'dog является экземпляром класса Cat<br>';
    }
    // dog является экземпляром класса Animal
    // dog является экземпляром класса Dog

    ?>
</body>

</html>