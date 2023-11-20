<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Получение данных из формы или другого источника
$name = $_POST['name'];
$description = $_POST['description'];
$age = $_POST['age'];
$estimation = $_POST['estimation'];
$genres = $_POST['genres'];
$trailer = $_POST['trailer'];
$poster = $_POST['poster'];
$category = $_POST['category'];

// Подготовка SQL-запроса
$sql = "INSERT INTO all_product (name, description, age, estimation, genres, trailer, poster, category)
VALUES ('$name', '$description', '$age', '$estimation', '$genres', '$trailer', '$poster', '$category')";
}
// Выполнение запроса и проверка на успешность
if ($conn->query($sql) === TRUE) {
    echo "Вы добавили новый фильм / сериал!";
    header('Location: admin.php');
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения
$conn->close();
?>