<?php
Route::get('/', 'Front\PostController@index');


Route::group(['namespace'=>'Front'], function () {

    Route::get('post', 'PostController@post');

});

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin'], function () {

    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::get('login', 'HomeController@login')->name('login');
    Route::resource('post', 'PostController');
    Route::resource('tag', 'TagController');
    Route::any('/tag/delall', 'TagController@delall')->name('tag.delall');
    Route::resource('category', 'CategoryController');

});
