<h1>Menu aanmaken</h1>
<form method="post">
    <label>Menunaam: </label>
    <input type="text" name="name"><br>
    <label>Datum: </label>
    <input type="date" name="date"><br>
    <label>Voorgerecht: </label>
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
    <!--
    <label>Period: </label>
    <select name="period">
        <option></option>
    </select>
    <br>
    <label>Locatie: </label>
    <select name="location">
        <option></option>
    </select>
    -->
    <input type="submit" name="createmenu" value="Menu aanmaken">
</form>