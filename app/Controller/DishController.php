<?php

namespace App\Controller;

use App\Model\Dish;

class DishController extends Dish
{
	protected $dish;
	protected $editDish;
	protected $dishTypes;

	public function dishview()
    {
        $this->dish = $this->getDish();
        include "view/vieuwdish.php";
    }

	public function addview()
	{
		$this->dishTypes = $this->getDishType();
		include "view/adddish.php";
	}

	public function editview() {
        if (isset($_POST["editdish"])) {
            $this->dishTypes = $this->getDishType();
            $this->editDish = $this->getEditDish($_POST["id"]);
            include "view/editdish.php";
        }
    }

    public function insert()
    {
        if (isset($_POST["createdish"])) {
            echo $this->InsertDish($_POST['name'], $_POST['description'], $_POST['dishtype_id']);
        }
    }

    public function edit()
    {
        if (isset($_POST["doedit"])) {
            echo $this->editDish($_POST['id'], $_POST['name'], $_POST['description'], $_POST['dishtype_id']);
        }
    }

    public function delete()
    {
        if (isset($_POST["delete"])) {
            echo $this->dishDelete($_POST['id']);
        }
    }
}
