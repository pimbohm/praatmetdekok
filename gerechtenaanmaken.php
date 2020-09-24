<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="utf-8">
	<title>Example Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    $stmt = $conn->prepare("SELECT * FROM dishtype WHERE deleted_at IS NULL");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <form method='post'>
       <label>naam gerecht: </label>
        <input type="text" name="name">
        <br>
        <label>beschrijving: </label>
        <textarea name="description" rows="4" cols="50"></textarea>
        <br>
        <select name='typedish_id'>
        <?php
            foreach ($result as $res) {
        ?>
        <option value="<?= $res['id']; ?>"><?= $res['name']; ?></option>
        <?php
        }
        ?>
        <br>
        </select>
        <input type='submit' name='ok' value='Gerecht aanmaken'>
        </form>
        <?php
            if(isset($_POST['ok'])) {
                if(!empty($_POST["name"])) {
                    $sql = $conn->prepare("INSERT INTO dish (dishname, dishdescription, dishdishtype_id, dishcreated_at)
                    VALUES (:name, :desc, :type, CURRENT_TIMESTAMP)");
                    $sql->bindParam(':name', $_POST["name"]);
                    $sql->bindParam(':desc', $_POST["description"]);
                    $sql->bindParam(':type', $_POST["typedish_id"]);
                    $sql->execute();
                }
            }
        ?>
</body>

</html>