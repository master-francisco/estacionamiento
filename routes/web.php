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
Route::get('/perfil',['uses'=>'UserController@index','middleware'=>'auth'])->name('perfil');
Route::get('/apartado',['uses'=>'ApartadoController@index','middleware'=>'auth'])->name('apartado');
Route::get('/dashboard',['uses'=>'UserController@inicio','middleware'=>'auth'])->name('dashboard');
Route::post('/perfil-image', 'UserController@imageUpdate');
Route::post('/perfil-update',['uses'=>'UserController@UpdateInformacion','as'=>'update.information','middleware'=>'auth']);
Route::post('/perfil-vehicle-update',['uses'=>'VehicleController@updateVehicle','as'=>'update.vehicle','middleware'=>'auth']);
Route::get('/create-user',['uses'=>'UserController@getViewUser','middleware'=>'auth'])->name('user');
Route::get('/settings-delete/{id_user}',['uses'=>'UserController@deleteUser','as'=>'user.delete','middleware'=>'auth']);
Route::post('/dashboard-user',['uses'=>'UserController@createUser','as'=>'create.user','middleware'=>'auth']);
Route::get('/settings',['uses'=>'UserController@getUsers','middleware'=>'auth'])->name('users');
Route::get('/codes',['uses'=>'CodesController@index','middleware'=>'auth'])->name('codes');
Route::post('/create-code',['uses'=>'CodesController@createCode','as'=>'create.code','middleware'=>'auth']);
Route::get('/settings-code',['uses'=>'CodesController@getCodes','middleware'=>'auth'])->name('code');
Route::get('/settings/code-delete/{id_code}',['uses'=>'CodesController@deleteCode','as'=>'code.delete','middleware'=>'auth']);
