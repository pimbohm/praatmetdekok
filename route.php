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
        "app/typegerechtenopvragen.php",
        "app/gerechtentoevoegen.php",
        "view/gerechtenaanmaken.php",
    ];
} else if ($path_array[0] == 'gerechten-inzien') {
    $pageTitle = "Gerechten inzien";
    $filesArray = [
        "app/typegerechtenopvragen.php",
        "app/gerechtendelete.php",
        "app/gerechtendoedit.php",
        "view/gerechteneditform.php",
        "app/gerechtenopvragen.php",
        "view/gerechteninzien.php",
    ];
} else if ($path_array[0] == 'saus_dieetwens-aanmaken') {
    $pageTitle = "Saus/dieetwens aanmaken";
    $filesArray = [
        "view/addonsaanmaken.php",
        "app/addonstoevoegen.php",
    ];
} else if ($path_array[0] == 'saus_dieetwens-inzien') {
    $pageTitle = "Saus/dieetwens inzien";
    $filesArray = [
        "app/addonsdelete.php",
        'view/addonseditform.php',
        'app/addonsdoedit.php',
        'app/addonsopvragen.php',
        'view/addonsinzien.php',
    ];
} else if ($path_array[0] == 'saus_dieetwens-toewijzen') {
    $pageTitle = "Saus/dieetwens toewijzen";
    $filesArray = [
        "app/gerechtenopvragen.php",
        "app/addonsopvragen.php",
        'adddishaddons.php',
        'createdishaddons.php',
    ];
} 
//else if(array_key_exists($path_array[0], $routes)) {
//	include 'view/' . $routes[$path_array[0]] . '.php';
//	include 'app/' . $routes[$path_array[0]] . '.php';
//}
else if ($path_array[0] == '') {
    $pageTitle = "Praat met de kok";
	$filesArray = ['view/home.php'];
}


// Render the view (header, files and footer)
include 'view/partials/header.php';
foreach($filesArray as $file) {
    include $file;
}
include 'view/partials/footer.php';