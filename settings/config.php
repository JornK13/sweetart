<?php
// settings/config.php
$host = 'localhost';
$dbname = 'sweetart_db'; // имя вашей БД
$username = 'root'; // ваш пользователь БД
$password = ''; // ваш пароль БД

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>