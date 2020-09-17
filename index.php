<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get full url
$fullUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

/**
 * php function to parse all parts of an url
 */
$parsed_url = parse_url($fullUrl);

$trim_path = preg_replace('/^\/+/', '', $parsed_url['path']);
$path_array = explode(DIRECTORY_SEPARATOR, $trim_path);

// Quick fix for possibility to run from a subfolder
$basePath = '/';
if($path_array[0] === $_ENV['BASE_PATH']) {
	$basePath = array_shift($path_array);
}


include "navbar.html";
include "conn.php";

if($path_array[0] == 'voorgerecht-aanmaken') {
    include "vooraanmaken.html";
    include "vooraanmaken.php";
}

var_dump($path_array);
if($path_array[0] == 'hoofdgerecht-aanmaken') {
    include "hoofdaanmaken.html";
    include "hoofdaanmaken.php";
}


if($path_array[0] == 'nagerecht-aanmaken') {
    include "naaanmaken.html";
    include "naaanmaken.php";
}


if($path_array[0] == 'bijgerecht-aanmaken') {
    include "bijaanmaken.html";
    include "bijaanmaken.php";
}


if($path_array[0] == 'saus-aanmaken') {
    include "sausaanmaken.html";
    include "sausaanmaken.php";
}

if($path_array[0] == 'menu-inzien') {
    include "menueditform.php";
    include "menueditdefinitief.php";
    include "deletegerecht.php";
    include "menuopvragen.php";
    include "menuinzien.php";
}
