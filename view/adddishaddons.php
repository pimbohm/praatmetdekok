<?php
$dish = new Select();
$dish = $dish->getDish();

$getaddons = new Select();
$getaddons = $getaddons->getAddons();
?>
<h1>Voeg extra's toe</h1>
<form method="post">
    <select name="dish">
        <?php
        foreach ($dish as $d) { ?>
            <option value="<?php echo $d['id']?>"><?php echo $d['name']?></option>
        <?php } ?>
    </select>
    <?php
    foreach ($getaddons as $a) {
        echo '<br>' . $a['name']?>
        <input type="checkbox" name="addon[]" value="<?php echo $a['id']; ?>">
    <?php } ?>
    <input type="submit" name="createdishaddon" value="aanmaken">
</form>