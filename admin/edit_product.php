<?php
session_start();
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";
$conn = new mysqli($servername, $username, $password, $dbname);
// Получение информации о товаре из базы данных
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM all_product WHERE id='$product_id'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        header("Location: admin.php");
        exit();
    }
}
// Обработка формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $poster = $_POST["poster"];
    $genres = $_POST["genres"];
    $age = $_POST["age"];
    $estimation = $_POST["estimation"];
    $category = $_POST["category"];
    $trailer = $_POST["trailer"];

    // Обновление информации о товаре в базе данных
    $sql = "UPDATE all_product SET name='$name', description='$description', poster='$poster', genres='$genres', age='$age', estimation='$estimation', category='$category', trailer='$trailer' WHERE id='$product_id'";
    $conn->query($sql);
    header("Location: admin.php");
    exit();
}
?>
<!-- Форма для редактирования товара -->

<?php include 'header.php' ?>

<div class="content">
    <form method="post" class="add_prod_form">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        <label>Название фильма/сериала</label>
        <input type="text" name="name" required value="<?php echo $row["name"]; ?>"><br><br>
        <label>Описание фильма/сериала</label>
        <textarea name="description" required><?php echo $row["description"]; ?></textarea><br><br>
        <label>Постер фильма/сериала</label>
        <input type="text" name="poster" required value="<?php echo $row["poster"]; ?>"><br><br>
        <label>Жанры фильма/сериала</label>
        <input type="text" name="genres" required value="<?php echo $row["genres"]; ?>"><br><br>
        <label>Возрастное ограничение фильма/сериала</label>
        <input type="text" name="age" required value="<?php echo $row["age"]; ?>"><br><br>
        <label>Рейтинг фильма/сериала</label>
        <input type="text" name="estimation" required value="<?php echo $row["estimation"]; ?>"><br><br>
        <label>Категория (фильм или сериал)</label>
        <input type="text" name="category" required value="<?php echo $row["category"]; ?>"><br><br>
        <labe">Трейлер фильма/сериала</label>
            <textarea name="trailer" required><?php echo $row["trailer"]; ?></textarea><br><br>
            <button type="submit">Сохранить изменения</button>
    </form>
</div>

<?php echo $trailer; ?>



<?php include 'footer.php'; ?>