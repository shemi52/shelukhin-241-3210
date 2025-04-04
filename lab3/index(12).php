<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lab3</title>
    </head>
    <body>
        <p>задание #12</p>
        <?php
            $file = 'old.txt'; 
            $newfile = 'new2.txt';
            if (!file_exists($file)){
                echo "нет файла $file";
            }
            if (file_exists($file)){
                rename($file, $newfile);
                echo "файл был успешно переименован";
            }
        ?>
    </body>
</html>