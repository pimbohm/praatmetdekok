
<h1>Gerechten</h1>
<?php
    foreach($dish as $d) {
        if ($d['deleted_at'] == '') {
?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <?php
            echo 'Gerecht: ' . $d['name'];
            echo '<br>';
            echo 'Beschrijving: ' . $d['description'];
            echo '<br>';
            echo 'type: ' . $d['name'];
            echo '<br>';
            echo 'Aangemaakt op: ' . $d['created_at'];
            echo '<br>';
            if ($d['dishupdated_at'] != '') {
                echo 'Gewijzigd op: ' . $d['updated_at'];
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