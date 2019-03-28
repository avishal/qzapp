<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Question;
use App\SubCategory;

class QuestionController extends Controller
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

    public function getByCategory($categoryid)
    {
        return Question::where('category',$categoryid)->take(10)->get();
    }

    public function getBySubCategory($subcatid,$level)
    {
        $SubCategoryname=SubCategory::where('id', $subcatid)->first();
        $question=Question::where('subcategory',$subcatid)->where('level',$level)->take(10)->get();        
        return response()->json(['name'=> $SubCategoryname->subcategory_name,'data' => $question], 200);  
        
    }

    public function store(Request $request)
    {
        return Question::create($request->all());
    }
}
