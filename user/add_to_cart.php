<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";
$conn = new mysqli($servername, $username, $password, $dbname);

// Инициализация корзины
session_start();
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

// Добавление товара в корзину
if (isset($_POST["product_id"])) {
    $product_id = $_POST["product_id"];
    if (isset($_SESSION["cart"][$product_id])) {
        $_SESSION["cart"][$product_id]++;
    } else {
        $_SESSION["cart"][$product_id] = 1;
    }
}

// Перенаправление на страницу корзины
header("Location: cabinet.php");
exit();
?>
