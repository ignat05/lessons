<?php
// Библиотека функций

// Игра в кости
function kosti()
{
    $kost1 = rand(1,6);
    $kost2 = rand(1,6);
    $sum = $kost1+$kost2;

    echo "<img src=\"img/ris{$kost1}.gif\"";
    echo "<br>";
    echo "<img src=\"img/ris{$kost2}.gif\"";
    echo "<br>";
    echo "Вам выпало число ".$sum;
}

// Таблица Пифагора

function pifagor($strok, $stolb)
{
    $tr = $strok;
    $td = $stolb;

    echo "<table class=\"table table-bordered table-hover table-sm table-responsive\">";
    for ($i=1;$i<=$tr;$i++)
    {
        echo "<tr>";
        if($i==1)
        {
            echo "<thead>";
                echo "<tr>";
                    for ($k=1;$k<=$td;$k++)
                    {
                        echo "<th class=\"bg-warning\" scope=\"col\">{$k}</th>";
                    }
                echo "</tr>";
            echo "</thead>";
            }
        else
        {
            echo "<tbody>";
                echo "<tr>";
                    for ($k=1;$k<=$td;$k++)
                    {
                        if($k==1)
                        {
                            echo "<th class=\"bg-warning\" scope=\"row\">".$i*$k."</th>";
                        }
                        else
                        {
                            echo "<td>".$i*$k."</td>";
                        }
                    }
                echo "</tr>";
            echo "</tbody>";
        }


    }

}

// Сегодня
function today()
{
    $day["Sunday"] = "воскресение";
    $day["Monday"] = "понедельник";
    $day["Tuesday"] = "вторник";
    $day["Wednesday"] = "среда";
    $day["Thursday"] = "четверг";
    $day["Friday"] = "пятница";
    $day["Saturday"] = "суббота";

    $month["January"] = "января";
    $month["February"] = "февраля";
    $month["March"] = "марта";
    $month["April"] = "апреля";
    $month["May"] = "мая";
    $month["June"] = "июня";
    $month["July"] = "июля";
    $month["August"] = "августа";
    $month["September"] = "сентября";
    $month["October"] = "октября";
    $month["November"] = "ноября";
    $month["December"] = "декабря";

    echo "Сегодня ".$day[date(l)].", ".date(j)." ".$month[date(F)]." ".date(Y)." года";
}
