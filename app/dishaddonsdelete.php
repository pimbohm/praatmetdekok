    <?php

    if (isset($_POST["delete"])) {
        $softdelete = $conn->prepare("UPDATE dish_addon SET deleted_at=CURRENT_TIMESTAMP WHERE id=:id");
        $softdelete->bindParam(':id', $_POST['id']);
        $softdelete->execute();
    }