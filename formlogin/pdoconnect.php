<?php
$host = "localhost";
$user = "root";
$password = "";
$database_name = "loginv4;charset=utf8";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
 ?>
