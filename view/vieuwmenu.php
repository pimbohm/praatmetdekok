<?php
$menuid = null;
foreach ($this->menu as $menu) {
    
    ?>
    <form method="post">
    <?php

    if ($menuid == $menu["id"]) {
        echo "<hr>";
        ?>
        <input type="hidden" name="id" value="<?php echo $menu['id']; ?>">
        <?php
        if (!empty($menu["name"])) {
            echo $menu['name'] . "<br>";
        } else {
            echo "Menu: " . $menuid . "<br>";
        }
        foreach ($this->menu as $dish) {
        if($dish['menu_id'] == $menuid) {
        ?>
            <input type="hidden" name="menudishid[]" value="<?php echo $dish["menudishid"]?>">
        <?php
            echo $dish["type"] . ": ";
            echo $dish["dish"];
            if (!empty($dish["addon"])) {
                echo ", " . $dish["addon"];
            }
                echo "<br>";
            }
        }
        echo $menu["date"] . "<br>";
        $menuid++;
        ?>
        <input type="submit" name="edit" value="Wijzigen">
        <input type="submit" name="delete" value="Verwijderen">
        <?php
    } else {
        $menuid = $menu["id"];
    }
    ?>
    </form>
    <?php
}