<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "illuminos";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM all_product WHERE `category` = 'Фильм'";
    $result = $conn->query($sql);
    // if ($result = $conn->query($sql))
    session_start();
    ?>
    <?php include('header.php') ?>

    <div class="poster vverx">
        <div class="content_poster">
            <p>На Олимпиаде 1972 года советские баскетболисты встретились с легендарной американской сборной. Этот матч
                войдет в историю спорта, но каким был путь от создания команды до заветного финального броска?
                <br><span>Драма</span>
            </p> <br>
            <p><a href="podpiska.php" class="podpiska_butt vverx_butt">Смотреть по подписке</a></p>

        </div>
    </div>

    <div class="content">
        <h1 class="name_sec">FILMS</h1>

        <div class="cards_new_films">

            <?php
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) { ?>

                    <div class="card">
                        <form method="post" action="add_to_cart.php">
                            <input type="hidden" name="product_id" value="<?php echo $row["id"]; ?>">
                            <button type="submit" class="oform_zakaz"><img src="asset/img/heart.png" alt=""></button>
                        </form>
                        <form class="reccomend" action="add_to_views.php" method="POST">
                            <button>
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

                                <img src="<?php echo $row["poster"]; ?>" alt="">
                                <p>
                                    <?php echo $row["name"]; ?><br><span>
                                        <?php echo $row["genres"]; ?>
                                    </span>
                                </p>
                                </a>
                            </button>
                        </form>
                    </div>


                <?php }
            }
            ?>

        </div>


    </div>

    <?php include('footer.php') ?>



</body>

</html>