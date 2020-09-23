<?php

if(isset($_POST["naaanmaken"])) {
        if(!empty($_POST["na1"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["na1"]);
        $sql->bindParam(':type', $_POST["nagerecht"]);
        $sql->bindParam(':vegie', $_POST["vegiena1"]);
  $sql->execute();
        }
        
        if(!empty($_POST["na2"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["na2"]);
        $sql->bindParam(':type', $_POST["nagerecht"]);
        $sql->bindParam(':vegie', $_POST["vegiena2"]);
  $sql->execute();
        }
    }
