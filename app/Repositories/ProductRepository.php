<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    // Create a product
    public function create(array $data): Product
    {
        return Product::create($data);
    }

    // Get all products
    public function getAllProducts()
    {
        return Product::all();
    }
}