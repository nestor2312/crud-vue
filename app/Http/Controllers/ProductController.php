<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();   
        return view('product.index',compact('products','categories'));
    }

    public function store(ProductRequest $request)
    {

        $product = new Product($request->all());
        $nameImage = null;
        if ($request->hasFile('image')){
            $nameImage = "/image/products/{$request->image->getClientOriginalName()}";
            $request->image->move(public_path('image/products'),$nameImage);
            $product->image = $nameImage;
        }
        $product->save();
        return response()->json([
            'saved'=>true,
            'product'=> $product->load('category')
        ]);
    }

    public function edit($id)
    {
      $categories = Category::all();
      $product = Product::find($id);
      return view('product.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->all();
        $nameImage = null;
        if ($request->hasFile('image')){
            $nameImage = "/image/products/{$data['image']->getClientOriginalName()}";
            $data['image']->move(public_path('image/products'),$nameImage);
            $data['image'] = $nameImage;
        }
        $product->update($data);
        return response()->json([
            "updated"=>true,    
        ]);
    }

    public function delete($id ){

        $product = Product::find($id);
        $product->delete();
        // return back();
        return response()->json([           
            'deleted'=> true,
        ]);
    }
}
