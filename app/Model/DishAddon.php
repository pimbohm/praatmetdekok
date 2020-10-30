<?php


namespace App\Model;

use App\Database\Db;

class DishAddon extends Db
{
    public function getDish()
    {
        $conn = $this->connection;
        $getdish = $conn->prepare("SELECT * FROM dish");
        $getdish->execute();

        $getdish = $getdish->fetchAll();
        return $getdish;
    }

    public function getAddon()
    {
        $conn = $this->connection;
        $getaddon = $conn->prepare("SELECT * FROM addon");
        $getaddon->execute();

        $getaddon = $getaddon->fetchAll();
        return $getaddon;
    }

    public function getDishAddons() {
        $conn = $this->connection;
        $dishaddon = $conn->prepare("SELECT da.id, da.dish_id, da.addon_id, da.created_at, d.name AS dish, a.name AS addon, d.deleted_at AS dishdel, a.deleted_at AS addondel, dt.name AS type
        FROM dish_addon da
        LEFT JOIN dish d ON d.id = da.dish_id
        LEFT JOIN ADDON a ON a.id = da.addon_id
        LEFT JOIN dishtype dt ON dt.id = d.dishtype_id WHERE da.deleted_at IS NULL");
        $dishaddon->execute();

        // set the resulting array to associative
        $dishaddon = $dishaddon->fetchAll();

        return $dishaddon;
    }

    public function insertdishaddon($dish, $addon)
    {
        $conn = $this->connection;
        if(!empty($addon)) {
            foreach ($addon as $a) {
                $insertdish = $conn->prepare("INSERT INTO dish_addon (dish_id, addon_id, created_at)
            VALUES (:dish, :addon, CURRENT_TIMESTAMP)");
                $insertdish->bindParam(':dish', $dish);
                $insertdish->bindParam(':addon', $a);
                $insertdish->execute();
            }
        }
    }

    public function dishAddonDelete($id) {
        $conn = $this->connection;
        $softdelete = $conn->prepare("UPDATE dish_addon SET deleted_at=CURRENT_TIMESTAMP WHERE id=:id");
        $softdelete->bindParam(':id', $id);
        $softdelete->execute();
    }
}