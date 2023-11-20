<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";
$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_GET['id'];
$sql = "SELECT * FROM all_product WHERE id = " . $id;
$result = $conn->query($sql);
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>

    <div class="content">

        <a href="index.php" class="nazad">На главную</a>
        


        <?php
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <?php $category = $row["category"]; ?>

                <div class="trailer_film">
                    <div>
                        <?php echo $row["trailer"]; ?>
                    </div>
                    <div class="description_film">
                        <p class="name_film">
                            <?php echo $row["name"]; ?>
                        </p>
                        <div class="small_description">
                            <p>
                                <?php echo $row["age"]; ?>
                            </p>
                            <p>
                                <?php echo $row["estimation"]; ?>
                            </p>
                            <p>
                                <?php echo $row["genres"]; ?>
                            </p>
                        </div>
                        <div class="description">
                            <p>
                                <?php echo $row["description"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>

        <?php if ($category == 'Сериал') {
            include 'episodes.php';
        } else {
            echo '';
        } ?>



        <h1 class="name_sec">ACTORS AND DIRECTORS</h1>

        <div class="actors">

            <?php
            $sql = "SELECT * FROM actors ORDER BY rand() LIMIT 6";
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="actor">
                        <img src="<?php echo $row["image"]; ?>" alt="">
                        <p>
                            <?php echo $row["name"]; ?>
                            
                        </p>
                        <p><span>
                                <?php echo $row["role"]; ?>
                            </span> </p>
                    </div>
                <?php }
            } ?>


        </div>

        <h1 class="name_sec">REVIEWS</h1>

        <div class="reviews_content">
            <div class="text_rew">
                <?php
                $sql = "SELECT * FROM all_product WHERE id = " . $id;
                if ($result = $conn->query($sql)) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <p>Общая оценка пользователей

                        </p>
                        <p>
                            <?php echo $row["estimation"]; ?>
                        </p>
                        <p>

                            <?php for ($i = 1; $i <= 10; $i++) {
                                $i <= $row["estimation"] ? $stars .= "&#9733;" : $stars .= "&#9734;";
                            }
                            echo $stars;
                    }
                } ?>
                </p>
            </div>




            <div class="reviews">
                <?php
                $sql = "SELECT * FROM reviews ORDER BY rand() LIMIT 3";
                if ($result = $conn->query($sql)) {
                    while ($row = $result->fetch_assoc()) { ?>

                        <div class="review">
                            <p class="name_user_rew">
                                <?php echo $row["user_name"]; ?>
                            </p>
                            <br>
                            <p class="otcenka">
                                Оценка пользователя:
                                <?php
                                $rand = rand(70, 100) / 10;
                                echo $rand;
                                ?>
                            </p>
                            <br>
                            <p>
                                <?php echo $row["text_reviews"]; ?>
                            </p>
                        </div>
                    <?php }
                } ?>


            </div>
        </div>

        <h1 class="name_sec">SIMILAR</h1>

        <div class="cards_new_films">

            <?php
            $sql = "SELECT * FROM all_product WHERE `category` = '$category' ORDER BY rand() LIMIT 3";
            
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) { ?>

                    <div class="card">

                    <form class="reccomend">
                        <a href="info.php?id=<?php echo $row["id"]; ?>">
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
            ?>
        </div>

    </div>


    <?php include "footer.php" ?>



</body>

</html>