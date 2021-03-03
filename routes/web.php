<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Auth;
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
Route::post('/auth','LoginController@register')->name('register');
Route::get('/home','LoginController@home')->name('home');
Route::post('/log','LoginController@log')->name('log');
Route::get('/register','LoginController@showRegisterForm');
Route::get('/login','LoginController@showLoginForm')->name('login');
Route::resource('/categories','CategoriesController');
Route::resource('/posts','PostsController');
Route::resource('/tags','TagsController');
