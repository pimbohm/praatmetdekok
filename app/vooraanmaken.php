<?php

if(isset($_POST["vooraanmaken"])) {
        if(!empty($_POST["voor1"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["voor1"]);
        $sql->bindParam(':type', $_POST["voorgerecht"]);
        $sql->bindParam(':vegie', $_POST["vegievoor1"]);
  $sql->execute();
        }
        
        if(!empty($_POST["voor2"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["voor2"]);
        $sql->bindParam(':type', $_POST["voorgerecht"]);
        $sql->bindParam(':vegie', $_POST["vegievoor2"]);
  $sql->execute();
        }
    }
