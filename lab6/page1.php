<?php
session_start();
$_SESSION['message'] = 'test';

echo "Перейдите на <a href='page2.php'>page2.php</a>";
?>