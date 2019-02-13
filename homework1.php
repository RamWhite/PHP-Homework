<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Таблица умножения</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background: url(https://pp.userapi.com/c851416/v851416947/b1421/hpCYd8xgwPY.jpg);
            background-attachment: fixed;
        }

        div{
            color: beige;
            padding: 30px 0 30px 0;
        }

        h1{
            color: beige;
        }

        table{
            border-collapse: collapse;
            border: 3px solid beige;
        }

        td{
            border: 2px solid beige;
            padding: 5px;
            color: beige;
        }
    </style>
</head>
<body>
    <div>
    <h1>Задание №1 (готово)</h1>
        <?php
            $array = array();
            for ($i = 0; $i < 10; $i++){
                $array[] = mt_rand(-10, 10);
            }

            //Без min и max
            echo "<h3>Методом перебора</h3>";
            $min = $array[0];
            foreach ($array as $key){
                if ($key < $min){
                    $min = $key;
                }
            }
            $my_min_weight = array_keys($array, $min)[0];
            echo "<br>Индекс min числа: " , $my_min_weight , "<br>Минимальный элемент: " , $min;;

            $max = $array[0];
            foreach ($array as $key){
                if ($key > $max){
                    $max = $key;
                }
            }
            $my_max_weight = array_keys($array, $max)[0];
            echo "<br>Индекс max числа: " , $my_max_weight , "<br>Максимальный элемент: " , $max;

            //С использованием min и max
            echo "<h3>Через функции</h3>";
            $min_weight = array_keys($array, min($array))[0];
            $max_weight = array_keys($array, max($array))[0];
            echo "<br>" , "Индекс min числа: " , $min_weight, "<br>" , "Минимальный элемент: " , min($array);
            echo "<br>" , "Индекс max числа: " , $max_weight, "<br>" , "Максимальный элемент: " , max($array);
        ?>
    </div>

    <div>
    <h1>Задание №2 (готово)</h1>
        <?php
            $array = array();
            for ($i = 0; $i < 10; $i++){
                $array[] = mt_rand(-10, 10);
            }

            $l = 1;
            $count = 0;
            foreach ($array as $key){
                if (($key % 3 == 0 || $key % 2 == 0) && $key % 6 != 0){
                    echo $key , "; ";
                    $count++;
                    $l *= $key;
                }
            }
            echo "<br>Количество: " , $count;
            echo "<br>Произведение: " , $l;
        ?>
    </div>

    <div>
    <h1>Задание №3</h1>
        <?php
            $array = array();
            for ($i = 0; $i < 10; $i++){
                $array[] = mt_rand(-10, 10);
            }

            print_r ($array);

            $s = 0;
            foreach (array_keys($array) as $key){
                if (pow($key, 2) > 16){
                    $s += $key;
                }
            }
            echo "<br>Сумма индексов: " , $s;
        ?>
    </div>

    <div>
    <h1>Задание №4 (готово)</h1>
        <?php
            $array = array();
            for ($i = 0; $i < 3; $i++){
                for ($j = 0; $j < 3; $j++)
                    $array[] = mt_rand(-10, 10);
            }

            print_r ($array);

            foreach ($array as $key){
                echo "<tr>";
                foreach ($key as $data){
                    echo "<td>{$data}</td>";
                }
                    echo "<tr>";
            }
        ?>
    </div>

    <div class = "table">
    <h1>Задание №5 - Таблица умножения (готово)</h1>
        <table>
            <?php
                for ($i = 1; $i <= 10; $i++){
                    echo "<tr>";

                    for ($j = 1; $j <= 10; $j++)
                        echo "<td>" , "$j * $i = ", $i * $j , "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>

    <div>
        <h1>Задание №6 (готово)</h1>
        <?php
            $array = array();
            $array1 = array();
            $array2 = array();
            $array_other = array();
            for ($i = 0; $i < 10; $i++){
                $array[] = mt_rand(1, 4);
            }

            print_r($array);

            foreach ($array as $key){
                if ($key == 1){
                    array_push ($array1, $key);
                }
                else if ($key == 2){
                    array_push ($array2, $key);
                }
                else if ($key >= 3){
                    array_push ($array_other, $key);
                }
            }
            echo "<br>";
            print_r ($array1);
            echo "<br>";
            print_r ($array2);
            echo "<br>";
            print_r ($array_other);
        ?>
    </div>

    <div>
    <h1>Дополнительное задание (готово)</h1>
        <?php
            $array = array();
            for ($i = 0; $i < 3; $i++){
                for ($j = 0; $j < 3; $j++)
                    $array[] = mt_rand(-10, 10);
            }

            //Без min и max
            echo "<h3>Методом перебора</h3>";
            $min = $array[0];
            foreach ($array as $key){
                if ($key < $min){
                    $min = $key;
                }
            }
            $my_min_weight = array_keys($array, $min)[0];
            echo "<br>Индекс min числа: " , $my_min_weight;
            echo "<br>Минимальный элемент: " , $min;

            $max = $array[0];
            foreach ($array as $key){
                if ($key > $max){
                    $max = $key;
                }
            }
            $my_max_weight = array_keys($array, $max)[0];
            echo "<br>Индекс max числа: " , $my_max_weight;
            echo "<br>Максимальный элемент: " , $max;


            //С использованием min и max
            echo "<h3>Через функции</h3>";
            $min_weight = array_keys($array, min($array))[0];
            $max_weight = array_keys($array, max($array))[0];
            echo "<br>" , "Индекс min числа: " , $min_weight, "<br>" , "Минимальный элемент: " , min($array);
            echo "<br>" , "Индекс max числа: " , $max_weight, "<br>" , "Максимальный элемент: " , max($array);
        ?>
    </div>
</body>
</html>

