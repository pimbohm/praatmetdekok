<?php

if (isset($_POST["delete"])) {
    $deleteDish = new Delete();
    $deleteDish = $deleteDish->dishDelete($_POST["id"]);
}