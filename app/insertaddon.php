<?php

if (isset($_POST['create'])) {
    $insertAddon = new Insert();
    $insertAddon = $insertAddon->insertAddon($_POST['name'], $_POST['description']);
}

