<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
</head>

<body>
    <h1>Menu</h1>
    <?php
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $res) {
?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $res['dishid']; ?>">
            <?php
            echo 'Gerecht: ' . $res['dishname'];
            echo '<br>';
            echo 'Beschrijving: ' . $res['dishdescription'];
            echo '<br>';
            echo 'type: ' . $res['dishtypename'];
            echo '<br>';
            ?>
                <input type="submit" name="edit" value="wijzigen">
                <input type="submit" name="delete" value="verwijderen">
                <br>
                <br>
        </form>
        <?php
}
?>

</body>

</html>