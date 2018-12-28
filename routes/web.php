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
   //高级分类
    Route::any('/highlevel/delall', 'HighLevelController@delall')->name('highlevel.delall');
    Route::get('/json-middles','HighlevelController@middlelevels');
    Route::resource('highlevel', 'HighlevelController');
    //中级分类
    Route::any('/middlelevel/delall', 'MiddleLevelController@delall')->name('middlelevel.delall');
    Route::resource('middlelevel', 'MiddlelevelController');
    //初级分类
    Route::any('/elementary/delall', 'ElementaryLevelController@delall')->name('elementarylevel.delall');
    Route::resource('elementarylevel', 'ElementaryLevelController');

});
