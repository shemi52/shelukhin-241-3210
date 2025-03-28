<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lab1</title>
    </head>
    <body>
        <p>задание #1</p>
        <?php 
            $a = 27;
            $b = 12; 
            $c = sqrt($a*$a+$b*$b);
            echo round($c, 2);
        ?>

        <p>задание #11</p>
        <?php
            $quieter = 'Тише'; $go = 'еде'; $further = 'дальше';
            echo("$quieter $go, $further");
        ?>
        <p>задание #21</p>
        <?php
           $a = 5.7;
           $b = 8.3;
           $c = '5.6';
           $d = '9.2кг';
            echo("floor <br> $a = ".floor($a) . "<br>" . "$b = ".floor($b) . "<br>" . "$c = ".floor((float)$c) . "<br>" . "$d = ".floor((float)$d)) . "<br> <br>";
            echo("ceil <br> $a = ".ceil($a) . "<br>" . "$b = ".ceil($b) . "<br>" . "$c = ".ceil((float)$c) . "<br>" . "$d = ".ceil((float)$d)) . "<br> <br>";
            echo("round <br> $a = ".round($a) . "<br>" . "$b = ".round($b) . "<br>" . "$c = ".round((float)$c) . "<br>" . "$d = ".round((float)$d));
        ?>
    </body>
</html>