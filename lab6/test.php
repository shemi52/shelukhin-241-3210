<?php
session_start();
if (!isset($_SESSION['user_country'])) {
    header('Location: index.php'); // Перенаправляем если страна не указана
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ваша страна</title>
</head>
<body>
    <h1>Вы указали страну: <?= $_SESSION['user_country'] ?></h1>
    <a href="index.php">Вернуться назад</a>
</body>
</html>