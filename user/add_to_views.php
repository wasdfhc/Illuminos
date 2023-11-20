<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";
$conn = new mysqli($servername, $username, $password, $dbname);

// Инициализация корзины
session_start();
if (!isset($_SESSION["view"])) {
    $_SESSION["view"] = array();
}

// Добавление товара в корзину
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if (isset($_SESSION["view"][$id])) {
        $_SESSION["view"][$id] = 1;
    } else {
        $_SESSION["view"][$id] = 1;
    }
}
$page_id=$_POST['id'];
// Перенаправление на страницу корзины 
header("Location: info.php?id=$page_id");
exit();
?>
