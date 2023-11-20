<?php
session_start();
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";
$conn = new mysqli($servername, $username, $password, $dbname);
// Удаление товара из базы данных
if ($_SERVER["REQUEST_METHOD"] == "GET") {
 $product_id = $_GET["id"];
 $sql = "DELETE FROM all_product WHERE id='$product_id'";
 $conn->query($sql);
}
header("Location: admin.php");
exit();
?>