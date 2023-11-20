<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('header.php') ?>


    <div class="content">
        <div class="podpiska_cabinet">
            <a href="podpiska.php">ОФОРМИТЕ ПОДПИСКУ</a>
        </div>

        <?php
        session_start();
        error_reporting(E_ERROR | E_PARSE);
        // Подключение к базе данных
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "illuminos";
        $conn = new mysqli($servername, $username, $password, $dbname);
        ?>
        

        <div class="info_user">
        <?php
        $sql = "SELECT * FROM users JOIN tariff WHERE users.podpiska_id = tariff.podpiska_id AND login='" . $_SESSION['login'] . "'";
      //  $sql = "SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) { ?>
                <p>Login: <span class="span_user">
                        <?php echo $row["login"]; ?>
                    </span>
                    <?php $user_id = $row["id"]; ?>
                <p>Tariff: <span class="span_user">
                        <?php echo $row["tariff_name"];?>
                    </span></p>
            <?php }
        }
 ?>
        </div>

        <h1 class="name_sec">FAVORITES</h1>

        <div class="cards_new_films">

            <?php
            $sql = "SELECT * FROM all_product WHERE id IN (" . implode(",", array_keys($_SESSION["cart"])) . ")";
            // Отображение списка товаров в корзине
            ?>
            <?php
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {

                    ?>
                    <div class="reccomend">
                        <form method="post" action="remove_from_cart.php" class="delete_serials">
                            <input type="hidden" name="product_id" value="<?php echo $row["id"]; ?>">
                            <button type="submit" class="oform_zakaz"><img src="asset/img/heart1.png" alt=""></button>
                        </form>
                        <a href="info.php?id=<?php echo $row["id"]; ?>">
                            <img src="<?php echo $row["poster"]; ?>" alt="">
                            <p>
                                <?php echo $row["name"]; ?><br><span>
                                    <?php echo $row["genres"]; ?>
                                </span>
                            </p>
                        </a>

                    </div>


                <?php }
            } else {
                echo 'Нет избранных фильмов или сериалов';
            }
            ?>
        </div>

        <h1 class="name_sec">RECENTLY VIEWED</h1>

        <div class="cards_new_films">

            <?php

            $sql = "SELECT * FROM all_product WHERE id IN (" . implode(",", array_keys($_SESSION["view"])) . ") LIMIT 3 ";

            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) { ?>

                    <div class="reccomend">
                        <a href="info.php?id=<?php echo $row["id"]; ?>">
                            <img src="<?php echo $row["poster"]; ?>" alt="">
                            <p>
                                <?php echo $row["name"]; ?><br><span>
                                    <?php echo $row["genres"]; ?>
                                </span>
                            </p>
                        </a>
                    </div>
                <?php }
            } else {
                echo '';
            }
            ?>
        </div>

    </div>


<?php include('footer.php') ?>


</body>

</html>
