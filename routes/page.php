<?php

return [
	'gerechten-aanmaken' => [
		'title' => 'Gerechten aanmaken',
		'class' => 'Dish',
		'page' => 'adddish.php',
		'type' => 'post',
		],
	'gerechten-inzien' => [
		'title' => 'Gerechten inzien',
		'class' => 'Dish',
		'page' => 'vieuwdish.php',
		'type' => 'post',
		],
	'saus_dieetwens-aanmaken' => [
		'title' => 'saus/dieetwens aanmaken',
		'class' => 'Addon',
		'page' => 'addaddons.php',
		'type' => 'post',
		],
    'saus_dieetwens-inzien' => [
		'title' => 'sauzen en dieetwensen inzien',
		'class' => 'Addon',
		'page' => 'vieuwaddons.php',
		'type' => 'post',
		],
    'saus_dieetwens-toewijzen' => [
		'title' => 'sauzen en dieetwensen toewijzen',
		'class' => 'DishAddon',
		'page' => 'vieuwdishaddons.php',
		'type' => 'post',
		],
    'addongerechten-inzien' => [
		'title' => 'addongerechten inzien',
		'class' => 'DishAddon',
		'page' => 'adddishaddons.php',
		'type' => 'post',
		],
    'menu-aanmaken' => [
		'title' => 'menu aanmaken',
		'class' => 'Menu',
		'page' => 'createmenu.php',
		'type' => 'post',
		],
	'home' => [
		'title' => 'Praat met de kok',
		'class' => 'Index',
		'page' => 'home.php',
		'type' => 'get',
	],
];
