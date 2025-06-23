<?php
// Подключаем конфиг с $pdo
require_once __DIR__ . '/config.php';

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $customerName = $_POST['customer_name'] ?? '';
    $productName = $_POST['product_name'] ?? '';
    $quantity = (int)($_POST['quantity'] ?? 0);

    // Проверяем, что данные не пустые
    if (empty($customerName) || empty($productName) || $quantity <= 0) {
        die("Ошибка: заполните все поля корректно!");
    }

    // Подготавливаем SQL-запрос для вставки данных
    $stmt = $pdo->prepare("
        INSERT INTO orders (customer_name, product_name, quantity)
        VALUES (:customer_name, :product_name, :quantity)
    ");

    // Выполняем запрос с параметрами
    try {
        $stmt->execute([
            ':customer_name' => $customerName,
            ':product_name' => $productName,
            ':quantity' => $quantity,
        ]);

        // Если всё успешно — перенаправляем или выводим сообщение
        echo "Заказ успешно добавлен! <a href='index2.php'>Вернуться</a>";
    } catch (PDOException $e) {
        die("Ошибка при добавлении заказа: " . $e->getMessage());
    }
} else {
    // Если кто-то попал сюда не через POST-запрос
    die("Неверный метод запроса!");
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление заказа</title>
</head>
<body>
    <h1>Добавить новый заказ</h1>
    <form action="add_order.php" method="POST">
        <label>Имя клиента:</label>
        <input type="text" name="customer_name" required><br><br>

        <label>Название товара:</label>
        <input type="text" name="product_name" required><br><br>

        <label>Количество:</label>
        <input type="number" name="quantity" min="1" required><br><br>

        <button type="submit">Добавить заказ</button>
    </form>
</body>
</html>