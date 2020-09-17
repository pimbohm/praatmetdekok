<?php
 $stmt = $conn->prepare("SELECT id, naam, type, vegetarisch FROM gerecht");
 $stmt->execute();
