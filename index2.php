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
        echo floor( (strtotime('01.01.'.date('Y')+1) - time()) /60 /60 /24);
    ?>

    <h2>Задание 2</h2>
    <form action="index2.php">
        <input name="year" type="number" placeholder="Введите год">
        <input type="submit" value="Отправить">
    </form>
    <br>
    <?php
        $year = $_GET['year'];
        if ($year % 4 != 0) {
            echo $year . " Не високосный год";
        }
        elseif ($year % 100 != 0)
        {
            echo $year . " Високосный год";
        }
        elseif($year % 400 != 0)
        {
            echo $year . " Не високосный год";
        }
        else
        {
            echo $year . " Високосный год";
        }
    ?>


        <h2>Задание 3</h2>

        <form action="index2.php">
        <input name="input3" type="date" placeholder="01.12.1990">
        <input type="submit" value="Отправить">
        </form>
        <br>

        <?php
            $input3 = $_GET['input3'];
            
            echo $input3;

            
            ?>
            <br>
            <?php
            $timestamp = strtotime($input3);
            $dawWeek = idate('w', $timestamp);
            $day = "";
            switch ($dawWeek) {
                case 1:
                    $day = "Понедельник";
                    break;
                case 2:
                    $day = "Вторник";
                    break;
                case 3:
                    $day = "Среда";
                    break;
                case 4:
                    $day = "Четверг";
                    break;
                case 5:
                    $day = "Пятница";
                    break;
                case 6:
                    $day = "Суббота";
                    break;
                case 7:
                    $day = "Воскресенье";
                    break;
            }
            echo $day;
        ?>


            <h2>Задание 4</h2>
            <?php
                $timestamp = strtotime("now");
                $day = date('d');
                $dawWeek = idate('w', $timestamp);
                $month = idate('m', $timestamp);
                $year = idate('Y', $timestamp);

                $dayText = "";
                $yearText = "";
                $monthText = "";

                switch ($dawWeek) {
                    case 1:
                        $dayW = "Понедельник";
                        break;
                    case 2:
                        $dayW = "Вторник";
                        break;
                    case 3:
                        $dayW = "Среда";
                        break;
                    case 4:
                        $dayW = "Четверг";
                        break;
                    case 5:
                        $dayW = "Пятница";
                        break;
                    case 6:
                        $dayW = "Суббота";
                        break;
                    case 7:
                        $dayW = "Воскресенье";
                        break;
                }
                

            switch ($month) {
                case 1:
                    $monthText = "Январья";
                    break;
                case 2:
                    $monthText = "Февараля";
                    break;
                case 3:
                    $monthText = "Марта";
                    break;
                case 4:
                    $monthText = "Апреля";
                    break;
                case 5:
                    $monthText = "Июнья";
                    break;
                case 6:
                    $monthText = "Июлья";
                    break;
                case 7:
                    $monthText = "Августа";
                    break;
                case 8:
                    $monthText = "Сентябрья";
                    break;
                case 9:
                    $monthText = "Октября";
                    break;
                 case 10:
                    $monthText = "Ноября";
                    break;
                 case 11:
                    $monthText = "Декабря";
                    break;
                case 12:
                    $monthText = "Февраля";
                    break;
                        
            }
            echo $day. " " . $monthText . " " . $year . " года" . " " . $dayW;

            ?>
            
            <h2>Задание 5</h2>
            <form action="index2.php">
                <input name="input4" type="date" placeholder="01.12.1990">
                <input type="submit" value="Отправить">
            </form>
        <br>

            <?php
                $input4 = $_GET['input4'];
                //echo $year;
                $yearBd = idate('Y', strtotime($input4));
                $yearN = idate('Y', strtotime("now"));
                $yearBd = $yearN - $yearBd;
                echo $yearBd - 1;
            ?>


            <h2>Задание 6</h2>
            <form action="index2.php">
                <input name="input5" type="date" placeholder="01.12.1990" min="2023-01-01" max="2023-12-31">
                <input type="submit" value="Отправить">
            </form>

            <?php
                 $input5 = $_GET['input5'];
                 $timestamp = strtotime($input5);
                 $month = idate('m', $timestamp);
                 $day = idate('d', $timestamp);

                 if( $month == 3 && $day >= 21 || $month == 4 && $day <= 19){
                    echo "Овен";
                 }
                 if( $month == 4 && $day >= 20 || $month == 5 && $day <= 20 ){
                    echo "Телец";
                 }
                 if( $month == 5 && $day >= 21 || $month == 6 && $day <= 20 ){
                    echo "Близнецы";
                 }
                 if( $month == 6 && $day >= 21 || $month == 7 && $day <= 22 ){
                    echo "Рак";
                 }
                 if( $month == 7 && $day >= 23 || $month == 8 && $day <= 22 ){
                    echo "Лев";
                 }
                 if( $month == 8 && $day >= 23 || $month == 9 && $day <= 22 ){
                    echo "Дева";
                 }
                 if( $month == 9 && $day >= 23 || $month == 10 && $day <= 22 ){
                    echo "Весы";
                 }
                 if( $month == 10 && $day >= 23 || $month == 11 && $day <= 21 ){
                    echo "Скорпион";
                 }
                 if( $month == 11 && $day >= 22 || $month == 12 && $day <= 21 ){
                    echo "Стрелец";
                 }
                 if( $month == 12 && $day >= 22 || $month == 1 && $day <= 19 ){
                    echo "Козерог";
                 }
                 if( $month == 1 && $day >= 20 || $month == 2 && $day <= 18 ){
                    echo "Козерог";
                 }
                 if( $month == 2 && $day >= 19 || $month == 3 && $day <= 20 ){
                    echo "Рыбы";
                 }
            ?>



            <h2>Задание 7</h2>
            <?php
                $today = date("Ymd");
                //echo $today;
                $array = array(
                    "20230216" => "Поздравляю с днем пива!",
                    "20230217" => "Сегодня, день позитива, поздравляю",
                    "20230218" => "Сегодня Всемирный день управления информацией, поздравляю",
                    "20230219" => "День разведки ВМФ России",
                    "20230220" => "День архива Минэнерго России",
                    "20230221" => "День восстановления Литовского государства",
                    "20230222" => "Битва Апельсинов",
                    "20230223" => "День батарейки",
                    "20230224" => "День орнитолога в России",
                );
                
                foreach ($array as $key => $value) {
                    if($key == $today){
                        echo $array[$key];
                    }
                }
            ?>

            <h2>Задание 8</h2>
            <?php

            ?>

            <h2>Задание 9</h2>
            <form action="index2.php">
                <textarea name="ta" id="ta" cols="30" rows="10"></textarea>
                <input type="submit">
            </form>

            <?php
                $ta = $_GET['ta'];
                $taWithOutSpace = str_replace(array(" "), '', $ta);
                echo "Количество символов с пробелами: " . mb_strlen($ta, 'utf-8');
            ?>
            <br>
            <?php
                echo "Количество символов без пробелов: " . mb_strlen($taWithOutSpace, 'utf-8');
            ?>

            <h2>Задание 10</h2>

            <h2>Задание 11</h2>
            <form action="index2.php">
                <input name="input5" type="date" placeholder="01.12.1990" min="2023-01-01" max="2023-12-31">
                <input type="submit" value="Отправить">
            </form>

        
</body>
</html>