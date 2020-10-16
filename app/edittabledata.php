<?php

class Edit extends Database {
    public function editDish($id, $name, $description, $dishtype_id) {
        $conn = $this->conn;
        $doedit = $conn->prepare("UPDATE dish SET name=:name, description=:desc, dishtype_id=:type, updated_at=CURRENT_TIMESTAMP WHERE id=:id");
        $doedit->bindParam(':id', $id);
        $doedit->bindParam(':name', $name);
        $doedit->bindParam(':desc', $description);
        $doedit->bindParam(':type', $dishtype_id);
        $doedit->execute();
    }

    public function editAddon($id, $name, $description) {
        $conn = $this->conn;
        $doedit = $conn->prepare("UPDATE addon SET name=:name, description=:desc, updated_at=CURRENT_TIMESTAMP WHERE id=:id");
        $doedit->bindParam(':id', $id);
        $doedit->bindParam(':name', $name);
        $doedit->bindParam(':desc', $description);
        $doedit->execute();
    }
}