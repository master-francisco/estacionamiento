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
Route::get('/perfil','UserController@index')->name('perfil');
Route::get('/apartado','ApartadoController@index')->name('apartado');
Route::get('/dashboard','UserController@inicio')->name('dashboard');
Route::post('/perfil-image', 'UserController@imageUpdate');
Route::post('/perfil-update',['uses'=>'UserController@UpdateInformacion','as'=>'update.information']);
Route::post('/perfil-vehicle-update',['uses'=>'VehicleController@updateVehicle','as'=>'update.vehicle']);
Route::get('/create-user','UserController@getViewUser')->name('user');
Route::post('/dashboard-user',['uses'=>'UserController@createUser','as'=>'create.user']);
Route::get('/settings','UserController@getUsers')->name('users');
Route::get('/codes','CodesController@index')->name('codes');
Route::post('/create-code',['uses'=>'CodesController@createCode','as'=>'create.code']);
Route::get('/settings-code','CodesController@getCodes')->name('code');