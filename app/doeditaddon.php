<?php

if (isset($_POST['doedit'])) {
    $editaddon = new Edit();
    $editaddon = $editaddon->editAddon($_POST['id'], $_POST['name'], $_POST['description']);
}