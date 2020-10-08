<?php

class Select extends Database {
    public function getDish() {
        $conn = $this->conn;
        $dish = $conn->prepare("SELECT d.id, d.name, d.description, d.dishtype_id, d.created_at, d.updated_at, d.deleted_at, dt.name AS type FROM dish d LEFT JOIN dishtype dt ON dt.id = d.dishtype_id AND dt.deleted_at IS NULL ORDER BY dt.id");
        $dish->execute();
        
        $dish = $dish->fetchAll(PDO::FETCH_ASSOC);
        return $dish;
    }
    
    public function getAddon() {
        
    }
    
}

$dish = new Select();
$dish = $dish->getDish();
        
foreach ($dish as $res) {
    if (empty($res['deleted_at'])) {
        echo $res['name'] . "<br>";
        echo $res['type'] . "<br>";
        echo $res['created_at'] . "<br>";
            if (!empty($res['updated_at'])) {
                echo $res['updated_at'] . "<br>";
            }
        echo "<br>";
    }
}