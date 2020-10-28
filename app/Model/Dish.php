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

	public function getDish()
    {
        $conn = $this->connection;
        $dish = $conn->prepare("SELECT d.id, d.name, d.description, d.created_at, d.updated_at, dt.name AS type FROM dish d
        LEFT JOIN dishtype dt ON dt.id = d.dishtype_id AND dt.deleted_at IS NULL WHERE d.deleted_at IS NULL");
        $dish->execute();

        $dish = $dish->fetchAll();
        return $dish;
    }

    public function getEditDish($id) {
        $conn = $this->connection;
        $getdish = $conn->prepare("SELECT * FROM dish WHERE dish.id=:id");
        $getdish->bindParam(':id', $id);
        $getdish->execute();

        $dish = $getdish->fetchAll();
        return $dish;
    }

    public function InsertDish($name, $description, $dishtype) {

        $conn = $this->connection;
        if(!empty($name)) {
            $insertdish = $conn->prepare("INSERT INTO dish (name, description, dishtype_id, created_at)
                    VALUES (:name, :desc, :type, CURRENT_TIMESTAMP)");
            $insertdish->bindParam(':name', $name);
            $insertdish->bindParam(':desc', $description);
            $insertdish->bindParam(':type', $dishtype);
            $insertdish->execute();
        }
    }

    public function editDish($id, $name, $description, $dishtype_id) {
        $conn = $this->connection;
        $doedit = $conn->prepare("UPDATE dish SET name=:name, description=:desc, dishtype_id=:type, updated_at=CURRENT_TIMESTAMP WHERE id=:id");
        $doedit->bindParam(':id', $id);
        $doedit->bindParam(':name', $name);
        $doedit->bindParam(':desc', $description);
        $doedit->bindParam(':type', $dishtype_id);
        $doedit->execute();
    }

    public function dishDelete($id) {
        $conn = $this->connection;
        $softdelete = $conn->prepare("UPDATE dish SET deleted_at=CURRENT_TIMESTAMP WHERE id=:id");
        $softdelete->bindParam(':id', $id);
        $softdelete->execute();
    }
}
