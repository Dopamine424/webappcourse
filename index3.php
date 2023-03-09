<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            function printArray(array $arr){
                $end = end($arr);
                if($arr[$end] === null) return $arr;
                else{
                    array_push($arr,);
                }
            }
        ?>
</body>
</html>