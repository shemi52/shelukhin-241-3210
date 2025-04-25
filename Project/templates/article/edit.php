<?php 
// Подключаем шапку страницы из родительской директории
require dirname(__DIR__).'/header.php';
?>

<!-- Форма редактирования статьи с методом POST -->
<form action="<?=dirname($_SERVER['SCRIPT_NAME']);?>/article/<?=$article->getId();?>/update" method="POST">
   <!-- Поле для редактирования названия статьи -->
   <div class="mb-3">
     <label for="name" class="form-label">Article title</label>
     <!-- Выводим текущее название статьи в значение поля -->
     <input type="text" class="form-control" id="name" name="name" value="<?=$article->getName();?>">
   </div>
   
   <!-- Поле для редактирования текста статьи -->
   <div class="mb-3">
     <label for="text" class="form-label">Text</label>
     <!-- Выводим текущий текст статьи в значение поля -->
     <input type="text" class="form-control" id="text" name="text" value="<?=$article->getText();?>">
   </div>
   
   <!-- Кнопка отправки формы -->
   <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php 
// Подключаем подвал страницы из родительской директории
require dirname(__DIR__).'/footer.php';
?>