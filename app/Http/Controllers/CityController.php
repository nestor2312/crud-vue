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
        $cities = new City($request->all());
        // return $request;
        
        $cities->save();
        return back();
        // return response()->json([           
        //     'saved'=> true,
        // ]);
    }

    public function edit(City $cities)
    {
       
        return view('city.edit',compact('cities'));
    }

    public function update(CityRequest $request, City $cities)
    {
      
        $cities->update($request->all());
        // return back();
        return redirect('city');
       
    }

    public function delete(City $cities)
    {
        
        $cities->delete();
        return back();
      
    }
}
