<?php
if (isset($_POST["delete"])) {
    $softdelete = $conn->prepare("UPDATE dish SET dishdeleted_at=CURRENT_TIMESTAMP WHERE dishid=:id");
    $softdelete->bindParam(':id', $_POST['id']);
    $softdelete->execute();
}