<?php

namespace App\Controller;

use App\Model\Menu;

class Menucontroller extends Menu {
    protected $dish;
    protected $dishaddons;
    protected $menu;

    public function view() {
        $this->dish = $this->getDish();
        $this->dishaddons = $this->getDishAddons();
        include 'view/createmenu.php';
    }

    public function viewmenu() {
        $this->menu = $this->getMenu();
        include "view/vieuwmenu.php";
    }

    public function insert() {
        if (isset($_POST["createmenu"])) {
            echo $this->insertMenu($_POST['name'], $_POST['starter'], $_POST['main'], $_POST['dessert'], $_POST['date']);
        }
    }
}