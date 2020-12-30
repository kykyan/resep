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

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/login', 'PageController@login')->name('loginview');
Route::get('/register', 'PageController@register')->name('registerview');

Route::get('/dashboard', 'PageController@dashboard')->name('dashboard');

Route::get('/tulisresep', 'RecipeController@create')->name('tulisresep');
Route::post('/', 'RecipeController@store')->name('recipe.store');
Route::get('/recipe/{id}', 'RecipeController@show')->name('recipe.show');
Route::get('/search','RecipeController@search')->name('recipe.search');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {

    Route::get('/activerecipe','AdminController@activerecipe')->name('admin.activerecipe');
    Route::get('/activerecipe/{recipe}/delete','AdminController@delete')->name('admin.deleterecipe');

    Route::get('/deletedrecipe','AdminController@deletedrecipe')->name('admin.deletedrecipe');
    Route::get('/activerecipe/{recipe}/restore','AdminController@restore')->name('admin.restorerecipe');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

});

Auth::routes();