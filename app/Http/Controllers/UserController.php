<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // vue
    public function index(){
        // $products = Product::all();
        $categories = Category::all()->load('products');
        return view('user.index',compact('categories'));
    }
// blade
    // public function index(){
    //     $products = Product::all();
    //     $categories = Category::all()->load('products');
    //     return view('user.index',compact('categories','products'));
    // }
}
