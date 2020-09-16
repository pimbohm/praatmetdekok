<?php

if(isset($_POST["hoofdaanmaken"])) {
        if(!empty($_POST["hoofd1"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["hoofd1"]);
        $sql->bindParam(':type', $_POST["hoofdgerecht"]);
        $sql->bindParam(':vegie', $_POST["vegiehoofd1"]);
  $sql->execute();
        }
        
        if(!empty($_POST["hoofd2"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["hoofd2"]);
        $sql->bindParam(':type', $_POST["hoofdgerecht"]);
        $sql->bindParam(':vegie', $_POST["vegiehoofd2"]);
  $sql->execute();
        }
    }

?>
