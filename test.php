<form method = "post">
ваш возраст
<input type = "text" name = "age">
<input type = "submit" value = "окей"><br>
<?php
$age = $_POST["age"];
if($age>1 AND $age<7)
{
    echo "вы ходите в садик";
}
elseif ($age>6 AND $age<18)
{
echo "вы ходите в школу <a href =\"http://vk.com\">перейти на вк</a>";
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
    for ($a = 1;$a<= 10;$a++)
    {
        echo "что вы такое?<br>";
    }

}
