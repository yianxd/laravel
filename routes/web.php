<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('countries.create');
});

/*Route::get('/brasil',function(){
    return view('brasil');
});

Route::get('/mexico',function(){
    return view('pruebas.mexico');
});

Route::get('/peru',function(){
    return view('pruebas.peru');
});

Route::get('pruebas/bolivia',function(){
    return view('pruebas.bolivia');
});*/
//Route::get('/country',[CountryController::class,'index'])->name('countries.index');

Route::post('/country',[CountryController::class,'store'])->name('countries.store');

Route::resource('/listar',CountryController::class);
/*Route::get('/store',function(){
    return view('layouts.navbar');
});
*/

