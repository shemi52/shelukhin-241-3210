<?php
if (isset($_POST['text'])) {
    $words = explode(' ', $_POST['text']);
    
    foreach ($words as $i => &$word) {
        if ($i % 2 == 1) {
            $word = mb_strtoupper($word);
        }
    }
    
    echo implode(' ', $words);
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        <textarea name="text" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Convert">
    </form>
</body>
</html>