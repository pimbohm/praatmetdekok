<?php


namespace App\Controller;

use App\Model\Addon;

class AddonController extends Addon
{
    protected $addons;
    protected $editAddon;

    public function view()
    {
        include "view/addaddons.php";
    }

    public function viewaddons()
    {
        $this->addons = $this->getAddons();
        include "view/vieuwaddons.php";
    }

    public function editview()
    {
        if (isset($_POST["edit"])) {
            $this->editAddon = $this->getAddonEdit($_POST["id"]);
            include "view/editaddon.php";
        }
    }

    public function insert()
    {
        if (isset($_POST["createaddon"])) {
            echo $this->insertAddon($_POST["name"], $_POST["description"]);
        }
    }

    public function edit()
    {
        if (isset($_POST['doedit'])) {
            echo $this->editAddon($_POST['id'], $_POST['name'], $_POST['description']);
        }
    }

    public function delete() {
        if (isset($_POST["delete"])) {
            echo $this->addonDelete($_POST["id"]);
        }
    }
}