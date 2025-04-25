<?php
// Определение пространства имен для модели статей
namespace src\Models\Articles;

// Импорт необходимых классов
use src\Models\ActiveRecordEntity;  // Базовый класс для Active Record
use src\Models\Users\User;         // Модель пользователя

// Класс Article, наследуемый от ActiveRecordEntity
class Article extends ActiveRecordEntity
{
    // Защищенные свойства модели, соответствующие полям таблицы
    protected $name;       // Название статьи
    protected $text;       // Текст статьи
    protected $author_id;  // ID автора статьи

    /**
     * Получение названия статьи
     * @return string Название статьи
     */
    public function getName(): string 
    {
        return $this->name;
    }

    /**
     * Получение текста статьи
     * @return string Текст статьи
     */
    public function getText(): string 
    {
        return $this->text;
    }

    /**
     * Получение ID автора статьи
     * @return int ID автора
     */
    public function getAuthorId(): int 
    {
        return $this->author_id;
    }
    
    /**
     * Получение объекта автора статьи
     * @return User|null Объект пользователя или null, если автор не указан
     */
    public function getAuthor(): ?User 
    {
        // Проверка наличия ID автора
        if (!$this->author_id) {
            return null; 
        }
        // Получение объекта пользователя по ID
        return User::getById($this->author_id);
    }
    
    /**
     * Установка названия статьи
     * @param string $name Новое название статьи
     */
    public function setName(string $name): void 
    {
        $this->name = $name;
    }

    /**
     * Установка текста статьи
     * @param string $text Новый текст статьи
     */
    public function setText(string $text): void 
    {
        $this->text = $text;
    }

    /**
     * Установка ID автора статьи
     * @param int $authorId ID автора
     */
    public function setAuthorId(int $authorId): void 
    {
        $this->author_id = $authorId;
    }

    /**
     * Получение имени таблицы в БД
     * @return string Имя таблицы
     */
    public static function getTableName(): string
    {
        return 'articles';
    }
}