<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback form</title>
    <style>
        header {display: flex;gap: 100px; margin-bottom: 100px;}
        body { color: white; background-color: black;}
    </style>
</head>
<body>
    <header>
        <img src="../hw1/logo.svg" alt="Лого" style="height: 100px; ">
        <h1>Feedback form</h1>
    </header>
    <main>
        <textarea>
            <?php 
                print_r(getallheaders());
            ?>
        </textarea>
    </main>
    <footer>
        <p style="padding-left: 300px;">
            <?php 
                echo"Mospolytech";
            ?>
        </p>
    </footer>
</body>
</html>