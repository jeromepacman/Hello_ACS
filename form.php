<?php
var_dump($_POST);

$user_name = $_POST['user_name'];
$user_last_name = $_POST['user_last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

$sql = "INSERT INTO user (user_name, user_last_name, email, password, gender) VALUES ('$user_name', '$user_last_name', '$email', '$password', '$gender')";

$pdo->exec($sql);

?>


