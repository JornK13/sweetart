<?php
session_start();
require 'settings/config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Получение информации о пользователе
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();

// Получение заказов пользователя
$orders = $pdo->prepare("SELECT * FROM orders WHERE user_id = ? ORDER BY order_date DESC");
$orders->execute([$_SESSION['user_id']]);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetArt - Главная</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="settings/style.css">
    <style>
        /* Дополнительные стили для главной страницы */
        .header-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .nav {
            margin: 20px auto;
        }
        
        .nav-list {
            justify-content: center;
        }
        
        .main-content {
            padding: 40px 0;
            text-align: center;
        }
        
        .welcome-section {
            background: white;
            border-radius: 20px;
            padding: 40px;
            margin: 0 auto;
            max-width: 800px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .welcome-title {
            color: #ff6b88;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .welcome-text {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #555;
        }
        
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .main {
            justify-items: center;

           
        }

        @media (max-width: 768px) {
            .welcome-section {
                padding: 30px 20px;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <img src="logo.png" alt="Логотип " class="logo">
                <h1 class="site-title">SweetArt</h1>
                <p class="site-subtitle">Каждый выбирает нас</p>

                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="index.php" class="nav-link">Главная</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">О нас</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Доставка</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<div class="main">    
    <h1>Добро пожаловать, <?= htmlspecialchars($user['username']) ?>!</h1>

    <div class="user-info">
        <p>Email: <?= htmlspecialchars($user['email']) ?></p>
        <p>Дата регистрации: <?= $user['created_at'] ?></p>
    </div>
<a href="logout.php">Выйти</a>
</div>
<footer style="background: #333; color: white; text-align: center; padding: 20px; margin-top: 50px;">
        <p>© 2025 SweetArt. Все права защищены.</p>
    </footer>
</body>
</html>