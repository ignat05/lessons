<form method ="post">
логин
<input type = "text" name = "login">
пароль
<input type = "password" name = "parol">
<input type = "submit" value = "войти">
</form>

<?php
$l = $_POST['login'];
$p = $_POST["parol"];
$login = "игнат";
$pass = 123;
$login1 = "саша";
$pass1 = "dr11062007";
if($l == $login OR $l == $login1 AND $p == $pass OR $p == $pass1)
{
echo"добро пожаловать";
}
else
{
echo"ты кто такой?";
}


