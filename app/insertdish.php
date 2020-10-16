<?php

if (isset($_POST['createdish'])) {
    $insertdish = new Insert();
    $insertdish = $insertdish->InsertDish($_POST['name'], $_POST['description'], $_POST['dishtype_id']);
}