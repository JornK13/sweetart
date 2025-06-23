<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetArt - Главная</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="settings/style.css">
</head>
<body class="auth-page">
    <div class="auth-container">
        <h1 class="auth-title">Вход в аккаунт</h1>
        
        <form class="auth-form" method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Логин</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width: 100%;">Войти</button>
        </form>
        
        <div class="auth-links">
            <p>Нет аккаунта? <a href="index2.php" class="auth-link">Зарегистрироваться</a></p>
            <a href="index.php" class="auth-link">← На главную</a>
        </div>
    </div>
</body>
</html>