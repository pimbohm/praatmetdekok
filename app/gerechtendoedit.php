<?php
if (isset($_POST["doedit"])) {
    $doedit = $conn->prepare("UPDATE dish SET name=:name, description=:desc, dishtype_id=:type, updated_at=CURRENT_TIMESTAMP WHERE id=:id");
    $doedit->bindParam(':id', $_POST['id']);
    $doedit->bindParam(':name', $_POST['name']);
    $doedit->bindParam(':desc', $_POST['description']);
    $doedit->bindParam(':type', $_POST['dishtype_id']);
    $doedit->execute();
}