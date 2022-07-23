<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\City;
use App\Models\Person;

class PersonController extends Controller
{
    
    public function index()
    {
        $cities = City::all();
        $persons = Person::all();
        return view('person.inicio',compact('persons','cities'));
    }

    public function store(PersonRequest $request)
    {
        $persons = new Person($request->all());
        // return $request;
        
        $persons->save();
        return back();
        // return response()->json([           
        //     'saved'=> true,
        //     'person'=> $persons
        // ]);
    }

    public function edit(Person $persons)
    {
        // $persons = Person::find($id);
        $cities = City::all();
        return view('person.edit',compact('persons','cities'));
    }

    public function update(PersonRequest $request,Person $persons)
    {

        $persons->update($request->all());
        // return back();
        return redirect('/');
       
    }

    public function delete(Person $persons)
    {
        $persons->delete();
        return back();
      
    }
}
