    <?php
    $dishtypes = $conn->prepare("SELECT * FROM dishtype WHERE dishtypedeleted_at IS NULL");
    $dishtypes->execute();

    // set the resulting array to associative
    $dishtypes = $dishtypes->fetchAll(PDO::FETCH_ASSOC);