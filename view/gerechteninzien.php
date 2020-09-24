<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
</head>

<body>
    <h1>Gerechten</h1>
    <?php
foreach($dish as $d) {
    if ($d['dishdeleted_at'] == '') {
?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $d['dishid']; ?>">
            <?php
            echo 'Gerecht: ' . $d['dishname'];
            echo '<br>';
            echo 'Beschrijving: ' . $d['dishdescription'];
            echo '<br>';
            echo 'type: ' . $d['dishtypename'];
            echo '<br>';
            echo 'Aangemaakt op: ' . $d['dishcreated_at'];
            echo '<br>';
            if ($d['dishupdated_at'] != '') {
                echo 'Gewijzigd op: ' . $d['dishupdated_at'];
                echo '<br>';
            }
            ?>
                <input type="submit" name="edit" value="wijzigen">
                <input type="submit" name="delete" value="verwijderen">
                <br>
                <br>
        </form>
        <?php
    }
}
?>

</body>

</html>
