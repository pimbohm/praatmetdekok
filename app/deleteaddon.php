<?php

if (isset($_POST['delete'])) {
    $deleteaddon = new Delete();
    $deleteaddon = $deleteaddon->addonDelete($_POST['id']);
}