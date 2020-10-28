<?php

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('miprimerlayout', function () {
    return view('miprimerlayout');
});

Route::get('vista', function () {
    return View::make ('vista'); 
});

*/
// Route::resource('getalumnos', 'alumnocontroler');

Route::group(['prefix'=> 'api'], function(){
    Route::apiResource('materias', 'materiascontroller');
    Route::apiResource('alumnos', 'alumnocontroler@store');

});


