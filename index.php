<?php
function getloginIDFromlogin($login)
{
$find = '@';
$pos = strpos($login, $find);
$loginID = substr($login, 0, $pos);
return $loginID;
}
$login = $_GET['login'];
$loginID = getloginIDFromlogin($login);
header("Location: https://www.google.com");
?>
