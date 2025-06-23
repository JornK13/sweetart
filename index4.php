<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доставка десертов</title>
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
                        <li class="nav-item"><a href="carousel.php" class="nav-link">Торты и десерты</a></li>
                        <li class="nav-item"><a href="index3.php" class="nav-link">О нас</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="delivery-container">
        <section class="delivery-section">
            <h2>Условия доставки</h2>
            <p>Мы доставляем наши десерты по Москве и ближайшему Подмосковью.</p>

            <div class="delivery-info">
                <h3>Стоимость доставки:</h3>
                <ul>
                    <li><strong>Бесплатная</strong> при заказе от <strong>5 000 ₽</strong> в пределах МКАД.</li>
                    <li><strong>300 ₽</strong> — при заказе до 5 000 ₽ в пределах МКАД.</li>
                    <li><strong>500 ₽</strong> — доставка за МКАД (до 10 км).</li>
                    <li><strong>Индивидуальный расчет</strong> — для отдаленных районов.</li>
                </ul>

                <h3>Время доставки:</h3>
                <ul>
                    <li><strong>Ежедневно</strong> с 10:00 до 22:00.</li>
                    <li>Доставка в день заказа возможна при оформлении до <strong>15:00</strong>.</li>
                </ul>
            </div>
        </section>

        <section class="pickup-section">
            <h2>Самовывоз</h2>
            <p>Вы можете забрать заказ самостоятельно по адресу:</p>
            <div class="address">
                <p>📍 <strong>Москва, ул. Кондитерская, д. 12</strong></p>
                <p>⏰ <strong>Часы работы:</strong> с 9:00 до 21:00 (без выходных).</p>
            </div>
        </section>

        <section class="payment-section">
            <h2>Оплата</h2>
            <ul>
                <li>Наличными курьеру.</li>
                <li>Картой онлайн при оформлении заказа.</li>
                <li>Безналичный расчет для юридических лиц.</li>
            </ul>
        </section>

        <section class="contacts-section">
            <h2>Контакты</h2>
            <ul>
                <li>📞 <strong>Телефон:</strong> +7 (999) 123-45-67</li>
                <li>✉️ <strong>Email:</strong> order@dessert.ru</li>
                <li>💬 <strong>WhatsApp/Telegram:</strong> <a href="https://t.me/dessert_order_bot">Написать</a></li>
            </ul>
        </section>
    </main>

<footer style="background: #333; color: white; text-align: center; padding: 20px; margin-top: 50px;">
        <p>© 2025 SweetArt. Все права защищены.</p>
    </footer>
</body>
</html>