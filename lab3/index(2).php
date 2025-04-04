<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lab3</title>
    </head>
    <body>
        <p>задание #2</p>
        <?php
            $file = 'test.txt'; 
            $text = '12345';
            file_put_contents($file, $text);
            echo "Данные в $file";
        ?>
    </body>
</html>