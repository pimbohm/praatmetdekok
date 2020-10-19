<?php

namespace App\Controller;

use App\Model\Dish;

class DishController extends Dish
{
	protected $dish;
	protected $dishTypes;

	public function view()
	{
		$this->dishTypes = $this->getDishType();
		include "view/adddish.php";
	}

}
