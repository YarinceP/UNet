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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('menu',[
    'as'=>'menu',
    'uses'=>'usuarios@menu'
]);


Route::get('welcome',[
    'as'=>'welcome',
    'uses'=>'usuarios@welcome'
]);

Route::get('registro.usuario',[
    'as'=>'registro.usuario',
    'uses'=>'usuarios@registrousuario'
]);


Route::get('crear.usuario',[
    'as'=>'crear.usuario',
    'uses'=>'usuarios@crearusuario'
]);





