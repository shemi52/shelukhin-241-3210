<?php
session_start();
if (isset($_SESSION['message'])) {
    echo "Данные из сессии: " . $_SESSION['message'];
} else {
    echo "В сессии нет данных. Вернитесь на <a href='page1.php'>page1.php</a>";
}
?>