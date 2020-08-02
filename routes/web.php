<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/post/{post}', 'PostController@show')->name('post');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/search/', 'HomeController@searchPosts')->name('search');

//AUTH-ROUTES

Route::middleware('auth')->group(function (){
    Route::get('/admin', 'AdminsController@index')->name('admin.index');

    Route::get('/admin/posts', 'PostController@index')->name('post.index');

    Route::get('/admin/posts/create', 'PostController@create')->name('post.create');

    Route::post('/admin/posts', 'PostController@store')->name('post.store');

    Route::delete('/admin/posts/{post}/destroy', 'PostController@destroy')->name('post.destroy');

    Route::get('/admin/posts/{post}/edit', 'PostController@edit')->name('post.edit');

    Route::patch('/admin/posts/{post}/update', 'PostController@update')->name('post.update');
});
