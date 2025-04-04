<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback form</title>
    <style>
        header {display: flex;gap: 100px; margin-bottom: 100px;}
        body { color: white; background-color: black;}
        .cont { width: 100%; margin: 0 300px; }
        .int{margin-bottom: 10px;}
    </style>
</head>
<body>
    <header>
        <img src="../hw1/logo.svg" alt="Лого" style="height: 100px; ">
        <h1>Feedback form</h1>
    </header>
    <div class="cont">
        <form action="https://httpbin.org/post" method="post">
            <input type="text" name="username" required placeholder="Имя пользователя" aria-label="Имя пользователя" class="int"><br> 
            <input type="email" name="email" required placeholder="Почта" aria-label="Имя пользователя" class="int"><br>
            
            <label>Тип обращения:</label>
            <select name="type" class="int">
                <option value="complaint">Жалоба</option>
                <option value="suggestion">Предложение</option>
                <option value="thanks">Благодарность</option>
            </select><br>
            <textarea name="message" required aria-label="Текст обращения" placeholder="Текст обращения" class="int"></textarea><br>
            <label>Как вам ответить:</label>
            <input type="checkbox" name="response_sms" value="sms" class="int"> СМС
            <input type="checkbox" name="response_email" value="email"> Почта<br>
            <button type="submit">Отправить</button>
        </form>
        <a href="main2.php" style="text-decoration: none; color: gray;">Страница №2</a>
    </div>
    <footer>
        <p style="padding-left: 300px;">
            <?php 
                echo"Mospolytech";
            ?>
        </p>
    </footer>
</body>
</html>