<?php
include"navbar.html";
include "conn.php";

$url = $_SERVER['REQUEST_URI'];


if($url == '/praatmetdekoktest/Voorgerecht_aanmaken') {
    include "vooraanmaken.html";
    include "vooraanmaken.php";
}


if($url == '/praatmetdekoktest/Hoofdgerecht_aanmaken') {
    include "hoofdaanmaken.html";
    include "hoofdaanmaken.php";
}


if($url == '/praatmetdekoktest/Nagerecht_aanmaken') {
    include "naaanmaken.html";
    include "naaanmaken.php";
}


if($url == '/praatmetdekoktest/Bijgerecht_aanmaken') {
    include "bijaanmaken.html";
    include "bijaanmaken.php";
}


if($url == '/praatmetdekoktest/Saus_aanmaken') {
    include "sausaanmaken.html";
    include "sausaanmaken.php";
}

if($url == '/praatmetdekoktest/Menu_inzien') {
    include "menueditform.php";
    include "menueditdefinitief.php";
    include "deletegerecht.php";
    include "menuopvragen.php";
    include "menuinzien.php";
}

?>
