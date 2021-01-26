<?php
$iteration = 1;
    foreach ($this->menurow as $menu) {
        ?>
        <form method="post">
<?php
        if ($iteration == 1) {
            ?>
            <input type="hidden" name="id" value="<?php echo $menu["id"]; ?>">
<?php
            if (empty($menu['name'])) {
                ?>
                <label>Menunaam: </label>
                <input type="text" name="menuname"><br>
            <?php
            } else {
            ?>
                <label>Menunaam: </label>
                <input type="text" name="menuname" value="<?php echo $menu['name']; ?>"><br>
<?php
            }
            ?>
                <label>datum: </label>
                <input type="datetime" name="date" value="<?php echo $menu['date']; ?>"><br>
                <label>voorgerecht: </label>
                <select name="starter">
        <?php
        foreach ($this->dish as $d) {
            if ($d['type'] == 'voorgerecht') {
                ?>
                <option value="<?php echo "dish, " . $d['id']; ?>"><?php echo $d['name']; ?></option>
                <?php
            }
        }
        foreach ($this->dishaddons as $da) {
            if ($da['type'] == "voorgerecht") {
                ?>
                <option value="<?php echo "dishaddon, " . $da['id']; ?>"><?php echo $da['dish'] . ", " . $da["addon"]; ?></option>";
                <?php
            }
        }
        ?>
    </select>
    <br>
    <label>Hoofdgerecht: </label>
    <select name="main">
        <?php
        foreach ($this->dish as $d) {
            if ($d['type'] == 'hoofdgerecht') {
                ?>
                <option value="<?php echo "dish, " . $d['id']; ?>"><?php echo $d['name']; ?></option>
                <?php
            }
        }
        foreach ($this->dishaddons as $da) {
            if ($da['type'] == "hoofdgerecht") {
                ?>
                <option value="<?php echo "dishaddon, " . $da['id']; ?>"><?php echo $da['dish'] . ", " . $da["addon"]; ?></option>";
                <?php
            }
        }
        ?>
    </select>
    <br>
    <label>Nagerecht: </label>
    <select name="dessert">
        <?php
        foreach ($this->dish as $d) {
            if ($d['type'] == 'nagerecht') {
                ?>
                <option value="<?php echo "dish, " . $d['id']; ?>"><?php echo $d['name']; ?></option>
                <?php
            }
        }
        foreach ($this->dishaddon as $da) {
            if ($da['type'] == "nagerecht") {
                ?>
                <option value="<?php echo "dishaddon, " . $da['id']; ?>"><?php echo $da['dish'] . ", " . $da["addon"]; ?></option>";
                <?php
            }
        }
        ?>
    </select>
    <br>
    <input type="submit" name="doedit" value="wijzig">
<?php
            foreach ($this->menudishid as $menudishid) {
                ?>
                <input type="hidden" name="menudishid[]" value="<?php echo $menudishid ?>">
<?php
            }
        }
        $iteration++;
        ?>

        </form>  
<?php
    }
