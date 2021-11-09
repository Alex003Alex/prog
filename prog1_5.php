<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$sur = $_POST['sur'];
$num = $_POST['num'];

$mysql = new mysqli('localhost','root','','bd');
$mysql->query("INSERT INTO `vd` (`login` ,`pass`) VALUES('$login','$pass')");
$mysql->close();

$mysql = new mysqli('localhost','root','','bd');
$mysql->query("INSERT INTO `person` (`name` ,`surname` ,`num`) VALUES('$name','$sur', '$num')");
$mysql->close();

header('Location: /prog1_1.php');
?>