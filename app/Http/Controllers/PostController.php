<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        //    return $request;
        $post = new Post($request->all());
        $nameImage = null;
        if ($request->hasFile('image')){
            $nameImage = "/image/posts/{$request->image->getClientOriginalName()}";
            $request->image->move(public_path('image/posts'),$nameImage);
            $post->image = $nameImage;
        }
        $post->save();
        return response()->json([
            'saved'=>true,
            'post'=> $post
        ]);
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $data = $request->all();
        $nameImage = null;
        if ($request->hasFile('image')){
            $nameImage = "/image/posts/{$data['image']->getClientOriginalName()}";
            $data['image']->move(public_path('image/posts'),$nameImage);
            $data['image'] = $nameImage;
        }
        $post->update($data);
        return response()->json([
            "updated"=>true,    
        ]);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        // return back();
        return response()->json([           
            'deleted'=> true,
        ]);
    }
}
