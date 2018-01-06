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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/about-us', function () {
    return "Esta és la página que habla sobre nosotros!";
});

Route::get('/contact', function () {
    return "Esta és la página de contacto!";
});

Route::get('/foro', function () {
    return "Esto és el foro!";
});

Route::get('/post/{id}', function {$id} {
    return "Este és el post nº: " . $id;
});


Route::get('/post/{id}/{name}', function ($id, $name) {
    return "Este és el post nº: " . $id . "<p>" . "Creado por -> " . $name . "</p>";
})->where('name', '[a-zA-Z]+');*/

Route::get('/inicio', 'FirstController@inicio');

Route::get('/index/{id}', 'ArtisanResourcesController@index');