<?php

if (isset($_POST['editdefinitief'])) {
    $stmupdate = $conn->prepare("UPDATE gerecht SET naam=:naam, type=:type, vegetarisch=:vegetarisch WHERE id=:id");
    $stmupdate->bindParam(':id', $_POST['id']);
    $stmupdate->bindParam(':naam', $_POST['editnaam']);
    $stmupdate->bindParam(':type', $_POST['edittype']);
    $stmupdate->bindParam(':vegetarisch', $_POST['editvegetarisch']);
    $stmupdate->execute();
}
