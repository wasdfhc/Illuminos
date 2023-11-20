<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Document</title>
    <script>
        function auth() {
            alert('Для просмотра необходимо авторизоваться!');
        }
    </script>
</head>

<body>
    <?php include('header.php') ?>

    <div class="content">

        <?php
        session_start();
        error_reporting(E_ERROR | E_PARSE);
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
        <!-- Форма для поиска товаров -->
        <form method="get" action="search.php" class="search_form">
            <input type="text" name="q" placeholder="Поиск" class="search">
        </form>
        <!-- Таблица со списком найденных товаров -->


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="filters_div">
    <ul class="filters">
  <li class="active"><a data-filter="all">Все</a></li>
  <li><a data-filter="Фильм">Фильмы</a></li>
  <li><a data-filter="Сериал">Сериалы</a></li>
</ul>

<?php
// Определение текущей сортировки и столбца
$sortColumn = isset($_GET['sort']) ? $_GET['sort'] : 'id';
$order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

// Формирование SQL-запроса на выборку данных с сортировкой
$sql = "SELECT * FROM all_product ORDER BY $sortColumn $order";
$result = $conn->query($sql);
?>

<?php 
echo '<div>';
    echo "<a class='filters_a' href='?sort=name&order=" . ($sortColumn === 'name' && $order === 'ASC' ? 'DESC' : 'ASC') . "'>По имени</a>";
    echo "<a class='filters_a' href='?sort=estimation&order=" . ($sortColumn === 'estimation' && $order === 'ASC' ? 'DESC' : 'ASC') . "'>По рейтингу</a>";
    echo "<a class='filters_a' href='?sort=id&order=" . ($sortColumn === 'id' && $order === 'ASC' ? 'DESC' : 'ASC') . "'>По загрузке</a>";
    echo '</div>';
    while ($row = $result->fetch_assoc()) { ?>
</div>
     

<div class="cards_new_films">
<?php if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) { ?>
<div class="card" data-filter="<?php echo $row["category"]; ?>">

                        <a class="reccomend" href="info.php?id=<?php echo $row["id"]; ?>">
                                <img src="<?php echo $row["poster"]; ?>" alt="">
                                <p>
                                    <?php echo $row["name"]; ?><br><span>
                                        <?php echo $row["genres"]; ?>
                                    </span>
                                </p>
                                </a>
                        </form>
                    </div>
       <?php }
            }
        }
            ?>             
</div>

<script>
    $('.filters a').on('click', function() {
    $('.filters li').removeClass('active');
    $(this).parent('li').addClass('active'); // выделяем выбранную категорию
  
    var cat = $(this).attr('data-filter'); // определяем категорию
  
    if (cat == 'all') { // если all
      $('.cards_new_films div').show(); // отображаем все позиции
    } else { // если не all
      $('.cards_new_films div').hide(); // скрываем все позиции
      $('.cards_new_films div[data-filter="' + cat + '"]').show(); // и отображаем позиции из соответствующей категории
    }
  });
</script>

        <?php include "footer.php" ?>




</body>
</html>







