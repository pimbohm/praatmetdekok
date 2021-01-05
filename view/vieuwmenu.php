<?php

$menuid = 1;
foreach ($this->menu as $menu) {

    if ($menuid == $menu["id"]) {
        echo "<hr>";
        if (!empty($menu["name"])) {
            echo $menu['name'] . "<br>";
        } else {
            echo "Menu: " . $menuid . "<br>";
        }
        
        echo $menu["date"] . "<br>";
        $menuid++;
    }
    
    echo $menu["type"] . ": ";
    echo $menu["dish"];
    if (!empty($menu["addon"])) {
        echo ", " . $menu["addon"];
    }
    echo "<br>";

}