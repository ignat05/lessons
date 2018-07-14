<form method="post">
    Сколько раз?
    <input type="text" name="skolko">
    <input type="submit" value="OK">
</form>
<br>
<?php
$col = $_POST['skolko'];
if ($col<100)
{
    for ($i=1;$i<=$col;$i++)
    {
        echo "Привет Ахмет<br>";
    }

}
else
{
    echo "Чувак, ты много ввёл)))";
}


