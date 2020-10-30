<?php

namespace App\Model;

use App\Database\Db;

class Addon extends Db
{
    public function insertAddon($name, $description) {

        $conn = $this->connection;
        if(!empty($name)) {
            $insertaddon = $conn->prepare("INSERT INTO addon (name, description, created_at)
                    VALUES (:name, :desc, CURRENT_TIMESTAMP)");
            $insertaddon->bindParam(':name', $name);
            $insertaddon->bindParam(':desc', $description);
            $insertaddon->execute();
        }
    }

    public function getAddonEdit($id)
    {
        $conn = $this->connection;
        $getaddonbyid = $conn->prepare("SELECT * FROM addon WHERE id=:id");
        $getaddonbyid->bindParam(':id', $id);
        $getaddonbyid->execute();
        $getaddonbyid = $getaddonbyid->fetchAll();
        return $getaddonbyid;
    }

    public function getAddons() {
        $conn = $this->connection;
        $getaddons = $conn->prepare("SELECT id, name, description, created_at, updated_at FROM addon WHERE deleted_at IS NULL");
        $getaddons->execute();

        $getaddons = $getaddons->fetchAll();
        return $getaddons;
    }

    public function editAddon($id, $name, $description) {
        $conn = $this->connection;
        $doedit = $conn->prepare("UPDATE addon SET name=:name, description=:desc, updated_at=CURRENT_TIMESTAMP WHERE id=:id");
        $doedit->bindParam(':id', $id);
        $doedit->bindParam(':name', $name);
        $doedit->bindParam(':desc', $description);
        $doedit->execute();
    }

    public function addonDelete($id) {
        $conn = $this->connection;
        $softdelete = $conn->prepare("UPDATE addon SET deleted_at=CURRENT_TIMESTAMP WHERE id=:id");
        $softdelete->bindParam(':id', $id);
        $softdelete->execute();
    }
}