<?php

use App\Database\Db;

class Select extends Db
{
    public function getDish()
    {
        $conn = $this->conn;
        $dish = $conn->prepare("SELECT d.id, d.name, d.description, d.created_at, d.updated_at, dt.name AS type FROM dish d
        LEFT JOIN dishtype dt ON dt.id = d.dishtype_id AND dt.deleted_at IS NULL WHERE d.deleted_at IS NULL");
        $dish->execute();

        $dish = $dish->fetchAll(PDO::FETCH_ASSOC);
        return $dish;
    }

    public function getDishEdit($id)
    {
        $conn = $this->conn;
        $getdish = $conn->prepare("SELECT * FROM dish WHERE dish.id=:id");
        $getdish->bindParam(':id', $id);
        $getdish->execute();

        $dish = $getdish->fetchAll(PDO::FETCH_ASSOC);
        return $dish;
    }

    public function getAddonEdit($id)
    {
        $conn = $this->conn;
        $getaddonbyid = $conn->prepare("SELECT * FROM addon WHERE id=:id");
        $getaddonbyid->bindParam(':id', $id);
        $getaddonbyid->execute();
        $getaddonbyid = $getaddonbyid->fetchAll(PDO::FETCH_ASSOC);
        return $getaddonbyid;
    }

    public function getDishType()
    {
        $conn = $this->conn;
        $dishtypes = $conn->prepare("SELECT * FROM dishtype WHERE deleted_at IS NULL");
        $dishtypes->execute();

        $dishtypes = $dishtypes->fetchAll(PDO::FETCH_ASSOC);
        return $dishtypes;
    }

    public function getAddons() {
        $conn = $this->conn;
        $getaddons = $conn->prepare("SELECT id, name, description, created_at, updated_at FROM addon WHERE deleted_at IS NULL");
        $getaddons->execute();

        $getaddons = $getaddons->fetchAll(PDO::FETCH_ASSOC);
        return $getaddons;
    }

    public function getDishAddons() {
        $conn = $this->conn;
        $dishaddon = $conn->prepare("SELECT da.id, da.dish_id, da.addon_id, da.created_at, d.name AS dish, a.name AS addon, d.deleted_at AS dishdel, a.deleted_at AS addondel, dt.name AS type
        FROM dish_addon da
        LEFT JOIN dish d ON d.id = da.dish_id
        LEFT JOIN ADDON a ON a.id = da.addon_id
        LEFT JOIN dishtype dt ON dt.id = d.dishtype_id WHERE da.deleted_at IS NULL");
        $dishaddon->execute();

        // set the resulting array to associative
        $dishaddon = $dishaddon->fetchAll(PDO::FETCH_ASSOC);

        return $dishaddon;
    }



}
