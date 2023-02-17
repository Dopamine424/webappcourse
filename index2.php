<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <?php     
        // ini_set('display_errors', 0);
        // ini_set('display_startup_errors', 0);
        // error_reporting(E_ALL); 
    ?> -->
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
            <form action="index2.php">
                <textarea name="ta2" id="ta2" cols="30" rows="10"></textarea>
                <input type="submit">
            </form>

            <?php 
                $ta2 = $_GET['ta2'];
                foreach (count_chars($ta2, 1) as $i => $val) {
                    echo chr($i) . round($val / count((str_split($ta2))), 2);
                    echo (" ");
                 }
            ?>


            <h2>Задание 11</h2>
            <form action="index2.php">
                <input name="input6" type="text">
                <input type="submit" value="Отправить">
            </form>

            <?php

                $input6 = $_GET['input6'];
                function translit($value)
                {
                    $converter = array(
                
                        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
                
                        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
                
                        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
                
                        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
                
                        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
                
                        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
                
                        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
                
                 
                
                        'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
                
                        'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
                
                        'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
                
                        'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
                
                        'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
                
                        'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
                
                        'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
                    );
                
                    $value = strtr($value, $converter);
                
                    return $value;
                
                }

                echo translit($input6);
            ?>


                <h2>Задание 12</h2>
                <form action="index2.php">
                <input name="input7" type="text">
                <label for="rad">Транслит</label>
                <input type="radio" name="radio" id="radio" value = "1">
                <label for="rad">Обычный</label>
                <input type="radio" name="radio" id="radio" value = "2"> <br><br>
                <input type="submit" value="Отправить">
                </form>
                
                <?php
                                    $radio = $_GET['radio'];
                                    $input7 = $_GET['input7'];
                                    function translit2($value)
                                    {
                                        $converter = array(
                                    
                                            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
                                    
                                            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
                                    
                                            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
                                    
                                            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
                                    
                                            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
                                    
                                            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
                                    
                                            'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
                                    
                                     
                                    
                                            'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
                                    
                                            'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
                                    
                                            'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
                                    
                                            'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
                                    
                                            'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
                                    
                                            'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
                                    
                                            'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
                                        );
                                    
                                        $value = strtr($value, $converter);
                                    
                                        return $value;
                                    
                                    }
                                    if ($radio == 1) {
                                        echo translit($input7);
                                    }
                                    else
                                    {
                                        echo $input7;
                                    }
                                    ?>
                            <?php
                    
                                    // echo translit($input6);
                ?>


                                    <h2>Задание 13</h2>
                                
                                    

                                    <?php
                                        $array_query = array(
                                         "1+1" => ["2"],
                                         "2+2" =>  ["4"],
                                         "3+3" => ["6"],
                                         "4+4" =>  ["8"],
                                         "5+5" =>  ["10"],
                                    );
                                    ?>

                                    <?php
                                        // $array_query = array('1+1','2+2','3+3','4+4','5+5');//вопрос
                                        // $array_answer = array('2','4','6','8','10');//ответ
                                        $count_array = count($array_query);
                                    ?>
                                    <form action="index2.php">
                                        <input type="text" name="answer" id="a" placeholder="<?php echo $array_query[0][0]; ?>">
                                        <input type="text" name="answer_1" id="a" placeholder="<?php echo $array_query[1][1]; ?>">
                                        <input type="text" name="answer_2" id="a" placeholder="<?php echo $array_query[2][1]; ?>">
                                        <input type="text" name="answer_3" id="a" placeholder="<?php echo $array_query[3][1]; ?>">
                                        <input type="text" name="answer_4" id="a" placeholder="<?php echo $array_query[4][1]; ?>">
                                        <input type="submit" value="Отправить.">
                                    </form>
                                    <?php
                                        
                                //     $answer_0 = strval($_GET['answer']);
                                //     $answer_1 = strval($_GET['answer_1']);
                                //     $answer_2 = strval($_GET['answer_2']);
                                //     $answer_3 = strval($_GET['answer_3']);
                                //     $answer_4 = strval($_GET['answer_4']);//добавить ,если ответов больше 5-ти

                                //     $answer = array(
                                //         "1+1" => [$answer_0],
                                //         "2+2" =>  [$answer_1],
                                //         "3+3" => [$answer_2],
                                //         "4+4" =>  [$answer_3],
                                //         "5+5" =>  [$answer_4],
                                //    );
                                    // $answer_array_push = array();
                                    //  array_push($answer_array_push,$answer_0,$answer_1,$answer_2,$answer_3,$answer_4);//тоже добавить, если вопросов и ответов более 5-ти
                                    //   for($i = 0; $i < $count_array; $i++) {
                                    //        if($answer_array_push[$i] == $array_query[$i]) {
                                    //          echo "<span style='color: green'>Great answer:  ".$array_query[][$i]."   </span>";
                                    //       }
                                    //       else{
                                    //            echo "<span style='color: red'>   not answer: ".$answer_array_push[$i]."    for query:   ".$array_query[][$i]."   </span>";
                                    //      }
                                    // }
                                    // foreach ($array_query as $key => $value) {
                                    //     if ($array_query[$key][$value] == $answer[$key][$value]) {
                                    //         echo "<span style='color: green'>Great answer:  ".$answer[$key][$value]."   </span>";
                                    //     }
                                    //     else{
                                    //         echo "<span style='color: red'>".$answer[$key][$value]."   </span>";
                                    //         }
                                    // }
                                        
                                    ?>

                                    <h2>Задание 14</h2>
                                    <form action="index2.php">
                                        <input name="day14" type="number" id="day14" min="1" max="31">
                                        <select id="month14" name="month14">
                                        <option value="1">янв</option>
                                        <option value="2">фев</option>
                                        <option value="3">март</option>
                                        <option value="4">арп</option>
                                        <option value="5">май</option>
                                        <option value="6">июнь</option>
                                        <option value="7">июль</option>
                                        <option value="8">авг</option>
                                        <option value="9">сен</option>
                                        <option value="10">окт</option>
                                        <option value="11">ноя</option>
                                        <option value="12">дек</option>
                                    </select>
                                    <input name="year14" id="year14" type="number" min="1990" max="2025">
                                    <input type="submit" value="Отправить">
                                    </form>

                                    <?php
                                        $day14 = $_GET['day14'];
                                        $month14 = $_GET['month14'];
                                        $year14 = $_GET['year14'];
                                        if ($day14 < 10) {
                                            $day14 = 0 . $day14;
                                        }
                                        if ($month14 < 10) {
                                            $month14 = 0 . $month14;
                                        }

                                        $date14 = $year14.$month14.$day14;
                                        echo $date14;

                                        
                                        

                                        $yearS = idate('w', strtotime($date14));

                                        switch ($yearS) {
                                            case 1:
                                                $dayWW = "Понедельник";
                                                break;
                                            case 2:
                                                $dayWW = "Вторник";
                                                break;
                                            case 3:
                                                $dayWW = "Среда";
                                                break;
                                            case 4:
                                                $dayWW = "Четверг";
                                                break;
                                            case 5:
                                                $dayWW = "Пятница";
                                                break;
                                            case 6:
                                                $dayWW = "Суббота";
                                                break;
                                            case 7:
                                                $dayWW = "Воскресенье";
                                                break;
                                        }
                                        echo $dayWW;


                                    ?>



                                


        
</body>
</html>