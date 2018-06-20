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
