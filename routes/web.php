<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('category', function () {
    return view('category');
});

Route::get('post', function () {
    return view('post');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('post', 'PostController@index');
Route::post('post', 'PostController@create');
Route::post('post/edit', 'PostController@edit');

Route::get('category', 'categoryController@index');
Route::post('category', 'categoryController@create');