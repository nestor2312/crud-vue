<?php

namespace App\Http\Controllers;

use App\Http\Requests\SonRequest;
use App\Models\Person;
use App\Models\Son;


class SonController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        $sons = Son::all();
        return view('son.index',compact('sons','persons'));
    }

    public function store(SonRequest $request)
    {
        $sons = new Son($request->all());
        // return $request;
        
        $sons->save();
        return back();
    }

    public function edit(Son $sons)
    {
        // $sons = Son::find($id);
        $persons = Person::all();
        return view('son.edit',compact('sons','persons'));
    }

    public function update(SonRequest $request,Son $sons)
    {
        // $sons = Son::find($id);
        $sons->update($request->all());
        // return back();
        return redirect('son');
       
    }

    public function delete(Son $sons)
    {
        // $Son = Son::find($id);
        $sons->delete();
        return back();
      
    }
}
