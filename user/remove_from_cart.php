<?php
session_start();
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";
$conn = new mysqli($servername, $username, $password, $dbname);

// Удаление товара из корзины
if (isset($_POST["product_id"])) {
    $product_id = $_POST["product_id"];
    unset($_SESSION["cart"][$product_id]);
}

// Перенаправление на страницу корзины
header("Location: cabinet.php");
exit();
?>