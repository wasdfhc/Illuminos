<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Document</title>
    <script>
        function auth() {
            alert('Для просмотра необходимо авторизоваться!');
        }
    </script>
</head>

<body>
    <?php include('header.php') ?>



    <div class="poster barbie">
        <div class="content_poster">
            <img src="asset/img/barb1e.png" alt="">
            <p>Самая обыкновенная стереотипная Барби живёт в великолепном розовом Барбиленде, и каждый её день идеален.
                <br><span>Комедия, приключения, фэнтези</span>
            </p> <br>
            <p><a href="podpiska.php" class="podpiska_butt barbie_butt">Смотреть по подписке</a></p>

        </div>
    </div>


    <div class="content">
        <h1 class="name_sec">NEW</h1>

        <div class="cards_new_films">
            
        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "illuminos";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM products LIMIT 4";
    $result = $conn->query($sql);
    // if ($result = $conn->query($sql))
    ?>


    <?php
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) { ?>
            <div class="cards_new_films">

                <div class="new_film">
                    <a href="index_film_info.php?id=<?php echo $row["id"]; ?>">
                        <div class="rank">
                            <?php echo $row["estimation"]; ?>
                        </div>
                        <img src="<?php echo $row["poster"]; ?>" alt="">
                        <p>
                            <?php echo $row["name"]; ?><br><span>
                                <?php echo $row["genres"]; ?>
                            </span>
                        </p>
                    </a>
                </div>
            </div>
        <?php }
    }
    ?>

        </div>

        <h1 class="name_sec">CATEGORY</h1>

        <div class="category">
            <a href="films.php"><img src="asset/img/films.png" alt=""></a>
            <a href="serials.php"><img src="asset/img/serials.png" alt=""></a>
        </div>

        <h1 class="name_sec">RECOMMENDATIONS</h1>

        <div class="cards_new_films">

        <?php
        $sql = "SELECT * FROM products WHERE id > 4 ORDER BY id LIMIT 3";
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) { ?>
            
                <div class="reccomend">
                
                    <a href="index_film_info.php?id=<?php echo $row["id"]; ?>">
                        <img src="<?php echo $row["poster"]; ?>" alt="">
                        <p>
                            <?php echo $row["name"]; ?><br><span>
                                <?php echo $row["genres"]; ?>
                            </span>
                        </p>
                    </a>
                </div>
            
        <?php }
    }
    ?>

</div>

        

        

    </div>

    <?php include "footer.php" ?>



</body>

</html>

