    <?php
    foreach ($this->editDish as $d) {
        ?>
        <h1>Gerecht Wijzigen</h1>
        <form method='post'>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <label>naam gerecht: </label>
            <input type="text" name="name" value="<?php echo $d['name']; ?>">
            <br>
            <label>beschrijving: </label>
            <textarea name="description" rows="4" cols="50"><?php echo $d['description']; ?></textarea>
            <br>
            <label>type: </label>
            <select name='dishtype_id'>
                <?php
                foreach ($this->dishTypes as $dt) {
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