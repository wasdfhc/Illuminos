<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include('header.php') ?>

<div class="content_cabinet_admin">
    <h1>Добавление фильма или сериала</h1>
<!-- Форма для добавления товара -->
<form method="post" action="add_product.php" class="add_prod_form">

 <label for="name">Название фильма/сериала</label>
 <input type="text" name="name" required><br><br>
 <label for="description">Описание фильма/сериала</label>
 <input type="text" name="description" required><br><br>
 <label for="image">Жанры фильма/сериала</label>
 <input type="text" name="genres" required><br><br>
 <label for="image">Возрастное ограничение фильма/сериала</label>
 <input type="text" name="age" required><br><br>
 <label for="image">Рейтинг фильма/сериала</label>
 <input type="text" name="estimation" required><br><br>
 <label for="image">Постер фильма/сериала</label>
 <input type="text" name="poster" required><br><br>
 <label for="image">Категория (фильм или сериал)</label>
 <input type="text" name="category" required><br><br>
 <label for="image">Трейлер фильма/сериала</label>
 <input type="text" name="trailer" required><br><br> 
 <button type="submit">Добавить товар</button>
</form>


    <h1>Редактирование / удаление фильма или сериала</h1>

    <?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";
$conn = new mysqli($servername, $username, $password, $dbname);
// Получение списка товаров из базы данных
if ($_SERVER["REQUEST_METHOD"] == "GET") {
 $search_query = $_GET["q"];
 $sql = "SELECT * FROM all_product WHERE name LIKE '%$search_query%'";
 $result = $conn->query($sql);
}
?>
<table class="table_form">
    <tr><th>Название</th>
        <th>Постер</th>
        <th>Действие</th>
    </tr>
 <?php 
 $sql = "SELECT * FROM all_product WHERE name LIKE '%$search_query%'";
 $result = $conn->query($sql);
 if ($result = $conn->query($sql)) {
   while ($row = $result->fetch_assoc()) { ?>
 <tr>
 <td><?php echo $row["name"]; ?></td>
 <td><img src="<?php echo $row["poster"]; ?>" width="200"> </td>
 <td>
 <a href="edit_product.php?id=<?php echo $row["id"]; ?>">Редактировать</a> |
 <a href="delete_product.php?id=<?php echo $row["id"]; ?>">Удалить</a>
 </td>
 </tr>
 <?php } 
 }
  ?>
</table>

    
    
</div>

<?php include('footer.php') ?>
    
</body>
</html>

