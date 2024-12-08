<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers;

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
Route::middleware(['guest'])->group(function(){
    Route::post('/login', 'App\Http\Controllers\AuthController@login');
    Route::get('/login', 'App\Http\Controllers\AuthController@loginin')->name('login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data-project', function () {
    return view('data_project');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/home', 'App\Http\Controllers\AuthController@logout');
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
    Route::get('/dashboard', 'App\Http\Controllers\PageController@index');
    Route::get('/admin', 'App\Http\Controllers\PageController@admin')->middleware('useraccess:admin');
    Route::get('/vendor', 'App\Http\Controllers\PageController@vendor')->middleware('useraccess:vendor');
    Route::get('/bank', 'App\Http\Controllers\PageController@bank')->middleware('useraccess:bank');

    Route::get('/createproject', 'App\Http\Controllers\PageController@createproject')->middleware('useraccess:bank');
    Route::post('/simpanproject', 'App\Http\Controllers\PageController@simpanproject')->middleware('useraccess:bank')->name('simpanproject');
    Route::get('/createvendor', 'App\Http\Controllers\PageController@createvendor')->middleware('useraccess:bank');
    Route::post('/simpanvendor', ' App\Http\Controllers\PageController@simpanvendor')->middleware('useraccess:bank')->name('simpanpvendor');
    Route::get('/hapusvendor', 'App\Http\Controllers\AuthController@hapusvendor');

    Route::get('/admins', 'App\Http\Controllers\AuthController@index');
    Route::get('/admins.create', 'App\Http\Controllers\AuthController@admins.create');
    Route::post('/admins.save', 'App\Http\Controllers\AuthController@admins.save');
    Route::get('/admins.edit', 'App\Http\Controllers\AuthController@admins.edit');
    Route::get('/admins.update', 'App\Http\Controllers\AuthController@admins.update');
    Route::get('/admins.delete', 'App\Http\Controllers\AuthController@admins.delete');
});
