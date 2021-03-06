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

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin');
    
    Route::group(['prefix' => 'heroes'], function(){
        Route::get('/', 'App\Http\Controllers\HeroController@index')->name('admin.heroes');
        Route::get('create', 'App\Http\Controllers\HeroController@create')->name('admin.heroes.create');
        Route::post('store', 'App\Http\Controllers\HeroController@store')->name('admin.heroes.store');
        Route::get('edit/{id}', 'App\Http\Controllers\HeroController@edit')->name('admin.heroes.edit');
        Route::post('update{id}', 'App\Http\Controllers\HeroController@update')->name('admin.heroes.update');
    });

    Route::get('items', 'App\Http\Controllers\ItemController@index')->name('admin.items');
    Route::get('enemies', 'App\Http\Controllers\EnemyController@index')->name('admin.enemies');
});
