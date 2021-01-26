<?php
namespace App\Model;

use App\Database\Db;

class Menu extends Db {
    public function getDish() {
        $conn = $this->connection;

        $dish = $conn->prepare("SELECT d.id, d.name, d.description, d.created_at, d.updated_at, dt.name AS type FROM dish d
LEFT JOIN dishtype dt ON dt.id = d.dishtype_id AND dt.deleted_at IS NULL WHERE d.deleted_at IS NULL");
        $dish->execute();
        $dish = $dish->fetchAll();
        return $dish;
    }

    public function getDishAddons() {
        $conn = $this->connection;
        $dishaddon = $conn->prepare("SELECT da.id, da.dish_id, da.addon_id, da.created_at, d.name AS dish, a.name AS addon, d.deleted_at AS dishdel, a.deleted_at AS addondel, dt.name AS type
    FROM dishaddon da
    LEFT JOIN dish d ON d.id = da.dish_id
    LEFT JOIN ADDON a ON a.id = da.addon_id
    LEFT JOIN dishtype dt ON dt.id = d.dishtype_id WHERE da.deleted_at IS NULL");
        $dishaddon->execute();
        $dishaddon = $dishaddon->fetchAll();
        return $dishaddon;
    }

    public function insertMenu($name2, $starter2, $main2, $dessert2, $date2) {

        $starter = explode(",", $starter2);
        $main = explode(",", $main2);
        $dessert = explode(",", $dessert2);

        $startertype = $starter[0];
        $starterid = $starter[1];

        $maintype = $main[0];
        $mainid = $main[1];

        $desserttype = $dessert[0];
        $dessertid = $dessert[1];

        if (empty($date2)) {
            $date = date("Y-n-d");
        } else {
            $date = $date2;
        }

        $type = [$startertype, $maintype, $desserttype,];
        $id = [$starterid, $mainid, $dessertid,];

        $conn = $this->connection;
        $menu = $conn->prepare("INSERT INTO menu (name, date, created_at)
VALUES (:name, :date, CURRENT_TIMESTAMP)");
        $menu->bindParam(":name",$name2);
        $menu->bindParam(":date",$date);
        $menu->execute();
        $last_id = $conn->lastInsertId();

        $i = 0;
        foreach ($type as $t) {
            if ($t == "dish") {
                $menudish = $conn->prepare("INSERT INTO menudish (dish_id, menu_id, created_at)
VALUES (:dish, :lastid, CURRENT_TIMESTAMP)");
                $menudish->bindParam(":dish",$id[$i]);
                $menudish->bindParam(":lastid",$last_id);
                $menudish->execute();
            } else {
                $menudish = $conn->prepare("INSERT INTO menudish (dishaddon_id, menu_id, created_at)
VALUES (:dish, :lastid, CURRENT_TIMESTAMP)");
                $menudish->bindParam(":dish",$id[$i]);
                $menudish->bindParam(":lastid",$last_id);
                $menudish->execute();
            }
            $i++;
        }
    }

    public function getMenu() {
        $conn =  $this->connection;

        $menu = $conn->prepare("SELECT m.id, m.name, m.date, m.deleted_at AS menudeleted, md.id AS menudishid, md.menu_id, md.dish_id, md.dishaddon_id, d.id AS dishid, d.name AS dish, d.dishtype_id, dt.name AS type, a.name AS addon
FROM menudish md
LEFT JOIN menu m ON m.id = md.menu_id
LEFT JOIN dishaddon da ON da.id = dishaddon_id
LEFT JOIN dish d ON d.id = md.dish_id || d.id = da.dish_id
LEFT JOIN addon a ON a.id = da.addon_id
LEFT JOIN dishtype dt ON dt.id = d.dishtype_id
WHERE m.deleted_at IS NULL
");
        $menu->execute();

        $menu = $menu->fetchAll();
        return $menu;
    }
    
    public function getMenuById($id) {
        $conn =  $this->connection;

        $menu = $conn->prepare("SELECT m.id, m.name, m.date, m.deleted_at, md.id AS menudishid, md.menu_id, md.dish_id, md.dishaddon_id, d.id AS dishid, d.name AS dish, d.dishtype_id, dt.name AS type, a.name AS addon
FROM menu m
LEFT JOIN menudish md ON md.menu_id = m.id
LEFT JOIN dishaddon da ON da.id = dishaddon_id
LEFT JOIN dish d ON d.id = md.dish_id || d.id = da.dish_id
LEFT JOIN addon a ON a.id = da.addon_id
LEFT JOIN dishtype dt ON dt.id = d.dishtype_id
WHERE menu_id=:id
");
        $menu->bindParam(":id", $id);
        $menu->execute();

        $menu = $menu->fetchAll();
        return $menu;
    }
    
    public function editMenu($id, $name, $date, $menudishid) {
    
        $starter = explode(",", $_POST["starter"]);
        $main = explode(",", $_POST["main"]);
        $dessert = explode(",", $_POST["dessert"]);

        $startertype = $starter[0];
        $starterid = $starter[1];

        $maintype = $main[0];
        $mainid = $main[1];

        $desserttype = $dessert[0];
        $dessertid = $dessert[1];

        $type = [$startertype, $maintype, $desserttype,];
        $dishid = [$starterid, $mainid, $dessertid,];

        $i = 0;
        
        $conn = $this->connection;
        $menu = $conn->prepare("UPDATE menu 
        SET name=:name, date=:date, updated_at=CURRENT_TIMESTAMP 
        WHERE id=:id");
        $menu->bindParam(":id", $id);
        $menu->bindParam(":name",$name);
        $menu->bindParam(":date",$date);
        $menu->execute();
    
        foreach ($type as $t) {
            
            
            if ($t == "dish") {
                $menu = $conn->prepare("UPDATE menudish
                SET dish_id=:dish, updated_at=CURRENT_TIMESTAMP
                WHERE id=:id
                ");
                $menu->bindParam(":dish", $dishid[$i]);
                $menu->bindParam(":id", $menudishid[$i]);
                $menu->execute();
            }
            
            if ($t == "dishaddon") {
                $menu = $conn->prepare("UPDATE menudish
                SET dishaddon_id=:dish, updated_at=CURRENT_TIMESTAMP
                WHERE id=:id
                ");
                $menu->bindParam(":dish", $dishid[$i]);
                $menu->bindParam(":id", $menudishid[$i]);
                $menu->execute();
            }
            $i++;
        }
    }
    
    public function delete($id) {
        $conn = $this->connection;
        
        $deletemenu = $conn->prepare("UPDATE menu 
        SET deleted_at=CURRENT_TIMESTAMP 
        WHERE id = :id");
        $deletemenu->bindParam(":id", $id);
        $deletemenu->execute();
    }

}
