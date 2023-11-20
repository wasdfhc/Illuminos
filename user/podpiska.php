<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('header.php') ?>

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
        $sql = "SELECT * FROM users WHERE login='" . $_SESSION['login'] . "'";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) { ?>
                <p>Login: <span class="span_user">
                        <?php echo $row["login"]; ?>
                    </span>
                    <?php $user_id = $row["id"];
                    $sql = "SELECT * FROM users, tariff WHERE users.podpiska_id = tariff.podpiska_id LIMIT 1";  
                    if ($result = $conn->query($sql)) {
                       while ($row = $result->fetch_assoc()) { ?>
                <p>Tariff: <span class="span_user">
                        <?php echo $row["tariff_name"];?>
                    </span></p>
            <?php }
        }
     }
     } ?>
        </div>


        <?php
        // Подключение к базе данных
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "illuminos";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Проверка соединения
        if ($conn->connect_error) {
            die("Ошибка подключения: " . $conn->connect_error);
        }

        // Получение данных о подписке из таблицы
        $sql = "SELECT * FROM tariff LIMIT 2";
        $result = $conn->query($sql);

        ?>

        <?php
        // Проверка, была ли нажата кнопка "Купить подписку"
        if (isset($_POST['buy'])) {
            $podpiska_id = $_POST['podpiska_id'];
            // Обновление информации о подписке в таблице "user"
            // Здесь нужно указать ID пользователя, для которого осуществляется покупка
            $update_sql = "UPDATE users SET podpiska_id = '$podpiska_id' WHERE id = '$user_id'";

            if ($conn->query($update_sql) === TRUE) {
                echo "<div class='text_podpiska_buy'>Подписка успешно куплена. Обновите страницу</div>";
                header('Location: https://sbp.nspk.ru');
            } else {
                echo "Ошибка при покупке подписки: " . $conn->error;
            }
        }

        // Закрытие соединения
        $conn->close();
        ?>


        <div class="content_str_podpiska">
            <?php
            // Подключение к базе данных
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "illuminos";

            $conn = new mysqli($servername, $username, $password, $dbname);



            // Проверка соединения
            if ($conn->connect_error) {
                die("Ошибка подключения: " . $conn->connect_error);
            }

            // Получение данных о подписке из таблицы
            $sql = "SELECT * FROM tariff WHERE podpiska_id > 0";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Вывод информации о подписке на страницу
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card_podpiska'>";
                    echo "<div class='content_card_podpiska'>";
                    echo "<div class='name_price_tariff'>";
                    echo "<h1>", $row["tariff_name"], "</h1>";
                    echo "<p>", $row["price"], " Р</p>";
                    echo "</div>";
                    echo "<div class='desc'>";
                    echo "<p>", $row["description"], "</p>";
                    echo "</div>";
                    echo "<form method='POST'>";
                    echo "<input type='hidden' name='podpiska_id' value='" . $row["podpiska_id"] . "'>";
                    echo "<input type='submit' class='butt_oform_podpiska' name='buy' value='Купить подписку'>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "Нет доступных подписок.";
            }

            ?>

        </div>




        <?php include "footer.php" ?>



</body>

</html>