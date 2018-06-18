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
