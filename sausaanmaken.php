<?php

if(isset($_POST["sausaanmaken"])) {
        if(!empty($_POST["saus1"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["saus1"]);
        $sql->bindParam(':type', $_POST["saus"]);
        $sql->bindParam(':vegie', $_POST["vegiesaus1"]);
  $sql->execute();
        }
        
        if(!empty($_POST["saus2"])) {
        $sql = $conn->prepare("INSERT INTO gerecht (naam, type, vegetarisch)
  VALUES (:name, :type, :vegie)");
        $sql->bindParam(':name', $_POST["saus2"]);
        $sql->bindParam(':type', $_POST["saus"]);
        $sql->bindParam(':vegie', $_POST["vegiesaus2"]);
  $sql->execute();
        }
    }

?>
