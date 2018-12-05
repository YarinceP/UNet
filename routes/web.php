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


Route::post('crear.usuario',[
    'as'=>'crear.usuario',
    'uses'=>'usuarios@crearusuario'
]);


Route::post('login',[
    'as'=>'login',
    'uses'=>'seguridad@entrar'
]);

Route::get('logout',[
    'as'=>'logout',
    'uses'=>'seguridad@logout'
]);




Route::get('menu',[
    'as'=>'menu',
    'uses'=>'seguridad@menu'
]);


Route::get('perfil',[
    'as'=>'perfil',
    'uses'=>'seguridad@perfil'
]);






