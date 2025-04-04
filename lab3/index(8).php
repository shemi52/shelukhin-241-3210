<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lab3</title>
    </head>
    <body>
        <p>задание #8</p>
        <?php
            $file = 'test2.txt'; 
            $second = 'copy.txt';
            if (!file_exists($file)){
                echo "нет файла $file";
            }
            if (file_exists($file)){
                copy($file, $second);
                echo "файл скопирован";
            }
        ?>
    </body>
</html>