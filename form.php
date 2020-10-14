<?php
var_dump($_POST);

$user_name = $_POST['user_name'];
$user_last_name = $_POST['user_last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$pdo = new PDO('mysql:host=mysql;dbname=test;host=127.0.0.1', 'root', 'acsql', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

$sql = "INSERT INTO user (user_name, user_last_name, email, password, genre) VALUES ($user_name, $user_last_name, $email, $password, $gender)";

$pdo->exec($sql);

?>


