<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
$mysql = new mysqli('localhost','root','','bd');
$result= $mysql->query("SELECT * FROM `avt` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if ($user == 0){
    $mysql->close();
    header('Location: /prog1_1.php');
}
else {
    $mysql->close();
    header('Location: /prog1_3.php');
}
 
?>