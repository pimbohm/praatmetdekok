 <?php

 if (isset($_POST['delete'])) {
     $stmtdelete = $conn->prepare('DELETE FROM gerecht WHERE id=:id');
     $stmtdelete->bindParam(':id', $_POST['id'] );
     $stmtdelete->execute();
 }

