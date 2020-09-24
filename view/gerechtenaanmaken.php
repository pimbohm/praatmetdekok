    <form method='post'>
       <label>naam gerecht: </label>
        <input type="text" name="name">
        <br>
        <label>beschrijving: </label>
        <textarea name="description" rows="4" cols="50"></textarea>
        <br>
        <select name='typedish_id'>
        <?php
            foreach ($dishtypes as $dt) {
        ?>
        <option value="<?= $dt['id']; ?>"><?= $dt['name']; ?></option>
        <?php
            }
        ?>
        <br>
        </select>
        <input type='submit' name='ok' value='Gerecht aanmaken'>
    </form>