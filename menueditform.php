<?php
if (isset($_POST['edit'])) {
    $sql = $conn->prepare("SELECT id, naam, type, vegetarisch FROM gerecht WHERE id=:id");
    $sql->bindParam(':id', $_POST['id']);
    $sql->execute();
    $result2 = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach($result2 as $res) {
        ?>
        <br>
        <br>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
            <label>Gerecht: </label>
            <input type="text" name="editnaam" value="<?php echo $res['naam']; ?>">
            <br>
            <label>Type gerecht</label>
            <select name="edittype">
                <option value="voorgercht">Voorgerecht</option>
                <option value="hoofdgerecht">Hoofdgerecht</option>
                <option value="nagerecht">Nagerecht</option>
                <option value="bijgerecht">Bijgerecht</option>
                <option value="saus">Saus</option>
            </select>
            <br>
            <label>Vegetarisch</label>
            <select name="editvegetarisch">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
        <input type="submit" name="editdefinitief" value="Veranderen">
        </form>
        <?php
    }
}
