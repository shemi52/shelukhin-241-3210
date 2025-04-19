<?php
    echo "№1<br>";
    $str = 'a1b2c3';
    $result = preg_replace('/(\d)/', '$1$1', $str);
    echo "$result <br><br> №2 <br>";

    $str = '5 10 3';
    $result = preg_replace_callback('/-?\d+/', function($matches) {
    $number = (int)$matches[0];
    return $number * $number;}, $str);
    echo "$result<br><br>№3<br>"; 

    $str = '2+3 223 2223';
    preg_match('/2\+3/', $str, $matches);
    $res = $matches[0]; 
    echo "$res<br><br>№4<br>";

    $str = 'aa aba abba abbba abca abea';
    preg_match_all('/\bab?a\b/', $str, $matches);
    print_r($matches[0]);
?>