<?php
session_start();
if (!isset($_SESSION['refresh_count'])) {
    $_SESSION['refresh_count'] = 0;
    $message = "Вы еще не обновляли страницу.";
} else {
    $_SESSION['refresh_count']++;
    $message = "Количество обновлений: " . $_SESSION['refresh_count'];
}
echo $message;
?>