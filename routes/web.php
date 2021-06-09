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
    return view('welcome');
});

Auth::routes();



Route::group(["middleware" => "admin"], function(){
    Route::get('/admin','AdminController@index')->name('admin');
    Route::get('/page1','AdminController@page1')->name('page1');
    Route::get('/page2','AdminController@page2')->name('page2');
});

Route::group(["middleware" => "manager"], function(){
    Route::get('/manager','ManagerController@index')->name('manager');
    Route::get('/manager/page1','ManagerController@page1')->name('manager.page1');
    Route::get('/manager/page2','ManagerController@page2')->name('manager.page2');
});


Route::group(["middleware" => "user"], function(){
    Route::get('/user','UserController@index')->name('user');
    Route::get('/user/page1','UserController@page1')->name('user.page1');
    Route::get('/user/page2','UserController@page2')->name('user.page2');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
