<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GET</title>
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
                    if (isset($_GET['value'])){
                        $val = $_GET['value'];
                        echo $val;
                    } else{
                        echo"числа нет";
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