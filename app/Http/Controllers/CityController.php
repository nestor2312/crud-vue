<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;


class CityController extends Controller
{

    public function index()
    {
        $cities = City::all();
        return view('city.index',compact('cities'));
    }

    public function store(CityRequest $request)
    {
        $city = new City($request->all());
        // return $request;
        
        $city->save();
        // return back();
        return response()->json([           
            'saved'=> true,
            'city'=> $city
        ]);
    }

    public function edit(City $city)
    {
       
        return view('city.edit',compact('city'));
    }

    public function update(CityRequest $request, City $city)
    {
    //   return $city;
        $city->update($request->all());
        // return back();
        return response()->json([           
            'updated'=> true,
            'city'=> $city
        ]);
       
    }

    public function delete(City $city)
    {
        
        $city->delete();
        // return back();
        return response()->json([           
            'deleted'=> true,
        ]);
      
    }
}
