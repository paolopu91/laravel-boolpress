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

Route::get('/', 'HomeController@index')->name('home');

Route::middleware("auth")
->namespace("Admin") //indica la cartella dove si trovani i controller
->name("admin.") // Aggiunge prima del nome di ogni rotta questo prefisso
->prefix("admin") //Aggiunge prima di ogni uri questo prefisso
->group(function(){

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/test', 'HomeController@index')->name('test');
    Route::get('/post/create', 'HomeController@index')->name('posts.create');
    Route::get('/posts/{posts}/edit', 'HomeController@index')->name('posts.edit');


    Route::resource("post", "PostController");
});



