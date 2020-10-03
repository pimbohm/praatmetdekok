<?php

    $dishaddon = $conn->prepare("SELECT da.id, da.dish_id, da.addon_id, da.created_at, d.name AS dish, a.name AS addon, d.deleted_at AS dishdel, a.deleted_at AS addondel, dt.name AS type
    FROM dish_addon da
    LEFT JOIN dish d ON d.id = da.dish_id
    LEFT JOIN ADDON a ON a.id = da.addon_id
    LEFT JOIN dishtype dt ON dt.id = d.dishtype_id WHERE da.deleted_at IS NULL");
    $dishaddon->execute();

    // set the resulting array to associative
    $dishaddon = $dishaddon->fetchAll(PDO::FETCH_ASSOC);
