<h1>Gerechten aanmaken</h1>
<form method='post'>
    <label>naam gerecht: </label>
    <input type="text" name="name">

    <label>beschrijving: </label>
    <textarea name="description" rows="4" cols="50"></textarea>

    <select name='dishtype_id'>
        <?php foreach ($this->dishTypes as $dishType) { ?>
            <option value="<?= $dishType['id']; ?>"><?= $dishType['name']; ?></option>
		<?php } ?>
    </select>
    <input type='submit' name='createdish' value='Gerecht aanmaken'>
</form>
