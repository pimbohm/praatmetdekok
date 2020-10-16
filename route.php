<?php
// A mapping array to have maintainable route file
//$routes = [
//	'voorgerecht-aanmaken' => 'vooraanmaken',
//	'hoofdgerecht-aanmaken' => 'hoofdaanmaken',
//    'nagerecht-aanmaken' => 'naaanmaken',
//    'bijgerecht-aanmaken' => 'bijaanmaken',
//    'saus-aanmaken' => 'sausaanmaken'
//];

//if($path_array[0] == 'nagerecht-aanmaken') {
//	include "naaanmaken.html";
//	include "naaanmaken.php";
//}

//if($path_array[0] == 'bijgerecht-aanmaken') {
//	include "bijaanmaken.html";
//	include "bijaanmaken.php";
//}

//if($path_array[0] == 'saus-aanmaken') {
//	include "sausaanmaken.html";
//	include "sausaanmaken.php";
//}
//
//if($path_array[0] == 'menu-inzien') {
//	include "menueditform.php";
//	include "menueditdefinitief.php";
//	include "deletegerecht.php";
//	include "menuopvragen.php";
//	include "menuinzien.php";
//} 
$filesArray = ['view/404.php'];
$pageTitle = "404 pagina niet gevonden";
if ($path_array[0] == 'gerechten-aanmaken') {
    $pageTitle = "Gerechten aanmaken";
    $filesArray = [
        "app/inserttabledata.php",
        "app/selecttabledata.php",
        "app/insertdish.php",
        "view/adddish.php",
    ];
} else if ($path_array[0] == 'gerechten-inzien') {
    $pageTitle = "Gerechten inzien";
    $filesArray = [
        "app/edittabledata.php",
        "app/deletetabledata.php",
        "app/doeditdish.php",
        "app/deletedish.php",
        "app/selecttabledata.php",
        "view/editdish.php",
        "view/vieuwdish.php",

    ];
}
 else if ($path_array[0] == 'saus_dieetwens-aanmaken') {
    $pageTitle = "Saus/dieetwens aanmaken";
    $filesArray = [
        "app/inserttabledata.php",
        "app/selecttabledata.php",
        "app/insertaddon.php",
        "view/addaddons.php",
    ];
}
 else if ($path_array[0] == 'saus_dieetwens-inzien') {
    $pageTitle = "Saus/dieetwens inzien";
    $filesArray = [
        "app/edittabledata.php",
        "app/doeditaddon.php",
        "app/deleteaddon.php",
        "app/selecttabledata.php",
        "view/editaddon.php",
        'view/vieuwaddons.php',
    ];
}
// else if ($path_array[0] == 'saus_dieetwens-toewijzen') {
//    $pageTitle = "Saus/dieetwens toewijzen";
//    $filesArray = [
//        "app/gerechtenopvragen.php",
//        "app/addonsopvragen.php",
//        'view/adddishaddons.php',
//        'app/createdishaddons.php',
//    ];
//} else if ($path_array[0] == 'addongerechten-inzien') {
//    $pageTitle = "Addongerechten inzien";
//    $filesArray = [
//        'app/dishaddonsdelete.php',
//        'app/dishaddonsopvragen.php',
//        'view/dishaddonsinzien.php',
//    ];
//} else if ($path_array[0] == 'menugerechten-kiezen') {
//    $pageTitle = "Menugerechten kiezen";
//    $filesArray = [
//        'addalldishes.php',
//        'selectmenudishes.php',
//    ];
//}  else if ($path_array[0] == 'vieuw-dishes') {
//    $pageTitle = "Vieuw dishes";
//    $filesArray = [
//        'vieuwtabledata.php',
//        'selecttabledata.php',
//    ];
//}
//else if(array_key_exists($path_array[0], $routes)) {
//	include 'view/' . $routes[$path_array[0]] . '.php';
//	include 'app/' . $routes[$path_array[0]] . '.php';
//}
if ($path_array[0] == '') {
    $pageTitle = "Praat met de kok";
	$filesArray = ['view/home.php'];
}


// Render the view (header, files and footer)
include 'view/partials/header.php';
foreach($filesArray as $file) {
    include $file;
}
include 'view/partials/footer.php';