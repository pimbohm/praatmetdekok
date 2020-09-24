<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="utf-8">
	<title>Example Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

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
        <option value="<?= $dt['dishtypeid']; ?>"><?= $dt['dishtypename']; ?></option>
        <?php
            }
        ?>
        <br>
        </select>
        <input type='submit' name='ok' value='Gerecht aanmaken'>
        </form>
</body>

</html>