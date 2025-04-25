<?php
namespace src\Controllers;

use src\Models\Comments\Comment;
use src\View\View;
use src\Services\Db;
use src\Models\Articles\Article;
use src\Models\Users\User;
use Exception;

class ArticleController 
{
    private $view; // Объект для работы с представлениями
    private $db;   // Объект для работы с базой данных

    public function __construct()
    {
        // Инициализация объекта View с указанием пути к шаблонам
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
        // Получение экземпляра подключения к БД
        $this->db = Db::getInstance();
    }

    // Отображение списка всех статей
    public function index() {
        $articles = Article::findAll(); // Получаем все статьи из БД
        $this->view->renderHtml('main/main', ['articles' => $articles]); // Рендерим шаблон со статьями
    }

    // Отображение конкретной статьи
    public function show(int $id) 
    {
        $article = Article::getById($id); // Получаем статью по ID
        if (!$article) {
            throw new NotFoundException(); // Если статья не найдена
        }

        // Получаем комментарии к статье или пустой массив
        $comments = Comment::findAllByArticleId($id) ?? []; 
        
        // Отображаем шаблон статьи с данными
        $this->view->renderHtml('article/show', [
            'article' => $article,
            'author' => $article->getAuthor(),
            'comments' => $comments
        ]);
    }

    // Удаление статьи
    public function delete(int $id) 
    {
        $article = Article::getById($id); // Находим статью
        if (!$article) {
            throw new NotFoundException();
        }
        $article->delete(); // Удаляем статью
        header("Location: http://localhost/shelukhin-241-3210-1/Project/www/"); // Редирект
    }
    
    // Форма создания статьи
    public function create(){
        return $this->view->renderHtml('article/create'); // Отображаем форму
    }

    // Форма редактирования статьи
    public function edit(int $id){
        $article = Article::getById($id); // Получаем статью
        return $this->view->renderHtml('/article/edit', ['article'=>$article]); // Форма редактирования
    }

    // Обновление статьи
    public function update(int $id)
    {
        $article = Article::getById($id); // Находим статью
        if (!$article) {
            throw new NotFoundException();
        }
        // Обновляем данные из формы
        $article->setName($_POST['name']);
        $article->setText($_POST['text']);
        $article->save(); // Сохраняем изменения
        header("Location: http://localhost/shelukhin-241-3210-1/Project/www/"); // Редирект
    }

    // Сохранение новой статьи
    public function store() 
    {
        $article = new Article(); // Создаем новую статью
        // Устанавливаем данные из формы
        $article->setName($_POST['name']);
        $article->setText($_POST['text'] ?? '');
        $article->setAuthorId(1); // Временное решение (автор)
        $article->save(); // Сохраняем в БД
        header("Location: http://localhost/shelukhin-241-3210-1/Project/www/"); // Редирект
    }
}