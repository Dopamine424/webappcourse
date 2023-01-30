<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php     
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(E_ALL); 
    ?>

    <h2>Задание 1</h2>

    <?php
    $p = "text";
    if ($p != "Bot") {
        echo "Верно";
    }
    ?>
    <br>

    <h2>Задание 2</h2>

    <?php
    define("goodNumber", 7);
    
    echo goodNumber;
    ?>

    <h2>Задание 3</h2>

    <?php
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo $result;
    ?>
    <br>

    <h2>Задание 4</h2>
    <?php
    $array = array('мир', 'труд', 'май', '!');
    if ($array[0] == 'мир') {
        $array[0] = 'Мир';
    }
    echo $array[0] . ", " . $array[1]. ", " . $array[2] . $array[3];
    ?>

    <br>

    <h2>Задание 5</h2>

    <?php
    $array = array('Привет,', 'мир', '!');
    if ($array[0] == 'Привет,') {
        $array[0] = 'Пока,';
    }
    echo $array[0] . " " . $array[1] . $array[2];
    ?>

    <br>

    <h2>Задание 6</h2>

    <?php
     $arr = array("Петя" => 20, "Коля" => 30, "Иван" => 40);
     echo $arr["Петя"] . ", " . $arr["Коля"];
    ?>

    <br>

    <h2>Задание 7</h2>

    <?php
    $arr = array("Петя" => 20, "Коля" => 30, "Иван" => 40);
    echo array_sum($arr);
    ?>

    <br>

    <h2>Задание 8</h2>

    <?php
     $array = array(
        1 => array (
        "ru" => "Понедельник",
        "en" => "Monday"
        ),

        2 => array (
        "ru" => "Вторник",
        "en" => "Tuesday"
        ),
         
        3 => array (
            "ru" => "Среда",
            "en" => "Wednesday"
        ),

        4 => array (
            "ru" => "Четверг",
            "en" => "Wednesday"
        ),

        5 => array (
            "ru" => "Пятница",
            "en" => "Friday"
        ),

        6 => array (
            "ru" => "Суббота",
            "en" => "Saturday"
        ),

        7 => array (
            "ru" => "Воскресенье",
            "en" => "Sunday"
        )
        );

        echo $array[3]['ru'] . ", " . $array[3]['en'];
    ?>

    <br>

    <h2>Задание 9</h2>

    <?php
    $arr = array(2, 5, 3, 9);
    echo ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
    ?>

    <br><br>

    <h2>Задание 10</h2>

    <form action="index.php">
        <label for="input">Введите число</label><br>
        <input name="input" type="number" />
        <button type="submit">Отправить</button>
    </form>

    <?php
        $min = $_GET['input'];
        if ($min >= 0 && $min <= 14) {
            echo $min . ' первая четверть';
        }
        if ($min >= 15 && $min <= 30) {
            echo $min . ' вторая четверть';
        }
        if ($min >= 31 && $min <= 45) {
            echo $min . ' третья четверть';
        }
        if ($min >= 46 && $min <= 59) {
            echo $min . ' четвертая четверть';
        }
    ?>

    <br><br>

    <h2>Задание 11</h2>

    <form action="index.php">
        <label for="">Выберите lang</label><br>
        <input type="submit" name="ru" value="ru">
        <input type="submit" name="en" value="en">
    </form>

    <?php
        if ($_GET['ru']) {
            $lang = array('пн', 'вт', "ср", 'чт', 'пт', 'сб', 'вс');
        }
        if ($_GET['en']) {
            $lang = array('mn', 'ts', "wd", 'th', 'fr', 'st', 'sn');
        }
        foreach ($lang as $i) {
            echo $i . " ";
        }
    ?>
    <br>
    <?php
        switch ($_GET) {
            case 'ru':
                $lang = array('пн', 'вт', "ср", 'чт', 'пт', 'сб', 'вс');
                break;
            case 'en':
                $lang = array('mn', 'ts', "wd", 'th', 'fr', 'st', 'sn');
                break;
            
        }
        foreach ($lang as $i) {
            echo $i . " ";
        }
    ?>
    <br>
    <br>
    <?php
    $lang = 'ru';
       $arr = array(
        'ru' => array (
            "пн",
            "вт",
            "ср",
            "чт",
            "пт",
            "сб",
            "вс"
        ),
        'en' => array (
            "mn",
            "ts",
            "wd",
            "th",
            "fr",
            "st",
            "sn"
            ),
        );

        //echo $arr['ru'][1];

        foreach ($arr as $langs => $days) {
            if($langs == $lang){
                foreach ($days as $key => $value)
                {
                    echo "<li>$value</li>";
                }
            }
        }
    ?>

    <br><br>
    <h2>Задание 12</h2>

    <?php
        $array = array('html', 'css', 'php', 'js', 'jq');
        foreach ($array as $i) {
            if ($i == $array[4]) {
                echo $i . ".";
            }
            else{
                echo $i . ", ";
            }
        }
    ?>

    <br><br>
    <h2>Задание 13</h2>

    <?php
        $array = array(10, 20, 15, 17, 24, 35);
        echo $result = array_sum($array);
    ?>

    <br><br>
    <h2>Задание 14</h2>

    <?php
        $arr = array("Коля" => 200, "Вася" => 300, "Петя" => 400);
        foreach ($arr as $key => $value) {
            echo $key . ' - зарплата ' . $value . ' долларов.' ."<br>";
        }
    ?>
    <br><br>
    <h2>Задание 15</h2>
    <?php
        $array = array(10, -20, 15, -17, 24, 35);
        $otr = 0;
        $pol = 0;
        foreach ($array as $i) {
            echo $i . ' ';
            if ($i < 0) {
                $otr+=$i;
            }
            if ($i >= 0) {
                $pol+=$i;
            }
        }
        echo '<br>' . 'Сумма отрицательных: ' . $otr . '<br>' . 'Сумма положительных: ' . $pol;
    ?>

    <br><br>

    <h2>Задание 16</h2>


    <?php
       $param = 20;
        function checkFunc($p)
        {
            if (gettype($p) == 'string') {
                $p = 'false';
            }
            else{
                if ($p > 170) {
                    $p = "Big";
                }
                else{
                    $p = "Small";
                }
            }
            echo $p;
        }
        checkFunc($param);
    ?>

<br><br>

<h2>Задание 17</h2>


<?php
    $param = 300;
    function func($p)
    {
        $elem = $p / 7;
        $gr = bcmod( $p,  7);
        echo 'Создано ' . intval($elem) . ' штук, ' . $gr . ' грамм';
    }
    func($param);
?>




</body>
</html>