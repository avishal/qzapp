<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;

class SubCategoryController extends Controller
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
        
        return SubCategory::all();
    }

    public function getSubCategoriesByCatId($catid)
    {

        return SubCategory::where('maincat_id', $catid)->get();
    }

    public function store(Request $request)
    {
        return SubCategory::create($request->all());
    }
}
