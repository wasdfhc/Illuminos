<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
// Обработка отправки формы
if (isset($_POST["submit"])) {
 // Получение данных из формы
 $login = $_POST["login"];
 $password = $_POST["password"];
 // Валидация данных
 $errors = array();
 if (empty($login)) {
 $errors[] = "Введите логин";
 }
 if (empty($password)) {
 $errors[] = "Введите пароль";
 }
 // Если ошибок нет, проверяем логин и пароль
 if (empty($errors)) {
 $sql = "SELECT * FROM users WHERE login='".$_POST['login']."' AND password='$password'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 if (($login=='admin') && ($password=='admin')) {
    
    header('Location:admin/index.php');
       
    } else {
        $_SESSION["id"] = $user["id"];
		$_SESSION["role"] = $user["role"];
        $_SESSION['login'] = $login; 
        header('Location:index.php');
    }
 } else {
 $errors[] = "Неверный логин или пароль";
 }
 }
}
?>