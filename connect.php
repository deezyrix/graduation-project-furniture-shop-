<?php
$host="localhost";
$user="root";
$passw="";
$db_name="main";
$db=mysqli_connect($host, $user, $passw, $db_name);
if (!$db) {
echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
echo "Код ошибки errno: ". mysqli_connect_errno() . PHP_EOL;
echo "Текст ошибки error: ". mysqli_connect_errno() . PHP_EOL;
exit;
}
?>