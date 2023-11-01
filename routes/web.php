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
    return view('country.create');
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

Route::post('/country/store',[CountryController::class,'store'])->name('country.store');
Route::get('/country/index',[CountryController::class,'index'])->name('country.index');
Route::get('/country/edit',[CountryController::class,'edit'])->name('country.edit');
Route::resource('/country/show',CountryController::class); //aaa
/*Route::get('/store',function(){
    return view('layouts.navbar');
});
*/

