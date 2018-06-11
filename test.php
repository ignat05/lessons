<form method = "post">
ваш возраст
<input type = "text" name = "age">
<input type = "submit" value = "окей">
<?php
$age = $_POST["age"];
if($age>1 AND $age<7)
{
    echo "вы ходите в садик";
}
elseif ($age>6 AND $age<18)
{
echo "вы ходите в школу";
}
elseif ($age>17 AND $age<25)
{
echo "вы ходите в институт";
}
elseif ($age>23 AND $age<56)
{
echo "вы ходите на работу";
}
elseif ($age>55)
{
echo "вы на пенсии";
}
else
{
echo "что вы такое?";
}