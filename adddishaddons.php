<form method="post">
    <select name="gerecht">
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
    <input type="submit" name="ok">
</form>