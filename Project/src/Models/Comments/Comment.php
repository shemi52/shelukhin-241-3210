<?php
// Модель для работы с комментариями
namespace src\Models\Comments;

use src\Models\ActiveRecordEntity;
use src\Models\Users\User;
use src\Services\Db;
use DateTime;

class Comment extends ActiveRecordEntity
{
    // Свойства модели
    protected $comment_text; // Текст комментария
    protected $user_id;     // ID автора
    protected $article_id;  // ID статьи
    protected $created_at;  // Дата создания

    // Получить текст комментария (с экранированием HTML)
    public function getText(): string
    {
        return htmlspecialchars($this->comment_text);
    }

    // Получить автора комментария
    public function getAuthor(): User
    {
        return User::getById($this->user_id);
    }

    // Получить ID статьи
    public function getArticleId(): int
    {
        return $this->article_id;
    }

    // Получить дату в формате d.m.Y H:i
    public function getCreatedAt(): string
    {
        $date = new DateTime($this->created_at);
        return $date->format('d.m.Y H:i');
    }

    // Установить текст комментария (с обрезкой пробелов)
    public function setText(string $text): void
    {
        $this->comment_text = trim($text);
    }

    // Установить ID автора
    public function setAuthorId(int $authorId): void
    {
        $this->user_id = $authorId;
    }

    // Установить ID статьи 
    public function setArticleId(int $articleId): void
    {
        $this->articleId = $articleId;
    }

    // Найти все комментарии для статьи
    public static function findAllByArticleId(int $articleId): array
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM `'.static::getTableName().'` 
                WHERE `article_id` = :article_id 
                ORDER BY `created_at` DESC';
        $result = $db->query($sql, [':article_id' => $articleId], static::class);
        return $result ?: [];
    }

    // Получить имя таблицы в БД
    protected static function getTableName(): string
    {
        return 'comments';
    }
}