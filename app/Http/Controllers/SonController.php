<?php

namespace App\Http\Controllers;

use App\Http\Requests\SonRequest;
use App\Models\Person;
use App\Models\Son;


class SonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        $sons = Son::with('person')->get();
        return view('son.index',compact('sons','people'));
    }

    public function store(SonRequest $request)
    {
        
        $son = new Son($request->all());
        // return $request;
        
        $son->save();
        // return back();
        return response()->json([           
            'saved'=> true,
            'son'=> $son
        ]);
        
    }

    public function edit(Son $son)
    {
        // $sons = Son::find($id);
        $people = Person::all();
        return view('son.edit',compact('son','people'));
    }

    public function update(SonRequest $request,Son $son)
    {
        // $sons = Son::find($id);
        $son->update($request->all());
        // return back();
        return redirect('son');
       
    }

    public function delete(Son $son)
    {
        // $Son = Son::find($id);
        $son->delete();
        return back();
      
    }
}
