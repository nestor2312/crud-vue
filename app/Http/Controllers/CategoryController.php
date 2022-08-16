<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category($request->all());
        // return $category;
        
        $category->save();
        return response()->json([           
            'saved'=> true,
            'category'=> $category
        ]);
    }

    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
    //   return $city;
        $category->update($request->all());
        // return back();
        return response()->json([           
            'updated'=> true,
            'category'=> $category
        ]);
       
    }


    public function delete(Category $category)
    {
        
        $category->delete();
        // return back();
        return response()->json([           
            'deleted'=> true,
        ]);
      
    }
}
