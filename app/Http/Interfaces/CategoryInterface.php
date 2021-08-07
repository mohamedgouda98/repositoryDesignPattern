<?php

namespace App\Http\Interfaces;

interface CategoryInterface
{
    public function getCategories();

    public function categoryDetails();

    public function addCategory($request);

    public function deleteCategory();

    public function updateCategory($request);
}
