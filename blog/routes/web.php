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
Route::post('/', function () {
    return "Hello behind CSRF";
});

Route::get('user/{name}', function ($name) {
    return "This is a name";
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', 'User@show')->middleware('checkAge');

Route::get('user/{id}/{name}', function ($id, $name) {
      return "This is a name and id";
})->where(['name' => '[a-z]+']);


Route::resources(['resUser' => 'UsersController']);















