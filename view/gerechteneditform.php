<?php
if (isset($_POST['edit'])) {
    $getdish = $conn->prepare("SELECT * FROM dish WHERE dishid=:id");
    $getdish->bindParam(':id', $_POST['id']);
    $getdish->execute();
    $dish = $getdish->fetchAll(PDO::FETCH_ASSOC);
    foreach ($dish as $d) {
?>
    <form method='post'>
        <input type="hidden" name="dishid" value="<?php echo $d['id']; ?>">
        <label>naam gerecht: </label>
        <input type="text" name="dishname" value="<?php echo $d['name']; ?>">
        <br>
        <label>beschrijving: </label>
        <textarea name="dishdescription" rows="4" cols="50"><?php echo $d['description']; ?></textarea>
        <br>
        <label>type: </label>
        <select name='dishtypedish_id'>
        <?php
            foreach ($dishtypes as $dt) {
        ?>
            <option value="<?php echo $dt['id']; ?>"> <?php echo $dt['name']; ?> </option>
        <?php
            }
        ?>
        </select>
        <input type='submit' name='doedit' value='Wijzig'>
    </form>
        <?php
    }
}