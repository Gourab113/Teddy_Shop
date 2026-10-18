<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $category = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'string|max:500'
        ]);

        Category::create($category);

        return redirect('/categories');
    }

    public function getAllCategory(Request $request)
    {
        $categories = Category::all();
        return view('categories', [
            'categories' => $categories,
        ]);
        
    }
}
