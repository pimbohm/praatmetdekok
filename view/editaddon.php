<?php
if (isset($_POST['edit'])) {
    $editaddon = new Select();
    $editaddon = $editaddon->getAddonEdit($_POST['id']);
    foreach ($editaddon as $a) {
        ?>
        <h1>Saus of dieetwens wijzigen</h1>
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
