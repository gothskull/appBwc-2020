<?php

use Illuminate\Support\Facades\Route;


// Auth::routes();

/*CATEGORÍAS*/
Route::get('/listCategories', 'CategoriasController@index');
Route::post('/createCat','CategoriasController@crearCategoria');
Route::resource('categorias','CategoriasController',['except' => 'show','create','edit']);

Route::get('/{any}','AppController@index')->where('any','.*');
