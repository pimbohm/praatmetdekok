        <?php
                if(!empty($_POST["name"])) {
                    $insertdish = $conn->prepare("INSERT INTO dish (name, description, dishtype_id, created_at)
                    VALUES (:name, :desc, :type, CURRENT_TIMESTAMP)");
                    $insertdish->bindParam(':name', $_POST["name"]);
                    $insertdish->bindParam(':desc', $_POST["description"]);
                    $insertdish->bindParam(':type', $_POST["dishtype_id"]);
                    $insertdish->execute();
                }