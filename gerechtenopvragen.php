<?php
 $stmt = $conn->prepare("SELECT * FROM dish
LEFT JOIN dishtype ON dishtype.dishtypeid=dish.dishdishtype_id");
 $stmt->execute();
