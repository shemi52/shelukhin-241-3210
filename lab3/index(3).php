<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lab3</title>
    </head>
    <body>
        <p>задание #3</p>
        <?php
            $files = ['1.txt', '2.txt', '3.txt']; 
            $line = ''; 

            foreach ($files as $file) {
                if (file_exists($file)) {
                    $line .= file_get_contents($file); 
                } else {
                    echo "Файла $file нет <br>";
                }
            }

            file_put_contents('new.txt', $line);

            echo "check new.txt";
        ?>
    </body>
</html>