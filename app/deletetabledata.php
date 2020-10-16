<?php

class Delete extends Database {
    public function dishDelete($id) {
        $conn = $this->connection;
        $softdelete = $conn->prepare("UPDATE dish SET deleted_at=CURRENT_TIMESTAMP WHERE id=:id");
        $softdelete->bindParam(':id', $id);
        $softdelete->execute();
    }

    public function addonDelete($id) {
        $conn = $this->conn;
        $softdelete = $conn->prepare("UPDATE addon SET deleted_at=CURRENT_TIMESTAMP WHERE id=:id");
        $softdelete->bindParam(':id', $id);
        $softdelete->execute();
    }

    public function dishAddonDelete($id) {
        $conn = $this->conn;
        $softdelete = $conn->prepare("UPDATE dish_addon SET deleted_at=CURRENT_TIMESTAMP WHERE id=:id");
        $softdelete->bindParam(':id', $id);
        $softdelete->execute();
    }

}
