<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\view;
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

Route::get('/', 'App\Http\Controllers\InicioController@index');

// Route::get('/texto', function () {
//     return 'mayita';
// });


// Route::get('/arreglo', function () {
//      $arreglo= ['lunes', 'martes', 'miercoles'];
//     return $arreglo;
// });
// Route::get('/arreglo', function () {
//      $arreglo= ['lunes', 'martes', 'miercoles'];
//     return $arreglo;
// });


// Route::get('/nombre/{nombre}', function ($nombre) {
  
//     return '<h1>El nombre es:'.$nombre.'</h1>';
// });

// Route::get('/cliente/{cliente?}', function ($cliente='Cliente general') {
  
//     return '<h1>El Cliente es:'.$cliente.'</h1>';
// });

// Route::get('/ruta1', function () {
//     return 'esta es la vista de la ruta 1';
// })->name('rutaNro1');


// Route::get('/ruta2', function () {
//    // return 'esta es la vista de la ruta 2';
//    return redirect()->route('rutaNro1');
// });

// Route::get('/usuario/{usuario}', function ($usuario) {
//     return 'el usuario es:' .$usuario;
// })-> where('usuario', '[0-9]+');


// Route::get('/usuario/{usuario}', function ($usuario) {
//     return 'el usuario es:' .$usuario;
// })-> where('usuario', '[A-Za-z]+');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
