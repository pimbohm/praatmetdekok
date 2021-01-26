<?php

namespace App\Controller;

use App\Model\Menu;

class Menucontroller extends Menu {
    protected $dish;
    protected $dishaddons;
    protected $menu;
    protected $menurow;
    protected $menudishid;

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
    
    public function edit() {
        if (isset($_POST["edit"])) {
            $this->menurow = $this->getMenuById($_POST["id"]);
            $this->dish = $this->getDish();
            $this->dishaddons = $this->getDishAddons();
            $this->menudishid = $_POST['menudishid'];
            include 'view/editmenu.php';
        }
    }
    
    public function doedit() {
        if (isset($_POST["doedit"])) {
            $this->editMenu($_POST["id"], $_POST["menuname"], $_POST["date"], $_POST['menudishid']);
        }
    }
    
    public function deletemenu() {
        if (isset($_POST["delete"])) {
            echo $this->delete($_POST["id"]);
        }
    }
}