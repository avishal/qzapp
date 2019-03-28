<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return Category::all();
    }

    public function testing()
    {
        $categories = Category::all();
        $d = [];
        foreach ($categories as $category) {
            $data = [];
            $data['cateogry'] = $category;
            $data['subcateogry'] = $category->subCategories;
            $d[] = $data;
        }
        return $categories;
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }
}
