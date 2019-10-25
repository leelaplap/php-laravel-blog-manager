<?php

Route::get('/', function (){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('blog')->group(function (){
    Route::get('index','BlogController@showAll')->name('blog.list');
    Route::get('add','BlogController@showFormAdd')->name('blog.formAdd');
    Route::post('add','BlogController@add')->name('blog.add');
    Route::get('delete/{id}','BlogController@delete')->name('blog.delete');
    Route::get('edit/{id}','BlogController@showFormEdit')->name('blog.edit');
    Route::post('edit/{id}','BlogController@edit')->name('blog.edit');
});

