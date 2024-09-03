<?php

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacto', function(){
    return view('contacto');
});
Route::post('/guardar-formulario', function(Request $request){
    dd($request->all());
    //Recibir datos:
    //Hola
    //Validar datos:
    //Guardar datos:
    return "Guardado";
});