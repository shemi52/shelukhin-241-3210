<?php
session_start();

// Записываем время первого захода, если его еще нет
if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time();
    $message = "Вы только что зашли на сайт!";
} else {
    // Вычисляем разницу времени
    $secondsAgo = time() - $_SESSION['first_visit_time'];
    $message = "С момента вашего первого захода прошло: $secondsAgo секунд";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Счетчик времени</title>
</head>
<body>
    <h1><?= $message ?></h1>
    <p>Обновите страницу, чтобы увидеть обновленное время.</p>
    
    <!-- Кнопка для сброса -->
    <form method="post">
        <button type="submit" name="reset">Сбросить время</button>
    </form>

    <?php
    // Обработка сброса
    if (isset($_POST['reset'])) {
        unset($_SESSION['first_visit_time']);
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
    ?>
</body>
</html>