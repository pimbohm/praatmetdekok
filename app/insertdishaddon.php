<?php

if (isset($_POST["createdishaddon"])) {
    $insertdishaddon = new Insert();
    $insertdishaddon =  $insertdishaddon->insertDishAddon($_POST['dish'], $_POST['addon']);
}