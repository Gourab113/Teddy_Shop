<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;

class ProductController extends Controller
{

    private ProductRepository $productRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }


    public function store(Request $request)
    {
        $product = $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id'
        ]);

        Product::create($product);

        return redirect('/');
    }

    public function getAllProduct(Request $request)
    {
        $products = $this->productRepository
        ->getAllProducts();
        $categories = $this->categoryRepository
        ->getAllCategories();

        return view('welcome', [
            'name' => 'Teddy Shop',
            'products' => $products,
            'categories'=> $categories
        ]);
        
    }

    public function createProduct(){
        
        $categories = $this->categoryRepository
            ->getAllCategories();
        return view('create_products', 
            ['categories'=> $categories]);

    }
}
