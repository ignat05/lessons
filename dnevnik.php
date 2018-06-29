<?php
require_once "header.php";

if ($_POST)
{
    $sql = "SELECT * FROM b1 WHERE";
    if($_POST["name"]){$sql .=" name=\"{$_POST['name']}\"";}
    if ($_POST["surname"]){$sql .=" AND";}
    if($_POST["surname"]){$sql .=" surname=\"{$_POST['surname']}\"";}
    if ($_POST["subject"]){$sql .=" AND";}
    if($_POST["subject"]){$sql .=" subject=\"{$_POST['subject']}\"";}
    if ($_POST["mark"]){$sql .=" AND";}
    if($_POST["mark"]){$sql .=" mark=\"{$_POST['mark']}\"";}
    if ($_POST["data"]){$sql .=" AND";}
    if($_POST["data"]){$sql .=" date=\"{$_POST['data']}\"";}

    echo $sql;
}
elseif($_POST["clear"])
{
    $sql = "SELECT * FROM b1";
}
else
{
    $sql = "SELECT * FROM b1";
}

$query = db($sql);

while($row = mysqli_fetch_assoc($query))
{
    $pupils[]=$row;
}
?>

<table class="table"

    <thead>
        <tr>
            <th scope='col'>Имя</th><th scope='col'>Фамилия</th><th scope='col'>Предмет</th><th scope='col'>Оценка</th><th scope='col'>Дата</th>
        </tr>
    </thead>
    <thead>
    <tr>
        <form method="post">
            <th>
                <select name="name">

                        <?php
                        echo "<option></option>";
                        foreach ($pupils as $value)
                        {
                            echo "<option>{$value["name"]}</option>";
                        }
                        ?>

                </select>
            </th>
            <th>
                <select name="surname">

                    <?php
                    echo "<option></option>";
                    foreach ($pupils as $value)
                    {
                        echo "<option>{$value["surname"]}</option>";
                    }
                    ?>

                </select>
            </th>
            <th>
                <select name="subject">

                    <?php
                    echo "<option></option>";
                    foreach ($pupils as $value)
                    {
                        echo "<option>{$value["subject"]}</option>";
                    }
                    ?>

                </select>
            </th>
            <th>
                <select name="mark">

                    <?php
                    echo "<option></option>";
                    for ($i=2;$i<=5;$i++)
                    {
                        echo "<option>{$i}</option>";
                    }
                    ?>

                </select>
            </th>
            <th>
                <input type="text" name="data">
            </th>
            <th>
                <input type="submit" value="Найти">
                <input type="submit" value="Очистить" name="clear">
            </th>

        </form>
    </tr>
    </thead>

<?php
foreach ($pupils as $value)
{
    echo "<tr>";
        echo "<td>".$value["name"]."</td>";
        echo "<td>".$value["surname"]."</td>";
        echo "<td>".$value["subject"]."</td>";
        echo "<td>".$value["mark"]."</td>";
        echo "<td>".$value["date"]."</td>";
    echo "</tr>";
}

echo "</table>";

require_once "footer.php";
