<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    

    public function createCategory(Request $request){

        
       try {
        $category = new Category();
        $category->name= $request->name;
        $category->description = $request->description;
        $category->save();

        return response()->json("category created successfully created");
       } catch (\Throwable $th) {
           return response()->json("Category already exist");
       }
    }

    public function getAllCategories(){

        try {
            $categories = Category::all();
            return response()->json($categories);
        } catch (\Throwable $th) {
            return response()->json('invalid url');
        }
        
    }

    public function getCategoryName($id){

        $categoryName =Category::where('id', $id)->value('name');

        return response()->json($categoryName);

    }
}
