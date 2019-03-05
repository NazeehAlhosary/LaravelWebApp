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

/*Route::get('/users/{id}', function ($id) {
    return 'Hello user '. $id;
});

Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'Hello user '. $name .', Your id is: ' .$id;
});*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('pages.about');
});

*/
Route::get('/test', 'PagesController@test');
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
//post it becomes plural by default
Route::resource('posts', 'PostsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
