<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            ['id' => 1, 'name' => 'Web Development'],
            ['id' => 2, 'name' => 'Design'],
            ['id' => 3, 'name' => 'Marketing'],
        ];

        return view('categories.index', ['categories' => $categories]);
    }

    public function json()
    {
        return response()->json(Category::with('jobs')->get());
    }
}
