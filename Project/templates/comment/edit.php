<?php 
// Подключаем шапку страницы из директории templates, находящейся на 2 уровня выше
require dirname(__DIR__, 2).'/templates/header.php'; 
?>

<!-- Основной контейнер страницы -->
<div class="container mt-4">
    <!-- Заголовок страницы редактирования -->
    <h2>Редактирование комментария</h2>
    
    <!-- Блок отображения ошибок (если они есть) -->
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    
    <!-- Проверка существования комментария -->
    <?php if ($comment): ?>
        <!-- Форма редактирования комментария -->
        <form action="<?= dirname($_SERVER['SCRIPT_NAME']) ?>/comment/<?= $comment->getId() ?>/update" method="POST">
            <!-- Поле для редактирования текста комментария -->
            <div class="mb-3">
                <label for="text" class="form-label">Текст комментария</label>
                <!-- Текстовое поле с текущим текстом комментария (экранированным) -->
                <textarea class="form-control" id="text" name="text" rows="5" required><?= 
                    htmlspecialchars($comment->getText()) 
                ?></textarea>
            </div>
            
            <!-- Блок кнопок управления -->
            <div class="d-flex gap-2">
                <!-- Кнопка сохранения изменений -->
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    <?php endif; ?>
</div>

<?php 
// Подключаем подвал страницы из директории templates, находящейся на 2 уровня выше
require dirname(__DIR__, 2).'/templates/footer.php'; 
?>