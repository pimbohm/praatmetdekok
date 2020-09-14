<?php
include "conn.php";

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
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Menu maken </title>
    </head>

    <body>

        <h1><b>Voorgerechten toevoegen</b></h1>
        <form method="post">
            <input type="hidden" value="Voorgerecht" name="voorgerecht">
            <label>Voorgerecht 1: </label>
            <input type="text" name="voor1">
            <label>Vegetarisch</label>
            <select name="vegievoor1">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <label>Voorgerecht 2: </label>
            <input type="text" name="voor2">
            <label>Vegetarisch</label>
            <select name="vegievoor2">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <input type="submit" name="vooraanmaken" value="toevoegen">
        </form>
        <hr>

        <h1><b>Hoofdgerechten toevoegen</b></h1>
        <form method="post">
            <input type="hidden" value="Hoofdgerecht" name="hoofdgerecht">
            <label>Hoofdgerecht 1: </label>
            <input type="text" name="hoofd1">
            <label>Vegetarisch</label>
            <select name="vegiehoofd1">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <label>Hoofdgerecht 2: </label>
            <input type="text" name="hoofd2">
            <label>Vegetarisch</label>
            <select name="vegiehoofd2">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <input type="submit" name="hoofdaanmaken" value="toevoegen">
        </form>
        <hr>

        <h1><b>Nagerechten toevoegen</b></h1>
        <form method="post">
            <input type="hidden" value="Nagerecht" name="nagerecht">
            <label>Nagerecht 1: </label>
            <input type="text" name="na1">
            <label>Vegetarisch</label>
            <select name="vegiena1">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <label>Nagerecht 2: </label>
            <input type="text" name="na2">
            <label>Vegetarisch</label>
            <select name="vegiena2">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <input type="submit" name="naaanmaken" value="toevoegen">
        </form>
        <hr>

        <h1><b>Bijgerechten toevoegen</b></h1>
        <form method="post">
            <input type="hidden" value="Bijgerecht" name="bijgerecht">
            <label>Bijgerecht 1: </label>
            <input type="text" name="bij1">
            <label>Vegetarisch</label>
            <select name="vegiebij1">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <label>Voorgerecht 2: </label>
            <input type="text" name="bij2">
            <label>Vegetarisch</label>
            <select name="vegiebij2">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <input type="submit" name="bijaanmaken" value="toevoegen">
        </form>
        <hr>

        <h1><b>Sauzen toevoegen</b></h1>
        <form method="post">
            <input type="hidden" value="Saus" name="saus">
            <label>Saus 1: </label>
            <input type="text" name="saus1">
            <label>Vegetarisch</label>
            <select name="vegiesaus1">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <label>Saus 2: </label>
            <input type="text" name="saus2">
            <label>Vegetarisch</label>
            <select name="vegiesaus2">
                <option value="nee">Nee</option>
                <option value="ja">Ja</option>
            </select>
            <br>
            <input type="submit" name="sausaanmaken" value="toevoegen">
        </form>
    </body>

    </html>
