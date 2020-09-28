<?php
if (isset($_POST["doedit"])) {
    $doedit = $conn->prepare("UPDATE addon SET name=:name, description=:desc, updated_at=CURRENT_TIMESTAMP WHERE id=:id");
    $doedit->bindParam(':id', $_POST['id']);
    $doedit->bindParam(':name', $_POST['name']);
    $doedit->bindParam(':desc', $_POST['description']);
    $doedit->execute();
}