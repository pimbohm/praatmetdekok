<?php
if(isset($_POST['ok'])) {
    if(!empty($_POST['addon'])) {
        foreach ($_POST['addon'] as $addon ) {
            $insertdish = $conn->prepare("INSERT INTO dish_addon (dish_id, addon_id, created_at)
            VALUES (:dish, :addon, CURRENT_TIMESTAMP)");
            $insertdish->bindParam(':dish', $_POST["gerecht"]);
            $insertdish->bindParam(':addon', $addon);
            $insertdish->execute();
        }
    }
}