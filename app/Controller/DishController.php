<?php

namespace App\Controller;

use App\Model\Dish;

class DishController
{
	protected $dish;

	public function __construct(Dish $dish)
	{
		$this->dish = $dish;
	}


	public function view(){
		return 'helloworld';
	}

	public function list() {
		$this->dish->list();
	}

	public function get($id) {
		$this->dish->get($id);
	}
}
