<?php

if (isset($_POST["doedit"])) {
    $editdish = new Edit();
    $editdish = $editdish->editDish($_POST['id'], $_POST['name'], $_POST['description'], $_POST['dishtype_id']);
}