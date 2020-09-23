<?php

if(isset($_POST["bijaanmaken"])) {
        if(!empty($_POST["bij1"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["bij1"]);
        $sql->bindParam(':type', $_POST["bijgerecht"]);
        $sql->bindParam(':vegie', $_POST["vegiebij1"]);
  $sql->execute();
        }
        
        if(!empty($_POST["bij2"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["bij2"]);
        $sql->bindParam(':type', $_POST["bijgerecht"]);
        $sql->bindParam(':vegie', $_POST["vegiebij2"]);
  $sql->execute();
        }
    }
