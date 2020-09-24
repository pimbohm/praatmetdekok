<?php
if (isset($_POST["doedit"])) {
    $doedit = $conn->prepare("UPDATE dish SET dishname=:name, dishdescription=:desc, dishdishtype_id=:type, dishupdated_at=CURRENT_TIMESTAMP WHERE dishid=:id");
    $doedit->bindParam(':id', $_POST['dishid']);
    $doedit->bindParam(':name', $_POST['dishname']);
    $doedit->bindParam(':desc', $_POST['dishdescription']);
    $doedit->bindParam(':type', $_POST['dishtypedish_id']);
    $doedit->execute();
}