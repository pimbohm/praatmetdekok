<?php

$getaddons = new Select();
$getaddons = $getaddons->getAddons();

?>

    <h1>Sauzen en dieetwensen</h1>
<?php foreach($getaddons as $a) { ?>
    <form method="post">
        <input type="hidden" name="id" value="<?= $a['id']; ?>">
        <?php
        echo 'Saus/dieetwens: ' . $a['name'] . '<br>';
        echo 'Beschrijving: ' . $a['description'] . '<br>';
        echo 'Aangemaakt op: ' . $a['created_at'] . '<br>';
        echo (!empty($a['updated_at']) ? 'Gewijzigd op: ' . $a['updated_at'] . '<br>' : '');
        ?>
        <br>
        <input type="submit" name="edit" value="wijzigen">
        <input type="submit" name="delete" value="verwijderen">
        <br>
        <br>
    </form>
    <?php
}

