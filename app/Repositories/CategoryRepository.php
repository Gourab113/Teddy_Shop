<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{

    // Get all categories
    public function getAllCategories()
    {
        return Category::all();
    }
}