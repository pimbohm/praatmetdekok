<?php
namespace App\Model;

class Dish {
	public function get($id) {
		return 'dish test';
	}

	public function list() {
		return [
			'dish 1',
			'dish 2',
		];
	}
}
