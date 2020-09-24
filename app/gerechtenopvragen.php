<?php
$dish = $conn->prepare("SELECT d.id, d.name, d.description, d.created_at, d.updated_at, dt.name AS type FROM dish d
LEFT JOIN dishtype dt ON dt.id = d.dishtype_id AND dt.deleted_at IS NULL WHERE d.deleted_at IS NULL");
$dish->execute();

$dish = $dish->fetchAll(PDO::FETCH_ASSOC);