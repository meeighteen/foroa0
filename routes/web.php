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

Route::get('/', ['as'=>'start','uses'=> 'PagesController@start']);

Route::get('miperfil', ['as'=>'miperfil', 'uses'=>'PagesController@miperfil']);

Route::get('feed',['as'=>'feed', 'uses'=>'PagesController@feed']);

Route::post('publicar','PagesController@publicar');

Route::get('postear', ['as'=>'postear', 'uses'=>'PagesController@postear'] );
