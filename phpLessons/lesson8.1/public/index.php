<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Урок 52</title>
    <style>
        body {
            color: white;
            background-color: black;
            font-size: 36px;
        }
    </style>
</head>

<body>

    <?php

    // 8.1 Методы класса

    class Hello
    {
        // функция внутри класса называется методом
        // спецификатор public чтобы был везде доступ к этой функции
        public function printText()
        {
            return "Привет, мир!";
        }
    }
    // создадим объект на основе класса. При этом функция внутри класса сама по себе не выполнится
    $obj = new Hello;

    // чтобы выполнить публичный метод объекта нужно к нему обратиться так же как к переменным объекта с помощью ->
    echo $obj->printText() . "<br>";
    // Привет, мир!

    class Point
    {
        // переменные $x и $y с закрытым доступом
        private $x;
        private $y;

        // функции с открытым доступом снаружи
        public function setX($x)
        {
            $this->x = $x;
        }
        public function setY($y)
        {
            $this->y = $y;
        }
        public function getX()
        {
            return $this->x;
        }
        public function getY()
        {
            return $this->y;
        }
        public function distance()
        {
            return sqrt($this->getX() ** 2 + $this->getY() ** 2);
        }
    }
    $p1 = new Point;
    $p1->setX(2);
    $p1->setY(3);
    echo $p1->distance() . "<br>";
    // 3.605551275464

    // **********************

    // статический метод (объект класса теперь сам создавать не обязательно):
    // https://www.php.net/manual/ru/language.oop5.static.php
    class Hello2
    {
        public static function printText()
        {
            return "Привет, мир2! <br>";
        }
    }
    echo Hello2::printText();
    // Привет, мир2!

    // ********************

    // ключевое слово self, которое означает название класса. Сейчас класс называется Page, но если оно изменится например на Sage, то self теперь будет указывать на Sage
    class Page
    {
        static $content = 'Тело сайта<br>';
        public static function footer()
        {
            return 'Это подвал сайта<br>';
        }
        public static function header()
        {
            return 'Это шапка сайта<br>';
        }
        public static function site()
        {
            echo self::header() .
                self::$content .
                self::footer();
        }
    }

    Page::site();
    // Это шапка сайта
    // Тело сайта
    // Это подвал сайта

    ?>
</body>

</html>