<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['country'])) {
    $_SESSION['user_country'] = htmlspecialchars($_POST['country']);
    header('Location: test.php'); 
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Выбор страны</title>
</head>
<body>
    <?php if (!isset($_SESSION['user_country'])): ?>
        <h2>Укажите вашу страну:</h2>
        <form method="POST" action="">
            <input type="text" name="country" required>
            <button type="submit">Сохранить</button>
        </form>
    <?php else: ?>
        <p>Ваша страна уже сохранена: <?= $_SESSION['user_country'] ?></p>
        <a href="test.php">Перейти на test.php</a>
    <?php endif; ?>
</body>
</html>