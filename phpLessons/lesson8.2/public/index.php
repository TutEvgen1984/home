<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 53</title>
</head>

<body>
    <?php
    // 8.2 Конструктор класса

    class People
    {
        // закрытое поле name (инициализация без присвоения значения)
        private $name;

        // с помощью __construct() создаём конструктор. В момент вызова класса этот конструктор выполнится
        public function __construct()
        {
            echo 'Вызов конструктора';
            $this->name = "Ivan";
        }
    }
    $obj = new People();
    echo '<pre>';
    echo print_r($obj);
    echo '</pre>';
    // Вызов конструктора
    // People Object
    // (
    //     [name:People:private] => Ivan
    // )
    // 1
    // (10, 12)

    class Point
    {
        private $x;
        private $y;
        public function __construct($x = 0, $y = 0)
        {
            $this->x = $x;
            $this->y = $y;
        }

        // без этого специального метода __toString() мы не сможем вывести объект в виде строки - echo "{$obj2}" будет выдавать ошибку
        public function __toString()
        {
            return "({$this->x}, {$this->y})";
        }
    }
    $obj2 = new Point();
    echo "{$obj2} <br>";
    // (0, 0) -  сработали значения по умолчанию

    $obj3 = new Point(10, 12);
    echo "{$obj3} <br>";
    // (10, 12)

    // в уроке 8.1 мы каждое закрытое (приватное) значение устанавливали с помощью публичной функции
    // public function setX($x)
    //     {
    //         $this->x = $x;
    //     }
    // $p1 = new Point;
    // $p1->setX(2);
    // $p1->setY(3);

    // удобство конструктора в том, что он выполнит эти действия удобно взяв значения из переданных нами аргументов при создании (в скобках)

    ?>
</body>

</html>