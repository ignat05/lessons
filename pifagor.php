<?php
require_once "header.php";
echo "Таблица Пифагора<br>";
?>
<form method="post">
    Количество строк
    <input type="text" name="tr">
    Количество столбцов
    <input type="text" name="td">
    <input type="submit" value="Нарисовать таблицу Пифагора">
</form>
<?php
pifagor($_POST['tr'],$_POST['td']);
require_once "footer.php";