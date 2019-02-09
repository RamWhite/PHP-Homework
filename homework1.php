<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Таблица умножения</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href = "homework1.css" rel = "stylesheet">
</head>
<body>
    <div>
    <h1>Задание №1</h1>
        <?php
            $array = array();
            $len = 10;
            $min = -10;
            $max = 10;
            for ($i = 0; $i < $len; $i++){
                $array[] = mt_rand($min, $max);
            }
            var_dump ($array);
        ?>
    </div>

    <div>
    <h1>Задание №2</h1>
        <?php
            
        ?>
    </div>

    <div>
    <h1>Задание №3</h1>
        <?php
            
        ?>
    </div>

    <div>
    <h1>Задание №4</h1>
        <?php
            
        ?>
    </div>

    <div class = "table">
    <h1>Задание №5 - Таблица умножения</h1>
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
    <h1>Дополнительное задание</h1>
        <?php
            
        ?>
    </div>
</body>
</html>

