<?php
require_once "header.php";
echo "Таблица Пифагора<br>";
?>
<form method="post">
    <div class="form-group">
        <input type="text"  name="tr" class="form-control" id="tr" aria-describedby="emailHelp" placeholder="Количество строк">
    </div>
    <div class="form-group">
        <input type="text"  name="td" class="form-control" id="td" aria-describedby="emailHelp" placeholder="Количество столбцов">
    </div>
    <button type="submit" class="btn btn-primary">Нарисовать таблицу Пифагора</button>
</form>
<?php
pifagor($_POST['tr'],$_POST['td']);
echo "<br>";
require_once "footer.php";