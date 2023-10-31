<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'country_code'=>'required|string|min:2|max:10',
            'country_name'=>'required|string|min:4|max:50'
        ]);
        Country::create([
            'country_code'=>$request->country_code,
            'country_name'=>$request->country_name
        ]);
        return redirect()->back()
        ->with('success','Pais creado correctamente');
    }

    /*public function index(Request $request){
        $countries = Country::get();
        return view('counties.index',['country'=>$counties]);
    }*/

    public function index(Request $rqeuest)
    {
        $countries=Country::all();
        return view('countries.index',compact('countries'));

    }
}
