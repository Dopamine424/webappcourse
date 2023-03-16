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
        // ini_set('display_errors', 0);
        // ini_set('display_startup_errors', 0);
        // error_reporting(E_ALL); 
    ?>
    <h2>Задание 1</h2>
    <?php
         function isNumberInRange($param){
            if ($param > 0 && $param < 10 ) return true;
            else return false;
         }
        echo isNumberInRange(5);
    ?>
    <h2>Задание 2</h2>
    <?php
         function isEven($param){
            if ($param % 2 == 0) return true;
            else return false;
         }
        echo isEven(10);
    ?>
    <h2>Задание 3</h2>
    <?php
        $arr1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $arr2 = array();
        foreach ($arr1 as $i) {
            if (isEven($arr1[$i]) == 1) $arr2[$i] = $arr1[$i];
            echo $arr2[$i];
        }
       

    ?>

<h2>Задание 4</h2>
    <?php
        function cut($string, $value = 10){
            echo mb_substr($string, 0, $value, "UTF-8");
        }
        cut("Привет");
    ?>

    <h2>Задание 5</h2>
        <?php
            $numb = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

            function printArray($arr, $i) {
                echo $arr[$i];
                $arr[$i] += 1;
                if($arr[$i] <= count($arr))
                    printArray($arr, $i);
            }

            printArray($numb, 0);
        ?>


    <h2>Задание 6</h2>
        <?php
            if( is_file("text.txt") ){
                if( is_readable("text.txt") ){
                    readfile("text.txt");
                  }    
            }

            $lines = file("text.txt");;
            $f = fopen("text.txt", "r");
            while ( $lines[] = fgets($f) );
            fclose($f);
            foreach ($lines as $i) {
                echo $lines[$i];
            }
            
        ?>




    <h2>Задание 7</h2>
        <?php
            $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
            if($pageWasRefreshed) {
                $numberOfUpdates = file_get_contents("count.txt");
                file_put_contents("count.txt", $numberOfUpdates = $numberOfUpdates + 1);
                echo $numberOfUpdates;
            }
        ?>

        
    <h2>Задание 8</h2>
        <?php
            $files = array(
                '1' => file_get_contents("1.txt"),
                '2' => file_get_contents("2.txt"),
                '3' => file_get_contents("3.txt")
            );
            // foreach ($files as $i) {
            //     file_put_contents("$i.txt", "!", FILE_APPEND);
            // }
            foreach ($files as $key => $value) {
                file_put_contents("$key.txt", "!", FILE_APPEND);
            }
        ?>

    <h2>Задание 9</h2>
        <?php
            session_start();
            if (!isset($_SESSION['counter']))
                $_SESSION['counter'] = 0;
            echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";
            session_save_path('С:\temp');

        ?>


        <h2>Задание 10</h2>
            <label for="email">Введите вашу почту</label>
            <input type="email" name="email" id="email">
        <?php
            
        ?>

        <br><br>
        <form action="index3.php">

            <label for="first_name">Ваше имя</label>
            <input type="text" name="first_name" id="first_name">

            <label for="last_name">Ваша Фамилия</label>
            <input type="text" name="last_name" id="last_name">

            <label for="pass">Ваш пароль</label>
            <input type="password" name="pass" id="pass">
            
            <label for="email">Ваша почта</label>
            <input type="email" name="email" id="email">
        </form>
</body>
</html>