<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\CategoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryInterface;
    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }

    public function getCategories()
    {
        $this->categoryInterface->getCategories();
    }

    public function categoryDetails()
    {
        $this->categoryInterface->categoryDetails();

    }

    public function addCategory(Request $request)
    {
        $this->categoryInterface->addCategory($request);

    }

    public function deleteCategory()
    {
        $this->categoryInterface->deleteCategory();
    }

    public function updateCategory(Request $request)
    {
        $this->categoryInterface->updateCategory($request);
    }

}
