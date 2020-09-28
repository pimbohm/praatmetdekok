<?php
$getaddons = $conn->prepare("SELECT id, name, description, created_at, updated_at FROM addon WHERE deleted_at IS NULL");
$getaddons->execute();

$getaddons = $getaddons->fetchAll(PDO::FETCH_ASSOC);