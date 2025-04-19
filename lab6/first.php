<?php
// Стартуем сессию
session_start();

// Если в сессии нет данных, записываем 'test'
if (!isset($_SESSION['test_data'])) {
    $_SESSION['test_data'] = 'test';
    echo "Значение 'test' записано в сессию. Обновите страницу.";
} else {
    // Если данные есть — выводим их
    echo "Содержимое сессии: " . $_SESSION['test_data'];
}
?>