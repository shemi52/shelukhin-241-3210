<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lab3</title>
    </head>
    <body>
        <p>задание #5</p>
        <?php
            $file = 'count.txt'; 
            $count = (int)file_get_contents($file);
            $count++;
            file_put_contents($file, $count);
            echo "страница была обновленна $count раз";
        ?>
    </body>
</html>