        <?php
                if(!empty($_POST["name"])) {
                    $insertaddon = $conn->prepare("INSERT INTO addon (name, description, created_at)
                    VALUES (:name, :desc, CURRENT_TIMESTAMP)");
                    $insertaddon->bindParam(':name', $_POST["name"]);
                    $insertaddon->bindParam(':desc', $_POST["description"]);
                    $insertaddon->execute();
                }