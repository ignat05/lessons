<?php
$auto["audi"]=array("speed"=>80,"model"=>"АЗ","year"=>2018);
$auto["BMW"]=array("speed"=>75,"model"=>"X5","year"=>2017);

foreach ($auto as $key=>$value)
{
    echo "Автомобиль ".$key.":<br>";
    echo "- марка: ".$value["model"]."<br>";
    echo "- скорость: ".$value["speed"]."<br>";
    echo "- марка: ".$value["year"]."<br><br>";

}