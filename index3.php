<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetArt - О нас</title>
    <style>
        /* Общие стили */
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Шапка */
        header {
            background-color: #ff6b88;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        /* Основной контент */
        .about-section {
            padding: 60px 0;
        }
        
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(255,107,136,0.2);
        }
        
        .about-text h2 {
            color: #ff6b88;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .team-section {
            background: white;
            padding: 60px 0;
            text-align: center;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .team-member {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        
        .team-member:hover {
            transform: translateY(-10px);
        }
        
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #ffd6de;
        }
        
        .values-section {
            padding: 60px 0;
            text-align: center;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .value-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .value-card i {
            font-size: 2.5rem;
            color: #ff6b88;
            margin-bottom: 20px;
        }
        
        /* Футер */
        footer {
            background: #333;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

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

    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="settings/style.css">
</head>
<body>
    <!-- Шапка -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <img src="logo.png" alt="Логотип " class="logo">
                <h1 class="site-title">SweetArt</h1>
                <p class="site-subtitle">Каждый выбирает нас</p>
                
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="index.php" class="nav-link">Главная</a></li>
                        <li class="nav-item"><a href="carousel.php" class="nav-link">Торты и десерты</a></li>
                        <li class="nav-item"><a href="index4.php" class="nav-link">Доставка и контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <!-- Основное содержание -->
    <main>
        <!-- О нас -->
        <section class="about-section">
            <div class="container">
                <div class="about-grid">
                    <div class="about-image">
                        <img src="img/kond2.jpg" alt="Наша кондитерская">
                    </div>
                    <div class="about-text">
                        <h2>Наша история</h2>
                        <p>SweetArt начал свой путь в 2005 году как маленькая домашняя пекарня. Сегодня мы - команда профессиональных кондитеров, создающих уникальные десерты для самых важных моментов в вашей жизни.</p>
                        <p>Наши торты - это не просто сладости, а настоящие произведения искусства, где каждый элемент продуман до мелочей. Мы используем только натуральные ингредиенты и традиционные рецепты, дополненные современными техниками.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Наша команда -->
        <section class="team-section">
            <div class="container">
                <h2>Наша команда</h2>
                <p>Профессионалы, влюбленные в свое дело</p>
                
                <div class="team-grid">
                    <div class="team-member">
                        <img src="img/chef1.jpg" alt="Анна">
                        <h3>Анна</h3>
                        <p>Главный кондитер</p>
                        <p>15 лет опыта, специалист по муссовым десертам</p>
                    </div>
                    
                    <div class="team-member">
                        <img src="img/chef2.jpg" alt="Михаил">
                        <h3>Михаил</h3>
                        <p>Шеф-кондитер</p>
                        <p>Мастер по шоколадным десертам и сложным декорациям</p>
                    </div>
                    
                    <div class="team-member">
                        <img src="img/chef3.jpg" alt="Елена">
                        <h3>Елена</h3>
                        <p>Дизайнер тортов</p>
                        <p>Создает уникальные дизайны для ваших праздников</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Наши ценности -->
        <section class="values-section">
            <div class="container">
                <h2>Наши ценности</h2>
                <p>Что делает наши десерты особенными</p>
                
                <div class="values-grid">
                    <div class="value-card">
                        <i class="fas fa-heart"></i>
                        <h3>Качество</h3>
                        <p>Мы используем только натуральные ингредиенты высшего качества без искусственных добавок.</p>
                    </div>
                    
                    <div class="value-card">
                        <i class="fas fa-seedling"></i>
                        <h3>Натуральность</h3>
                        <p>Только натуральное — никаких консервантов, искусственных красителей или заменителей.
                            Свежие ингредиенты — фермерские яйца, сливочное масло, отборная мука и сезонные фрукты.</p>
                    </div>
</div>
    </main>
    <footer style="background: #333; color: white; text-align: center; padding: 20px; margin-top: 50px;">
        <p>© 2025 SweetArt. Все права защищены.</p>
    </footer>
</body>
</html>