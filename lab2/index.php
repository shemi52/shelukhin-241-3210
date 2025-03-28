<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lab2</title>
    </head>
    <body>
        <p>задание #1</p>
        <?php 
            $array = ['a', 'b', 'c', 'd', 'a'];
            print_r(array_count_values($array));
        ?>

        <p>задание #8</p>
        <?php
            $array_product = [1,2,3,4,5];
            print_r(array_product($array_product))
        ?>
        <p>задание #27</p>
        <?php
           if (isset($_GET['number'])) {
            $number = $_GET['number'];
        
            if ($number == 1) {
                echo "привет";
            } elseif ($number == 2) {
                echo "пока";
        }}
        ?>
    </body>
</html>