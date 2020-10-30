<?php

namespace App;

class Route {
	protected $apiRoutes;
	protected $pageRoutes;
	protected $pageTitle = '';
	protected $basePath = '';

	public function __construct()
	{
		$this->apiRoutes = include "routes/api.php";
		$this->pageRoutes = include "routes/page.php";
	}

	public function get($route)
	{
		if($route[0] == 'api') {
			return $this->API($route);
		}

		return $this->HTML($route);
	}

	public function API($endpoint) {
		return $endpoint;
	}

	public function HTML($page) {
		// When BASE_PATH is set and equals first part of request url
		// remove the path from $page array save it as our $basePath!
		if($page[0] === $_ENV['BASE_PATH']) {
			$this->basePath = array_shift($page);
		}

		if($page[0] == '') {
			$page[0] = 'home';
		}

		$file = 'view/404.php';
		$this->pageTitle = "404 pagina niet gevonden";

		if(array_key_exists($page[0], $this->pageRoutes)){
			$class = "App\Controller\\" . $this->pageRoutes[$page[0]]['class'] . "Controller";
			$file = new $class();
			$this->pageTitle = $this->pageRoutes[$page[0]]['title'] ?? '';
		}

		include 'view/partials/header.php';

		if ($page[0] == "gerechten-aanmaken") {
            echo $file->addview();
            echo $file->insert();
        }
		if ($page[0] == "gerechten-inzien") {
            echo $file->editview();
            echo $file->edit();
            echo $file->delete();
            echo $file->dishview();
        }
		if ($page[0] == "saus_dieetwens-aanmaken") {
            echo $file->view();
            echo $file->insert();
        }
		if ($page[0] == "saus_dieetwens-inzien") {
		    echo $file->editview();
		    echo $file->edit();
		    echo $file->delete();
            echo $file->viewaddons();
        }

		include 'view/partials/footer.php';
	}
}
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

//if ($path_array[0] == 'gerechten-aanmaken') {
//    $pageTitle = "Gerechten aanmaken";
//
//    $filesArray = [
//        "app/inserttabledata.php",
//        "app/selecttabledata.php",
//        "app/insertdish.php",
//        "view/adddish.php",
//    ];
//} else if ($path_array[0] == 'gerechten-inzien') {
//    $pageTitle = "Gerechten inzien";
//    $filesArray = [
//        "app/edittabledata.php",
//        "app/deletetabledata.php",
//        "app/doeditdish.php",
//        "app/deletedish.php",
//        "app/selecttabledata.php",
//        "view/editdish.php",
//        "view/vieuwdish.php",
//
//    ];
//}
// else if ($path_array[0] == 'saus_dieetwens-aanmaken') {
//    $pageTitle = "Saus/dieetwens aanmaken";
//    $filesArray = [
//        "app/inserttabledata.php",
//        "app/selecttabledata.php",
//        "app/insertaddon.php",
//        "view/addaddons.php",
//    ];
//}
// else if ($path_array[0] == 'saus_dieetwens-inzien') {
//    $pageTitle = "Saus/dieetwens inzien";
//    $filesArray = [
//        "app/edittabledata.php",
//        "app/deletetabledata.php",
//        "app/doeditaddon.php",
//        "app/deleteaddon.php",
//        "app/selecttabledata.php",
//        "view/editaddon.php",
//        'view/vieuwaddons.php',
//    ];
//}
// else if ($path_array[0] == 'saus_dieetwens-toewijzen') {
//    $pageTitle = "Saus/dieetwens toewijzen";
//    $filesArray = [
//        "app/inserttabledata.php",
//        "app/selecttabledata.php",
//        "app/insertdishaddon.php",
//        'view/adddishaddons.php',
//    ];
//}
// else if ($path_array[0] == 'addongerechten-inzien') {
//    $pageTitle = "Addongerechten inzien";
//    $filesArray = [
//        "app/deletetabledata.php",
//        "app/selecttabledata.php",
//        "app/deletedishaddon.php",
//        "view/vieuwdishaddons.php",
//    ];
//}
// else if ($path_array[0] == 'menugerechten-kiezen') {
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




//if ($path_array[0] == '') {
//    $pageTitle = "Praat met de kok";
//	$filesArray = ['view/home.php'];
//}


