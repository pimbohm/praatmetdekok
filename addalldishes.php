<?php

    $dishaddon = $conn->prepare("SELECT da.id, da.dish_id, da.addon_id, da.created_at, da.updated_at, da.deleted_at, d.name AS dish, a.name AS addon, d.deleted_at AS dishdel, a.deleted_at AS addondel, dt.name AS type
    FROM dish_addon da
    LEFT JOIN dish d ON d.id = da.dish_id
    LEFT JOIN ADDON a ON a.id = da.addon_id
    LEFT JOIN dishtype dt ON dt.id = d.dishtype_id WHERE da.deleted_at IS NULL");
    $dishaddon->execute();

    // set the resulting array to associative
    $dishaddon = $dishaddon->fetchAll(PDO::FETCH_ASSOC);

    $dish = $conn->prepare("SELECT d.id, d.name, d.description, d.created_at, d.updated_at, d.deleted_at, dt.name AS type FROM dish d
    LEFT JOIN dishtype dt ON dt.id = d.dishtype_id AND dt.deleted_at IS NULL WHERE d.deleted_at IS NULL");
    $dish->execute();

    $dish = $dish->fetchAll(PDO::FETCH_ASSOC);

    foreach($dishaddon as $da) {
        
        $id = $da['id'];
            $getmenudish = $conn->prepare("SELECT * FROM menu_dish WHERE dishaddon_id=:id LIMIT 1");     
            $getmenudish->bindParam(':id', $id);
            $getmenudish->execute();
            $getmenudish = $getmenudish->fetchAll(PDO::FETCH_ASSOC);
            
            if(empty($getmenudish)) {
            $createmenudish = $conn->prepare("INSERT INTO menu_dish (dishaddon_id, created_at) VALUES (:id, CURRENT_TIMESTAMP)");
            $createmenudish->bindParam(':id', $id);
            $createmenudish->execute(); 
            }
    }

    foreach($dish as $d) {
        
        $id = $d['id'];
            $getmenudish = $conn->prepare("SELECT * FROM menu_dish WHERE dish_id=:id LIMIT 1");     
            $getmenudish->bindParam(':id', $id);
            $getmenudish->execute();
            $getmenudish = $getmenudish->fetchAll(PDO::FETCH_ASSOC);
            
            if(empty($getmenudish)) {
            $createmenudish = $conn->prepare("INSERT INTO menu_dish (dish_id, created_at) VALUES (:id, CURRENT_TIMESTAMP)");
            $createmenudish->bindParam(':id', $id);
            $createmenudish->execute(); 
            }
    }