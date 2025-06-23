<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetArt - Торты и десерты</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="settings/style.css">
    <style>
        /* Общие стили */


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

        /* Стили карусели */
        .carousel-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            padding: 0 50px;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
            gap: 20px;
            padding: 10px 0;
        }

        .product-card {
            flex: 0 0 280px;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product-card h3 {
            color: #ff6b88;
            margin-top: 0;
            font-size: 18px;
        }

        .product-card .price {
            font-weight: bold;
            font-size: 18px;
            margin: 10px 0;
        }

        .product-card .description {
            color: #555;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .order-btn {
            background: #ff6b88;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s;
        }

        .order-btn:hover {
            background: #ff4d73;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #ff6b88;
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 10;
            font-size: 18px;
        }

        .carousel-btn:hover {
            background: #ff4d73;
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }

        .product-card {
            display: grid;
            grid-template-rows: auto auto 1fr auto;
            /* автоматическое распределение */
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
                        <li class="nav-item"><a href="index3.php" class="nav-link">О нас</a></li>
                        <li class="nav-item"><a href="index4.php" class="nav-link">Доставка и контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="carousel-container">
        <div class="carousel" id="productCarousel">
            <!-- Карточки будут добавляться через JavaScript -->
        </div>

        <button class="carousel-btn prev">❮</button>
        <button class="carousel-btn next">❯</button>
    </div>

    <script>
        // Массив товаров (как в вашем примере)
        const products = [
            {
                id: 1,
                name: 'Торт "Клубничный"',
                price: 2500,
                image: 'img/cake1.jpg',
                description: 'Нежный бисквит со свежей клубникой'
            },
            {
                id: 2,
                name: 'Клубничный чизкейк',
                price: 2300,
                image: 'img/cake2.jpg',
                description: 'Нежный творожный десерт'
            },
            {
                id: 3,
                name: 'Шоколадный десерт',
                price: 1800,
                image: 'img/cake3.jpg',
                description: 'Насыщенный шоколадный вкус'
            },
            {
                id: 4,
                name: 'Свадебный',
                price: 3600,
                image: 'img/cake4.jpg',
                description: 'Для пышных свадебных мероприятий'
            },
            {
                id: 5,
                name: 'Радужный восторг',
                price: 1300,
                image: 'img/cake5.jpg',
                description: 'Многослойный торт с яркими цветами, ванильным кремом и нежным бисквитом.'
            },
            {
                id: 6,
                name: 'Шоколадная мечта',
                price: 2600,
                image: 'img/cake6.jpg',
                description: 'Десерт с темным шоколадом, карамелью и хрустящей прослойкой.'
            },
            {
                id: 7,
                name: 'Облако сладости',
                price: 2900,
                image: 'img/cake7.jpg',
                description: 'Воздушный муссовый торт с легким сырным кремом и ягодным топпингом.'
            },
            {
                id: 8,
                name: 'Вишнёвый триумф',
                price: 3100,
                image: 'img/cake8.jpg',
                description: 'Шоколадный брауни с вишнёвой начинкой и тёмным шоколадом.'
            }
        ];

        // Функция для форматирования цены
        function formatPrice(price) {
            return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }

        // Генерация карточек товаров
        const carousel = document.getElementById('productCarousel');

        products.forEach(product => {
            const card = document.createElement('div');
            card.className = 'product-card';
            card.dataset.id = product.id;

            card.innerHTML = `
                <img src="${product.image}" alt="${product.name}">
                <h3>${product.name}</h3>
                <p class="description">${product.description}</p>
                <p class="price">${formatPrice(product.price)} ₽</p>
                <button class="order-btn">Заказать</button>
            `;

            carousel.appendChild(card);
        });

        // Логика работы карусели
        document.addEventListener('DOMContentLoaded', function () {
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            const cards = document.querySelectorAll('.product-card');
            const container = document.querySelector('.carousel-container');

            let currentIndex = 0;
            const cardWidth = cards[0].offsetWidth + 20;
            const visibleCards = Math.floor(container.offsetWidth / cardWidth);
            const maxIndex = Math.max(0, cards.length - visibleCards);

            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            }

            nextBtn.addEventListener('click', function () {
                if (currentIndex < maxIndex) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateCarousel();
            });

            prevBtn.addEventListener('click', function () {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = maxIndex;
                }
                updateCarousel();
            });

            // Автопрокрутка
            let interval = setInterval(function () {
                if (currentIndex < maxIndex) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateCarousel();
            }, 3000);

            // Обработка заказа
            document.querySelectorAll('.order-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    const productId = this.closest('.product-card').dataset.id;
                    const product = products.find(p => p.id == productId);
                    alert(`Заказан: ${product.name}\nЦена: ${formatPrice(product.price)} ₽`);
                });
            });
        });
    </script>
    <footer style="background: #333; color: white; text-align: center; padding: 20px; margin-top: 50px;">
        <p>© 2025 SweetArt. Все права защищены.</p>
    </footer>
</body>

</html>