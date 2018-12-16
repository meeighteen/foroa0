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

Route::get('miperfil', function(){
	return "Aqui se verá el perfil junto con las publicaciones de articulos que hayan creado";
});

Route::get('feed',function(){
	return "Aquí se verá todos los post que se hayan publicado";
});
