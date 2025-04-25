<?php
// Регистрируем функцию автозагрузки классов
spl_autoload_register(function(string $className) {
    // Преобразуем namespace в путь к файлу
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    // Формируем абсолютный путь к файлу класса
    $fullPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . $filePath;

    if (file_exists($fullPath)) {
        require_once $fullPath;
    } else {
        throw new Exception("{$fullPath}");
    }
});


$findRoute = false; // Флаг для проверки найденного маршрута
$route = $_GET['route'] ?? ''; // Получаем маршрут из GET-параметра

// Подключаем массив с шаблонами маршрутов
$patterns = require 'route.php';
// Перебираем все шаблоны маршрутов
foreach ($patterns as $pattern => $controllerAndAction) {
    // Проверяем соответствие URL шаблону
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $findRoute = true;
        unset($matches[0]); // Удаляем полное совпадение с шаблоном
        
        $controllerClass = $controllerAndAction[0]; // Класс контроллера
        $action = $controllerAndAction[1]; // Метод контроллера
        
        $controller = new $controllerClass(); // Создаем экземпляр контроллера
        $controller->$action(...$matches); // Вызываем метод с параметрами
        break;
    }
}
// Если маршрут не найден, выводим сообщение
if (!$findRoute) echo "Page not found (404)";