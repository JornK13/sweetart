<?php

require_once 'settings/config.php';

// Включите отображение ошибок для отладки (удалите в продакшене)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($pdo)) {
    die("Ошибка: подключение к базе данных не установлено!");
}

// Инициализация переменных
$error = '';
$success = '';

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirm_password = trim($_POST['confirm_password'] ?? '');

    // Валидация
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "Все поля обязательны для заполнения!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Некорректный email адрес!";
    } elseif ($password !== $confirm_password) {
        $error = "Пароли не совпадают!";
    } elseif (strlen($password) < 6) {
        $error = "Пароль должен содержать минимум 6 символов!";
    } else {
        try {
            // Проверка существования пользователя
            $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
            $stmt->execute([$username, $email]);
            
            if ($stmt->rowCount() > 0) {
                $error = "Пользователь с таким именем или email уже существует!";
            } else {
                // Хеширование пароля
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                
                // Сохранение в БД
                $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                $stmt->execute([$username, $email, $hashed_password]);
                
                $success = "Регистрация успешна! Перенаправляем на страницу входа...";
                header("Refresh: 3; url=login.php");
            }
        } catch (PDOException $e) {
            $error = "Ошибка базы данных: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetArt - Регистрация</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fff5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .auth-container {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        .error {
            color: #ff6b88;
            margin: 10px 0;
            padding: 10px;
            background: #ffebf0;
            border-radius: 5px;
            text-align: center;
        }
        .success {
            color: #4CAF50;
            margin: 10px 0;
            padding: 10px;
            background: #e8f5e9;
            border-radius: 5px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        .btn {
            background: #ff6b88;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #ff4d73;
        }
        .auth-links {
            margin-top: 20px;
            text-align: center;
        }
        .auth-link {
            color: #ff6b88;
            text-decoration: none;
        }
    </style>
</head>
<body class="auth-page">
    <div class="auth-container">
        <h1 style="text-align: center; color: #ff6b88;">Регистрация</h1>
        
        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        
        <?php if (!empty($success)): ?>
            <div class="success"><?= htmlspecialchars($success) ?></div>
        <?php endif; ?>
        
        <form class="auth-form" method="POST">
            <div class="form-group">
                <label for="username">Логин</label>
                <input type="text" class="form-control" id="username" name="username" required 
                       value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required
                       value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
            </div>
            
            <div class="form-group">
                <label for="password">Пароль (минимум 6 символов)</label>
                <input type="password" class="form-control" id="password" name="password" required minlength="6">
            </div>
            
            <div class="form-group">
                <label for="confirm_password">Подтвердите пароль</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required minlength="6">
            </div>
            
            <button type="submit" class="btn">Зарегистрироваться</button>
        </form>
        
        <div class="auth-links">
            <p>Уже есть аккаунт? <a href="login.php" class="auth-link">Войти</a></p>
            <a href="index.php" class="auth-link">← На главную</a>
        </div>
    </div>
</body>
</html>