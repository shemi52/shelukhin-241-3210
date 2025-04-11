<?php
if (isset($_GET['expression'])) {
    $input = $_GET['expression'];
    $result = evaluateExpression($input);
    echo $result;
}

function evaluateExpression($expr) {
    $expr = trim($expr);
    if (empty($expr)) return 'Введите выражение';
    
    if (!checkParentheses($expr)) {
        return 'Ошибка в скобках';
    }
    
    $expr = str_replace(' ', '', $expr);
    
    // Обработка отрицательных чисел
    $expr = preg_replace('/^\-/', '0-', $expr);
    $expr = preg_replace('/([\+\-\*\/\()])\-/', '$1(0-1)*', $expr);
    
    // Рекурсивный расчет скобок
    while (preg_match('/\(([^\(\)]+)\)/', $expr, $match)) {
        $inner = calculateBasic($match[1]);
        $expr = str_replace($match[0], $inner, $expr);
    }
    
    return calculateBasic($expr);
}

function calculateBasic($expr) {
    // Умножение и деление
    while (preg_match('/(-?\d+\.?\d*)([\*\/])(-?\d+\.?\d*)/', $expr, $m)) {
        $result = ($m[2] === '*') ? $m[1] * $m[3] : $m[1] / $m[3];
        $expr = str_replace($m[0], $result, $expr);
    }
    
    // Сложение и вычитание
    while (preg_match('/(-?\d+\.?\d*)([+-])(-?\d+\.?\d*)/', $expr, $m)) {
        $result = ($m[2] === '+') ? $m[1] + $m[3] : $m[1] - $m[3];
        $expr = str_replace($m[0], $result, $expr);
    }
    
    return is_numeric($expr) ? round($expr, 4) : 'Ошибка';
}

function checkParentheses($s) {
    $balance = 0;
    foreach (str_split($s) as $c) {
        if ($c === '(') $balance++;
        if ($c === ')') $balance--;
        if ($balance < 0) return false;
    }
    return $balance === 0;
}
?>