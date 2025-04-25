<?php
// Пространство имен для контроллера
namespace src\Controllers;

// Импорт класса View для работы с представлениями
use src\View\View;

class MainController 
{
    // Приватное свойство для хранения объекта View
    private $view;
    
    // Конструктор класса
    public function __construct()
    {
        // Инициализация объекта View с указанием пути к шаблонам
        // dirname(dirname(__DIR__)) - поднимаемся на 2 уровня выше от текущей директории
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
    }
    
    // Метод для приветствия пользователя
    public function sayHello(string $name)
    {
        // Рендеринг шаблона hello с передачей имени в шаблон
        $this->view->renderHtml('main/hello', ['name' => $name]);
    }

    // Метод для прощания с пользователем
    public function sayBye(string $name)
    {
        // Рендеринг шаблона bye с передачей имени в шаблон
        $this->view->renderHtml('main/bye', ['name' => $name]);
    }
}