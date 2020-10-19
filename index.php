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

$route = new App\Route();
$route->get($path_array);
