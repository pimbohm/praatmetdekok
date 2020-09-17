<?php
// A mapping array to have maintainable route file
$routes = [
	'voorgerecht-aanmaken' => 'vooraanmaken',
	'hoofdgerecht-aanmaken' => 'hoofdaanmaken'
];

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

if(array_key_exists($path_array[0], $routes)) {
	include 'view/' . $routes[$path_array[0]] . '.php';
	include 'app/' . $routes[$path_array[0]] . '.php';
} else {
	include 'view/404.php';
}


