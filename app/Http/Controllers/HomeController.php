<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Repositories\CategoryRepository;

class HomeController extends Controller
{
    private CategoryRepository $categoryRepository;

    public function __construct(
        CategoryRepository $categoryRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $name = 'Teddy Shop';

        $products = Product::get();
        $categories = $this->categoryRepository
        ->getAllCategories();

        return view('welcome', [
            'name' => $name,
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
