<?php
$dish = $conn->prepare("SELECT * FROM dish
LEFT JOIN dishtype ON dishtype.dishtypeid=dish.dishdishtype_id");
$dish->execute();

$dish = $dish->fetchAll(PDO::FETCH_ASSOC);