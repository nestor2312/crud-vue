<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\City;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    
    public function index()
    {
        $cities = City::all();
        $people = Person::with('city','sons')->get();
        return view('person.inicio',compact('people','cities'));
    }

    public function store(PersonRequest $request)
    {
        // dd($request);
            $person = new Person($request->all());
            // return $request;
            
                $person->save();
                // return back();
                return response()->json([           
                    'saved'=> true,
                    'person'=> $person->load('city')
                ]);
    }

    public function edit(Person $person)
    {
        // $persons = Person::find($id);
        $cities = City::all();
        return view('person.edit',compact('person','cities'));
    }

    public function update(PersonRequest $request,Person $person)
    {

        $person->update($request->all());
        // return back();
        return response()->json([           
            'updated'=> true,
            'person'=> $person->load('city')
        ]);
       
    }

    public function delete(Person $person)
    {
        $person->delete();
        // return back();
        return response()->json([           
            'deleted'=> true,
        ]);
      
    }
}
