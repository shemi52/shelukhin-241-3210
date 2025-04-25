<?php 
// Подключение header.php из родительской директории
require dirname(__DIR__).'/header.php';
?>

<!-- Форма создания статьи с методом POST -->
<form action="<?= htmlspecialchars(dirname($_SERVER['SCRIPT_NAME']) . '/article') ?>" method="POST">
   <!-- Блок ввода названия статьи -->
   <div class="mb-3">
     <label for="name" class="form-label">Article title</label>
     <input type="text" class="form-control" id="name" name="name">
   </div>
   
   <!-- Блок ввода текста статьи -->
   <div class="mb-3">
     <label for="text" class="form-label">Text</label>
     <input type="text" class="form-control" id="text" name="text">
   </div>
   
   <!-- Кнопка отправки формы -->
   <button type="submit" class="btn btn-primary">Save</button>
</form>

<?php 
// Подключение footer.php из родительской директории
require dirname(__DIR__).'/footer.php';
?>