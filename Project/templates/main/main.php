<?php
// Подключаем шапку сайта из родительской директории
require dirname(__DIR__) . '/header.php';
?>

<!-- Основной контейнер страницы -->
<div class="container mt-4">
    <!-- Заголовок страницы -->
    <h1 class="mb-4">Список статей</h1>
    
    <!-- Блок отображения ошибок (если есть) -->
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <!-- Таблица со списком статей -->
    <table class="table table-striped">
        <!-- Заголовок таблицы -->
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Название</th>
                <th scope="col">Текст</th>
                <th scope="col">Автор</th>
            </tr>
        </thead>
        
        <!-- Тело таблицы -->
        <tbody>
            <!-- Цикл вывода статей -->
            <?php foreach ($articles as $article): ?>
                <tr>
                    <!-- ID статьи -->
                    <th scope="row"><?= htmlspecialchars($article->getId()) ?></th>
                    
                    <!-- Название статьи (ссылка на полную статью) -->
                    <td>
                        <a href="<?= htmlspecialchars(dirname($_SERVER['SCRIPT_NAME']) . '/article/' . $article->getId()) ?>">
                            <?= htmlspecialchars($article->getName()) ?>
                        </a>
                    </td>
                    
                    <!-- Краткий текст статьи (первые 100 символов) -->
                    <td><?= htmlspecialchars(mb_strimwidth($article->getText(), 0, 100, '...')) ?></td>
                    
                    <!-- Автор статьи -->
                    <td>
                        <?php if ($article->getAuthor()): ?>
                            <?= htmlspecialchars($article->getAuthor()->getNickname()) ?>
                        <?php else: ?>
                            <span class="text-muted">Неизвестен</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Сообщение, если статьи отсутствуют -->
    <?php if (empty($articles)): ?>
        <div class="alert alert-info">Статьи не найдены</div>
    <?php endif; ?>
</div>

<?php
// Подключаем подвал сайта из родительской директории
require dirname(__DIR__) . '/footer.php';
?>