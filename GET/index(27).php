<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hw 1</title>
    </head>
    <body style = "background-color:black; color:white;">
        <header style="display: flex; gap:200px; margin-bottom:100px;">
            <img src = "/hw1/logo.svg" style = "height: 100px;"></img>
            <p style="text-align: center;">
                <?php 
                    echo"GET";
                ?>
            </p>
        </header>
        <main>
            <p>
                <?php 
                    if (isset($_GET['number'])){
                        $number = $_GET['number'];
                        if ($number == '1'){
                            echo "Привет";
                        } elseif ($number == '2'){
                                echo "Пока";
                            } else{
                                echo "нет числа или это не 1 и не 2";
                            }
                        }
                ?>
            </p>
        </main>
        <footer>
            <p>
                <?php 
                    echo"Mospolytech";
                ?>
            </p>
    </footer>
    </body>
</html>