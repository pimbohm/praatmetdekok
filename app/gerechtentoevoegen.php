        <?php
                if(!empty($_POST["name"])) {
                    $insertdish = $conn->prepare("INSERT INTO dish (dishname, dishdescription, dishdishtype_id, dishcreated_at)
                    VALUES (:name, :desc, :type, CURRENT_TIMESTAMP)");
                    $insertdish->bindParam(':name', $_POST["name"]);
                    $insertdish->bindParam(':desc', $_POST["description"]);
                    $insertdish->bindParam(':type', $_POST["typedish_id"]);
                    $insertdish->execute();
                }