<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Get full url
$fullUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
/** php function to parse all parts of an url */
$parsed_url = parse_url($fullUrl);
// For now we only use the path key from $parsed_url
$trim_path = preg_replace('/^\/+/', '', $parsed_url['path']);
$path_array = explode(DIRECTORY_SEPARATOR, $trim_path);

// Quick fix for possibility to run from a subfolder
// If the BASE_PATH is set and it equals first part of request url remove that from $path_array and save it as $basePath!
$basePath = '';
if($path_array[0] === $_ENV['BASE_PATH']) {
	$basePath = array_shift($path_array);
}

//echo "base path: " . $basePath;
//echo '<pre>';
//var_dump($path_array);
//echo '</pre>';


include "conn.php";
include "view/navbar.php";
include "route.php";
