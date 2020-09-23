<?php
if (isset($_POST['edit'])) {
    echo $_POST['id'];
    $stmt2 = $conn->prepare("SELECT * FROM dishtype");
    $stmt2->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = $conn->prepare("SELECT * FROM dish WHERE dishid=:id");
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();
    $result2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result2 as $res2) {
    ?>
    <form method='post'>
        <label>naam gerecht: </label>
        <input type="text" name="name" value="<?php echo $res2['dishid']; ?>">
        <br>
        <label>beschrijving: </label>
        <textarea name="description" rows="4" cols="50"><?php echo $res2['dishdescription']; ?></textarea>
        <br>
        <label>type: </label>
        <select name='typedish_id'>
            <option value="16"> <?php echo $res2['dishdishtype_id'] ?> </option>
        </select>
        <input type='submit' name='ok' value='Gerecht aanmaken'>
        </form>
        <?php
    }
}
        