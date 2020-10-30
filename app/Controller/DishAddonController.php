<?php


namespace App\Controller;

use App\Model\DishAddon;

class DishAddonController extends DishAddon
{
    protected $dish;
    protected $addon;
    protected $dishaddon;

    public function view() {
        $this->dish = $this->getDish();
        $this->addon = $this->getAddon();
        include "view/adddishaddons.php";
    }

    public function viewdishaddon() {
        $this->dishaddon = $this->getDishAddons();
        include "view/vieuwdishaddons.php";
    }

    public function insert() {
        if (isset($_POST["createdishaddon"])) {
            echo $this->insertdishaddon($_POST["dish"] , $_POST["addon"]);
        }
    }

    public function delete() {
        if (isset($_POST["delete"])) {
            echo $this->dishAddonDelete($_POST["id"]);
        }
    }
}