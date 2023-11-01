<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    //store envia los datos
    public function store(Request $request){
        $request->validate([
            'country_code'=>'required|string|min:2|max:10',
            'country_name'=>'required|string|min:4|max:50'
        ]);
        Country::create([ //crear los datos
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

    // public function show(Request $rqeuest)
    // {
    //     $countries=Country::all();
    //     return view('countries.index',compact('countries'));

    // }
    public function index(Request $request){
        $texto=trim($request->get('texto'));
        $countries=DB::table('countries')->select('id','country_code','country_name')
        ->where('country_name','LIKE','%'.$texto.'%')
        ->orWhere('country_name','LIKE','%'.$texto.'%')
        ->orderBy('country_name','asc')
        ->paginate(10);
        return view('country.index',compact('countries'));
    }
    public function edit(){
        return view('country.index');
    }
}
