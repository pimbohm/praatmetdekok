<?php
$selectdish = new Select();
$selectdish = $selectdish->getDish();
?>
    <h1>Gerechten</h1>
<?php foreach($selectdish as $d) { ?>
    <form method="post">
        <input type="hidden" name="id" value="<?= $d['id']; ?>">
        <?php
        echo 'Gerecht: ' . $d['name'] . '<br>';
        echo 'Beschrijving: ' . $d['description'] . '<br>';
        echo 'type: ' . $d['type'] . '<br>';
        echo 'Aangemaakt op: ' . $d['created_at'] . '<br>';
        echo (!empty($d['updated_at']) ? 'Gewijzigd op: ' . $d['updated_at'] . '<br>' : '');
        ?>
        <br>
        <input type="submit" name="edit" value="wijzigen">
        <input type="submit" name="delete" value="verwijderen">
        <br>
        <br>
    </form>
    <?php
}
