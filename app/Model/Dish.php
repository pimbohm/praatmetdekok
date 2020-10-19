<?php
namespace App\Model;

use App\Database\Db;

class Dish extends Db {
	public function get($id) {
		return 'dish test';
	}

	public function list() {
		return [
			'dish 1',
			'dish 2',
		];
	}

	public function getDishType()
	{
		$conn = $this->connection;
		$dishtypes = $conn->prepare("SELECT * FROM dishtype WHERE deleted_at IS NULL");
		$dishtypes->execute();
		$dishtypes = $dishtypes->fetchAll();
		return $dishtypes;
	}
}
