<?php

use Illuminate\Support\Facades\Route;

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
    return view('Auth.login');
});


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::post('/user_save' ,'UserController@store');
    Route::match(['get', 'post'], '/delete-user/{id}', 'UserController@delete');
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/admin', 'UserController');

});