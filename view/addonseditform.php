<?php
if (isset($_POST['edit'])) {
    $getaddonbyid = $conn->prepare("SELECT * FROM addon WHERE id=:id");
    $getaddonbyid->bindParam(':id', $_POST['id']);
    $getaddonbyid->execute();
    $getaddonbyid = $getaddonbyid->fetchAll(PDO::FETCH_ASSOC);
    foreach ($getaddonbyid as $a) {
?>
    <form method='post'>
        <input type="hidden" name="id" value="<?php echo $a['id']; ?>">
        <label>Saus/dieetwens: </label>
        <input type="text" name="name" value="<?php echo $a['name']; ?>">
        <br>
        <label>beschrijving: </label>
        <textarea name="description" rows="4" cols="50"><?php echo $a['description']; ?></textarea>
        <br>
        <input type='submit' name='doedit' value='Wijzig'>
    </form>
        <?php
    }
}
