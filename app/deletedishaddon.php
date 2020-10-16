<?php

if (isset($_POST["delete"])) {
    $deleteDishAddon = new Delete();
    $deleteDishAddon = $deleteDishAddon->dishAddonDelete($_POST["id"]);
}