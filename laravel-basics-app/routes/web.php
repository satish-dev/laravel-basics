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
// Required parameters
Route::get('ID/{id}',function($id) {
    echo 'ID: '.$id;
 });
// Optinal parameters
Route::get('user/{name?}',function ($name = 'Laravel -Basics') 
{ return $name;});
