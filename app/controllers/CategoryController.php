<?php
namespace App\Controller;

use App\Models\CategoryModel;

class CategoryController
{
    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    function showFormAdd() {
        include_once "views/categories/add.php";
    }

    function add($name) {
        $this->categoryModel->add($name);
        header('location: index.php?page=categories&action=show-list');
    }

    function showList() {
        $categories = $this->categoryModel->getAll();
        include_once "views/categories/list.php";
    }

    function delete($id) {
        $this->categoryModel->destroy($id);
        header('location: index.php?page=categories&action=show-list');
    }
}