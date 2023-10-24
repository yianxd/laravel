<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'codigo_pais'=>'required|string|min:2|max:10',
            'nombre'=>'required|string|min:4|max:50'
        ]);
        Country::create([
            'codigo_pais'=>$request->codigo_pais,
            'nombre'=>$request->nombre
        ]);
        return redirect()->back()
        ->with('success','Pais creado correctamente');
    }

    /*public function index(Request $request){
        $countries = Country::get();
        return view('counties.index',['country'=>$counties]);
    }*/
}
