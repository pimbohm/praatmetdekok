<?php
    echo "<h1>Toon gerechten met extra's</h1>";
    foreach($dishaddon as $da) {
        if ($da['dishdel'] == "" && $da['addondel'] == "") {
    ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $da['id']?>">
    <?php
            echo 'Type: ' . $da['type'] . "<br>";
            echo 'Gerecht: ' . $da['dish'] . "<br>";
            echo 'Toevoeging: ' . $da['addon'] . "<br>";
            echo 'Gemaakt op: ' . $da['created_at'] . "<br><br>";
        }
    ?>
            <input type="submit" name="delete" value="verwijderen">
            <br>
            <br>
        </form>
    <?php
    }