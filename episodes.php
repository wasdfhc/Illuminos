<h1 class="name_sec">EPISODES</h1>

<div class="episodes">
    <?php
    $sql = "SELECT * FROM all_product LIMIT 6";
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) { ?>
            <div class="episod">
                EPISODE
                <?php echo $row["id"];?>
            </div>
        <?php }
    } ?>
</div>