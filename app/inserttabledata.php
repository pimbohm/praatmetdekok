<?php

class Insert extends Database {
    public function InsertDish($name, $description, $dishtype) {

        $conn = $this->conn;
        if(!empty($name)) {
            $insertdish = $conn->prepare("INSERT INTO dish (name, description, dishtype_id, created_at)
                    VALUES (:name, :desc, :type, CURRENT_TIMESTAMP)");
            $insertdish->bindParam(':name', $name);
            $insertdish->bindParam(':desc', $description);
            $insertdish->bindParam(':type', $dishtype);
            $insertdish->execute();
        }
    }

    public function insertAddon($name, $description) {

        $conn = $this->conn;
        if(!empty($name)) {
            $insertaddon = $conn->prepare("INSERT INTO addon (name, description, created_at)
                    VALUES (:name, :desc, CURRENT_TIMESTAMP)");
            $insertaddon->bindParam(':name', $name);
            $insertaddon->bindParam(':desc', $description);
            $insertaddon->execute();
        }
    }
}