<?php

class Select extends Database
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

}