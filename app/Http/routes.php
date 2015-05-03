<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){

    Route::resource('crud','UsuariosController');
    Route::resource('maquinas','MaquinasController');
    Route::resource('rutinas','RutinasController');

});

Route::get('usuarios','Admin\UsuariosController@index');
Route::get('maquinas','Admin\MaquinasController@index');
Route::get('rutinas','Admin\RutinasController@index');

Route::get('crear/usuarios','UsuariosController@create');
Route::get('crear/maquinas','MaquinasController@create');
Route::get('crear/rutinas','MaquinasController@create');

Route::get('editar/usuarios','UsuariosController@edit');
Route::get('editar/maquinas','MaquinasController@edit');
Route::get('editar/rutinas','MaquinasController@edit');
